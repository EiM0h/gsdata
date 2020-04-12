<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GsController extends Controller
{
    public function showData() {
        $dataFromGs = file_get_contents('http://gsx2json.com/api?id=1sqdjOchuG1zPW9wTdBaMC4Y0020BXW7Jrqxizy2ghs8&columns=false');
        $gsData = json_decode($dataFromGs);
        return view('pages.home',['data'=>$gsData->rows]);
    }
}
