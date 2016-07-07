<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Navigation -->

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                

           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Home Page</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">About</a>
                    </li>
                    @if(null == \Auth::id())
                    <li>
                        <a href="{{url('login')}}">Login/Signup</a>
                    </li>
                    @endif
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    @if(null !== \Auth::id())
                    <li >
                        <a href="#">My Account</a>
                    </li>
                    @endif
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="#">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="#">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Full Width Page</a>
                            </li>
                            <li>
                                <a href="#">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="#">404</a>
                            </li>
                            <li>
                                <a href="#">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                    @if(null !== \Auth::id())
                    <li >
                        <a href="{{url('logout')}}">Logout</a>
                    </li>
                    @endif
                </ul>
            </div>
             </div>
            <!-- /.navbar-collapse -->
        <!-- /.container -->
    </nav>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('/assets/img/1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>YOUR TEXT</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('/assets/img/2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>YOUR TEXT</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('/assets/img/3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>YOUR TEXT</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('/assets/img/4.jpg');"></div>
                <div class="carousel-caption">
                    <h2>YOUR TEXT</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>