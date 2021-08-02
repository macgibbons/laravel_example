<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border-grey-200">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form method="POST" action="/register">
                <div class="mb-6">
                    @csrf
                    <x-form.input name="name" />
                    <x-form.input name="username" />
                    <x-form.input name="email" type="email" />
                    <x-form.input name="password" type="password" />
                    <x-form.button>Submit</x-form.button>
                </div>
            </form>
        </main>
    </section>
</x-layout>