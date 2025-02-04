<x-layout>
    <x-slot:heading>
        {{ $job->title }}
    </x-slot:heading>

    <p>
        <strong>Salary:</strong> ${{ $job->salary }} per year
    </p>

    <div class="mt-4 flex items-center gap-x-4">
        <x-button href="/job/{{ $job->id }}/edit">Edit Job</x-button>

        <form
            method="POST"
            action="/job/{{ $job->id }}"
        >
            @csrf
            @method('DELETE')
            <button
                type="submit"
                class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-red-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 cursor-pointer"
            >Delete Job</button>
        </form>
    </div>
</x-layout>
