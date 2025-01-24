<x-layout>
    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>

    <p>
        Pays {{ $job['salary'] }} per year
    </p>
</x-layout>
