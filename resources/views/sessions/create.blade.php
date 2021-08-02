<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border-grey-200">
            <h1 class="text-center font-bold text-xl">Login</h1>
            <form method="POST" action="/login">
                <div class="mb-6">
                    @csrf
                    <div class="mb-6">
                        <x-form.input name="email" type="email" />
                        <x-form.input name="password" type="password" />
                        <x-form.button>Login</x-form.button>
                    </div>
            </form>
        </main>
    </section>
</x-layout>