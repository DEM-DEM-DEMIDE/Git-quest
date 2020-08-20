<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function Top()

    {

        return view('top');
    }


    public function SampleQuest()

    {

        return view('sample');
    }
}
