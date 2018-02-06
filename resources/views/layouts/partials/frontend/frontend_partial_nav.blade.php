<section class="hero">
    <header>
        <div class="wrapper">
            <a href="#"><img src="{{ asset('css/frontend/img/logo.png') }}" class="logo" alt="" titl=""/></a>
            <a href="#" class="hamburger"></a>
            <nav>
                <ul>
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Sell</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="{{ route('plans.index') }}">Plans</a></li>
                </ul>
                @if (Auth::guest())
                    <a href="{{ route('login') }}" class="login_btn">Sign In/Sign Up</a>
                @endif

            </nav>
        </div>
    </header><!--  end header section  -->

    <section class="caption">
        <h2 class="caption" style="color: black">Find You Dream Home</h2>
        <h3 class="properties">Appartements - Houses - Mansions</h3>
    </section>
</section><!--  end hero section  -->