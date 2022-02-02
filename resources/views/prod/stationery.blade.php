<x-prod-layout>
    <div class="px-4 py-4">
        <div class="flex-col gap-4 uppercase font-bold text-gray-800 text-xl text-center mb-4">
            <div>PRODUCTION DATE:- {{ \Carbon\Carbon::now(new DateTimeZone('Africa/Nairobi'))->format('Y-m-d') }}</div>
            <div>STATIONERY PRODUCTION OEE CHECK LIST/WASTE MANAGEMENT</div>
            <div>DAILY END OF SHIFT SUPERVISOR REPORT</div>
        </div>
        <div class="mt-5 md:mt-0">
            <x-jet-validation-errors class="px-6 mb-4 mt-2" />
            <form action="{{route('stationeries.store')}}" method="POST">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="lg:flex gap-4">

                            <div class="flex-1">
                                <label for="machine_id"
                                    class="block text-sm font-medium text-gray-700">CELL</label>
                                <select id="machine_id" name="machine_id" autocomplete="machine_id"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option></option>
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
                                    <option></option>
                                    @foreach ($shifts as $shift)
                                    <option value="{{$shift->id}}">{{$shift->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="lg:flex gap-4">
                            <div class="flex-1">
                                <label for="manpower" class="block text-sm font-medium text-gray-700">MANPOWER</label>
                                <input type="number" name="manpower" id="manpower"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="flex-1">
                                <label for="target_output" class="block text-sm font-medium text-gray-700">TARGET OUTPUT:</label>
                                <input type="number" name="target_output" id="target_output"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        
                        <div class="lg:flex gap-4 py-2">
                            <div class="flex-1">
                                <label for="total_output" class="block text-sm font-medium text-gray-700">TOTAL OUTPUT:</label>
                                <input type="number" name="total_output" id="total_output"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
    
                            <div class="flex-1">
                                <label for="mencell" class="block text-sm font-medium text-gray-700">MENCELL:</label>
                                <input type="number" name="mencell" id="mencell"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="lg:flex gap-4 py-2">
    
                            <div class="flex-1">
                                <label for="status" class="block text-sm font-medium text-gray-700">CELL/MACHINE STATUS:</label>
                                <textarea
                                    class="
                                        mt-1
                                        block
                                        w-full
                                        rounded-md
                                        border-gray-300
                                        shadow-sm
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                                    "
                                    rows="3"
                                    name="status"
                                ></textarea>
                            </div>
                        </div>
                        
                        <div class="lg:flex gap-4 py-2">
                            <div class="flex-1">
                                <label for="reels_consumed" class="block text-sm font-medium text-gray-700">Reels Consumed(Kgs):</label>
                                <input type="number" name="reels_consumed" id="reels_consumed"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
    
                            <div class="flex-1">
                                <label for="off_cut_defects" class="block text-sm font-medium text-gray-700">Off cut Defects(Kgs):</label>
                                <input type="number" name="off_cut_defects" id="off_cut_defects"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
    
                            <div class="flex-1">
                                <label for="trim_waste" class="block text-sm font-medium text-gray-700">Trim Waste (Kgs):</label>
                                <input type="number" name="trim_waste" id="trim_waste"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="flex-1">
                                <label for="rejects_rework" class="block text-sm font-medium text-gray-700">REJECTS & REWORK (KGS):</label>
                                <input type="number" name="rejects_rework" id="rejects_rework"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="flex-1">
                                <label for="shift_kgs" class="block text-sm font-medium text-gray-700">SHIFT KGS OF PRODUCTION:</label>
                                <input type="number" name="shift_kgs" id="shift_kgs"
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

        {{-- <section class="py-8">
            <div class="container px-4 mx-auto">
                <livewire:stationeries-table />
            </div>
        </section> --}}

        <div class="mt-5 md:mt-0">
            <x-stationery-table></x-stationery-table>
        </div>

    </div>
{{-- @push('scripts')
    <script src="https://sheetdb.io/s/t/cwliwkmzzqxwe.js"></script>
@endpush --}}
</x-prod-layout>