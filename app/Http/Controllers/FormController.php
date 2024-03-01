<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getForm(Request $request) {
        if($request->hasFile('image')){
            $file = $request->file('image'); 
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = 'Vothivanthu.'.$fileExtension;
            $file->storeAs('photo', $fileName);
            $array = [
                'fileExtension' => $fileExtension,
                'fileName' => $fileName
            ];
            return view('form',compact('array') );
        }
        else {
            $error = 'Vui lòng chọn tệp cần upload';
            return view('form', compact('error'));
        }
    }
    
}
