<div x-data="{ count: 0 }" x-modelable="count" {{ $attributes }}>
    <button type="button" x-on:click="count--">-</button>

    <span x-text="count"></span>

    <button type="button" x-on:click="count++">+</button>
</div>
