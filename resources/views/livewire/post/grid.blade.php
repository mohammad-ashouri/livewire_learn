<div>
    <h3>
        Posts Grid
    </h3>

    <ul>
        @foreach($this->posts() as $post)
            <li wire:key="post-item-{{ $post['id'] }}">
                Title: {{ $post['title'] }}
                <br>
                Description: {{ $post['description'] }}
            </li>
        @endforeach
    </ul>
</div>
