<div>
    <h1>
        Counter Component
    </h1>
    <p>
        Your clicks count is: <span>{{ $clicks }}</span>
    </p>

    <button wire:click="increment">
        Increment
    </button>
    <button wire:click="decrement">
        Decrement
    </button>
</div>
