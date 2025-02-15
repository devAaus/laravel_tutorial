<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    <form
        method="POST"
        action="/jobs/{{ $job->id }}"
    >
        @csrf
        @method('PATCH')

        <div class="border-b border-gray-900/10 pb-12">
            <div class="space-y-4 max-w-xl">
                <div class="sm:col-span-3">
                    <label
                        for="title"
                        class="block text-sm/6 font-medium text-gray-900"
                    >Title</label>
                    <input
                        type="text"
                        name="title"
                        id="title"
                        value="{{ $job->title }}"
                        placeholder="Software Engineer"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        required
                    >
                    @error('title')
                        <p class="mt-1 text-sm/6 text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label
                        for="salary"
                        class="block text-sm/6 font-medium text-gray-900"
                    >Salary</label>
                    <input
                        type="text"
                        name="salary"
                        id="salary"
                        value="{{ $job->salary }}"
                        placeholder="$100,000"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        required
                    >
                    @error('salary')
                        <p class="mt-1 text-sm/6 text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a
                href="/jobs/{{ $job->id }}"
                class="text-sm/6 font-semibold text-gray-900"
            >Cancel</a>
            <button
                type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >Update</button>
        </div>
    </form>

</x-layout>
