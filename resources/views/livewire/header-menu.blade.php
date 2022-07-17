<div class="bg-white" >
    {{-- MOBILE --}}
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-black bg-opacity-25" x-show="open" x-cloak
                 x-transition:enter="transition-all ease-in-out duration-400 sm:duration-600"
                x-transition:enter-start="-ml-80"
                x-transition:enter-end="ml-0"
                x-transition:leave="transition-all ease-in-out duration-400 sm:duration-600"
                x-transition:leave-start="ml-0"
                x-transition:leave-end="-ml-80"></div>

        <div class="fixed inset-0 flex z-40" x-show="open"  x-cloak
                x-transition:enter="transition-all ease-in-out duration-500 sm:duration-600"
                x-transition:enter-start="-ml-80"
                x-transition:enter-end="ml-0"
                x-transition:leave="transition-all ease-in-out duration-500 sm:duration-600"
                x-transition:leave-start="ml-0"
                x-transition:leave-end="-ml-80">
            <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto" >
                <div class="px-4 pt-5 pb-2 flex">
                    <button type="button"
                        class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400"
                        x-on:click="open = false">
                        <span class="sr-only">Close menu</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Links -->
                <div class="mt-2">
                    <div class="border-b border-gray-200">
                        <div class="-mb-px flex px-4 space-x-8" aria-orientation="horizontal" role="tablist">
                            <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                            <button id="tabs-1-tab-1"
                                class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium"
                                aria-controls="tabs-1-panel-1" role="tab" type="button"
                                 {{-- x-on:click="tabSelected=1" --}}
                                 x-on:click="window.location.href= '{{route("productos.view")}}'"
                                
                                 >Productos</button>

                            <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                            <button id="tabs-1-tab-2"
                                class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium"
                                aria-controls="tabs-1-panel-2" role="tab" type="button"  x-on:click="tabSelected=2" @mouseover="tabSelected=2" >Men</button>
                        </div>
                    </div>

                    <!-- 'Productos' tab panel, show/hide based on tab state. -->
                    <div id="tabs-1-panel-1" class="pt-10 pb-8 px-4 space-y-10" 
                   
                    aria-labelledby="tabs-1-tab-1"
                        role="tabpanel" tabindex="0" x-show="tabSelected==1" x-cloak>
                        {{-- <div class="grid grid-cols-2 gap-x-4">
                            <div class="group relative text-sm">
                                <div
                                    class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                        alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                        class="object-center object-cover">
                                </div>
                                <a href="#" class="mt-6 block font-medium text-gray-900">
                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                    New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                            </div>

                            <div class="group relative text-sm">
                                <div
                                    class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                        alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                        class="object-center object-cover">
                                </div>
                                <a href="#" class="mt-6 block font-medium text-gray-900">
                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                    Basic Tees
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                            </div>
                        </div> --}}
                        
                    </div>

                    <!-- 'Men' tab panel, show/hide based on tab state. -->
                    <div id="tabs-1-panel-2" class="pt-10 pb-8 px-4 space-y-10" aria-labelledby="tabs-1-tab-2"
                        role="tabpanel" tabindex="0"  x-show="tabSelected==2" x-cloak>
                        <div class="grid grid-cols-2 gap-x-4">
                            <div class="group relative text-sm">
                                <div
                                    class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg"
                                        alt="Drawstring top with elastic loop closure and textured interior padding."
                                        class="object-center object-cover">
                                </div>
                                <a href="#" class="mt-6 block font-medium text-gray-900">
                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                    New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                            </div>

                            <div class="group relative text-sm">
                                <div
                                    class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg"
                                        alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt."
                                        class="object-center object-cover">
                                </div>
                                <a href="#" class="mt-6 block font-medium text-gray-900">
                                    <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                    Artwork Tees
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                            </div>
                        </div>

                        <div>
                            <p id="men-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                            <ul role="list" aria-labelledby="men-brands-heading-mobile"
                                class="mt-6 flex flex-col space-y-6">
                                <li class="flow-root">
                                    <a href="#" class="-m-2 p-2 block text-gray-500"> Re-Arranged </a>
                                </li>

                                <li class="flow-root">
                                    <a href="#" class="-m-2 p-2 block text-gray-500"> Counterfeit </a>
                                </li>

                                <li class="flow-root">
                                    <a href="#" class="-m-2 p-2 block text-gray-500"> Full Nelson </a>
                                </li>

                                <li class="flow-root">
                                    <a href="#" class="-m-2 p-2 block text-gray-500"> My Way </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                    <div class="flow-root">
                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Company</a>
                    </div>

                    <div class="flow-root">
                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Stores</a>
                    </div>
                </div> --}}

                <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                    <div class="flow-root">
                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Sign in</a>
                    </div>
                    <div class="flow-root">
                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Create account</a>
                    </div>
                </div>

                <div class="border-t border-gray-200 py-6 px-4">
                    <a href="#" class="-m-2 p-2 flex items-center">
                        <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                            class="w-5 h-auto block flex-shrink-0">
                        <span class="ml-3 block text-base font-medium text-gray-900"> CAD </span>
                        <span class="sr-only">, change currency</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <header class="relative bg-white">
        <p
            class="bg-indigo-600 h-10 flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8">
            ¡Trabaja con nosotros! Aprovecha los descuentos</p>

        <nav aria-label="Top" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
                <div class="h-16 flex items-center">
                    <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                    <button x-on:click="open = true" type="button"
                        class="bg-white p-2 rounded-md text-gray-400 lg:hidden">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <!-- Logo -->
                    <div class="ml-4 flex lg:ml-0">
                        <a href="#">
                            <span class="sr-only">Workflow</span>
                            <a href="{{url('/')}}">
                                <img class="h-8 w-auto" 
                                src=" {{url('/images/ANTRIAL.svg')}}"
                                alt=""> 
                            </a>
                            
                        </a>
                    </div>

                    <!-- Flyout menus -->
                    <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                        <div class="h-full flex space-x-8">
                            <div class="flex">
                                <div class="relative flex">
                                    <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                        <button type="button"
                                        class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px"
                                        aria-expanded="false"
                                        x-on:click="window.location.href= '{{route("productos.view")}}'"  
                                        {{-- x-on:click="tabSelected==1? tabSelected=0 : tabSelected=1 " --}}
                                          @mouseover="tabSelected==1? tabSelected=0 : tabSelected=1 " 
                                           >Productos</button>
                                </div>
                            </div>

                            {{-- <div class="flex">
                                <div class="relative flex">
                                    <button type="button"
                                        class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px"
                                        aria-expanded="false" x-on:click="tabSelected==2? tabSelected=0 : tabSelected=2 ">Men</button>
                                </div>
                             
                            </div> --}}
{{-- 
                            <a href="#"
                                class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>

                            <a href="#"
                                class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a> --}}
                        </div>
                    </div>

                    <div class="ml-auto flex items-center">
                        <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                            <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign
                                in</a>
                            <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                            <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Create
                                account</a>
                        </div>

                        <div class="hidden lg:ml-8 lg:flex">
                            <a href="#" class="text-gray-700 hover:text-gray-800 flex items-center">
                                <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                                    class="w-5 h-auto block flex-shrink-0">
                                <span class="ml-3 block text-sm font-medium"> CAD </span>
                                <span class="sr-only">, change currency</span>
                            </a>
                        </div>

                        <!-- Search -->
                        <div class="flex lg:ml-6">
                            <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Search</span>
                                <!-- Heroicon name: outline/search -->
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </a>
                        </div>

                        <!-- Cart -->
                        <div class="ml-4 flow-root lg:ml-6">
                            <a href="#" class="group -m-2 p-2 flex items-center">
                                <!-- Heroicon name: outline/shopping-bag -->
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                                <span class="sr-only">items in cart, view bag</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
