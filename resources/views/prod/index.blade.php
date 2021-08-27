<x-prod-layout>
    <div class="px-4 py-4">

        <div class="mt-5 md:mt-0">
            <form action="#" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="flex gap-4">
                            <div class="flex-1">
                                <label for="first-name"
                                    class="block text-sm font-medium text-gray-700">Date</label>
                                <input type="date" name="first-name" id="first-name" autocomplete="given-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="flex-1">
                                <label for="country" class="block text-sm font-medium text-gray-700">Value
                                    Stream</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($value_streams as $value_stream)
                                    <option>{{$value_stream->name}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="flex-1">
                                <label for="country"
                                    class="block text-sm font-medium text-gray-700">Machine</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($machines as $machine)
                                    <option>{{$machine->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex-1">
                                <label for="country"
                                    class="block text-sm font-medium text-gray-700">Shift</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($shifts as $shift)
                                    <option>{{$shift->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex-1">
                                <label for="work_force" class="block text-sm font-medium text-gray-700">Work
                                    Force:</label>
                                <input type="number" name="work_force" id="work_force"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="flex gap-4 py-2">

                            <div class="flex-1">
                                <label for="country" class="block text-sm font-medium text-gray-700">Product SKU Code</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($products as $product)
                                    <option>{{$product->sku_code}}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="flex-1">
                                <label for="work_force" class="block text-sm font-medium text-gray-700">Pieces:</label>
                                <input type="number" name="work_force" id="work_force"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
    
                            <div class="flex-1">
                                <label for="work_force" class="block text-sm font-medium text-gray-700">Cartons:</label>
                                <input type="number" name="work_force" id="work_force"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
    
                            <div class="flex-1">
                                <label for="work_force" class="block text-sm font-medium text-gray-700">Target Quantity Pieces:</label>
                                <input type="number" name="work_force" id="work_force"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="flex gap-4 py-2">

                            <div class="flex-1">
                                <label for="country" class="block text-sm font-medium text-gray-700">Operator</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($employees as $employee)
                                    <option>{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex-1">
                                <label for="country" class="block text-sm font-medium text-gray-700">Assistant Operator 1</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($employees as $employee)
                                    <option>{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex-1">
                                <label for="country" class="block text-sm font-medium text-gray-700">Assistant Operator 2</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($employees as $employee)
                                    <option>{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex-1">
                                <label for="country" class="block text-sm font-medium text-gray-700">Assistant Operator 3</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($employees as $employee)
                                    <option>{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex-1">
                                <label for="country" class="block text-sm font-medium text-gray-700">Assistant Operator 4</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($employees as $employee)
                                    <option>{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex-1">
                                <label for="country" class="block text-sm font-medium text-gray-700">Assistant Operator 5</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($employees as $employee)
                                    <option>{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex gap-4 py-2">

                            <div class="flex-1">
                                <label for="country" class="block text-sm font-medium text-gray-700">Availability Loss</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($availability_losses as $availability_loss)
                                    <option>{{$availability_loss->name}}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="flex-1">
                                <label for="work_force" class="block text-sm font-medium text-gray-700">Mins:</label>
                                <input type="number" name="work_force" id="work_force"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="flex gap-4 py-2">

                            <div class="flex-1">
                                <label for="country" class="block text-sm font-medium text-gray-700">Rejects</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Select...</option>
                                    @foreach ($rejects as $reject)
                                    <option>{{$reject->name}}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="flex-1">
                                <label for="work_force" class="block text-sm font-medium text-gray-700">Rejected Pieces:</label>
                                <input type="number" name="work_force" id="work_force"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="flex gap-4 py-2">
                            <div class="flex-1">
                                <label for="work_force" class="block text-sm font-medium text-gray-700">Offcut/Diecut KGS:</label>
                                <input type="number" name="work_force" id="work_force"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
    
                            <div class="flex-1">
                                <label for="work_force" class="block text-sm font-medium text-gray-700">Reject/Rework KGS:</label>
                                <input type="number" name="work_force" id="work_force"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
    
                            <div class="flex-1">
                                <label for="work_force" class="block text-sm font-medium text-gray-700">Trim Waste KGS:</label>
                                <input type="number" name="work_force" id="work_force"
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