@foreach($comments as $comment)
    <div class="px-8 py-4" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <div class="flex items-center">
            <div>
                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                    <img class="h-6 w-6 rounded-full object-cover" src="{{ $task->user->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </button>
            </div>
            <div class="font-bold pr-2">{{ $comment->user->name }}</div>
            <div class="text-xs">{{\Carbon\Carbon::parse($comment->created_at)->diffForHumans(['options' => \Carbon\Carbon::JUST_NOW])}}</div>
        </div>
        <p class="px-8 py-4 text-sm font-light font-mono subpixel-antialiased">{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                {{-- <input type="text" name="body" class="form-control rounded" /> --}}
                <textarea id="body" rows="2" class="w-full rounded-full border-gray-200 @error('body') border-red-500 @enderror" name="body" value="{{ old('body') }}" required></textarea>
                <input type="hidden" name="task_id" value="{{ $task_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div>
                <input type="submit" class="flex items-center px-4 py-1 text-sm text-red-600 font-semibold rounded-full border border-red-200 hover:text-white bg-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 cursor-pointer" value="Reply" />
            </div>
        </form>
        @include('layouts.commentsDisplay', ['comments' => $comment->replies])
    </div>
@endforeach