@auth
<form action="/posts/{{ $post->slug }}/comments" method="post" class="border border-gray-200 p-6 rounded-xl">
    @csrf
    <header class="flex">
        <img class="rounded-full" src="https://i.pravatar.cc/60?u={{ auth()->id() }}" width="40" height="40"
            alt="User avatar">
        <h3 class="ml-4">comment</h3>
    </header>
    <x-form.field>
        <textarea name="body" id="body" class="w-full text-sm focus:outline-none focus:ring" rows="5"
            placeholder="Leave a comment..." required></textarea>
        <x-form.error name="body" />
    </x-form.field>
    <footer class="flex justify-end mt-6 pt-6 border-t border-gray-200">
        <x-form.button>Post</x-form.button>
    </footer>
</form>
@else
<p>
    <a class="hover:text-blue-500 hover:underline" href="/register">Register</a> or <a
        class="hover:underline hover:text-blue-500" href="/login">login</a> to leave a comment
</p>
@endauth