@props(['title'])
<div>
    <header class="px-3 py-6">
        <div class="flex items-center justify-between">
            <h2 class="text-lg font-bold text-default">{{ $title }}</h2>
            <div class="flex items-center space-x-2">
                <div class="relative text-gray-400">
                    <x-icons.search class="absolute left-3 top-1/2 -translate-y-1/2" width="16" height="16" />
                    <input type="text" wire:model.live.debouce.500ms="query" placeholder="Search"
                        class="h-8 w-48 rounded-lg border-[1px] px-3 pl-9 text-xs font-bold outline-none ring-0">
                </div>

                <x-table.filter-btn name="showTrashed" />
                <button wire:click="generateCsv" wire:target="generateCsv" wire:loading.class="opacity-50"
                    class="h-8 rounded-lg bg-p-purple-600 px-3"><x-icons.download /></button>
            </div>
        </div>
    </header>
    <main class="overflow-x-auto rounded-xl border-[1px]">
        <table class="w-full text-left text-sm rtl:text-right">
            <thead class="[&_p]:font-[600] [&_p]:text-default">
                <tr class="border-b border-gray-200">
                    {{ $headers }}
                </tr>
            </thead>
            <tbody>
                {{ $body }}
            </tbody>
        </table>
    </main>
</div>
