<div>
    <h1>Todo list</h1>
    <hr>
    <form>
        <label>
            <span>Task <span style="color: red">*</span></span>
            <br>
            <input required wire:model="task" type="text" placeholder="go shopping...">
        </label>
        <button type="submit" wire:click.prevent="addTask">Add</button>
    </form>
    <hr>
    <div>
        <h2>Total tasks: {{ count($tasks) }}</h2>
        <ul>
            @foreach($tasks as $task)
                <li>
                    <p>{{ $task }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</div>
