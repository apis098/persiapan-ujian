<header>
    <div class="container">
        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/company-logo.png')}}" alt="image">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
                    <div class="toggle-wrap">
                        <span class="toggle-bar"></span>
                    </div>
                </span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- secondery menu start -->
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <!-- secondery menu end -->
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how_it_work">Terpopuler</a>
                    </li>
                    <!-- secondery menu start -->
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Tervaforit</a>
                    </li>
                    <!-- secondery menu end -->
    
                    <li class="nav-item">
                        <a class="nav-link" href="pricing.html">Berlangganan</a>
                    </li>
                    @if(!Auth::check())
                        <li class="nav-item">
                            <a class="nav-link dark_btn" href="/login">MASUK</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  class="nav-link dark_btn">KELUAR</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endif
                </ul>
            </div>
        </nav>
        <!-- navigation end -->
    </div>
</header>