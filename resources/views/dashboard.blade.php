<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <style>
            .overlay::after {
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5); /* Полупрозрачный черный цвет */
            }

            .skew-div {
                transform: skewX(-20deg);
                transition: transform 0.5s ease-in-out;
            }

            .skew-div:hover text {

            }
            .skew-div:hover {
                transform: skewX(-20deg) scale(1.2);
                background: rgba(0,0,0,1);
            }
        </style>
    </x-slot>
    <div class="py-6 content">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2 -mt-20">
            <div class="max-w-md col-span-1">
                <img src="{{asset('images/books.png')}}" alt="img"/>
            </div>
            <div class="text-xl text-pretty text-gray-500 text-center flex items-center">
                <div>
                    Ласкаво просимо до нашого онлайн-магазину Animanga!
                    Кожна покупка в нас – це крок у дивовижний світ японських коміксів,
                    сповнений захоплюючих сюжетів та унікальних персонажів.<br><br>
                    <a class="font-medium text-indigo-600 hover:text-indigo-500 cursor-pointer" href="{{route('product.manga')}}">
                        Перейти до перегляду манги ➜
                    </a>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2 ">
            <div class="text-gray-500 text-pretty text-xl text-center flex items-center">
                <div>
                    Також у нашому магазині ви знайдете широкий асортимент мерчу,
                    який потішить кожного фаната. Ми пропонуємо стильні футболки, аксесуари,
                    колекційні фігурки, постери та багато іншого.
                    Всі наші товари – це офіційний мерч, що відрізняється високою якістю та оригінальним дизайном.<br><br>
                    <a class="font-medium text-indigo-600 hover:text-indigo-500 cursor-pointer" href="{{route('product.merch')}}">
                        Перейти до перегляду мерчу ➜
                    </a>
                </div>
            </div>
            <div class="max-w-md -mt-0.5 ml-16">
                <img src="{{asset('images/merch.png')}}" alt="img"/>
            </div>
        </div>

        <x-popular-products>
            Популярні зараз товари:
        </x-popular-products>
    </div>
</x-app-layout>
