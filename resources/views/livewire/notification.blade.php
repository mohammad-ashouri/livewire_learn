<div>
    @if($is_visible)
        <div
            style="position: absolute;
             top: 2rem;
              right: 2rem;
               background-color: #656565;
                border-radius: 0.2rem;
                 padding: 0.6rem 0.4rem;
                  max-width: 24rem;
                   width: 100%;
                    text-align: right;
                     display: flex;
                     flex-direction: row-reverse;
                      align-items: center;
                      justify-content: space-between;
                    ">
        <span>
            {{ $message }}
        </span>
            <span
                style="width: 12px; height: 12px; padding: 4px; border-radius: 0.2rem; background-color: #414141; display: flex; align-items: center; justify-content: center; cursor: pointer"
                @click="$wire.dispatch('hide')"
            >
            *
        </span>
        </div>
    @endif
</div>
@script
<script>
    let tid = null;
    $wire.on('hide', () => {
        clearTimeout(tid);
        $wire.set('is_visible', false);
    });

    $wire.on('hide-notification', () => {
        clearTimeout(tid);
        tid = setTimeout(
            () => {
                $wire.set('is_visible', false)
            },
            3000
        )
    });
    Livewire.on('notify', () => {
        console.log('notify called from another component')
    });
</script>
@endscript
