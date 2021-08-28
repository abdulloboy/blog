<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">
                Register
            </h1>

            <form method="POST" action="/register" class="mt-10">
                @csrf

                <x-form.input name="name" />
                <x-form.input name="username" />
                <x-form.input name="email" type="email" />
                <x-form.input name="password" type="password" />

                <div class="mb-6">
                    <button type="submit" 
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        Submit
                    </button>
                </div> 
            </form>
        </main>
    </section>
</x-layout>