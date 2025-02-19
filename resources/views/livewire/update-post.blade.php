<div class="m-5 max-w-[600px]">

    @if (session()->has('message'))
        <div class="mb-4 bg-green-500 p-4 text-white">
            {{ session('message') }}
        </div>
    @endif

    <h1 class="text-2xl font-bold">Update Post</h1>
    <form wire:submit="update" class="mt-3 flex flex-col space-y-8">
        <x-input type="text" name="form.title" label="Title" placeholder="Put your tittle here" />
        <x-input type="text" name="form.content" label="Content" placeholder="Put your content here" />
        <div class="flex gap-3">
            <x-button type="submit" wire:target="update" wire:loading.class="opacity-50">Update</x-button>
            <x-button type="button" wire:click="$refresh">reload</x-button>
            <x-button type="button" x-on:click="$wire.resetQuery">Reset Title</x-button>
            <x-button type="button" wire:click="$toggle('sortAsc')">
                Sort {{ $sortAsc ? 'Descending' : 'Ascending' }}
            </x-button>
        </div>
        <span x-init="$el.innerHTML = await $wire.getPostCount()"></span>
        @foreach ($this->post->all() as $p)
            <livewire:counter :$quantity :key="$p->id" />
        @endforeach
    </form>
</div>
