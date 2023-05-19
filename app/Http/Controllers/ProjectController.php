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
        
        return view('pages.projects.creations.index');
    }
    
    public function create()
    {
        return view('pages.projects.creations.create');
    }

    public function show(Project $project)
    {
        return view('pages.projects.creations.show');
    }

    public function edit(Project $project)
    {
        return view('pages.projects.creations.edit');
    }
}
