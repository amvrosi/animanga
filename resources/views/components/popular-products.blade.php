<?php
$faker = Faker\Factory::create();
$nums = array();
while(sizeof($nums) < 4){
    $num = $faker->numberBetween(1, 10);
    (!in_array($num, $nums)) ? array_push($nums, $num) : '';
}
?>

<div class="mx-auto mt-6  max-w-2xl px-4 py-4 sm:px-4 sm:py-4 lg:max-w-7xl lg:px-8 dark:bg-gray-600 dark:bg-opacity-80 border-0 rounded-3xl">
    <h2 class="text-xl font-bold text-gray-100 sm:text-2xl mb-5">{{$slot}}</h2>

    <div class="mt-6 grid gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        @foreach($nums as $num)
            <input type="hidden" value="{{$rec_product = \App\Models\Product::find($num)}}"/>
            <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="{{$rec_product->img}}" alt="" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-3 flex justify-between">
                    <div>
                        <h3 class="text-md">
                            <a href="{{route('product.show', $rec_product)}}" class="text-gray-100">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{$rec_product->title}}
                            </a>
                        </h3>
                        <p class="mt-1 text-sm">
                            @foreach($rec_product->genres as $genre)
                                <a class="bg rounded-xl mr-2 pr-2 pl-2 pt-0.5 pb-0.5 font-medium text-purple-950" style="background-color: #7566FE">
                                    {{$genre->title}}
                                </a>
                            @endforeach
                        </p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">{{$rec_product->price}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
