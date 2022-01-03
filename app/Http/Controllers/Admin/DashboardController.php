<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Fortify\ResetUserPassword;
use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use App\Models\Field;
use App\Models\Form;
use Auth;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
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
        $form = Form::where('id' , intval($id))->first();
        Log::info('==================');
        Log::info($form);
        Log::info('==================');
        return view('components.details');
    }
    public function mobi(Request $request){
        $results = $request->all();
        return ['status' => 200 , 'result' => $results] ;
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
        $comite = \App\Models\Form::where('identifiant','member comite')->get() ;
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
}
