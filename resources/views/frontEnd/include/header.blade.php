<!-- Preloader -->
<div id="preloader">
    <div class="outer">
        <!-- Google Chrome -->
        <div class="infinityChrome">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <!-- Safari and others -->
        <div class="infinity">
            <div>
                <span></span>
            </div>
            <div>
                <span></span>
            </div>
            <div>
                <span></span>
            </div>
        </div>

        <!-- Stuff -->
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo-outer">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
                    <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                    <feBlend in="SourceGraphic" in2="goo" />
                </filter>
            </defs>
        </svg>
    </div>
</div>

<!-- desktop header -->
<header class="desktop-header-3 fixed-top">

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"><img src="{{asset('frontEndAsset/assets')}}/images/salmanhayat-logo.png" height="50px" width="60px" alt="salmanhayat"></a> <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNavDropdown" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto scrollspy">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#experience" class="nav-link">Experience</a></li>
                    <li class="nav-item"><a href="#works" class="nav-link">Works</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </nav>

    </div>
</header>
