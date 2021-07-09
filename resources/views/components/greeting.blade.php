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

{{--<button class="md:dark:disabled:focus:hover:bg-gray-400">fdsfdsf</button>--}}

<div class="bg-green-300 my-72">
    <div class="mix-blend-multiply bg-yellow-300">fhgfngffg</div>
</div>
<div class="text-5xl font-bold text-center" style="margin-top: 10rem">
    This project is a Work-In-Progress. <br> Come back later.
</div>
