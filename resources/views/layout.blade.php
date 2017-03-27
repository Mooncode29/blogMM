<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>blog MM</title>
</head>
<body>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/app.css">
  <link href="css/font-awesome.min.css" rel="stylesheet"> 

  

  <nav class=" menu navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <h4 class="logo">BLOG MM</h4>
      </div>
      <p class="reseaux">
       <i class="fa fa-linkedin-square"></i> 
       <i class="fa fa-facebook-square"></i> 
       <i class="fa fa-google-plus-square"></i> 
     </p>
     <div class="link navbar-right">
       <span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>
       <a class="article" href="">Articles</a>
       <span class="glyphicon glyphicon-user" aria-hidden="true">
       </span>
       <a class="admin" href="">Administration</a>
     </div>
   </div>
 </nav>

 @yield('content')

<nav class=" menu navbar navbar-default">
<h5 class="c">Copyright @ BLOG MM 2017</h5>

</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"</script>

</body>
</html>
