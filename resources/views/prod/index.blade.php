<x-prod-layout>
    <div class="px-4 py-4">

        <div class="mt-5 md:mt-0">
            <form action="{{route('reports.store')}}" method="post">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="lg:flex gap-4">
                            <div class="flex-1">
                                <label for="production_date"
                                    class="block text-sm font-medium text-gray-700">Date</label>
                                <input type="date" name="production_date" id="production_date" autocomplete="production_date"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="flex-1">
                                <label for="value_stream" class="block text-sm font-medium text-gray-700">Value
                                    Stream</label>
                                <select id="value_stream" name="value_stream" autocomplete="value_stream"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($value_streams as $value_stream)
                                    <option value="{{$value_stream->id}}">{{$value_stream->name}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="flex-1">
                                <label for="machine_id"
                                    class="block text-sm font-medium text-gray-700">Machine</label>
                                <select id="machine_id" name="machine_id" autocomplete="machine_id"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($machines as $machine)
                                    <option value="{{$machine->id}}">{{$machine->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex-1">
                                <label for="shift_id"
                                    class="block text-sm font-medium text-gray-700">Shift</label>
                                <select id="shift_id" name="shift_id" autocomplete="shift_id"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($shifts as $shift)
                                    <option value="{{$shift->id}}">{{$shift->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex-1">
                                <label for="workforce" class="block text-sm font-medium text-gray-700">Work
                                    Force:</label>
                                <input type="number" name="workforce" id="workforce"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="lg:flex gap-4 py-2">

                            <div class="flex-1">
                                <label for="operator_id" class="block text-sm font-medium text-gray-700">Operator</label>
                                <select id="operator_id" name="operator_id" autocomplete="operator_id"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($employees as $employee)
                                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex-1">
                                <label for="assis_1" class="block text-sm font-medium text-gray-700">Assistant Operator 1</label>
                                <select id="assis_1" name="assis_1" autocomplete="assis_1"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($employees as $employee)
                                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex-1">
                                <label for="assis_2" class="block text-sm font-medium text-gray-700">Assistant Operator 2</label>
                                <select id="assis_2" name="assis_2" autocomplete="assis_2"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($employees as $employee)
                                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex-1">
                                <label for="assis_3" class="block text-sm font-medium text-gray-700">Assistant Operator 3</label>
                                <select id="assis_3" name="assis_3" autocomplete="assis_3"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($employees as $employee)
                                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex-1">
                                <label for="assis_4" class="block text-sm font-medium text-gray-700">Assistant Operator 4</label>
                                <select id="assis_4" name="assis_4" autocomplete="assis_4"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($employees as $employee)
                                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex-1">
                                <label for="assis_5" class="block text-sm font-medium text-gray-700">Assistant Operator 5</label>
                                <select id="assis_5" name="assis_5" autocomplete="assis_5"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($employees as $employee)
                                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="lg:flex gap-4 py-2">

                            <div class="flex-1">
                                <label for="product_1" class="block text-sm font-medium text-gray-700">Product SKU Code</label>
                                <select id="product_1" name="product_1" autocomplete="product_1"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($products as $product)
                                    <option value="{{$product->sku_code}}">{{$product->sku_code}}</option>
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
                        <div class="lg:flex gap-4 py-2">

                            <div class="flex-1">
                                <label for="availability_loss_id" class="block text-sm font-medium text-gray-700">Availability Loss</label>
                                <select id="availability_loss_id" name="availability_loss_id" autocomplete="availability_loss_id"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($availability_losses as $availability_loss)
                                    <option value="{{$availability_loss->id}}">{{$availability_loss->name}}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="flex-1">
                                <label for="availability_loss_mins" class="block text-sm font-medium text-gray-700">Mins:</label>
                                <input type="number" name="availability_loss_mins" id="availability_loss_mins"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="rounded-full h-8 w-8 flex items-center bg-red-400 justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            </div>
                        </div>
                        <div class="lg:flex gap-4 items-center py-2">

                            <div class="flex-1">
                                <label for="reject_id" class="block text-sm font-medium text-gray-700">Rejects</label>
                                <select id="reject_id" name="reject_id" autocomplete="reject_id"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($rejects as $reject)
                                        <option value="{{$reject->id}}">{{$reject->name}}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="flex-1">
                                <label for="rejected_pcs" class="block text-sm font-medium text-gray-700">Rejected Pieces:</label>
                                <input type="number" name="rejected_pcs" id="rejected_pcs"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="rounded-full h-8 w-8 flex items-center bg-red-400 justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            </div>
                        </div>
                        <div class="lg:flex gap-4 py-2">
                            <div class="flex-1">
                                <label for="offcut_kgs" class="block text-sm font-medium text-gray-700">Offcut/Diecut Kgs:</label>
                                <input type="number" name="offcut_kgs" id="offcut_kgs"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
    
                            <div class="flex-1">
                                <label for="reject_kgs" class="block text-sm font-medium text-gray-700">Reject/Rework Kgs:</label>
                                <input type="number" name="reject_kgs" id="reject_kgs"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
    
                            <div class="flex-1">
                                <label for="trim_waste_kgs" class="block text-sm font-medium text-gray-700">Trim Waste Kgs:</label>
                                <input type="number" name="trim_waste_kgs" id="trim_waste_kgs"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>

</x-prod-layout>