<nav class="sb-sidenav accordion" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">

            {{-- <div class="sb-sidenav-menu-heading">Menu</div> --}}
            <a class="nav-link-sidebar text-dark-50" href="{{ url('dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Manage Categories</div>
            <a class="nav-link-sidebar text-dark-50" href="{{ url('category') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Category
            </a>

            <div class="sb-sidenav-menu-heading">Manage Templates</div>
            <a class="nav-link-sidebar text-dark-50" href="{{ url('templates') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Templates
            </a>

            {{-- <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link-sidebar collapsed text-dark-50" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTemplates" aria-expanded="false" aria-controls="collapseTemplates">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Templates
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse text-dark-50" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link-sidebar" href="layout-static.html">Static Navigation</a>
                    <a class="nav-link-sidebar" href="layout-sidenav-light.html">Light Sidenav</a>
                </nav>
            </div>
            <a class="nav-link-sidebar collapsed text-dark-50" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Pages
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse text-dark-50" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <a class="nav-link-sidebar collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                        Authentication
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link-sidebar" href="login.html">Login</a>
                            <a class="nav-link-sidebar" href="register.html">Register</a>
                            <a class="nav-link-sidebar" href="password.html">Forgot Password</a>
                        </nav>
                    </div>
                    <a class="nav-link-sidebar collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                        Error
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-linksidebar" href="401.html">401 Page</a>
                            <a class="nav-link-sidebar" href="404.html">404 Page</a>
                            <a class="nav-link-sidebar" href="500.html">500 Page</a>
                        </nav>
                    </div>
                </nav>
            </div> --}}

            {{-- <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link-sidebar text-dark-50" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link-sidebar text-dark-50" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div> --}}
    </div>
    {{-- <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div> --}}
</nav>
