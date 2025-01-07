@include('includes.head')

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/kape-minamdang.png') }}" alt="" height="70">
        </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Rewards</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="#" class="btn">Cart</a>
            </li>
            <li class="nav-item">
                <a href="#" class="btn">Login</a>
            </li>
        </ul>
    </div>
</nav>