<x-layout>
    <x-slot:heading>
        All Jobs
    </x-slot:heading>

    <ul class="grid col-span-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($jobs as $job)
            <li class="px-4 py-2 shadow-lg rounded-xl text-center">
                <a href="/job/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}</strong>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
