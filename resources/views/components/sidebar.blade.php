<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">SIAKAD</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('user') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('user.index') }}">User List</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Subjects</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('subject') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('subject.index') }}">Subject List</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Schedules</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('schedule') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('schedule.index') }}">Schedule List</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
