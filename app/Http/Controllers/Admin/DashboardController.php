<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Fortify\ResetUserPassword;
use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Twilio\Rest\Client;


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
              if (!Storage::disk('s3')->exists(\Auth::user()->center)){
                  Storage::disk('s3')->makeDirectory(\Auth::user()->center);
              }
              Log::info('it work uploading pic');
              if ($request->hasFile('filepond')){
                  Log::info('the file is there');
                  Log::info($request->filepond->extension());
                  //getClientOriginalName()
                  Log::info($request->filepond->getClientOriginalName());
                   $path  = Storage::disk('s3')->put(\Auth::user()->center , $request->filepond);
                  return response()->json(['status' => 200 , 'result' => $path ]);
              }

    }
    public function deleteImage(Request $request){
        Log::info('the img will be deleted');
        Storage::disk('s3')->delete( $request->json()->all()['result']);
    }
    public function handleAcc(Request $request){
          Log::info($request->nom);
          return $request->all();
    }
}
