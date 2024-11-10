<div>
    <h1>
        Todo List
    </h1>
    <p>
        List of your daily works
    </p>
    <button wire:click="likeUs">
        I love this app
    </button>
    <button wire:click="alertMe">
        Alert Me
    </button>
    <p>
        Latest update: {{ now() }}
    </p>
    <hr>
    <div>
        <label for="input-task">
            Task
        </label>
        <input
            type="text"
            name="task"
            id="input-task"
            wire:keydown.enter="addTask($event.target.value)"
        >
    </div>
    <hr>
    <ul style="display: flex; flex-direction: column; gap: 8px">
        @foreach($tasks as $taskKey => $taskValue)
            <livewire:task-row
                wire:key="{{ $taskKey }}"
                task-key="{{ $taskKey }}"
                task-value="{{ $taskValue }}"
            />
        @endforeach
    </ul>
</div>
