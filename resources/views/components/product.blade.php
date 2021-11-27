<div x-data="{ open: false }">
    <button x-on:click="open = ! open">Toggle Dropdown</button>
 
    <div x-show="open" x-transition>
        <div class="lg:flex gap-4 py-2">

            <div class="flex-1">
                <label for="product_1" class="block text-sm font-medium text-gray-700">Product SKU Code</label>
                <select id="product_1" name="product_1" autocomplete="product_1"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option></option>
                    @foreach ($products as $product)
                    <option value="{{$product->id}}">{{$product->sku_code}}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex-1">
                <label for="pieces" class="block text-sm font-medium text-gray-700">Pieces:</label>
                <input type="number" name="pieces" id="pieces"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="flex-1">
                <label for="cartons" class="block text-sm font-medium text-gray-700">Cartons:</label>
                <input type="number" name="cartons" id="cartons"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="flex-1">
                <label for="target_quantity_pcs" class="block text-sm font-medium text-gray-700">Target Quantity Pieces:</label>
                <input type="number" name="target_quantity_pcs" id="target_quantity_pcs"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
        </div>
    </div>
</div>