<div
    class="fixed bottom-0 inset-x-0 px-4 pb-6 sm:inset-0 sm:p-0 sm:flex sm:items-center sm:justify-center"
    wire:click.stop="">

    <div class="fixed inset-0 transition-opacity" wire:click.stop="$set('isModalOpen', false)">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6"
         role="dialog"
         aria-modal="true"
         aria-labelledby="modal-headline">

        <h1 class="text-indigo-600 text-xl font-medium">
            New Task
        </h1>

        <div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6 mt-4">
            <div class="sm:col-span-6">
                <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                    Project Name
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <select
                        wire:model.lazy="newTask.project_id"
                        class="border appearance-none bg-white rounded p-2 block w-full sm:text-sm sm:leading-5">
                        <option>Select Project</option>
                        @foreach($projects as $project)
                            <option value="{{$project->id}}">{{$project->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="sm:col-span-6">
                <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                    Name
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input
                        wire:model.lazy="newTask.name"
                        class="border rounded p-2 block w-full sm:text-sm sm:leading-5"
                        placeholder="What's the task about?"
                    />
                </div>
            </div>

            <div class="sm:col-span-6">
                <label for="description" class="block text-sm font-medium leading-5 text-gray-700">
                    Description
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <textarea
                        rows="3"
                        wire:model.lazy="newTask.description"
                        placeholder="Details regarding the task"
                        class="border rounded p-2 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                    ></textarea>
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="start_at" class="block text-sm font-medium leading-5 text-gray-700">
                    Start At
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input
                        type="date"
                        wire:model.lazy="newTask.start_at"
                        class="border rounded p-2 block w-full sm:text-sm sm:leading-5"
                        placeholder="What's the task about?"
                    />
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="end_at" class="block text-sm font-medium leading-5 text-gray-700">
                    Due Date
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input
                        type="date"
                        wire:model.lazy="newTask.end_at"
                        class="border rounded p-2 block w-full sm:text-sm sm:leading-5"
                    />
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="priority" class="block text-sm font-medium leading-5 text-gray-700">
                    Priority
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <select
                        wire:model.lazy="newTask.priority"
                        class="border appearance-none bg-white rounded p-2 block w-full sm:text-sm sm:leading-5">
                        <option>Select Priority</option>
                        <option value="High">High</option>
                        <option value="Medium">Medium</option>
                        <option value="Low">Low</option>
                        <option value="None">None</option>
                    </select>
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="status" class="block text-sm font-medium leading-5 text-gray-700">
                    Status
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <select
                        wire:model.lazy="newTask.status"
                        class="border appearance-none bg-white rounded p-2 block w-full sm:text-sm sm:leading-5">
                        <option>Select Status</option>
                        <option value="No Progress">No Progress</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Complete">Complete</option>
                    </select>
                </div>
            </div>

            <div class="sm:col-span-6">
                <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                    Assign to user
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <select
                        wire:model.lazy="newTask.assigned_to"
                        class="border appearance-none bg-white rounded p-2 block w-full sm:text-sm sm:leading-5">
                        <option>Assign to User</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- <div
                class="sm:col-span-6"
                x-data="{ isUploading: false, progress: 0 }"
                x-on:livewire-upload-start="isUploading = true"
                x-on:livewire-upload-finish="isUploading = false"
                x-on:livewire-upload-error="isUploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress"
            >
                <div class="w-full m-2 p-2">
                    @if ($taskfile)
                    Task File:
                    <img src="{{ asset('public/task_files/'. $taskfile ) }}">
                    @endif
                    @if ($taskfile)
                    File Preview:
                    <img src="{{ $taskfile->temporaryUrl() }}">
                    @endif
                </div>
                <label for="title" class="block text-sm font-medium text-gray-700"> Task File </label>
                <div class="mt-1">
                    <input type="file" id="taskfile" wire:model="taskfile" name="taskfile" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" />
                </div>
                <!-- Progress Bar -->
                <div x-show="isUploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
                @error('taskfile') <span class="error">{{ $message }}</span> @enderror
            </div> --}}
        </div>

        <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
            <div class="flex w-full rounded-md shadow-sm sm:col-start-2">
                <button
                    type="button"
                    wire:click.prevent="saveTask"
                    class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-indigo-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    Confirm
                </button>
            </div>
            <div class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:col-start-1">
                <button
                    type="button"
                    wire:click="$set('isModalOpen', false)"
                    class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>
