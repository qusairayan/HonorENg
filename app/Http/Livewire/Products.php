<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request; // Import Request class
use Illuminate\Support\Facades\Storage;
use App\Models\Product;


class Products extends Component
{


    public function render()
    {
        $products = Product::all();
        return view('livewire.admin.products.products', compact('products'));
        
    }


    public function delete($product){
        $product = Product::find($product);
        if($product){
        $product->delete();
        }
        return redirect()->route('products.products');
    }

}
