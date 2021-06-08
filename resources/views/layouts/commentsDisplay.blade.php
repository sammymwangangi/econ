@foreach($comments as $comment)
    <div class="px-8 py-2 bg-gray-100 divide-y rounded my-4 shadow-md" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <div x-data="{ open: false }">
            <div class="flex items-center">
                <div>
                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-6 w-6 rounded-full object-cover" src="{{ $comment->user->profile_photo_url }}" alt="image" />
                    </button>
                </div>
                <div class="font-semibold pr-2">{{ $comment->user->name }}</div>
                <div class="text-xs">{{\Carbon\Carbon::parse($comment->created_at)->diffForHumans(['options' => \Carbon\Carbon::JUST_NOW])}}</div>
                <button @click="open = true" class="flex items-center gap-2 rounded-full bg-white px-3 py-1 my-2 mx-4 text-green-600 text-sm border border-green-200 focus:outline-none">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path></svg>
                    Click to reply
                </button>
                @if(Auth::id() == $comment->user->id)
                    <!-- Modal -->
                    <div x-data="{ showModal : false }">
                        <!-- Button -->
                        <button @click="showModal = !showModal" class="flex items-center gap-2 rounded-full bg-white px-3 py-1 my-2 mx-4 text-blue-600 text-sm border border-blue-200 focus:outline-none">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            Edit
                        </button>

                        <!-- Modal Background -->
                        <div x-show="showModal" class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                            <!-- Modal -->
                            <div x-show="showModal" class="bg-white rounded-xl shadow-2xl p-6 sm:w-10/12 mx-10" @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                                <!-- Title -->
                                <span class="font-bold block text-2xl mb-3">🍺 Beer, beer, beer </span>
                                <!-- Some beer 🍺 -->
                                <p class="mb-5">beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer...</p>
                                <p>beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer...</p>

                                <!-- Buttons -->
                                <div class="text-right space-x-5 mt-5">
                                    <button @click="showModal = !showModal" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Cancel</button>
                                    <a href="https://www.buymeacoffee.com/fricki" target="_blank" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">🍺 Buy me a beer!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('comments.destroy', $comment->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                        <button type="submit" class="flex items-center gap-2 rounded-full bg-white px-3 py-1 my-2 mx-4 text-red-600 text-sm focus:outline-none">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            Delete
                        </button>
                    </form>
                @endif
            </div>
            <p class="px-8 py-2 text-sm font-light rounded-lg font-mono subpixel-antialiased">{!! $comment->body !!}</p>
            
            <form x-show="open"
            @click.away="open = false" method="post" action="{{ route('comments.store') }}" enctype="multipart/form-data" class="my-2">
                @csrf
                <div class="form-group">
                    {{-- <input type="text" name="body" class="form-control rounded" /> --}}
                    <textarea id="body" class="ckeditor w-full rounded border-gray-200 @error('body') border-red-500 @enderror" name="body" value="{{ old('body') }}" required></textarea>
                    <input type="hidden" name="task_id" value="{{ $task_id }}" />
                    <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                </div>
                <div class="py-2">
                    <input type="submit" class="flex items-center px-4 py-1 text-sm text-red-600 font-semibold rounded-full border border-red-200 hover:text-white bg-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 cursor-pointer" value="Comment" />
                </div>
            </form>
        </div>

        @include('layouts.commentsDisplay', ['comments' => $comment->replies])
    </div>
@endforeach