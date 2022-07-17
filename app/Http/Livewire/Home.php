<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public $products  , $brands;

    public function mount(){
        // $this->brandQuery=null;
        $this->products= Product::with('brand')->inRandomOrder()->get()->take(4);
        $this->brands = Brand::all();
    }
    public function render()
    {
        // $this->products= Product::with('brand')->inRandomOrder()->get()->take(4);
        
        return view('livewire.home')
        ->layout('layouts.client');
    }
}
