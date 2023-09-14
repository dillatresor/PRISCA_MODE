<!DOCTYPE html>
<html lang="en">
<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#!">Settings</a></li>
            <li><a class="dropdown-item" href="#!">Activity Log</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#!">Se deconnecter</a></li>
        </ul>
    </li>
</ul>
</nav>
<div id="layoutSidenav">
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    MENU
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>

                <div >
                    <nav class="">
                        <a class="nav-link" href="{{route('dashboard')}}">ACCUEIL</a>
                    </nav>
                </div>


               <div >
                <nav class="">
                    <a class="nav-link" href="{{route('clients')}}">CLIENTS</a>
                </nav>
            </div>


            <div>
                <nav>
                    <a class="nav-link" href="{{route('models')}}">MODELS</a>
                </nav>
            </div>


            <div>
                <nav>
                    <a class="nav-link" href="{{route('personnels')}}">PERSONNELS</a>
                </nav>
            </div>


            <div>
                <nav>
                    <a class="nav-link" href="{{route('paiement')}}">PAIEMENT</a>
                </nav>
            </div>

            <div>
                <nav>
                    <a class="nav-link" href="{{route('depenses')}}">DEPENSES</a>
                </nav>
            </div>

            <div>
                <nav>
                    <a class="nav-link" href="{{route('coutures')}}">COUTURES</a>
                </nav>
            </div>

           

    </nav>
</div>
</body>
</html>
