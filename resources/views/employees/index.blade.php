<x-task-layout>
	<x-slot name="header">
        <div class="flex justify-between">
            <div class="flex items-center"></div>
            <div>
                <livewire:add-task />
            </div>
        </div>
    </x-slot>
    <div class="px-4 py-4">
         {{-- TAILWIND TABLE --}}
         <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 dark:border-gray-800 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-800">
                    <thead>
                      <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Code + Name
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Designation + Department
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-800">
                      @foreach($employees as $employee)
                      <tr class="hover:bg-gray-50 dark:hover:bg-gray-800">
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                              <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                            </div>
                            <div class="ml-4">
                              <div class="text-sm font-medium text-gray-600 dark:text-gray-200">
                                {{$employee->code}}
                              </div>
                              <div class="text-sm text-gray-400 dark:text-gray-100">
                                {{$employee->name}}
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-600 dark:text-gray-200">{{$employee->designation}}</div>
                          <div class="text-sm text-gray-400 dark:text-gray-100">{{$employee->department}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-600 text-green-800 dark:text-green-200">
                            {{$employee->status}}
                          </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <a href="#" class="px-2 text-indigo-600 dark:text-indigo-500 hover:text-indigo-900 dark:hover:text-indigo-700">Edit</a>
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

          {{-- END TABLE --}}
    </div>
</x-task-layout>
