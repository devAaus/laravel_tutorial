<!doctype html>
<html class="h-full bg-gray-100" lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Document</title>
        @vite(['resources/js/app.js'])
    </head>

    <body class="h-full">
        <div class="min-h-full">
            <nav class="bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <img
                                    alt="Your Company"
                                    class="size-8"
                                    src="https://laracasts.com/images/logo/logo-triangle.svg">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <x-nav-link href="/" :active="request()->is('/')">
                                        Home
                                    </x-nav-link>
                                    <x-nav-link href="/jobs" :active="request()->is('jobs')">
                                        Jobs
                                    </x-nav-link>
                                    <x-nav-link href="/contact" :active="request()->is('contact')">
                                        Contact
                                    </x-nav-link>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center gap-3 md:ml-6">
                                @guest
                                    <x-nav-link href='/login'>
                                        Login
                                    </x-nav-link>
                                    <x-nav-link href='/register'>
                                        Register
                                    </x-nav-link>
                                @endguest

                                @auth
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <x-form-button>
                                            LogOut
                                        </x-form-button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div
                    class="md:hidden"
                    id="mobile-menu">
                    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3"> -->
                        <a
                            aria-current="page"
                            class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                            href="/">Home</a>
                        <a
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                            href="/about">About</a>
                        <a
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                            href="/contact">Contact</a>
                    </div>
                    <div class="border-t border-gray-700 pt-4 pb-3">
                        <div class="flex items-center gap-3">
                            <x-nav-link href='/login' class="">
                                Login
                            </x-nav-link>
                            <x-nav-link href='/register' class="bg-blue-500">
                                Register
                            </x-nav-link>
                        </div>
                    </div>
                </div>
            </nav>

            <header class="bg-white shadow-sm">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between sm:items-center">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                        {{ $heading }}
                    </h1>

                    <x-button href="/jobs/create">Create Job</x-button>
                </div>
            </header>
            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>

</html>
