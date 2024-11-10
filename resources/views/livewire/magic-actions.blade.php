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
    <hr>
    <h4>
        $toggle Magic Action
    </h4>
    <p>
        Working with $toggle
    </p>
    <p>
        Is Dark? {{ $isDark ? 'YES' : 'NO' }}
    </p>
    <button wire:click="$toggle('isDark')">
        Toggle Dark Mode
    </button>
    <button @click="$wire.$toggle('isDark')">
        Toggle Dark Mode using Alpine
    </button>
    <hr>
    <h4>
        $set Magic Action
    </h4>
    <p>
        Working with $set
    </p>
    <p>
        Username: {{ $username }}
    </p>
    <label for="input-username">
        Username
    </label>
    <input
        type="text"
        name="username"
        id="input-username"
        wire:keydown.enter="$set('username',$event.target.value)"
    >
</div>
