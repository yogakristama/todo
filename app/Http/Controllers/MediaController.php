<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\HTTP\Request;

class MediaController extends Controller{

    public function __construct(){
        //security cek apakah user sudah login atau belum
        //klo belum akan redirect ke login
        $this->middleware('auth');
    }

    function index() {
        //Ambil daftar file
        $contents = Storage::disk('public')->listContents();

        $data = [
            'contents' => $contents
        ];
        
        return view('media/index', $data);
    }


    function upload(Request $request) {
        
        $success = false;

        if($request->isMethod('post')){
            
            $mainpicture = $request->file('mainpicture');
            // dd($files);

            if($mainpicture){
            $dir = storage_path ('app/public');
            $mainpicture->move($dir, $mainpicture->getClientOriginalName());
            }

            $gallery = $request->file('gallery');
            // dd($files);

            
            $dir = storage_path ('app/public');
            foreach ($gallery as $picture){
            $picture->move($dir, $picture->getClientOriginalName());
            }

            $success = true;
        }

        $data = [
            'success'=> $success
        ];
        
        return view('media/upload', $data);
    }
}