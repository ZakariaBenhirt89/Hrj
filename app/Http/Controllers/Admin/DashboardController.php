<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
    public function mobilisationFiche(){

    }
    public function mobilisationIndicator(){

    }
    public function mobilisationChart(){

    }
}
