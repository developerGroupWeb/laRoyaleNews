<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{

    function abonnement(){
        return view('pages.abonnement');
    }

    function checkoutStandard(){
        return view('pages.checkoutStandard');
    }

    function checkoutPremium(){
        return view('pages.checkoutPremium');
    }
}
