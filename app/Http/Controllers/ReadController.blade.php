<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadController extends Controller
{
    function index($read){

        return view('pages.'.$read);
    }
}