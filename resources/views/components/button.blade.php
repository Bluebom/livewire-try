<div>
    <button
        {{ $attributes->merge(['class' => 'inline-block rounded-sm bg-indigo-600 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:ring-3 focus:outline-hidden']) }}
        type="submit">{{ $slot }}</button>
</div>
