<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 dark:border-gray-800 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-800">
                    <thead class="bg-gray-800">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                CELL
                            </th>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                SHIFT
                            </th>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                MANPOWER
                            </th>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                TARGET OUTPUT
                            </th>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                TOTAL OUTPUT
                            </th>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                MENCELL
                            </th>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                REELS CONSUMED (KGS)
                            </th>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                OFF CUT DEFECTS (KGS)
                            </th>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                TRIM WASTE (KGS)
                            </th>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                REJECTS & REWORK (KGS)
                            </th>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                SHIFT KGS OF PRODUCTION
                            </th>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                STATUS
                            </th>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                REPORT SUBMITTED ON
                            </th>
                            <th scope="col"
                                class="px-6 py-3 bg-gray-800 dark:bg-black text-left text-xs font-medium text-gray-100 dark:text-gray-300 uppercase tracking-wider">
                                TIME
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-800">
                        @foreach($stationeries as $stationery)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->id}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->machine->name}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->shift->name}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->manpower}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->target_output}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->total_output}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->mencell}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->reels_consumed}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->off_cut_defects}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->trim_waste}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->rejects_rework}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->shift_kgs}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->status}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->created_at->format('d M Y')}}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{$stationery->created_at->format('H:i:s')}}
                            </td>
                            
                        </tr>
                        @endforeach

                        <!-- More rows... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>