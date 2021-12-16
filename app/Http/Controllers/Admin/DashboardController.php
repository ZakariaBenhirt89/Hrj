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
        return view('admin.dashboard');
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
           Log::info($request->nom);
           //let strart presisting
           $form = new Form();
           Log::info($request->input('ref'));
           Log::info($request->input('nom'));
           $form->editor = Auth::user()->id ;
           $form->identifiant = $request->input('ref') ;
           $form->center_form = Auth::user()->center ;
           $form->save();
           if ($request->input('nom') && $request->input('prenom')){
               $field = new Field();
               $field->form_id = $form->id ;
               $field->type = 'name';
               $field->data = $request->input('nom'). ' '.$request->input('prenom');
               $field->save();
           }
        if ($request->input('photo')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'photo';
            $field->data = $request->input('photo');
            $field->save();
        }
        if( ($request->input('photo') == null || empty($request->input('photo')) ) &&  $request->input('sex') == 'femme'){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'photo';
            $field->data = "https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639657788/Afterclap-8_dt5tnz.png";
            $field->save();
        }
        if( ($request->input('photo') == null || empty($request->input('photo')) ) &&  $request->input('sex') == 'homme'){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'photo';
            $field->data = "https://res.cloudinary.com/dy6vgsgr8/image/upload/v1639657778/Afterclap-2_jhksvx.png";
            $field->save();
        }

        if ($request->input('adresse')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'adresse';
            $field->data = $request->input('adresse');
            $field->save();
        }
        if ($request->input('sex')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'sex';
            $field->data = $request->input('sex');
            $field->save();
        }
        if ($request->input('nation')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'nation';
            $field->data = $request->input('nation');
            $field->save();
        }
        if ($request->input('lieu-naissance')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'lieu-naissance';
            $field->data = $request->input('lieu-naissance');
            $field->save();
        }
        if ($request->input('date-naisance')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'date-naisance';
            $field->data = $request->input('date-naisance');
            $field->save();
        }
        if ($request->input('cin')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'cin';
            $field->data = $request->input('cin');
            $field->save();
        }
        if ($request->input('phone')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'phone';
            $field->data = $request->input('phone');
            $field->save();
        }
        if ($request->input('email')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'email';
            $field->data = $request->input('email');
            $field->save();
        }
        if ($request->input('how')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'how';
            $field->data = $request->input('how');
            $field->save();
        }
        if ($request->input('age')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'age';
            $field->data = $request->input('age');
            $field->save();
        }
        if ($request->input('Nbsalaire')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'Nbsalaire';
            $field->data = $request->input('Nbsalaire');
            $field->save();
        }
        if ($request->input('ressource')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'ressource';
            $field->data = $request->input('ressource');
            $field->save();
        }
        if ($request->input('situationFam')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'situationFam';
            $field->data = $request->input('situationFam');
            $field->save();
        }
        if ($request->input('situationPar')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'situationPar';
            $field->data = $request->input('situationPar');
            $field->save();
        }
        if ($request->input('logement')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'logement';
            $field->data = $request->input('logement');
            $field->save();
        }
        if ($request->input('handicape')){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'handicape';
            $field->data = $request->input('handicape');
            $field->save();
        }
        if ($request->input("precise")){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'precise';
            $field->data = $request->input('precise');
            $field->save();
        }
        if ($request->input("preciseType")){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'preciseType';
            $field->data = $request->input('preciseType');
            $field->save();
        }
        if ($request->input("handicapType")){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'handicapType';
            $field->data = $request->input('handicapType');
            $field->save();
        }
        if ($request->input("handicapCause")){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'handicapCause';
            $field->data = $request->input('handicapCause');
            $field->save();
        }
        if ($request->input("mobilité")){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'mobilité';
            $field->data = $request->input('mobilité');
            $field->save();
        }
        if ($request->input("chronicDes")){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'chronicDes';
            $field->data = $request->input('chronicDes');
            $field->save();
        }
        if ($request->input("chronicDes1")){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'chronicDes1';
            $field->data = $request->input('chronicDes1');
            $field->save();
        }
        if ($request->input("niveauScholaire")){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'niveauScholaire';
            $field->data = $request->input('niveauScholaire');
            $field->save();
        }
        if ($request->input("diplom")){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'diplom';
            $field->data = $request->input('diplom');
            $field->save();
        }
        if ($request->input("typeDeplome")){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'typeDeplome';
            $field->data = $request->input('typeDeplome');
            $field->save();
        }
        if ($request->input("accepted")){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'accepted';
            $field->data = $request->input('accepted');
            $field->save();
        }
        if ($request->input("despo")){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'despo';
            $field->data = $request->input('despo');
            $field->save();
        }
        if ($request->input("orientation")){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'orientation';
            $field->data = $request->input('orientation');
            $field->save();
        }
        if ($request->input("nbSons")){
            $field = new Field();
            $field->form_id = $form->id ;
            $field->type = 'nbSons';
            $field->data = $request->input('nbSons');
            $field->save();
        }
          Log::info('the identifiants');
          Log::info('*******************');
          Log::info($request->input('ref'));
          Log::info('*******************');
          Log::info('the id is '.$form->id);
          $num = Form::where('id' , $form->id)->count() ;
          $target = Form::where('id' , $form->id)->get();
          if ($num == 0 ){
              Log::info('its empty');
          }
          foreach ($target as $t){
              Log::info('++++++++++++ target +++++++++++++++');
              $fields = $t->fields()->where('type' , 'name')->get();
              foreach ($fields as $field) {
                  //
                  Log::info('*************** A ***********');
                  Log::info($field->type);
                  Log::info('*************** A ************');
              }
              Log::info('++++++++++++ target +++++++++++++++');
          }

         return response()->json(['status' => 200 , 'result' => $fields]);
    }
    public function detail(Request $request , $id){
        return view('components.details');
    }
}
