<x-layout>
    <x-slot:heading>
        All Jobs
    </x-slot:heading>

    <div class="grid grid-cols-3 gap-4">
        @foreach ($jobs as $job)
            <a
                href="/job/{{ $job['id'] }}"
                class="px-4 py-2 shadow-lg rounded-xl text-center cursor-pointer"
            >
                <strong>{{ $job['title'] }}</strong>
            </a>
        @endforeach
    </div>
</x-layout>
