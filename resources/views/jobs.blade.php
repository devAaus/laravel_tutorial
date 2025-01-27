<x-layout>
    <x-slot:heading>
        All Jobs
    </x-slot:heading>

    <div class="grid grid-cols-2 gap-4">
        @foreach ($jobs as $job)
            <a
                href="/job/{{ $job['id'] }}"
                class="px-4 py-2 shadow-lg rounded-lg cursor-pointer border hover:shadow-xl"
            >
                <div class="text-xs text-blue-500 font-semibold">
                    {{ $job->employer->name }}
                </div>
                <div class="text-lg">
                    <strong>{{ $job['title'] }}</strong>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>
