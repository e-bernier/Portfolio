<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        return view('project', compact('project'));
    }
}
