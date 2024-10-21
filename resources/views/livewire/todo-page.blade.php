<div>
    <form wire:submit.prevent="add">
        <label for="input-todo">
            Todo<span style="color: red">*</span>
        </label>
        <br>
        <input wire:model="title" type="text" name="todo" id="input-todo" placeholder="e.g: go shopping">
        <button type="submit">ADD</button>
        <button type="button" wire:click.prevent="resetTasks">RESET</button>
    </form>
    <hr>
    @if(count($tasks)>0)
        <h2> Your Tasks:</h2>
        <ul>
            @foreach($tasks as $task)
                <li wire:key="task-{{ $loop->index }}">{{ $task }} </li>
            @endforeach
        </ul>
    @endif
</div>
