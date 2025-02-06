<div
    class="min-h-1/2 mx-auto max-w-[500px] rounded-lg border-2 border-white bg-gray-900 py-4 text-center text-white shadow-lg">
    <header class="text-3xl">Calculadora</header>
    <main class="my-4 h-1/4 bg-gray-800 py-3">
        <div class="flex justify-end">
            <div class="flex flex-col gap-y-2 px-2">
                <div class="flex justify-end">
                    <p class="text-right text-2xl text-white">{{ $math }}</p>
                    @error('math')
                        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex justify-end">
                    @if ($result > 0)
                        <p class="text-right text-2xl text-orange-300">= {{ $result }}</p>
                    @endif
                </div>
            </div>
        </div>
    </main>
    <footer>
        <ul class="flex flex-wrap justify-center gap-x-12 gap-y-3 md:gap-x-24">
            <x-calculator-button wire:click="addMath('%')">%</x-calculator-button>
            <x-calculator-button wire:click="addMath('(')">(</x-calculator-button>
            <x-calculator-button wire:click="addMath(')')">)</x-calculator-button>
            <x-calculator-button wire:click="addMath('/')">/</x-calculator-button>
            <x-calculator-button wire:click="addMath('7')">7</x-calculator-button>
            <x-calculator-button wire:click="addMath('8')">8</x-calculator-button>
            <x-calculator-button wire:click="addMath('9')">9</x-calculator-button>
            <x-calculator-button wire:click="addMath('*')">*</x-calculator-button>
            <x-calculator-button wire:click="addMath('4')">4</x-calculator-button>
            <x-calculator-button wire:click="addMath('5')">5</x-calculator-button>
            <x-calculator-button wire:click="addMath('6')">6</x-calculator-button>
            <x-calculator-button wire:click="addMath('-')">-</x-calculator-button>
            <x-calculator-button wire:click="addMath('1')">1</x-calculator-button>
            <x-calculator-button wire:click="addMath('2')">2</x-calculator-button>
            <x-calculator-button wire:click="addMath('3')">3</x-calculator-button>
            <x-calculator-button wire:click="addMath('+')">+</x-calculator-button>
            <x-calculator-button wire:click="addMath('0')">0</x-calculator-button>
            <x-calculator-button wire:click="addMath('.')">.</x-calculator-button>
            <x-calculator-button yellow wire:click="clear()">C</x-calculator-button>
            <x-calculator-button yellow wire:click="operation('=')">=</x-calculator-button>
        </ul>
    </footer>
</div>
