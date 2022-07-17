<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Productos extends Component
{
    use WithPagination;
    // public $productos;
    public $brands;
    public $brandQuery;
    public $filters = [
        'brands' => [],
    ];

    protected $queryString =[
        'brandQuery'
    ];
    public function mount(){
        $this->brands = Brand::get();
        if($this->brandQuery)$this->filters['brands'][$this->brandQuery]=1;
        // $this->brandQuery=null;
    }


    public function render()
    {
        $this->filters['brands'] = array_filter($this->filters['brands']);
        if (empty($this->filters['brands'])) {
            // $this->productos = Product::with("brand")->latest()->paginate(9);
            return view('livewire.productos', [
                'productos' => Product::with("brand")->latest()->paginate(9),
            ])
            ->layout('layouts.client');
        } else {
            $this->filters['brands'] = array_filter($this->filters['brands']);
            // $this->productos = Product::with("brand")->whereIn('brand_id', array_keys($this->filters['brands']))->latest()->paginate(9);
            return view('livewire.productos', [
                'productos' => Product::with("brand")->whereIn('brand_id', array_keys($this->filters['brands']))->latest()->paginate(9)
            ])
            ->layout('layouts.client');;
        }
      
    }
}
