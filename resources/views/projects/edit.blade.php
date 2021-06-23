<x-task-layout>
	<x-slot name="header">
        
        <div class="flex gap-4">
		  <div class="text-xl leading-wide">
		  	<a class="hover:text-red-500" href="{{route('projects.index')}}">Projects</a>
		  </div>/
		  <div class="hover:text-red-500 text-xl">{{$project->name}}</div>/
          <div class="text-red-500 text-xl">edit</div>
		</div>

    </x-slot>

    <div class="container mx-auto mt-8 mb-6">
        <div class="flex flex-wrap justify-center">
            <div class="w-5/6">
                <div class="flex flex-col break-words rounded-lg shadow-md">
                    <div class="font-semibold bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white py-3 px-6 mb-0 rounded-t-lg">
                        {{ __('Edit Project') }}
                    </div>

                    <form class="w-full p-6 mb-4" method="POST" action="{{route('projects.update', $project->id)}}">
                        @csrf
                        @method('PATCH')
                        <div class="flex flex-wrap mb-6">
                            <label for="name" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
                                {{ __('Name') }}:
                            </label>

                            <input id="name" type="text" class="form-input w-full rounded @error('name')  border-red-500 @enderror" name="name" value="{{ $project->name }}" required autocomplete="name" autofocus>

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
                                <textarea id="description" rows="2" class="ckeditor w-full rounded @error('description') border-red-500 @enderror" name="description" required>{{ $project->description }}</textarea>
                                <p class="mt-2 text-sm text-gray-500">
                                    Brief description this project.
                                </p>
                            </div>

                            @error('description')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="team" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
                                {{ __('Team') }}:
                            </label>

                            <select class="form-select px-4 py-3 w-full rounded" name="team_id">
                            	@foreach($teams as $team)
							  		<option value="{{$team->id}}">{{$team->name}}</option>
								@endforeach
							</select>
							<p class="mt-2 text-sm text-gray-500">
				                Select the team/department your project is associated with.
				            </p>

                            @error('email')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- <input type="hidden" name="user_id" value="{{Auth::id()}}"> --}}

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