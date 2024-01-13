<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Project;

class Index extends Component
{
    public function render()
    {
        $products = Product::all();
        $projectTypes = Project::distinct()->pluck('type');
        $projects = Project::all();
        return view('livewire.index',compact('products','projects','projectTypes'));
    }
}
