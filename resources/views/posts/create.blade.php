<x-layout>
    <section class="px-6 py-8">
        <x-panel class="max-w-sm m-auto">
            <form action="/admin/posts" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                            Title
                        </label>
                        <input  
                            type="text" 
                            name="title" 
                            id="title"
                            value="{{ old('title') }}" 
                            class="border border-gray-400 p-2 w-full">
                        @error('title')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
                            slug
                        </label>
                        <input 
                            type="text" 
                            name="slug" 
                            id="slug" 
                            value="{{ old('slug') }}" 
                            class="border border-gray-400 p-2 w-full">
                        @error('slug')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">
                            thumbnail
                        </label>
                        <input 
                            type="file" 
                            name="thumbnail" 
                            id="thumbnail" 
                            value="{{ old('thumbnail') }}" 
                            class="border border-gray-400 p-2 w-full">
                        @error('thumbnail')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label 
                            class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                            for="excerpt">
                            Excerpt
                        </label>
                        <textarea 
                            class="border border-gray-400 p-2 w-full"
                            name="excerpt" 
                            id="excerpt">{{ old('excerpt') }}</textarea>
                        @error('excerpt')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label 
                            class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                            for="body">
                            body
                        </label>
                        <textarea 
                            class="border border-gray-400 p-2 w-full"
                            name="body" 
                            id="body">{{ old('body') }}</textarea>
                        @error('body')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label 
                            class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                            for="category_id">
                            Category
                        </label>
                        <select name="category_id" id="category_id">
                            @php
                                $categories = \App\Models\Category::all()
                            @endphp
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600"
                    >Publish</button>
            </form>
        </x-panel>
    </section>
</x-layout>