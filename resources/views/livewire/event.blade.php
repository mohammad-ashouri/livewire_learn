<div>
    <h1>
        Event Component
    </h1>
    <p>
        Working with events in Livewire
    </p>
    <hr>
    <p>
        Enter: {{ $mouseEnterCounts }} | Leave: {{ $mouseLeaveCounts }}
    </p>
    <button
        wire:mouseenter="mouseEnter"
        wire:mouseleave="mouseLeave"
        @click="$wire.mouseLeave()"
    >
        Hover Me
    </button>
    <hr>
    <h4>
        External Events (Nested)
    </h4>
    <p>
        Listening to external events
    </p>
    <div wire:hello="incrementHelloCount">
        Hello Counts: {{ $helloCounts }}
        <button x-on:click="$dispatch('hello')">
            Dispatch Hello
        </button>
    </div>
</div>
