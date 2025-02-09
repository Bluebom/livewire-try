<div>
    <label for="{{ $name }}" class="block text-xs font-medium text-gray-700">{{ $label }}</label>
    <input type="{{ $type }}" placeholder="{{ $placeholder }}" wire:dirty.class="border-yellow-600"
        class="shadow-xs mt-1 w-full rounded-md border-[1.5px] p-1 outline-none sm:text-sm" id="{{ $name }}"
        wire:model.blur="{{ $name }}">
    <div wire:dirty wire:target="{{ $name }}">Unsaved...</div>
    @error($name)
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>
