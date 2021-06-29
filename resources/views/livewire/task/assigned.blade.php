<div class="flex flex-wrap items-center gap-2 px-4 py-2">
    @foreach($tasks as $task)
    <div class="text-xs bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 px-2 py-1 rounded-full cursor-pointer text-white">{{$task->name}}</div>
    @endforeach
</div>
