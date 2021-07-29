@auth
    <form action="/posts/{{ $post->slug }}/comments" method="post" class="border border-gray-200 p-6 rounded-xl">
        @csrf
        <header class="flex">
            <img 
                class="rounded-full" 
                src="https://i.pravatar.cc/60?u={{ auth()->id() }}" 
                width="40" 
                height="40" 
                alt="User avatar">
            <h3 class="ml-4">comment</h3>
        </header>
        <div class="mt-6">
            <textarea 
                name="body" 
                id="body" 
                class="w-full text-sm focus:outline-none focus:ring" 
                rows="5" 
                placeholder="Leave a comment..." 
                required></textarea>
            @error('body')
                <span class="text-xs text-red">{{ $message }}</span>
            @enderror
        </div>
        <footer class="flex justify-end mt-6 pt-6 border-t border-gray-200">
            <button 
                type="submit" 
                class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
                    Post
            </button>
        </footer>
    </form>
@else
    <p>
        <a class="hover:text-blue-500 hover:underline" href="/register">Register</a> or <a class="hover:underline hover:text-blue-500" href="/login">login</a> to leave a comment
    </p>
@endauth