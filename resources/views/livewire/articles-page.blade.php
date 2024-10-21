<div>
    <h1>
        Articles
    </h1>
    <p>
        {{ $description }}
    </p>
        Timer is
    @if($isTimerOn)
        <strong>ON</strong>
        <br>
        time is <strong wire:poll.keep-alive> {{ time() }}</strong>
        <button wire:click="changeDescription">Change description</button>
    @else
        <strong>OFF</strong>
    @endif
</div>
