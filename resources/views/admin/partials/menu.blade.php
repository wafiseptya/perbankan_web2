<li class="nav-item mT-30 active">
    <a class='sidebar-link' href="{{ route(ADMIN . '.dash') }}" default>
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">

    <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="fas fa-money-bill-alt"></i>
                </span>
                <span class="title">Teller</span>
                <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="tarik">Tarik</a>
                </li>
                <li>
                  <a class='sidebar-link' href="setor">Setor</a>
                </li>
              </ul>
    </li>
</li>
<li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.users.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-user"></i>
        </span>
        <span class="title">Users</span>
    </a>
</li>
