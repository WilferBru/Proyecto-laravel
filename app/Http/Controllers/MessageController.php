<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store()
    {
    	request()->validate([

    		'id' => 'required'

    	]);

    	return 'Datos validados';
    }
}
