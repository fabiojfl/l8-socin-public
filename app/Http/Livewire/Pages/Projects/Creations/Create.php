<?php

namespace App\Http\Livewire\Pages\Projects\Creations;

use Livewire\Component;
use App\Models\Project;

class Create extends Component
{
    public Project $project;

    protected $rules = [
        
        'project.title'   => 'required'
        

    ];

    public function mount(){
        $this->project = new Project();
    }

    public function save()
    {
        $this->validate();

        Project::create($this->project->toArray());
        return redirect()->route('pages.projects.creations.index');
    }

    public function render()
    {
        return view('livewire.pages.projects.creations.create');
    }
}
