<div class="flex">
    <button type="button" onclick="decrement()" class="bg-purple-900 rounded border-1 bg-purple-950 font-bold text-3xl text-purple-800 pr-3 pl-3"> - </button>
    <input class="text-center font-medium text-xl" id="quantity" name="quantity" type="text" size="3" disabled aria-valuemax="5" aria-valuemin="1" value="1"/>
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
