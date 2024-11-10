<div>
    <h4>
        $event Magic Action
    </h4>
    <p>
        Working with $event
    </p>
    <p>
        Query is: {{ empty($query) ? 'NULL' : $query }}
    </p>
    <label for="input-query">
        Query
    </label>
    <input
        type="text"
        name="query"
        id="input-query"
        wire:keydown.enter="handleQueryUpdate($event.target.value)"
    >
</div>
