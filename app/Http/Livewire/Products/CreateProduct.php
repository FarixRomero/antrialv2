<?php

namespace App\Http\Livewire\Products;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    use WithFileUploads;
    public $open = false;
    public $name, $descripcion, $price, $url_image = null;
    public $brands,$brand_id; 

    protected $rules = [
        'name' => 'required',
        'descripcion' => 'required',
        'price' => 'required',
        'brand_id' => 'required',
        'url_image'=>'image',
    ];

    public function save()
    {
        $this->validate();
        // $url = $this->url_image->store('public/products');
        // dd($url);
        $url = $this->url_image->store('public/products');

        Product::create([
            'name' => $this->name,
            'descripcion' => $this->descripcion,
            'price' => $this->price,
            'brand_id' => $this->brand_id,
            'url_image' => $url ,
        ]);
        $this->emit('render');
        $this->reset('name', 'descripcion', 'price', 'url_image','brand_id');
    }

    public function render()

    {
        $this->brands = Brand::all();
        return view('livewire.products.create-product');
    }
}
