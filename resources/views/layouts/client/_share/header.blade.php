<!--header start-->
<header class="l-header">

    <div class="l-navbar l-navbar_expand l-navbar_t-light js-navbar-sticky">
        <div class="container-fluid">
            <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                <!--logo start-->
                <a href="index-2.html" class="logo-brand">
                    <img class="retina" src="{{asset('massive/assets/img/logo.png')}}" alt="Massive">
                </a>
                <!--logo end-->

                <!--mega menu start-->
                <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                    <li><a href="#">Home</a>
                    </li>
                    @foreach ($menus as $m)
                    <li class="">
                        <a href="javascript:void(0)">{{$m->name}}</a>
                    </li>
                    @endforeach
                    <li>
                        <a href="javascript:void(0)"><i class="fa fa-search"></i> Search</a>
                        <div class="megamenu megamenu-quarter-width navbar-search">
                            <form role="searchform">
                                <input type="text" class="form-control" placeholder="Search Here">
                            </form>
                        </div>
                    </li>
                </ul>
                <!--mega menu end-->

            </nav>
        </div>
    </div>

</header>
<!--header end-->