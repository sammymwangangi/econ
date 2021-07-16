<div class="lg:flex lg:divide-x justify-between px-2 py-2">
    <div class="cursor-pointer lg:w-1/4 group border-indigo-500 bg-white shadow-lg border-transparent px-4 py-4">
        <div class="text-center justify-between">
            <div class="text-5xl font-bold text-indigo-500">{{$projects->count()}}</div>
            <div class="text-gray-600 font-semibold group-hover:text-gray-900">Project(s)</div>
        </div>
    </div>
    <div class="cursor-pointer lg:w-1/4 group border-indigo-500 bg-white shadow-lg border-transparent px-4 py-4">
        <div class="text-center justify-between">
            <div class="text-5xl font-bold text-indigo-500">{{$tasks->count()}}</div>
            <div class="text-gray-600 font-semibold group-hover:text-gray-900">Task(s)</div>
        </div>
    </div>
    <div class="cursor-pointer lg:w-1/4 group border-indigo-500 bg-white shadow-lg border-transparent px-4 py-4">
        <div class="text-center justify-between">
            <div class="text-5xl font-bold text-indigo-500">{{$tasksInProgress->count()}}</div>
            <div class="text-gray-600 font-semibold group-hover:text-gray-900">Task(s) In-progress</div>
        </div>
    </div>
    <div class="cursor-pointer lg:w-1/4 group border-indigo-500 bg-white shadow-lg border-transparent px-4 py-4">
        <div class="text-center justify-between">
            <div class="text-5xl font-bold text-indigo-500">{{$tasksCompleted->count()}}</div>
            <div class="text-gray-600 font-semibold group-hover:text-gray-900">Task(s) Completed</div>
        </div>
    </div>
</div>
