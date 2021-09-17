<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewcontroller extends Controller
{
   public function viewcharts()
   {
       return view('charts');
   }
   public function indexview()
   {
    return view('index2');

   }
   public function formView()
   {
    return view('form-basic');
   }
       public function formWizardview()
   {
       return view('form-wizard');
   }
}
