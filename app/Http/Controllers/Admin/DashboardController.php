<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Fortify\ResetUserPassword;
use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use App\Models\Field;
use App\Models\Form;
use App\Models\User;
use Auth;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;
use function Aws\load_compiled_json;


class DashboardController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth');
    }
    public function index($center) {
        Log::info($center);
        $account_sid = 'ACef118fb8899b7640cf77f1bb5e0055c6';
        $auth_token = '9e9b27f442d0e46a29aba3c043d3f8ad';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
        $twilio_number = "+18333947273";

 //       $client = new Client($account_sid, $auth_token);
   //     $message =  $client->messages->create(
        // Where to send a text message (your cell phone?)
       //     '+212663618536',
     //       array(
        //        'from' => $twilio_number,
         //       'body' => 'I sent this message from AOBC messaging system by Zaki'
          //  )
       // );
/*

        Log::info('msg sent');
      //  Log::info($message->sid);
        $fpdf = new Fpdf();
        $fpdf->AddPage();
        $fpdf->SetFont('Courier', 'B', 18);
        $fpdf->Cell(50, 25, 'Hello World!');
        $fpdf->Output();
        exit();
        */
        if (Auth::user()->center == $center){
            return view('admin.dashboard');
        }else{
            return view('components.notyours');
        }

    }
    public function indexOne(){
        return view('components.mobi-main-index');
    }
    public function ficheAcc(){
        return view('components.fiche-acc');
    }
    public function mobilisationFiche(){

    }
    public function mobilisationIndicator(){

    }
    public function mobilisationChart(){

    }
    public function sendMAil(){
        $receiverEmailAddress = "zaki.benhirt94@gmail.com";
        Mail::to($receiverEmailAddress)->send(new TestMail());
        if (Mail::failures() != 0) {
            return "Email has been sent successfully.";
        }
        return "Oops! There was some error sending the email.";
    }
    public function storeImage(Request $request){
              if (!Storage::disk('s3')->exists(Auth::user()->center)){
                  Storage::disk('s3')->makeDirectory(Auth::user()->center);
                  Log::info('it work uploading pic');
                  if ($request->hasFile('filepond')){
                      Log::info('the file is there');
                      Log::info($request->filepond->extension());
                      //getClientOriginalName()
                      Log::info($request->filepond->getClientOriginalName());
                      $path  = Storage::disk('s3')->put(Auth::user()->center , $request->filepond);
                      return response()->json(['status' => 200 , 'result' => $path ]);
                  }
              }
              Log::info('it work uploading pic');
              if ($request->hasFile('filepond')){
                  Log::info('the file is there');
                  Log::info($request->filepond->extension());
                  //getClientOriginalName()
                  Log::info($request->filepond->getClientOriginalName());
                   $path  = Storage::disk('s3')->put(Auth::user()->center , $request->filepond);
                  return response()->json(['status' => 200 , 'result' => $path ]);
              }

    }
    public function deleteImage(Request $request){
        Log::info('the img will be deleted');
        Storage::disk('s3')->delete( $request->json()->all()['result']);
    }
    public function handleAcc(Request $request){
           $results = $request->all();
        $validator = Validator::make($request->all(), [
            'nom' => 'required|min:2',
            'prenom' => 'required|min:2',
        ]);
        if ($validator->fails()) {
           Log::info('it fails tho');
        }else{
            Log::info('validation pass ');
            /* the form well be here all the things*/
            $form = new Form();
            $form->identifiant = 'acceuil' ;
            $form->editor = Auth::user()->id;
            $form->center_form = Auth::user()->center ;
            $form->save();
            foreach ($results as $key => $value){
                if ($key === 'sex' && $value === 'homme'){
                    $photo = $form->fields()->where('type' , 'photo')->first();
                    if ($photo->data === null){
                        $photo->data = "https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639657778/Afterclap-2_jhksvx.png";
                        $photo->save();
                    }
                }
                if ($key === 'sex' && $value === 'femme'){
                    $photo = $form->fields()->where('type' , 'photo')->first();
                    if ($photo->data === null){
                        $photo->data = "https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639657788/Afterclap-8_dt5tnz.png";
                        $photo->save();
                    }
                }
                Log::info("****************** key ********************");
                $field = new Field();
                $field->form_id = $form->id ;
                $field->type = $key;
                $field->data = $value;

                Log::info($key);
                Log::info("****************** key ********************");
                Log::info("****************** value ********************");
                Log::info($value);
                $field->save();
                Log::info("****************** value ********************");
            }

            return view('components.mobi-main-index');
        }

    }
    public function detail(Request $request , $id){
        Log::info($id);
        $data = array();
        $form = Form::where('id' , intval($id))->first();
        Log::info('==================');
        $image = $form->fields()->where('type' , 'photo')->first()->data;
        $name = $form->fields()->where('type' , 'nom')->first()->data . ' ' . $form->fields()->where('type' , 'prenom')->first()->data ;
        $charger = User::where('id' , $form->editor)->first()->name;
        $genre = $form->fields()->where('type' , 'sex')->first()->data;
        $joinedAt = $form->created_at ;
        $address = $form->fields()->where('type' , 'adresse')->first()->data;
        $phone =  $form->fields()->where('type' , 'phone')->first()->data;
        $lieuDeNaissance = $form->fields()->where('type' , 'lieu-naissance')->first()->data;
        $cin = $form->fields()->where('type' , 'cin')->first()->data;
        //is handicape
        $handicape = $form->fields()->where('type' , 'handicape')->first()->data;
        $chronique = $form->fields()->where('type' , 'chronicDes')->first()->data;
        $niveauScholaire = $form->fields()->where('type' , 'niveauScholaire')->first()->data;
        $diplome = $form->fields()->where('type' , 'diplom')->first()->data;
        //orientation
        $orientation = $form->fields()->where('type' , 'orientation')->first()->data;
        if ($diplome == 'oui'){
            $typeDiplome = $form->fields()->where('type' , 'typeDeplome')->first()->data;
            $data = ['image' => $image , 'name' => $name , 'charger' => $charger , 'genre' => $genre , 'dateIns' => $joinedAt , 'adress' => $address ,'phone' => $phone , 'lieuDeNaissance' => $lieuDeNaissance , 'cin' => $cin , 'handicape' => $handicape , 'chronique' => $chronique ,'niveau' => $niveauScholaire , 'diplome' => $diplome , 'typeDiplome' => $typeDiplome ,'orientation' => $orientation];
            return view('components.details' , $data);
        }
        $data = ['image' => $image , 'name' => $name , 'charger' => $charger , 'genre' => $genre , 'dateIns' => $joinedAt , 'adress' => $address ,'phone' => $phone , 'lieuDeNaissance' => $lieuDeNaissance , 'cin' => $cin , 'handicape' => $handicape , 'chronique' => $chronique ,'niveau' => $niveauScholaire , 'diplome' => $diplome , 'orientation' => $orientation];
        return view('components.details' , $data);
    }
    public function mobi(Request $request){
        $results = $request->all();
        $form = new Form();
        $form->identifiant = 'mobilzation' ;
        $form->editor = Auth::user()->id;
        $form->center_form = Auth::user()->center ;
        $form->save();
        foreach ($results as $key => $value){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = $key;
            if ($key == 'states' && gettype($value) == 'array'){
                $data = '';
               foreach ($value as $item){
                   $data .= $item . "-";
               }
                $field->data = $data;
            }else{
                $field->data = $value;
            }
            $field->save();

        }
        return redirect()->route('indexMobi');
    }
    public function orientation(Request $request){
        return view('components.orientation');
    }
    public function comite(Request $request , $id){
        $img = Form::where('id' , $id)->first()->fields()->where('type' , 'photo')->first()->data;
        $nom = Form::where('id' , $id)->first()->fields()->where('type' , 'nom')->first()->data;
        $prenom =  Form::where('id' , $id)->first()->fields()->where('type' , 'prenom')->first()->data;
        $email =  Form::where('id' , $id)->first()->fields()->where('type' , 'email')->first()->data;
        $cin =  Form::where('id' , $id)->first()->fields()->where('type' , 'cin')->first()->data;
        $address =  Form::where('id' , $id)->first()->fields()->where('type' , 'adresse')->first()->data;
        $gsm = Form::where('id' , $id)->first()->fields()->where('type' , 'phone')->first()->data;
        $nscolaire = Form::where('id' , $id)->first()->fields()->where('type' , 'niveauScholaire')->first()->data;
        $comite = \App\Models\Form::where('identifiant','member comite')->where('center_form' , Auth::user()->center)->get() ;
        $arr = array();
        foreach ($comite as $com){
            Log::info('******************');
            Log::info($com->fields()->first());
            array_push($arr , $com->fields()->first()) ;
            Log::info('*********************');
        }
        Log::info($img);
        if ($img !== null && $comite->count() > 0){
            Log::info('the one');
            return view('components.pvcomité' , [ 'id' => $id ,'url' =>$img , 'nom' => $nom , 'prenom' => $prenom , 'cin' => $cin , 'address' => $address , 'email' =>$email , 'phone' => $gsm , 'nscholaire' => $nscolaire , 'comite' => $arr] );
        }else{
            $url = 'https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639571913/photo_2021-12-15_13-24-52_xgsjgw.jpg';
            $sub = collect(['data' => 'rien' ] );
            Log::info('the 2');
            return view('components.pvcomité' , ['id' => $id ,'url' =>$url  , 'nom' => $nom , 'prenom' => $prenom , 'cin' => $cin , 'address' => $address , 'email' => $email , 'phone' => $gsm , 'nscholaire' => $nscolaire ,  'comite' => $sub]);
        }

    }
    public function addMember(Request $request){
        Log::info(json_encode($request->all()));
        $nameMember = $request->input('nameDeMembre');
        $id = $request->input('id');
        $form = new Form();
        $form->identifiant = 'member comite' ;
        $form->editor = Auth::user()->id;
        $form->center_form = Auth::user()->center ;
        $form->save();
        $field = new Field();
        $field->form_id = $form->id ;
        $field->type = 'nameDeMembre';
        $field->data = $nameMember;
        $field->save();
        Log::info(url()->previous());
       return redirect()->route('admin.user.comite' , ['id' => $id]);
    }
    public function storePv(Request $request , $id){
             $results = $request->all();
             $required = array('Situation_actuelle' , 'Orientation-too' , 'oriLocation' , 'comité-members' , 'remarqueOrientation');
             Log::info('**************** id **************');
             Log::info($id);
             $form = Form::where('id' , $id)->first();
             Log::info($form->identifiant);
             $form->identifiant .= ' orientation';
             $form->save();
             foreach ($results as $key => $value){
                 if ( in_array($key , $required)){
                     $field = new Field();
                     $field->form_id = $id ;
                     Log::info('************ key ***************');
                     Log::info($key);
                     $field->type = $key;
                     Log::info('***************** value ***************');
                     Log::info($value);
                     if ($key == 'comité-members'){
                         foreach ($value as $item){
                             $field->data .= $item.'--';
                         }
                     }else{
                         $field->data = $value;
                     }
                     $field->save();
                 }
             }
        return redirect()->route('admin.orientation.go');
    }
    public function suivi(Request $request){
        $fields = Field::where('data','coip')->where('type','Orientation-too')->get();
        $arrOfForms = array();
        foreach ($fields as $field){
            $form = $field->forms()->where('identifiant' ,'like', '%placement%')->first();
            if ($form !== null){
                array_push($arrOfForms , $form);
            }
        }
        if (count($arrOfForms) > 0){
            foreach ($arrOfForms as $form){
                Log::info('***************** form ******************');
                Log::info($form->id);
                Log::info('***************** form ******************');
            }
            $suivi = Form::where('center_form' , Auth::user()->center)->where('identifiant' , 'like' , '%suivi%')->get();
            return view('components.suivi' , ['forms' => $arrOfForms  , 'suivi' => $suivi]);


        }else {
            $suivi = Form::where('center_form' , Auth::user()->center)->where('identifiant' , 'like' , '%suivi%')->get();
            return view('components.suivi' , ['forms' => $arrOfForms  , 'suivi' => $suivi]);
        }

    }
    public function rfc(Request $request){
            $fields = Field::where('data','coip')->where('type','Orientation-too')->get();
            $others = Field::where('data','hors-coip')->where('type','Orientation-too')->get();
            $arrOfForms = array();
            $arrOfFormsOutCoip = array();
            foreach ($fields as $field){
                $form = $field->forms()->first();
                array_push($arrOfForms , $form);
            }
        foreach ($others as $field){
            $form = $field->forms()->first();
            array_push($arrOfFormsOutCoip , $form);
        }
            foreach ($arrOfForms as $form){
                Log::info('***************** form ******************');
                Log::info($form->id);
                Log::info('***************** form ******************');
            }
        foreach ($arrOfFormsOutCoip as $form){
            Log::info('***************** form hors-coip ******************');
            Log::info($form->id);
            Log::info('***************** form hors-coip ******************');
        }
            return view('components.rfc' , ['forms' => $arrOfForms , 'hors' =>$arrOfFormsOutCoip]);
    }
    public function placement(Request $request){
        $fields = Field::where('data','coip')->where('type','Orientation-too')->get();
        $arrOfForms = array();
        foreach ($fields as $field){
            $form = $field->forms()->where('identifiant', 'acceuil orientation')->first();
            if ($form !== null){
                array_push($arrOfForms , $form);
            }
        }
        if (count($arrOfForms) > 0){
            foreach ($arrOfForms as $form){
                Log::info('***************** form ******************');
                Log::info($form->id);
                Log::info('***************** form ******************');
            }
        }
        $place = Form::where('identifiant' , 'like' , 'acceuil orientation placement%')->where('center_form' , Auth::user()->center)->get();
        return view('components.placement' , ['place' => $place ,'forms' => $arrOfForms ]);
    }
    public function goPlacement(Request $request , $id){
        $img = Form::where('id' , $id)->first()->fields()->where('type' , 'photo')->first()->data;
        $nom = Form::where('id' , $id)->first()->fields()->where('type' , 'nom')->first()->data;
        $prenom =  Form::where('id' , $id)->first()->fields()->where('type' , 'prenom')->first()->data;
        $email =  Form::where('id' , $id)->first()->fields()->where('type' , 'email')->first()->data;
        $cin =  Form::where('id' , $id)->first()->fields()->where('type' , 'cin')->first()->data;
        $address =  Form::where('id' , $id)->first()->fields()->where('type' , 'adresse')->first()->data;
        $gsm = Form::where('id' , $id)->first()->fields()->where('type' , 'phone')->first()->data;
        $nscolaire = Form::where('id' , $id)->first()->fields()->where('type' , 'niveauScholaire')->first()->data;
        $comite = \App\Models\Form::where('identifiant','member comite')->where('center_form' , Auth::user()->center)->get() ;
        $arr = array();
        foreach ($comite as $com){
            Log::info('******************');
            Log::info($com->fields()->first());
            array_push($arr , $com->fields()->first()) ;
            Log::info('*********************');
        }
        Log::info($img);
        if ($img !== null && $comite->count() > 0){
            Log::info('the one');
            return view('components.placement-sub' , [ 'id' => $id ,'url' =>$img , 'nom' => $nom , 'prenom' => $prenom , 'cin' => $cin , 'address' => $address , 'email' =>$email , 'phone' => $gsm , 'nscholaire' => $nscolaire , 'comite' => $arr] );
        }else{
            $url = 'https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639571913/photo_2021-12-15_13-24-52_xgsjgw.jpg';
            $sub = collect(['data' => 'rien' ] );
            Log::info('the 2');
            return view('components.placement-sub' , ['id' => $id ,'url' =>$url  , 'nom' => $nom , 'prenom' => $prenom , 'cin' => $cin , 'address' => $address , 'email' => $email , 'phone' => $gsm , 'nscholaire' => $nscolaire ,  'comite' => $sub]);
        }
    }
    public function goSuivi(Request $request , $id){
        $img = Form::where('id' , $id)->first()->fields()->where('type' , 'photo')->first()->data;
        $nom = Form::where('id' , $id)->first()->fields()->where('type' , 'nom')->first()->data;
        $prenom =  Form::where('id' , $id)->first()->fields()->where('type' , 'prenom')->first()->data;
        $email =  Form::where('id' , $id)->first()->fields()->where('type' , 'email')->first()->data;
        $cin =  Form::where('id' , $id)->first()->fields()->where('type' , 'cin')->first()->data;
        $address =  Form::where('id' , $id)->first()->fields()->where('type' , 'adresse')->first()->data;
        $gsm = Form::where('id' , $id)->first()->fields()->where('type' , 'phone')->first()->data;
        $nscolaire = Form::where('id' , $id)->first()->fields()->where('type' , 'niveauScholaire')->first()->data;
        $comite = \App\Models\Form::where('identifiant','member comite')->where('center_form' , Auth::user()->center)->get() ;
        $arr = array();
        foreach ($comite as $com){
            Log::info('******************');
            Log::info($com->fields()->first());
            array_push($arr , $com->fields()->first()) ;
            Log::info('*********************');
        }
        Log::info($img);
        if ($img !== null && $comite->count() > 0){
            Log::info('the one');
            return view('components.suivi-sub' , [ 'id' => $id ,'url' =>$img , 'nom' => $nom , 'prenom' => $prenom , 'cin' => $cin , 'address' => $address , 'email' =>$email , 'phone' => $gsm , 'nscholaire' => $nscolaire , 'comite' => $arr] );
        }else{
            $url = 'https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639571913/photo_2021-12-15_13-24-52_xgsjgw.jpg';
            $sub = collect(['data' => 'rien' ] );
            Log::info('the 2');
            return view('components.suivi-sub' , ['id' => $id ,'url' =>$url  , 'nom' => $nom , 'prenom' => $prenom , 'cin' => $cin , 'address' => $address , 'email' => $email , 'phone' => $gsm , 'nscholaire' => $nscolaire ,  'comite' => $sub]);
        }
    }
    public function charger(Request $request){
        $charge = Form::where('center_form' , Auth::user()->center)->where('identifiant', 'charger de comité')->get();
        return view('components.charger', ['charge' => $charge]);
    }
    public function storecharger(Request $request){
        $result = $request->all();
        $form = new Form();
        $form->identifiant = 'charger de comité' ;
        $form->editor = Auth::user()->id;
        $form->center_form = Auth::user()->center ;
        $form->save();
        foreach ($result as $key => $value){
            $field = new Field();
            $field->form_id = $form->id;
            Log::info('************ key ***************');
            Log::info($key);
            Log::info('**************** value **************');
            Log::info($value);
            $field->type = $key;
            $field->data = $value;
            $field->save();
        }
        return redirect()->route('admin.charge.go');
    }
    public function storePlacement(Request $request , $id){
        $form = Form::where('id' , $id)->first();
        Log::info('the form is ****');
        Log::info($form->id);
        Log::info($form->identifiant);
        $form->identifiant .= ' placement';
        $form->save();
        $results = $request->all();
        foreach ($results as $key => $value){
            $field = new Field();
            $field->form_id = $id;
            Log::info('*********** key **********');
            Log::info($key);
            $field->type = $key;
            Log::info('************* value **********');
            Log::info($value);
            $field->data = $value ;
            $field->save();
        }
        $fields = Field::where('data','coip')->where('type','Orientation-too')->get();
        $arrOfForms = array();
        foreach ($fields as $field){
            $form = $field->forms()->where('identifiant','acceuil orientation')->first();
            if ( $form !== null){
                array_push($arrOfForms , $form);
            }

        }
       if (count($arrOfForms)){
           foreach ($arrOfForms as $form){
               Log::info('***************** form ******************');
               Log::info($form->id);
               Log::info('***************** form ******************');
           }
       }
         $place = Form::where('identifiant'  , 'acceuil orientation placement')->where('center_form' , Auth::user()->center)->get();
         return view('components.placement' , ['place' => $place , 'forms' => $arrOfForms ]);
    }
    public function searchDup(Request $request){
        $result = $request->all();
        $nomExist = Field::where('type' ,'nom')->where('data' , 'like' , '%'.$result['name'].'%')->count();
        $prenomExist = Field::where('type' , 'prenom')->where('data' , 'like' , '%'.$result['second'].'%')->count();
        foreach ($result as $key => $value){
            Log::info("************ key of ajax **************");
            Log::info($key);
            Log::info("************ value of ajax **************");
            Log::info($value);
        }
        if ($nomExist > 0 && $prenomExist > 0){
            $id = Field::where('type' , 'prenom')->where('data' , 'like' , '%'.$result['second'].'%')->first()->forms()->where('center_form', Auth::user()->center)->first()->id ;
            if ($id !== null){
                $ref = Form::where('id' , $id)->first()->fields()->where('type' , 'ref')->first()->data;
                return response()->json(['status' => 200 , 'nom' => $nomExist , 'prenom' => $prenomExist ,'id' => $id , 'ref' => $ref]);
            }else{
                $ref = Form::where('id' , $id)->first()->fields()->where('type' , 'ref')->first()->data;
                $center = Field::where('type' , 'prenom')->where('data' , 'like' , '%'.$result['second'].'%')->first()->forms()->first()->center_form ;
                if ($center == null){

                }else{
                    return response()->json(['status' => 200 , 'nom' => $nomExist , 'prenom' => $prenomExist ,'id' => $id , 'ref' => $ref , 'center' => $center]);

                }
            }

        }else{
            return response()->json(['status' => 200 , 'result' => 0]);
        }

    }
    public function storeSuivi(Request $request , $id){
        $results = $request->all();
        Log::info('the id is ******************* id');
        Log::info($id);
        $form = Form::where('id' , $id)->first();
        $form->identifiant .= ' suivi' ;
        $form->save();
        foreach ($results as $key => $value){
            $field = new Field();
            $field->form_id = $id;
            Log::info('**************** key ************');
            Log::info($key);
            $field->type = $key;
            Log::info('***************** value ************');
            Log::info($value);
            $field->data = $value;
            $field->save();
        }
        $fields = Field::where('data','coip')->where('type','Orientation-too')->get();
        $arrOfForms = array();
        foreach ($fields as $field){
            $form = $field->forms()->where('identifiant' ,'like', '%placement%')->first();
            if ($form !== null){
                array_push($arrOfForms , $form);
            }
        }
        $suivi = Form::where('center_form' , Auth::user()->center)->where('identifiant' , 'like' , '%suivi%')->get();
        return view('components.suivi' , ['forms' => $arrOfForms  , 'suivi' => $suivi]);
    }
    public function data(Request $request){
        $data = array();
        $tsiMob = Form::where('center_form' , Auth::user()->center)->where('identifiant','tsi mobi')->get();
        $tsiAcc = Form::where('center_form' , Auth::user()->center)->where('identifiant','tsi acc')->get();
        if ($tsiMob->count() > 0){
            $data['mobi'] = $tsiMob;
        }
        if ($tsiAcc->count() > 0) {
            Log::info(" acc is null");
            $data['acc'] = $tsiAcc;
        }
        return view('components.data' , $data);

    }
    public function storeData(Request $request , $type){
           $data = array();
           $result = $request->all();
           Log::info('************* type *******************');
           Log::info($type);
           foreach ($result as $key => $value){
               Log::info('*********** key ************');
               Log::info($key);
               Log::info('************** value ****************');
               Log::info($value);
           }
               $form = new Form();
               $form->identifiant = 'tsi '.$type ;
               $form->editor = Auth::user()->id ;
               $form->center_form = Auth::user()->center ;
               $form->save();
               foreach ($result as $key => $value){
                   $field = new Field();
                   Log::info('*********** key ************');
                   Log::info($key);
                   $field->form_id = $form->id ;
                   $field->type = $key;
                   $field->data = $value;
                   $field->save();
                   Log::info('************** value ****************');
                   Log::info($value);
               }
               $tsiMob = Form::where('center_form' , Auth::user()->center)->where('identifiant','tsi mobi')->get();
               $tsiAcc = Form::where('center_form' , Auth::user()->center)->where('identifiant','tsi acc')->get();
              if ($tsiMob->count() > 0){
                  $data['mobi'] = $tsiMob;
              }
               if ($tsiAcc->count() > 0) {
                   Log::info(" acc is null");
                   $data['acc'] = $tsiAcc;
               }
               return view('components.data' , $data);

    }
    public function admin(Request $request){
        $charge = User::where('center' , Auth::user()->center)->where('is_res' , true)->get() ;
        return view('components.administration' , ['charge' => $charge]) ;
    }
    public function adminAdd(Request $request){
        $results = $request->all();
        Log::info("adding responsable");
        foreach ($results as $key => $value){
            Log::info("******** key ************");
            Log::info($key);
            Log::info("************* value **************");
            Log::info($value);
        }
        $charger = new User();
        $charger->name = $request->input('nomcharger') . $request->input('prenomcharger');
        $charger->profile_photo_path = $request->input('photoCharger');
        $charger->email = $request->input('username');
        $charger->password = Hash::make($request->input('password'));
        $charger->role = 'admin';
        $charger->center = Auth::user()->center;
        $charger->is_res = true;
        $charger->is_active = true ;
        $charger->save();
        $charge = User::where('center' , Auth::user()->center)->where('is_res' , true)->where('is_active' , true)->get() ;
        return view('components.administration' , ['charge' => $charge]) ;
    }
    public function desactivet(Request $request , $id){
               Log::info('the must dc is ' . $id);
               $user = User::where('id' , $id)->first() ;
               $user->is_active = false ;
               $user->save();
               return redirect('/super');
    }
    public function activet(Request $request , $id){
                Log::info('the must ac is ' . $id);
                $user = User::where('id' , $id)->first() ;
                $user->is_active = true ;
                $user->save();
                return redirect('/super');
    }
    public function createAdmin(Request $request){
             Log::info($request->input('image'));
             if ($request->has('email-id') && $request->has('password')){
                 $user = new User();
                 if ($request->has('email-id')){
                     $user->email = $request->input('email-id');
                 }
                 if ($request->has('fname')){
                     $user->name = $request->input('fname');
                 }
                 if ($request->has('password')){
                     $user->password = Hash::make($request->input('password'));
                 }
                 if($request->has('image')){
                     $user->profile_photo_path = $request->input('image');
                 }
                 if($request->has('center')){
                     $user->center = $request->input('center');
                 }
                 $user->role = 'admin';
                 $user->is_active = true;
                 $user->is_res = false;
                 $user->save();
                 return redirect('/super');

             }else{
                 return redirect('/super');
             }
    }
    public function desactivetRes(Request $request , $id){
        Log::info('the must dc is ' . $id);
        $user = User::where('id' , $id)->first() ;
        $user->is_active = false ;
        $user->save();
        return redirect('/administration');
    }
    public function activetRes(Request $request , $id){
        Log::info('the must ac is ' . $id);
        $user = User::where('id' , $id)->first() ;
        $user->is_active = true ;
        $user->save();
        return redirect('/administration');
    }

}
