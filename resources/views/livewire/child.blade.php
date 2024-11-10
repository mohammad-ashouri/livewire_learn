<div style="border: 1px solid #7f7f7f; padding: 8px 16px 16px 8px; display: inline-flex; flex-direction: column; border-radius: 9px">
    <p style="margin: 0 0 8px;">
        Child Component
    </p>
    <button wire:click="$parent.updateParentStatus()">
        Update My Parent Status
    </button>
</div>
