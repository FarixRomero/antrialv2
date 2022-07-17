<div class="bg-white" x-data="{ openFilter: false, openSort: false }">
    <div>
        <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-black bg-opacity-25 " x-show="openFilter"></div>

            <div class="fixed inset-0 flex z-40 " x-show="openFilter" x-cloak
                x-transition:enter="transition ease-in-out duration-300" x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
                <div
                    class="ml-auto relative max-w-xs w-full h-full bg-white shadow-xl py-4 pb-12 flex flex-col overflow-y-auto">
                    <div class="px-4 flex items-center justify-between">
                        <h2 class="text-lg font-medium text-gray-900">Filtros</h2>
                        <button type="button"
                            class="-mr-2 w-10 h-10 bg-white p-2 rounded-md flex items-center justify-center text-gray-400">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true" x-on:click="openFilter=false">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Filters -->
                    <form class="mt-4 border-t border-gray-200">
                        <h3 class="sr-only">Categories</h3>

                        <div class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button"
                                    class="px-2 py-3 bg-white w-full flex items-center justify-between text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-mobile-1" aria-expanded="false">
                                    <span class="font-medium text-gray-900"> Marcas </span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-mobile-1">
                                <div class="space-y-6">
                                    @foreach ($brands as $brand)
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-0"value="new-arrivals"
                                                type="checkbox"
                                                wire:model="filters.brands.{{ $brand->id }}"
                                                id="checkbox{{ $brand->id }}"
                                                class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-0"
                                                class="ml-3 min-w-0 flex-1 text-gray-500"> {{ $brand->name }} </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
         
                <img class="w-full max-h-[340px] object-cover" style="max-height: 230px" src=" {{ url('/images/liga.png') }}"
                alt="">
            <div class="relative z-10 flex items-baseline justify-center pt-6 pb-6 border-b border-gray-200">
                {{-- <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">Productos</h1> --}}
                <div></div>
                <div class="flex items-center">
                    <div class="relative inline-block text-left">
                        <div>
                            {{-- <button x-on:click="openSort=!openSort" type="button"
                                class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                id="menu-button" aria-expanded="false" aria-haspopup="true">
                                Ordenar
                                <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button> --}}
                        </div>
                        <div x-show="openSort"
                            class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-0"> Most Popular </a>

                                <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem"
                                    tabindex="-1" id="menu-item-1"> Best Rating </a>

                                <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem"
                                    tabindex="-1" id="menu-item-2"> Newest </a>

                                <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem"
                                    tabindex="-1" id="menu-item-3"> Price: Low to High </a>

                                <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem"
                                    tabindex="-1" id="menu-item-4"> Price: High to Low </a>
                            </div>
                        </div>
                    </div>

                    {{-- <button type="button" class="p-2 -m-2 ml-5 sm:ml-7 text-gray-400 hover:text-gray-500">
                        <span class="sr-only">View grid</span>
                        <!-- Heroicon name: solid/view-grid -->
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                    </button> --}}
                    <button type="button" class="p-2 -m-2 ml-4 sm:ml-6 
                        text-gray-400 hover:text-gray-500 lg:hidden
                        inline-flex"
                        x-on:click="openFilter=true ">
                        <!-- Heroicon name: solid/filter -->
                        Filtros
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <section aria-labelledby="products-heading" class="pt-6 pb-24">
                <h2 id="products-heading" class="sr-only">Productos</h2>

                <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8 gap-y-10">
                    <!-- Filters -->
                    <form class="hidden lg:block">

                        <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button"
                                    class="py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-1" aria-expanded="false">
                                    <span class="font-medium text-gray-900"> Marcas </span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                      
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-1">
                                <div class="space-y-4">
                                    @foreach ($brands as $brand)
                                        <div class="flex items-center">
                                            <input value="" type="checkbox"
                                                wire:model="filters.brands.{{ $brand->id }}"
                                                id="checkbox{{ $brand->id }}"
                                                class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="checkbox{{ $brand->id }}"
                                                class="ml-3 text-sm text-gray-600"> {{ $brand->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </form>

                    <!-- Product grid -->
                    <div class="lg:col-span-3">
                        <div>
                            <div class="container mx-auto">
                                <div class="bg-white">
                                    <div class="max-w-2xl mx-auto lg:max-w-7xl lg:px-8">
                                        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900"></h2>
                                        <div
                                            class="mt-6 grid grid-cols-2 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                                            @if ($productos)
                                                @foreach ($productos as $product)
                                                    <div class="group relative">
                                                        <div
                                                            class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                                            <img 
                                                            src="{{str_contains($product->url_image,'http')?$product->url_image:asset('storage/'.$product->url_image) }}"
                                                            
                                                                alt="Front of men&#039;s Basic Tee in black."
                                                                class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                                                        </div>
                                                        <div class="mt-4 flex justify-between">
                                                            <div>
                                                                <h3 class="text-sm text-gray-700">
                                                                    <a href="#">
                                                                        <span aria-hidden="true"
                                                                            class="absolute inset-0"></span>
                                                                        {{ $product->name }} <br>
                                                                        {{ $product->brand->name }}
                                                                    </a>
                                                                </h3>
                                                                <p class="mt-1 text-sm text-gray-500">Black</p>
                                                            </div>
                                                            {{-- <p class="text-sm font-medium text-gray-900">$35</p> --}}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div>
                                        {{$productos->links()}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
