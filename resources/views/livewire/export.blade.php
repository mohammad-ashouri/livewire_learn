<div>
    <h1>Export component</h1>

    <p>
        Request to export your account data
    </p>
    <hr>
    <h5>
        Current Status:
        @empty($downloadableAt)
            NOT REQUESTED
        @else
            @if(time()>=$downloadableAt)
                READY TO DOWNLOAD
            @else
                PENDING
            @endif
        @endempty
    </h5>
    @if($downloadableAt)
        <p>
            Downloadable at: {{ \Carbon\Carbon::createFromTimestamp($downloadableAt)->diffForHumans() }}
        </p>
    @endif
    <hr>
    @empty($downloadableAt)
        <form wire:submit="export" wire:confirm="Are you sure?">
            <button type="submit">
                Export My Data
            </button>
        </form>
    @else
        @if(time()>=$downloadableAt)
            <button type="button" wire:click="$commit">
                Click To Download
            </button>
        @else
            <button wire:click="$refresh">
                Refresh Status
            </button>
            <button @click="$wire.$refresh">
                Refresh Using Alpine
            </button>
        @endif
    @endempty
</div>
