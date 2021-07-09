<div class="flex flex-col px-4 py-4" style="margin: 0 4rem 0 4rem">
    <div class="w-full bg-white px-4 py-4 mb-2 rounded-lg">
        <div class="flex items-center text-2xl">
            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
            <div class="font-bold">Require Immediate Attention</div>
        </div>
{{--        @forelse($overdueTasks as $task)--}}
{{--            <div class="flex-col hover:bg-gray-50 rounded-lg mb-4">--}}
{{--                <div class="flex justify-between items-center">--}}
{{--                    <div class="flex items-center gap-2 px-2 pt-2">--}}
{{--                        @include('layouts.status')--}}
{{--                        <a href="{{route('tasks.show', $task->id)}}"> {{ Str::limit(($task->name), 20) }}</a>--}}
{{--                        <button class="flex flex-shrink-0 items-center px-2 text-gray-400 rounded-full focus:outline-none ring-1 ring-gray-50 text-xs">--}}
{{--                            <span class="font-semibold">DUE</span> <span class="text-uppercase font-bold text-red-500 px-1">{{\Carbon\Carbon::parse($task['end_at'])->format('M d')}}</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="text-gray-500 font-bold px-4">{{\Carbon\Carbon::now()->diffInDays($task->end_at)}} days overdue</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @empty--}}
{{--            <div class="text-lg text-gray-300 font-bold tracking-wide leading-4 text-center">All Clear</div>--}}
{{--        @endforelse--}}
        <div class="px-4 py-4 bg-red-50 rounded-md mt-2">
            <div class="text-lg font-bold text-center">Consider taking the following actions</div>
            <ul class="list-disc px-4 py-4 text-sm leading-relaxed tracking-wide">
                <li>Set a realistic goal - change start/end date</li>
                <li>Record your progress, note ideas or ask for help - write a comment</li>
                <li>Break the task down into clearer, easier to achieve chunks - create a new task or subtasks</li>
            </ul>
        </div>
    </div>
    <div class="w-full bg-white px-4 py-4 mb-2 rounded-lg">
        <div class="text-2xl font-bold">Today {{\Carbon\Carbon::now()->format('M d')}}</div>
        @forelse($dueTodayTasks as $task)
            <div class="flex-col hover:bg-gray-50 rounded-lg mb-4">
                <div class="flex items-center gap-2 px-2 pt-2">
                    @include('layouts.status')
                    <a href="{{route('tasks.show', $task->id)}}"> {{ Str::limit(($task->name), 20) }}</a>
                    <button class="flex flex-shrink-0 items-center px-2 text-gray-400 rounded-full focus:outline-none ring-1 ring-gray-50 text-xs">
                        <div class="font-semibold">{{\Carbon\Carbon::parse($task['start_at'])->format('M d')}}  </div>
                        <div> -></div>
                        <div class="text-uppercase font-bold text-red-500 px-1 text-xs"> TODAY</div>
                    </button>
                </div>
            </div>
        @empty
            <div class="text-lg text-gray-300 font-bold tracking-wide leading-4 text-center">All Clear</div>
        @endforelse
    </div>
</div>
