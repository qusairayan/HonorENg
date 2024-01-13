<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Livewire\WithFileUploads; 

class ProductsAdd extends Component
{
    use WithFileUploads; 

    public $name = '';
    public $title = '';
    public $description = '';
    public $image ;
    public $number = '';


    public function render(){
        return view('livewire.products.add_new');
    }

    public function add()
    {
        $this->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'number' => 'required',
        ]);

        $image_name = time() . '.' . $this->image->extension();

        $this->image->storeAs('products', $image_name, 'public');

        Product::create([
            'name' => $this->name,
            'title' => $this->title,
            'description' => $this->description,
            'image' => $image_name,
            'number' => $this->number,
        ]);
        $this->reset(['name', 'title', 'description', 'image', 'number']);

return redirect()->route('products.products');
    }

    

}
