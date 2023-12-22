<div class="max-w-xs">
    <h1 class="text-xl text-center font-bold">Counter Component</h1>
    <div class="bg-blue-400 rounded flex flex-col items-center py-5 space-y-4">
        <span class="">{{ $count }}</span>
        <div>
            <button class="bg-teal-300 p-5 rounded-lg" wire:click="increment">+</button>
            <button class="bg-yellow-300 p-5 rounded-lg" wire:click="decrement">-</button>
        </div>
    </div>
</div>
