<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;
use App\Models\Project;
use Livewire\WithFileUploads; 

class ProjectsAdd extends Component
{
    use WithFileUploads; 

    public $name = '';
    public $title = '';
    public $description = '';
    public $image ;
    public $number = '';
    public $date = '';
    public $client = '';
    public $type = '';


    public function render(){
        return view('livewire.projects.add_new');
    }

    public function add()
    {
        $this->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'number' => 'required',
            'date' => 'required|date',
            'client' => 'required',
            'type' => 'required',
        ]);

        $image_name = time() . '.' . $this->image->extension();

        $this->image->storeAs('projects', $image_name, 'public');

        Project::create([
            'name' => $this->name,
            'title' => $this->title,
            'description' => $this->description,
            'image' => $image_name,
            'number' => $this->number,
            'date' => $this->date,
            'client' => $this->client,
            'type' => $this->client,
        ]);
        $this->reset(['name', 'title', 'description', 'image', 'number']);

return redirect()->route('projects.projects');
    }

    

}
