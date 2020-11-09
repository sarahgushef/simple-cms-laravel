<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href="/"><img src="{{asset("admin/assets/img/logo-moonzher.png")}}" alt="Moonzher Logo"
                class="img-responsive logo">
        </a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth">
                <i class="lnr lnr-arrow-left-circle"></i>
            </button>
        </div>
        <form class="navbar-form navbar-left" action="/students" method="GET">
            {{csrf_field()}}
            <div class="input-group">
                <input type="search" name="search" class="form-control" placeholder="Cari murid...">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </span>
            </div>
        </form>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img
                            src="{{asset("admin/assets/img/user.png")}}" class="img-circle" alt="Avatar">
                        <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
