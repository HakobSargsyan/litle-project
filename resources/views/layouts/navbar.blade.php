    <!-- Navigation -->
<div class="container">
    

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
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
            <!-- /.navbar-collapse -->
        <!-- /.container -->
    </nav>
    </div>