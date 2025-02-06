<div>
    <label for="{{ $name }}" class="block text-xs font-medium text-gray-700">{{ $label }}</label>
    <input type="{{ $type }}" placeholder="{{ $placeholder }}"
        class="shadow-xs mt-1 w-full rounded-md border-[1.5px] border-gray-200 p-1 sm:text-sm" id="{{ $name }}"
        wire:model="{{ $name }}">
    @error($name)
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>
