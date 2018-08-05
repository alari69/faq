<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UploadController extends Controller
{

    public function upload()
    {

        if(Input::hasFile('file'))
        {

            echo 'Uploaded,br/>';
            $file = Input::file('file');
            $file->move('uploads/avatars', $file->getClientOriginalName());
            echo '<img src="uploads/avatars'. $file->getClientOriginalName() . ' " />';
        }
    }
    //
}
