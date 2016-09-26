<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\forms;

class HomeController extends Controller
{

   public function index(){



   	return view('welcome');
   }


    public function info(){


    	return view('bilgi');
    }

public function valueinfo(){


 return view('encryption');

}

public function decryption()
{


	return view('decryption');
}

function concent(){


	return view('concent');
}

function databases(Request $request)
{

    forms::create(Request::all());

	return " Mesajınız Alınmıştır , En kısa zamanda geri dönüşte bulunulacaktır. Saygılarımla :) ";
}
}