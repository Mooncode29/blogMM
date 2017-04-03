<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin area</title>
<<<<<<< HEAD
	<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous') }}">
	<link rel="stylesheet" type='text/css' href= "{{ asset('http://fonts.googleapis.com/css?family=Lora') }}">
	<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
	
</head>
<body>
	<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

<script type="text/javascript" src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"/>

=======
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
            </div>
                <ul class="nav navbar-nav navbar-right top-nav">
                    <li class="menu-item"> 

                        <a class ="title" href="#">Blog</a>
                    </li>
                    <li class="menu-item">
                        <a class="title" href="#"><i class="fa fa-user"></i> John Smith<b class="caret"></b></a>
                    </li>
                    <li class="menu-item">
                        <a class="title" href="#">Déconnexion</a>
                    </li>
                </ul>
        </nav>

        <!-- Sidebar -->
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
        @yield('content')
    </div>
    <!-- /#wrapper -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"</script>
<script src="{{ mix('js/app.js') }}"></script>
>>>>>>> 655364403c0921e11aaee52e283ff8e3270f7c3a
</body>
</html>