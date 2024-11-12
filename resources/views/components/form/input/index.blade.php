@props([
    'key',
    'label',
    'model',
    'type'=>'text',
    'is_required'=>false,
])
<div>
    <label for="input-{{ $label }}">
        {{ $label }}
        @if($is_required) <span>*</span> @endif
    </label>
    <br>
    <input
            @if($is_required) required @endif
            wire:model="{{ $model }}"
            type={{ $type }}
            name="{{ $key }}"
            id="input-{{ $key }}"
    />
    @error($model)
    <p style="color: #ff6d6d; margin-top: 4px">
        {{ $message }}
    </p>
    @enderror
</div>
