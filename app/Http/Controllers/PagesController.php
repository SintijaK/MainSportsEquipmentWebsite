<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
        public function welcome(){
        return view('welcome');
    }
        public function staffArea(){
            return view('StaffArea');
        }
                public function managersArea(){
            return view('ManagersArea');
        }
                public function aboutUs(){
            return view('AboutUs');
        }
                public function contactUs(){
            return view('ContactUs');
        }
}
