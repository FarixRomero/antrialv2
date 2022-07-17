<?php

namespace App\Http\Livewire;

use App\Models\Product;
// use App\Models\Brand;

use Livewire\Component;

class ProductosGrid extends Component
{
    public $productos;
    public function render()
    {
        $this->productos = Product::with("brand")->get();
        return view('livewire.productos-grid');
    }
}
