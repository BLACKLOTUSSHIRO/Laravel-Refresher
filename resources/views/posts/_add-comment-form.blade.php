@auth
    <form method="POST" action="/posts/{{ $post->slug }}/comments" class="border border-gray-200 p-6 rounded-xl">
        @csrf

        <header class="flex items-center">
            <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="" width="60" height="60" class="rounded-full">

            <h2 class="ml-4">Got something in mind?</h2>
        </header>

        <div class="mt-8">
            <textarea name="body" class="w-full text-sm" id="" rows="5" placeholder="Write something..." required></textarea>

            @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-end mt-10">
            <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Post</button>
        </div>
    </form>
@else
    <p>
        <a href="/login" >Login to post your thoughts</a>
    </p>
@endauth