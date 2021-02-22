<ul class="nav nav-tabs nav-justified mb-3">
        {{-- J1タブ --}}
        <li class="nav-item">
            <a href="{{ route('teams.indexf') }}" class="nav-link btn-outline-danger {{ Request::routeIs('teams.indexf') ? 'active' : '' }}">
                J1
            </a>
        </li>
        
        {{-- J2タブ --}}
        <li class="nav-item">
            <a href="{{ route('teams.Second') }}" class="nav-link btn-outline-success {{ Request::routeIs('teams.Second') ? 'active' : '' }}">
                J2
            </a>
        </li>
    </ul>
    