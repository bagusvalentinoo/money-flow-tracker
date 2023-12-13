<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a class="h3 font-extrabold text-primary" href="{{ route('web.user.member.dashboard.index') }}">
                        MoneyFlow Tracker
                    </a>
                </div>
                <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                    <img src="{{ asset('assets/images/icon/light-mode.svg') }}" alt="Light Mode Icon">
                    <div class="form-check form-switch fs-6">
                        <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                        <label class="form-check-label"></label>
                    </div>
                    <img src="{{ asset('assets/images/icon/dark-mode.svg') }}" alt="Dark Mode Icon">
                </div>
                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li
                    class="sidebar-item {{ Route::currentRouteName() === 'web.user.member.dashboard.index' ? 'active' : '' }}">
                    <a href="{{ route('web.user.member.dashboard.index') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-title">Transaction</li>
                <li
                    class="sidebar-item {{ Route::currentRouteName() === 'web.user.member.revenue.index' ? 'active' : '' }}">
                    <a href="{{ route('web.user.member.revenue.index') }}" class='sidebar-link'>
                        <i class="bi bi-arrow-up-right-circle"></i>
                        <span>Revenue</span>
                    </a>
                </li>
                <li
                    class="sidebar-item {{ Route::currentRouteName() === 'web.user.member.expenditure.index' ? 'active' : '' }}">
                    <a href="{{ route('web.user.member.expenditure.index') }}" class='sidebar-link'>
                        <i class="bi bi-arrow-down-right-square"></i>
                        <span>Expenditure</span>
                    </a>
                </li>
                <li
                    class="sidebar-item  {{ Route::currentRouteName() === 'web.user.member.report.index' ? 'active' : '' }}">
                    <a href="{{ route('web.user.member.report.index') }}" class='sidebar-link'>
                        <i class="bi bi-journals"></i>
                        <span>Report</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
