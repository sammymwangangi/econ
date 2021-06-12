<div class="lg:flex lg:divide-x justify-between px-2 py-2">
    <div class="cursor-pointer lg:w-1/4 flex flex-col group border-indigo-500 bg-white shadow-lg border-transparent px-4 py-4">
      <div class="text-gray-600 font-semibold group-hover:text-gray-900">Total Projects</div>
      <div class="flex justify-between">
        <div class="flex flex-1 gap-2 items-center">
            <div class="text-2xl font-bold text-indigo-500">{{$projects->count()}}</div>
            <div class="text-gray-500 text-sm font-semibold">from 3</div>
        </div>
        <div class="flex items-center justify-center bg-green-50 text-sm text-gray-600 font-bold px-4 rounded-full">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
            12%
        </div>
      </div>
    </div>
    <div class="cursor-pointer lg:w-1/4 flex flex-col group border-indigo-500 bg-white shadow-lg border-transparent px-4 py-4">
      <div class="text-gray-600 font-semibold group-hover:text-gray-900">Total Tasks</div>
      <div class="flex justify-between">
        <div class="flex flex-1 gap-2 items-center">
            <div class="text-2xl font-bold text-indigo-500">{{$tasks->count()}}</div>
            <div class="text-gray-500 text-sm font-semibold">from 2</div>
        </div>
        <div class="flex items-center justify-center bg-green-50 text-sm text-gray-600 font-bold px-4 rounded-full">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
            12%
        </div>
      </div>
    </div>
    <div class="cursor-pointer lg:w-1/4 flex flex-col group border-indigo-500 bg-white shadow-lg border-transparent px-4 py-4">
      <div class="text-gray-600 font-semibold group-hover:text-gray-900">Tasks In-progress</div>
      <div class="flex justify-between">
        <div class="flex flex-1 gap-2 items-center">
            <div class="text-2xl font-bold text-indigo-500">{{$tasksInProgress->count()}}</div>
            <div class="text-gray-500 text-sm font-semibold">from 10</div>
        </div>
        <div class="flex items-center justify-center bg-green-50 text-sm text-gray-600 font-bold px-4 rounded-full">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
            12%
        </div>
      </div>
    </div>
    <div class="cursor-pointer lg:w-1/4 flex flex-col group border-indigo-500 bg-white shadow-lg border-transparent px-4 py-4">
      <div class="text-gray-600 font-semibold group-hover:text-gray-900">Tasks Completed</div>
      <div class="flex justify-between">
        <div class="flex flex-1 gap-2 items-center">
            <div class="text-2xl font-bold text-indigo-500">{{$tasksCompleted->count()}}</div>
            <div class="text-gray-500 text-sm font-semibold">from 5</div>
        </div>
        <div class="flex items-center justify-center bg-red-50 text-sm text-red-400 font-bold px-4 rounded-full">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
            1.4%
        </div>
      </div>
    </div>
</div>
