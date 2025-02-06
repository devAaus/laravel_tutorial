<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <section class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <form method="POST" action="/login">
            @csrf

            <div class="border border-gray-900/10 flex flex-col gap-y-6 p-6 rounded-md sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="text-center text-2xl/9 font-bold tracking-tight text-gray-900">
                    Login to your account
                </h2>

                <x-form-field>
                    <x-form-label for='email'>
                        Email
                    </x-form-label>
                    <x-form-input
                        name="email"
                        id="email"
                        type="email"
                        value="{{ old('email') }}"
                        placeholder='johnSmith@example.com'
                        required />
                    <x-form-error name='email' />
                </x-form-field>

                <x-form-field>
                    <x-form-label for='password'>
                        Password
                    </x-form-label>
                    <x-form-input
                        name="password"
                        id="password"
                        type="password"
                        placeholder='******'
                        required />
                    <x-form-error name='password' />
                </x-form-field>

                <x-form-button>
                    Login
                </x-form-button>
            </div>
        </form>
    </section class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
</x-layout>
