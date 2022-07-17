<div>
    <x-jet-dialog-modal wire:model="openUpdate">
        <x-slot name='title'>

        </x-slot>
        <x-slot name='content'>
            <div wire:loading wire:target="url_image" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Imagen Cargando!</strong>
                <span class="block sm:inline">Espere un momento.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                  <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
              </div>
            @if ($imageUpload)
                Imagen
                <img class="mb-4" src="{{ $imageUpload?->temporaryUrl() }}">
            @endif
            <div class="mb-4">
                <x-jet-label value="Nombre"> </x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="name" />
                <x-jet-input-error for="name"></x-jet-input-error>
            </div>
            <div class="mb-4" wire:ignore>
                <x-jet-label value="Nombre"> </x-jet-label>
                <select class="w-full rounded-md" name="" id="select2" wire:model='brand_id'>
                    <option value="">Selecciona una marca</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <x-jet-label value="Descripcion"> </x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="descripcion" />
                <x-jet-input-error for="descripcion"></x-jet-input-error>

            </div>
            <div class="mb-4">
                <x-jet-label value="Precio"> </x-jet-label>
                <x-jet-input type="number" class="w-full" wire:model.defer="price" />
                <x-jet-input-error for="price"></x-jet-input-error>

            </div>
            <div>
                <input type="file" wire:model="url_image">
 
                @error('url_image') <span class="error">{{ $message }}</span> @enderror
            </div>

        </x-slot>
        <x-slot name='footer'>
            <x-jet-button class="mr-5" wire:click="$set('openUpdate',false)"> Cierra</x-jet-button>
            <x-jet-button wire:click="update" wire:loading.attr='disabled' wire:target="save, url_image" class="disabled:opacity-50">
                Guarda</x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>