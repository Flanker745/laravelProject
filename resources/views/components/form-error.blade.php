@props(['name'])
@error($name)
    <p class="text-sm text-red-500 text-semibold">{{ $message }}</p>
@enderror
