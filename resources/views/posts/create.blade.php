<x-layout>
    <section class="px-6 py-8">
        <x-panel class="max-w-sm m-auto">
            <form action="/admin/posts" method="post" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title" />
                <x-form.input name="slug" />
                <x-form.input name="thumbnail" type="file" />
                <x-form.textarea name="excerpt" />
                <x-form.textarea name="body" />

                <x-form.field>
                    <x-form.label name="category" />
                    <select name="category_id" id="category_id">
                        @php
                        $categories = \App\Models\Category::all()
                        @endphp
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="category" />
                </x-form.field>
                <x-form.button>
                    Publish
                </x-form.button>
            </form>
        </x-panel>
    </section>
</x-layout>