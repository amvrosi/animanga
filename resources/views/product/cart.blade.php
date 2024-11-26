<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            Кошик
        </h2>
    </x-slot>

        <div class="mx-auto max-w-2xl px-4 py-8 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-3 gap-x-6 gap-y-8 xl:gap-x-8">
                <div class="col-span-2">
                    <input type="hidden" value="{{$total = 0}}">
                    <input type="hidden" value="{{$count = 0}}">
                    @foreach($user_cart as $cart_link)
                        <input type="hidden" value="{{$product = \App\Models\Product::find($cart_link->product_id)}}"/>
                        <input type="hidden" value="{{$total+=$product->price*$cart_link->quantity}}">
                        <input type="hidden" value="{{$count+=$cart_link->quantity}}">
                        <a href="{{route('product.show', $product)}}" class="group mr-2 p-3 flex border-t-2 border-gray-600">
                            <div class="aspect-h-1 w-1/5 rounded-lg xl:aspect-h-8 xl:aspect-w-7">
                                <img src="{{$product->img}}" alt="image" class="h-full w-full object-cover object-center group-hover:opacity-75" style="max-height: 300px">
                            </div>
                            <div class="pl-5">
                                <div>
                                    <h3 class="inline-block align-middle text-2xl text-gray-200">{{$product->title}}</h3>
                                </div>
                                <div>
                                    <p class="inline-block align-middle text-lg font-medium text-gray-200">{{$product->price}} грн. | Кількість: {{$cart_link->quantity}}</p>
                                </div>
                                <form action="{{route('cart.delete', $cart_link->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <x-danger-button class="mt-2">
                                        Видалити з кошика
                                    </x-danger-button>
                                </form>
                            </div>

                        </a>
                    @endforeach
                </div>
                <div class="p-5 bg-gray-600 rounded-xl max-h-80 font-bold text-gray-100">
                    <div class="flex justify-between">
                        <div class="m-3">
                            Загальна кількість речей:
                        </div>
                        <div class="m-3">
                            {{$count}}
                        </div>
                    </div>
                    <hr color="white" width="90%" class="mx-auto">
                    <div class="flex justify-between">
                        <div class="m-3">
                            Доставка:
                        </div>
                        <div class="m-3">
                            за рахунок магазину
                        </div>
                    </div>
                    <hr color="white" width="90%" class="mx-auto">
                    <div class="flex justify-between mt-3">
                        <div class="m-3">
                            Загалом:
                        </div>
                        <div class="m-3">
                            {{$total}}
                        </div>
                    </div>
                    <div class="flex mt-3 justify-center">
                        <x-primary-button>
                            Перейти до оплати
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
