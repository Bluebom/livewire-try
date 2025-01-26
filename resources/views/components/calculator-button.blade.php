@props(['yellow'])
<li data-color="{{ isset($yellow) ? 'yellow' : 'purple' }}"
    {{ $attributes->class(
        'flex h-10 w-10 cursor-pointer items-center justify-center rounded-full border-2 data-[color=purple]:border-purple-800 hover:data-[color=purple]:border-white
            data-[color=yellow]:border-orange-400 data-[color=yellow]:bg-orange-400 hover:data-[color=yellow]:border-orange-300 hover:data-[color=yellow]:bg-orange-300',
    ) }}>
    {{ $slot }}
</li>
