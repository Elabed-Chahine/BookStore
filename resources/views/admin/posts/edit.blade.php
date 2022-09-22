<x-layout>

    <div class="py-5 px-6">
        <main class="max-w-2xl mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <div class=" text-2xl items-center colour-blue-500">
                <h1>Edit {{ $post->name }}</h1>
            </div>
            <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="path">
                        path
                    </label>


                    <input class="border border-gray-400 p-2 w-full" type="text" name="path" id="path"
                        value="{{ old('path', $post->path) }}" required>
                    @error('path')
                        <p class="text-red-500 mt-1"> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                        title
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="title" id="title"
                        value="{{ old('title', $post->title) }}" required>
                    @error('title')
                        <p class="text-red-500 mt-1"> {{ $message }}</p>
                    @enderror
                </div>



                <div class="mb-6 flex">
                    <div class="flex-1">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">
                            thumbnail
                        </label>

                        <input class="border border-gray-400 p-2 w-full" type="file" name="thumbnail" id="thumbnail"
                            value="{{ old('thumbnail', $post->thumbnail) }}" >
                        @error('thumbnail')
                            <p class="text-red-500 mt-1"> {{ $message }}</p>
                        @enderror
                    </div>
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100">
                </div>



                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                        excerpt
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="excerpt" id="excerpt"
                        value="{{ old('excerpt', $post->excerpt) }}" required>
                    @error('excerpt')
                        <p class="text-red-500 mt-1"> {{ $message }}</p>
                    @enderror
                </div>






                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                        body
                    </label>
                    <textarea name="body" id="body" cols="30" rows="10"
                        class="block mb-2 uppercase font-bold text-xs border border-gray-400 w-full text-gray-700"
                        value="">{{ old('body', $post->body) }}</textarea>

                    @error('body')
                        <p class="text-red-500 mt-1"> {{ $message }}</p>
                    @enderror
                </div>







                <div class="mb-6">
                    <label class="block  uppercase font-bold text-xs text-gray-700" for="Category_id">
                        category
                    </label>
                    <select name="Category_id" id="Category_id">
                        @php
                            $categories = \App\models\Category::all();
                        @endphp
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                            {{ old('Category_id',$category->id) == $category->id ? 'selected' : '' }}
                                > {{ $category->name }}
                            </option>
                        @endforeach



                    </select>
                    @error('Category_id')
                        <p class="text-red-500 mt-1"> {{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                        Price
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="Price" id="Price"
                        value="{{ old('Price', $post->Price) }}" required>
                    @error('Price')
                        <p class="text-red-500 mt-1"> {{ $message }}</p>
                    @enderror
                </div>






                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </div>
    <x-flash-button />
</x-layout>
