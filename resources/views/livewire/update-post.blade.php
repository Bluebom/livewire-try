<div class="m-5 max-w-[600px]">
    <h1 class="text-2xl font-bold">Update Post</h1>
    <form wire:submit="update" class="mt-3 flex flex-col space-y-8">
        <x-input type="text" name="title" label="Title" placeholder="Put your tittle here" />
        <x-input type="text" name="content" label="Content" placeholder="Put your content here" />
        <div class="flex gap-3">
            <x-button type="submit" wire:target="update" wire:loading.class="opacity-50">Update</x-button>
            <x-button type="button" wire:click="$refresh">reload</x-button>
            <x-button type="button" x-on:click="$wire.resetQuery">Reset Title</x-button>
            <x-button type="button" wire:click="$toggle('sortAsc')">
                Sort {{ $sortAsc ? 'Descending' : 'Ascending' }}
            </x-button>
        </div>
        <span x-init="$el.innerHTML = await $wire.getPostCount()"></span>
    </form>
</div>
