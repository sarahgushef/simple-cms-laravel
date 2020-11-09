<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li>
                    <a href="/" class="{{Request::is("/") ? "active": ""}}">
                        <i class="lnr lnr-home"></i><span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/students" class="{{Request::is("students*") ? "active": ""}}">
                        <i class="lnr lnr-user"></i><span>Students</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</div>
