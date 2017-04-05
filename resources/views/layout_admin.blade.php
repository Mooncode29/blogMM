<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin area</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type='text/css' href= "http://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">


</head>
<body>

	<div class="toggled" id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role ="navigation">
            <div class="navbar-header">

                <a class="navbar-brand" href="#">
                    <img alt="logo" src="/images/logo.png">
                </a>
                <ul class="nav navbar-nav navbar-right">
                     <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Connexion</a></li>
                    <li><a href="{{ route('register') }}">S'enregistrer</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <a href="#" class="button">Compte</a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Déconnexion
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
            </ul> 
        </div>
    </nav>

    Sidebar
    <div id="sidebar-wrapper">
        <div class="sidebar-nav">
            <i class="fa fa-plus" aria-hidden="true"></i>
            <a href="#">Nouvel article</a>
            
            <i class=" news fa fa-newspaper-o" aria-hidden="true"></i>
            <a href="#">Articles</a>

            <i class="fa fa-floppy-o" aria-hidden="true"></i>
            <a href="#">Brouillon</a>

        </div>
    </div>
    <div id="page-content-wrapper">
        @yield('content')

    </div>  
</div>
<!-- #wrapper -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"</script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html> 