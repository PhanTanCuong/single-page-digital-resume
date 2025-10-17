<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    //index function
    public function index()
    {

        $resume = Storage::disk('resume')->get('resume.json');
        $resumeData = json_decode($resume, true);

        return view(
            'resume',
            [
                'resumeData' => $resumeData,
            ]
        );
    }
}
