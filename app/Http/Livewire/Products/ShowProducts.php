<?php

namespace App\Http\Livewire\Products;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProducts extends Component
{
    use WithPagination;
    public $product;
    public $openUpdate = false;
    protected $paginationTheme = 'tailwind';
    protected $listeners = ['render'];
    public $brands;
    public $product_id, $brand_id, $name, $descripcion, $price, $url_image, $imageUpload;



    public function edit($id)
    {
        $record = Product::findOrFail($id);
        $this->product_id = $id;
        $this->brand_id = $record->brand_id;
        $this->name = $record->name;
        $this->descripcion = $record->descripcion;
        $this->price = $record->price;
        $this->url_image = $record->url_image;
        // $this->updateMode = true;
        $this->openUpdate = true;
    }
    public function update()
    {
        Product::updateOrCreate(['id' => $this->product_id], [
            'name' => $this->name,
            'descripcion' => $this->descripcion,
            'price' => $this->price,
            'brand_id' => $this->brand_id,
            'url_image' => $this->url_image,
        ]);
    }
    public function destroy($id)
    {
        $record = Product::find($id);

        if ($id) {
            $record = Product::find($id);
            Storage::delete($record->url_image);

            File::delete($record?->url_image);
            $record->delete();
        }
    }

    public function mount()
    {
        $this->brands = Brand::all();
    }

    public function render()
    {
        return view(
            'livewire.products.show',
            [
                'products' =>  Product::with('brand')->latest()->paginate(5),
            ]
        );
    }
}
