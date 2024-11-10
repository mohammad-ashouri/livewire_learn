<li>
    {{ $taskValue }}
    <button wire:click="$parent.deleteTask('{{ $taskKey }}')">
        Delete
    </button>
</li>
