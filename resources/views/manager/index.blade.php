<x-task-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                Namaste, {{ Auth::user()->name }}!
            </h2>
            <div>
                <livewire:projects />

            </div>
        </div>
    </x-slot>

    <div class="lg:flex gap-4 px-4 py-4 text-sm">
        <livewire:tasks />
        <div class="flex-1 flex flex-col justify-between shadow rounded bg-white p-4 mb-4" style="height: 28rem;">
            <div>

                <div class="flex items-center py-4">
                    <h1 class="font-bold text-gray-700">Important Updates</h1>
                </div>
                <div class="flex flex-col py-2">
                    <div class="flex justify-between py-2 mb-2">
                        <div class="flex">
                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <h1 class="font-bold text-gray-500">Assigned To Me</h1>
                        </div>
                    </div>

                    <div class="flex-col bg-gray-100 overflow-auto h-12">
                        <livewire:task.assigned />
                    </div>

                    <div class="flex justify-between py-2 mb-2">
                        <div class="flex">
                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                            <h1 class="font-bold text-gray-500">Mentioned</h1>
                        </div>
                    </div>

                    <div class="flex-col bg-gray-100">
                        <div class="flex flex-wrap items-center gap-2 px-4 py-2">
                            <p class="text-sm">You don't have any mentions</p>
                        </div>
                    </div>

                    <div class="flex justify-between py-2 mb-2">
                        <div class="flex">
                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                            <h1 class="font-bold text-gray-500">Created by you</h1>
                        </div>
                    </div>

                    <div class="flex-col bg-gray-100 overflow-auto h-12">
                        <livewire:task.created />
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{url('/taskmanager/notifications')}}" class="text-gray-500 font-semibold place-content-end">Notifications</a>
            </div>
        </div>
        <div class="flex-1 flex flex-col justify-between shadow rounded bg-white p-4 mb-4" style="height: 28rem;">
            <div>
                <div class="flex items-center py-4">
                    <h1 class="font-bold text-gray-700">Projects</h1>
                </div>

                <hr>
                <div class="flex flex-col divide-y py-2">
                    @foreach($projects as $project)
                    
                    <div class="flex-col group hover:bg-red-50">
                        <div class="flex items-center gap-2 px-4 py-1">
                            <svg class="w-4 h-4 text-blue-400 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            <div class="group-hover:text-gray-600">
                                <a href="{{route('projects.show', $project->id)}}" class="font-semibold">{{$project->name}}</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 px-4 py-1">
                            <svg class="w-4 h-4 text-red-400 group-hover:text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                            <div class="text-xs group-hover:text-gray-400">
                                {{$project->team->name}}
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{route('projects.index')}}" class="text-gray-500 font-semibold place-content-end">View Projects Board</a>
            </div>
        </div>
    </div>

    <div class="px-4 py-4">
        <div class="h-auto shadow rounded bg-white p-4 mb-4">
            <div class="items-center">
                <h1 class="font-extrabold text-xl">Monthly Overview</h1>
            </div>
            <livewire:tasks-calendar
                before-calendar-view="manager/header"
            />
        </div>
    </div>
</x-task-layout>

