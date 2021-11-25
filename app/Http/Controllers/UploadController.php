<?php

namespace App\Http\Controllers;

use Cloudinary;
use DigitalOcean;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Storage;

class UploadController extends Controller
{
    //
    public function search(Request $request)
    {
        if ($request->has('filename')) {
            Log::info($request->get('filename'));
            $result = Storage::disk('do-spaces')->has($request->get('filename'));
            Log::info($result);
            return response()->json(['status' => 200, 'result' => 'result']);
        }
    }
    public function upload(Request $request){
        if ($request->hasFile('filepond')){
            Log::info('the file here');
//            $path = $request->filepond->store('/' , 'do-spaces' , 'public');
            $uploadedFileUrl = Cloudinary::upload($request->file('filepond')->getRealPath())->getSecurePath();
            Log::info($uploadedFileUrl);
            return response()->json(['status' => 200 , 'path' => $uploadedFileUrl]) ;
        }else{
            Log::info('opps');
        }
    }
    public function delete(Request $request){
        if ($request->ajax() && $request->has('filename')){
         Log::info($request->get('filename'));
        }else{
            Log::info('opps something goes wrong about delete');
        }
    }
}
