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

    public $product_name = '';
    public $product_title = '';
    public $product_description = '';
    public $product_image;
    public $product_number = '';


    public function render()
    {
        return view('livewire.admin.products.add_new');
    }

    public function add()
    {
        $this->validate([
            'product_name' => 'required',
            'product_title' => 'required',
            'product_description' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_number' => 'required',
        ]);


        $image_name = time() . '.' . $this->product_image->extension();

        $this->product_image->storeAs('products', $image_name, 'public');


        $image_name = time() . '.' . $this->product_image->extension();

        $this->product_image->storeAs('products', $image_name, 'public');

        Product::create([
            'name' => $this->product_name,
            'title' => $this->product_title,
            'description' => $this->product_description,
            'image' => $image_name,
            'number' => $this->product_number,
        ]);
        $this->reset(['product_name', 'product_title', 'product_description', 'product_image', 'product_number']);

        return redirect()->route('products.products');
    }
}
