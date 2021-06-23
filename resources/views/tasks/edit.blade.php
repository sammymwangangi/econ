<x-task-layout>
	<x-slot name="header">
        
        <div class="flex gap-4">
		  <div class="text-xl leading-wide">
		  	<a class="hover:text-red-500" href="{{route('projects.index')}}">Tasks</a>
		  </div>/
          <div class="hover:text-red-500 text-xl">{{$task->name}}</div>/
		  <div class="text-red-500 text-xl">Create</div>
		</div>
    </x-slot>

    <div class="container mx-auto mt-8 mb-6">
        <div class="flex flex-wrap justify-center">
            <div class="w-5/6">
                <div class="flex flex-col break-words rounded-lg shadow-md">
                    <div class="font-semibold bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white py-3 px-6 mb-0 rounded-t-lg">
                        {{ __('Edit Task') }}
                    </div>

                    <form class="w-full p-6" method="POST" action="{{route('tasks.update', $task->id)}}">
                        @csrf
                        @method('PATCH')

                        <div class="flex flex-wrap mb-6">
                            <label for="project_id" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
                                {{ __('Task') }}:
                            </label>

                            <select class="form-select px-4 py-3 w-full rounded" name="project_id">
                                @foreach($projects as $project)
                                    <option value="{{$project->id}}">{{$project->name}}</option>
                                @endforeach
                            </select>
                            <p class="mt-2 text-sm text-gray-500">
                                Select the project your task is associated with.
                            </p>

                            @error('project_id')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="name" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
                                {{ __('Name') }}:
                            </label>

                            <input id="name" type="text" class="form-input w-full rounded @error('name')  border-red-500 @enderror" name="name" value="{{ $task->name }}" required autocomplete="name" autofocus>

                            @error('name')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-col flex-wrap mb-6">
                            <div>
                                <label for="description" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
                                    {{ __('Description') }}:
                                </label>
                            </div>
                            <div>
                                <textarea id="description" rows="2" class="ckeditor w-full rounded @error('description') border-red-500 @enderror" name="description" required>{{ $task->description }}</textarea>
                                <p class="mt-2 text-sm text-gray-500">
    				                Brief description about the task.
    				            </p>
                            </div>

                            @error('description')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="assigned_to" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
                                {{ __('Assigned To') }}:
                            </label>

                            <select class="form-select px-4 py-3 w-full rounded" name="assigned_to">
                                @foreach($users as $user)
                                    <option value="{{$user->name}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            <p class="mt-2 text-sm text-gray-500">
                                Assign a member to this task.
                            </p>

                            @error('assigned_to')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="priority" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
                                {{ __('Priority') }}:
                            </label>

                            <select class="form-select px-4 py-3 w-full rounded" name="priority">
                                    <option value="None">None</option>
                                    <option value="Low">Low</option>
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                            </select>

                            @error('priority')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="start_at" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
                                {{ __('Start Date') }}:
                            </label>

                            <input id="start_at" type="date" class="form-input w-full rounded @error('start_at')  border-red-500 @enderror" name="start_at" value="{{ $task->start_at }}">

                            @error('start_at')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="end_at" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
                                {{ __('Due Date') }}:
                            </label>

                            <input id="end_at" type="date" class="form-input w-full rounded @error('end_at')  border-red-500 @enderror" name="end_at" value="{{ $task->end_at }}">

                            @error('end_at')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="team" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
                                {{ __('Status') }}:
                            </label>

                            <select class="form-select px-4 py-3 w-full rounded" name="status">
                                    <option value="No Progress">No Progress</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                            </select>

                            @error('status')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="taskfile" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
                                {{ __('Upload File') }}:
                            </label>

                            <input id="taskfile" type="file" class="form-input w-full rounded @error('taskfile')  border-red-500 @enderror" name="taskfile" value="{{ $task->taskfile }}" required>

                            @error('taskfile')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                            {{-- <livewire:task-file /> --}}
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:ring">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-task-layout>