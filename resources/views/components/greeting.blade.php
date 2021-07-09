<div class="flex items-center gap-2">
    <div>
        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
        </button>
    </div>
    <div class="text-2xl font-bold">
        {{ $greetings }}, {{ Auth::user()->name }}
    </div>
</div>


<div class="text-5xl font-bold text-center my-40">
    This project is a <span class="text-transparent bg-gradient-to-r bg-clip-text from-yellow-400 via-red-500 to-pink-500">Work-In-Progress.</span> <br> Come back later.
</div>
