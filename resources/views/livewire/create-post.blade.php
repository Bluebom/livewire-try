<div>
    @if (session()->has('status'))
        <div class="mb-4 bg-green-500 p-4 text-white">
            {{ session('status') }}
        </div>
    @endif
    <form class="flex flex-col space-y-6" wire:submit="save">
        <x-input type="text" name="form.title" label="Title" placeholder="Put your tittle here" />

        <x-input type="text" name="form.content" label="Content" placeholder="Put your content here" />

        <x-button type="submit" wire:target="save" wire:loading.class="opacity-50">Save</x-button>
    </form>
</div>
