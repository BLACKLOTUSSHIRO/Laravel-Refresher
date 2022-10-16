<x-layout>
    <section class="px-6 py-8">
       
        <div class="flex">
            <aside class="w-48">
                <ul>
                    <h1 class="font-bold">
                        Links
                    </h1>
                    <li>
                        <a href="/admin/dashboard" class="{{ request()->is('admin/admin') ? 'text-blue-500' : ''}}">Dashboard</a>
                    </li>
                    <li>
                        <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : ''}}">New Post</a>
                    </li>
                </ul>
            </aside>
        </div>

        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 p-6 rounded-xl">
            <h1 class="font-bold">
                Publish New Post
            </h1>
            <form action="/admin/posts" method="POST">
                @csrf
    
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                        Title
                    </label>
    
                    <input class="border border-gray-400 p-2 w-full" type="title" name="title" id="title" value="{{ old('title') }}" required>
    
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
                        Slug
                    </label>
    
                    <input class="border border-gray-400 p-2 w-full" type="slug" name="slug" id="slug" value="{{ old('slug') }}" required>
    
                    @error('slug')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                        Excerpt
                    </label>
    
                    <textarea class="border border-gray-400 p-2 w-full" type="excerpt" name="excerpt" id="excerpt" value="{{ old('excerpt') }}" required></textarea>
    
                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                        Body
                    </label>
    
                    <textarea class="border border-gray-400 p-2 w-full" type="body" name="body" id="body" value="{{ old('body') }}" required></textarea>
    
                    @error('body')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
                        Category
                    </label>
    
                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
    
                    @error('category')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end mt-10">
                    <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Publish</button>
                </div>


            </form>
        </main>
    </section>
</x-layout>