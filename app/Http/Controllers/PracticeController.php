<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
class PracticeController extends Controller
{
    public function age(){
        $dateOfBirth = '2007-07-02';
        $years = Carbon::parse($dateOfBirth)->age;
        
        if ($years < 18) {
            dd('minor');
        }else{
            dd('legal age');
        }
        return view('practice');
    }        
}
