<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePage extends Controller
{

    /* Home page */
    public function index(){
        return view('front.homepage');
    }

/* Daaha chox filter */
    public function moreSearch(){
        return view('front.searchMore');
    }

    /* car's single page */
    public function carDetail(){
        return view('front.carDetail');
    }
    /* Sifaris et  section ** */
    public function question(){
        return view('front.questions');
    }

    /* avtomobiller */

    public function cars(){
        return view('front.cars');
    }

    /* Indi sat */
    public function fastSell(){
        return view('front.indi_sat');
    }
}
