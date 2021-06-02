<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="overflow-hidden px-4 py-4">
            <div class="flex justify-between">
                <div></div>
                <div>
                    
                    <button wire:click="create()" class="flex items-center px-4 py-1 text-sm text-red-600 font-semibold rounded-full border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 my-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        New Project
                    </button>

                    @if($isOpen)

                        @include('livewire.create')

                    @endif
                </div>
            </div>

            @if (session()->has('message'))

                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">

                  <div class="flex">

                    <div>

                      <p class="text-sm">{{ session('message') }}</p>

                    </div>

                  </div>

                </div>

            @endif

            <div class="px-4 py-4 font-extrabold text-xl">Design Department</div>
            <div class="grid grid-cols-4 gap-4 px-4 py-4">

                <div class="h-96 shadow rounded bg-white p-4 mb-4">
                    <div class="flex items-center">
                        <h1 class="font-bold">Project Name</h1>
                    </div>
                </div>

                <div class="h-96 shadow rounded bg-white p-4 mb-4">
                    <div class="flex items-center">
                        <h1 class="font-bold">Project Name</h1>
                    </div>
                </div>

                <div class="h-96 shadow rounded bg-white p-4 mb-4">
                    <div class="flex items-center">
                        <h1 class="font-bold">Project Name</h1>
                    </div>
                </div>
            </div>


            <div class="px-4 py-2 font-extrabold text-xl">Sales Department</div>
            <div class="grid grid-cols-4 gap-4 px-4 py-4">

                <div class="h-96 shadow rounded bg-white p-4 mb-4">
                    <div class="flex items-center">
                        <h1 class="font-bold">Project Name</h1>
                    </div>
                </div>

                <div class="h-96 shadow rounded bg-white p-4 mb-4">
                    <div class="flex items-center">
                        <h1 class="font-bold">Project Name</h1>
                    </div>
                </div>

                <div class="h-96 shadow rounded bg-white p-4 mb-4">
                    <div class="flex items-center">
                        <h1 class="font-bold">Project Name</h1>
                    </div>
                </div>

                <div class="h-96 shadow rounded bg-white p-4 mb-4">
                    <div class="flex items-center">
                        <h1 class="font-bold">Project Name</h1>
                    </div>
                </div>

                <div class="h-96 shadow rounded bg-white p-4 mb-4">
                    <div class="flex items-center">
                        <h1 class="font-bold">Project Name</h1>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>