<div>
    <h1>
        Title: {{ $title }}
    </h1>
    <label>
        <input wire:model="title" type="text">
    </label>
    <br>
    <p>
     Care about people's approval and you will be their prisoner.
    </p>
    <br>
    <p>
        time: {{ time() }}
    </p>
    <button wire:click.prevent="updateMe">
        Update me
    </button>
</div>
