<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request; // Import Request class
use Illuminate\Support\Facades\Storage;
use App\Models\Project;


class Projects extends Component
{


    public function render()
    {
        $projectTypes = Project::distinct()->pluck('type');
        $projects = Project::all();
        return view('livewire.admin.projects.projects', compact('projects','projectTypes'));
        
    }

    public function delete($project){
        $project = Project::find($project);
        $project->delete();
        return redirect()->route('projects.projects');
    }
}
