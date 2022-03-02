<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class FileController extends Controller
{
/*    function uploadFile($id,Request $req){
        $employee  = Employe::findOrFail($id);
        $result = $req->file('file')->store('Storage_Folder');
        $employee->photo = $result;
        $employee->save();
    }

    function downloadFile($id,Request $req){
        $employee  = Employe::findOrFail($id);
        $pathFile = $employee->photo ;
        if(Storage::disk('local')->exists("$pathFile->file")){
            $path=Storage::disk('local')->path("$pathFile->file");
            $content = file_get_contents($path);
        return response($content)->withHeaders([
            'Content-Type'=>mime_content_type($path)
        ]);
        }
    }
*/}
