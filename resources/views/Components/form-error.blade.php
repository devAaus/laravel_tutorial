@props(['name'])

@error($name)
    <p class="mt-1 text-sm/6 text-red-600">{{ $message }}</p>
@enderror
