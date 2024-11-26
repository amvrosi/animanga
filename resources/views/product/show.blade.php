<x-app-layout>
    <div class="grid grid-cols-2">
        <div class="flex justify-end pt-4">
            <img src="{{$product->img}}" style="" class="max-w-xs" alt="image">
        </div>
        <div class="pl-10 pt-4">
            <div class="text-2xl font-bold text-gray-100 sm:text-3xl mb-5">
                {{$product->title}}
            </div>
            <div class="font-medium text-xl text-gray-500 flex flex-auto pb-1">
                Оцінка: @for($i=1; $i<$product->rate; $i++)
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" fill="#7566FE"></path> </g></svg>
                        @endfor
            </div>
            <div class="font-medium text-xl text-gray-500 pb-1">
                Жанри:
            @foreach($product->genres as $genre)
                <a href="{{route('product.genre', $genre)}}" class="font-medium text-xl  pr-1.5 pl-1.5 pt-0.5 pb-0.5 mr-2 text-purple-950 rounded-xl" style="background-color: #7566FE">
                    {{$genre->title}}
                </a>
            @endforeach
            </div>
            <div class="font-medium text-xl text-gray-500">
                Рік видання: {{$product->year}}
            </div>
            <div class="font-medium text-xl text-gray-500 pb-1">
                Автор: {{$f['author']}}
            </div>
            <div class="font-medium text-xl text-gray-500 pb-1">
                Перекладач: {{$f['translator']}}
            </div>
            <div class="font-medium text-xl text-gray-500 pb-1">
                Видавництво: {{$f['vydavnytstvo']}}
            </div>
            @if(Auth::User())
                <div class="text-xl pt-2">
                    <form action="{{route('cart.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}"/>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                        <div class="flex mb-3 mt-5">
                            <div class="mt-2 mr-3 font-medium text-xl text-gray-500 pb-1"><label for="quantity">Кількість(до 5)</label></div>
                            <div>
                                <div class="flex">
                                    <button type="button" onclick="decrement()" class="bg-purple-900 rounded border-1 bg-purple-950 font-bold text-3xl text-purple-800 pr-3 pl-3"> - </button>
                                    <input class="text-center font-medium text-xl bg-black bg-opacity-25 border-0 text-gray-100" id="quantity" name="quantity" type="text" size="3" aria-valuemax="5" aria-valuemin="1" value="1"/>
                                    <button type="button" onclick="increment()" class="bg-purple-900 rounded border-1 bg-purple-950 font-bold text-3xl text-purple-800 pr-3 pl-3"> + </button>
                                </div>
                                <script>
                                    function increment() {
                                        var inputElement = document.getElementById('quantity');
                                        var currentValue = Number(inputElement.value);

                                        if (currentValue < 5) {
                                            inputElement.value = currentValue + 1;
                                        }
                                    }

                                    function decrement() {
                                        var inputElement = document.getElementById('quantity');
                                        var currentValue = Number(inputElement.value);

                                        if (currentValue > 1) {
                                            inputElement.value = currentValue - 1;
                                        }
                                    }
                                </script>
                                {{--скрипт для кнопок - та + --}}
                            </div>
                        </div>
                        <button class="button-36 flex" role="button" type="submit">
                            <div class="mt-3.5">
                                Додати до кошика
                            </div>
                            <svg  class="mt-3.5 ml-2" width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 5L19 12H7.37671M20 16H8L6 3H3M11.5 7L13.5 9M13.5 9L15.5 7M13.5 9V3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke="#FD6CAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </button>
                    </form>
                </div>
            @else
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Увійдіть або зареєструйтеся щоб продовжити
                    </span>
                </button>
            @endif
        </div>
    </div>
    <div>
        <div>
            <x-popular-products>
                Інші клієнти також обирають:
            </x-popular-products>
        </div>
    </div>
</x-app-layout>
