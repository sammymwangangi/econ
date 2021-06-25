<div class="container mx-auto mt-2">
  <div class="flex content-center m-2 p-2">
    <x-jet-button wire:click="showCreateProjectModal" class="bg-green-500">Create Project</x-jet-button>
  </div>
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Name</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Description</th>
              <th scope="col" class="relative px-6 py-3">Edit</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr></tr>
            @foreach($projects as $project)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">{{ $project->id }}</td>
              <td class="px-6 py-4 whitespace-nowrap">{{ $project->name }}</td>
              <td class="px-6 py-4 whitespace-nowrap">{!! $project->description !!}</td>
              <td class="px-6 py-4 text-right text-sm">
                <x-jet-button wire:click="showEditProjectModal({{ $project->id }})" class="bg-green-500">Edit</x-jet-button>
                <x-jet-button wire:click="deleteProject({{ $project->id}})" class="bg-red-700">Delete</x-jet-button>
              </td>
            </tr>
            @endforeach
            <!-- More items... -->
          </tbody>
        </table>
        <div class="m-2 p-2">
          {{ $projects->links() }}
        </div>
      </div>
    </div>
  </div>
  <x-jet-dialog-modal wire:model="showModalForm">
    <x-slot name="title">Create Project</x-slot>
    <x-slot name="content">
      <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
        <form wire:submit.prevent="save">
          <div class="sm:col-span-6">
            <label for="name" class="block text-sm font-medium text-gray-700"> Project Name </label>
            <div class="mt-1">
              <input type="text" id="name" wire:model.lazy="name" name="name" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>
            @error('name') <span class="error">{{ $message }}</span> @enderror
          </div>
          <div class="sm:col-span-6 pt-5">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <div class="mt-1">
              <textarea id="description" rows="3" wire:model.lazy="description" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
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