 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container ">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/dashboardMahasiswa">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Menu 1") ? 'active' : '' }}" href="#">Menu 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Menu 2") ? 'active' : '' }}" href="#">Menu 2</a>
                    </li>
                    <li class="nav-item {{ ($title === "Menu 3") ? 'active' : '' }}">
                        <a class="nav-link disabled">Menu 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
