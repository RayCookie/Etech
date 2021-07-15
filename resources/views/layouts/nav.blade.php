

<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
        <div class="header-search">
            <form action="/files" class="form-inline my-2 my-lg-0" method="GET">
                <div class="form-group mb-0">
                    <i class="dw dw-search2 search-icon"></i>
                    <input class="form-control search-input" type="search"  placeholder="Rechercher" aria-label="Search" name="search" >
                </div>
            </form>
        </div>
    </div>
    @guest
    <ul class="header-right">
        <li class="nav-item">
            <span class="nav-link" style="margin: 10px" href="#loginModal" data-toggle="modal" data-target="#loginModal">Connexion</span>
        </li>

        <li>
            <span class="nav-link" style="margin: 10px" href="#registerModal" data-toggle="modal" data-target="#registerModal">Inscription</span>
        </li>
    </ul>
    @endguest
    @auth
    <div class="header-right">
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        
                        <img src="/storage/avatars/{{Auth::user()->avatar_name}}" alt="">
                        
                    </span>
                    <span class="user-name">{{ Auth::user()->username }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="/users/{{ Auth::user()->id }}"><i class="dw dw-user1"></i> Profile</a>
                    <a class="dropdown-item" href="/logout"><i class="dw dw-logout"></i> Deconnexion</a>
                </div>
            </div>
        </div>
    </div>
    @endauth
</div>