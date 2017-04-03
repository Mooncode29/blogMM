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
        <!-- <div id="page-content-wrapper">                                
            <div class="container-fluid">
                <div class="row">
                    <div class=" contenu col-lg-12">
                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu togglng system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"</script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>