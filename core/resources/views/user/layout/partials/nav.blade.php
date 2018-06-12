<nav class="navbar navbar-area navbar-expand-lg navbar-light ">
    <div class="container">
        <div class="navbar-header">
            <!-- navbar header start -->
            <a class="navbar-brand logo" href="index.html">
                <img src="{{asset('assets/user/img/logo.png')}}" alt="logo image">
            </a>
        </div>
        <!-- navbar header end -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Tokenizer" aria-controls="Tokenizer"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="Tokenizer">

            <!-- navbar collapse start -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown @if(request()->path() == '/') active @endif">
                    <a class="nav-link" href="{{route("users.home")}}">Home</a>
                </li>
                <li class="nav-item @if(request()->path() == 'about') active @endif">
                    <a class="nav-link" href="{{route("users.about")}}">About</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index-2.html">Home variant</a>
                        <a class="dropdown-item" href="details.html">Ico Details</a>
                        <a class="dropdown-item" href="browse-ico.html">Browse Ico</a>
                    </div>
                </li> --}}
                <li class="nav-item @if(request()->path() == 'contact') active @endif">
                    <a class="nav-link" href="{{route('users.contact')}}">Contact</a>
                </li>
                <li class="nav-item boxed-btn">
                    <a class="nav-link boxed-btn" href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                </li>
            </ul>
        </div>
        <!-- navbar collapse end -->
    </div>
</nav>
