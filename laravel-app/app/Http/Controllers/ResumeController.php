<?php

namespace App\Http\Controllers;

use App\Models\Resume;

class ResumeController extends Controller
{
    public function show()
    {
        $informations = Resume::first();

        // Split the education, skills, and awards into arrays
        $educations = explode("\n", $informations->education);
        $skills = explode("\n", $informations->skills);
        $awards = explode("\n", $informations->awards);

        return view('resume', compact('informations', 'educations', 'skills', 'awards'));
    }
}
