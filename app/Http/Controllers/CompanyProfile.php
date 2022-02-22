<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfile extends Controller
{
    public function index(){
        return 'This is Homepage ';
    }

    public function news($name){
        return 'News <br>'.$name;
    }

    public function aboutus(){
        return 'This is About us ';
    }
}
