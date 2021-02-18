<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Article extends Controller
{
    public function article($id){
        echo "News terbaru dengan ID ".$id;
    }
}
