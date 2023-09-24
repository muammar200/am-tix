<nav class="nav flex-column">
    {{-- <ul class="nav flex-column bg-dark"> --}}
        @foreach ($lists as $list)
            {{-- <li class="nav-item"> --}}
                <a class="nav-link" href="">
                    {{-- {{ $menu[0]['label'] }} --}}
                    {{ $list['label'] }}
                    {{-- {{ $menu[1]['label'] }} --}}
                </a>
            {{-- </li> --}}
        @endforeach
    {{-- </ul> --}}
    

    {{-- @if (in_array('Dashboard', array_column($menu->lists(), 'label')))
    <p>Dashboard</p> --}}
{{-- @endif --}}

</nav>
{{-- {{ $active }} --}}