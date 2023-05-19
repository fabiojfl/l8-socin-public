<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $project;

    public function __construct(Project $project)
    {
        $this->project = $project;    
    }

    public function index()
    {
        $projects = $this->project->get();

        return view('pages.pojects.creations.index', compact('projects'));
    }
}
