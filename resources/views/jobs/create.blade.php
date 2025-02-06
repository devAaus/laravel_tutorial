<x-layout>
    <x-slot:heading>
        Create a Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="border-b border-gray-900/10 pb-12">
            <div class="space-y-4 max-w-xl">
                <x-form-field>
                    <x-form-label for='title'>
                        Title
                    </x-form-label>
                    <x-form-input
                        name="title"
                        id="title"
                        type="text"
                        placeholder='Software Engineer'
                        required />
                    <x-form-error name='title' />
                </x-form-field>

                <x-form-field>
                    <x-form-label for='salary'>
                        Salary
                    </x-form-label>
                    <x-form-input
                        name="salary"
                        id="salary"
                        type="text"
                        placeholder='$100000'
                        required />
                    <x-form-error name='salary' />
                </x-form-field>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button
                type="button"
                class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>

</x-layout>
