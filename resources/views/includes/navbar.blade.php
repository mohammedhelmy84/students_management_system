<nav class="navbar navbar-expand px-4 py-3">
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav me-auto">
            <li class="nav-item dropdown">
                <a href="#" class="nav-icon pe-md-0" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/images/account.png') }}" alt=""
                        class="avatar img-fluid">
                </a>
                <div class="dropdown-menu dropdown-menu-start rounded">
                    <a href="#" class="dropdown-item">
                        <i class="las la-cog"></i>
                        <span>الإعدادت</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="las la-question-circle"></i>
                        <span>تسجيل الخروج</span>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="btn btn-link" data-bs-toggle="dropdown">
                    <span>{{Auth::user()->name}}</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
