<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//client http
use Illuminate\Support\Facades\Http;

class InfoController extends Controller
{
  public function index()
  {
    //api corona kawalcorona
    $respon =Http::get('https://api.kawalcorona.com/');

    //jadikan json
    $data =$respon->json();
    return view('index',compact('data'));
  }
}
