<header style="border-radius: 8px; display: flex; align-items: center; justify-content: space-between; gap: 32px; padding: 0 64px; background-color: #0069d9; color: white">
    <h1 style="font-size: 1rem">Livewire navigation component</h1>
    <nav>
        <ul style="display: flex; align-items: center; justify-content: center; gap: 64px">
            <li>
                <a style="color: white" href="{{ route('page.clocks') }}">Clocks</a>
            </li>
            <li>
                <a style="color: white" href="{{ route('page.posts') }}">Posts</a>
            </li>
            <li>
                <a style="color: white" href="{{ route('page.todo') }}">Todo</a>
            </li>
            <li>
                <a style="color: white" href="{{ route('page.welcome',['email'=>'a@gmail.com']) }}">Welcome Mammad</a>
            </li>
            <li>
                <a style="color: white" href="{{ route('page.user-profile',['user'=>1] ) }}">User Profile</a>
            </li>
        </ul>
    </nav>
</header>
