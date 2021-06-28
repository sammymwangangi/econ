<div class="container mx-auto mt-2">
    <div class="flex content-center">
        {{-- <x-jet-button wire:click="showCreateProjectModal" class="bg-green-500">Create Project</x-jet-button> --}}
        <button wire:click="showCreateProjectModal" class="flex items-center px-4 py-1 text-sm text-red-600 font-semibold rounded-full border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
        New Project
        </button>
    </div>
    <x-jet-dialog-modal wire:model="showModalForm">
        <x-slot name="title">Create Project</x-slot>
        <x-slot name="content">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form wire:submit.prevent="save">
                <div class="sm:col-span-6">
                    <label for="name" class="block text-sm font-medium text-gray-700"> Project Name </label>
                    <div class="mt-1">
                    <input type="text" id="name" wire:model.lazy="name" name="name" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" />
                    </div>
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="sm:col-span-6 pt-5">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <div class="mt-1">
                    <textarea id="description" rows="3" wire:model.lazy="description" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>
                    @error('description') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="flex flex-wrap mb-6">
                    <label for="team" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
                    {{ __('Team') }}:
                    </label>

                    <select class="form-select px-4 py-3 w-full rounded" wire:model="team_id" name="team_id">
                    @foreach($teams as $team)
                        <option>Select Team</option>
                        <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                    </select>
                    <p class="mt-2 text-sm text-gray-500">
                    Select the team/department your project is associated with.
                    </p>

                    @error('team_id')
                    <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                    </p>
                    @enderror
                </div>
                </form>
            </div>
        </x-slot>
        <x-slot name="footer">
            @if($projectId)
            <x-jet-button wire:click="updateProject">Update</x-jet-button>
            @else
            <x-jet-button wire:click="storeProject">Store</x-jet-button>
            @endif
        </x-slot>
    </x-jet-dialog-modal>

</div>
