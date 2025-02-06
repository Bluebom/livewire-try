<div class="m-5 max-w-[400px]">
    <h1 class="text-2xl font-bold">Update Post</h1>
    <form wire:submit="update" class="mt-3 flex flex-col space-y-8">
        <x-input type="text" name="title" label="Title" placeholder="Put your tittle here" />
        <x-input type="text" name="content" label="Content" placeholder="Put your content here" />
        <x-button type="submit">Update</x-button>
    </form>
</div>
