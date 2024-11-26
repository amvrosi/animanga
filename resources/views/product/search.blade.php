<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            Результати пошуку "{{$searched}}"
        </h2>
    </x-slot>
    <div>
        <form class="max-w-md mx-auto pt-6" method="get" action="{{route('product.search')}}">
            <label for="searched" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Пошук</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="searched" name="searched" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Пошук серед манги, мерчу" required />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
        <div class="mx-auto max-w-2xl px-4 py-8 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

                @foreach($products as $product)
                    <a href="{{route('product.show', $product)}}" class="group mr-2 bg-gray-300 rounded-2xl p-3">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{$product->img}}" alt="image" class="h-full w-full object-cover object-center group-hover:opacity-75" style="max-height: 300px">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">{{$product->title}}</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">{{$product->price}} грн.</p>
                    </a>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
