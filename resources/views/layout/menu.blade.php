<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ url('') }}" class="logo">
            Sistema de Reservas
        </a>
    </div>
    <div class="sidebar-content">
        <div class="sidebar-menu">
            <ul>
                <li class="header-menu">Menu</li>

                <li>
                    <a href="{{ route('sala.index') }}">
                        <i class="icon-tag1"></i>
                        <span class="menu-text">Salas</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('reserva.index') }}">
                        <i class="icon-shopping-bag1"></i>
                        <span class="menu-text">Reservas</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('usuario.index') }}">
                        <i class="icon-user1"></i>
                        <span class="menu-text">Usuários</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
