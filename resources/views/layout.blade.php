<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>blog MM</title>
</head>
<body>
 <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
</head>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/app.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  

  <nav class=" menu navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <img class="logo" src="images/logo.png">
      </div>

      <div class=" social row">
       <div class="col-md-4">
         <a href=""><i class=" book fa fa-facebook"></i></a> 
         <a href=""><i class="twit fa fa-twitter"></i></a> 
         <a href=""><i class=" git fa fa-github" aria-hidden="true"></i></a>
       </div>
       <div class="link">
         <i class=" news fa fa-newspaper-o" aria-hidden="true"></i>
         <a class="article" href="">Articles</a>
         <i class=" o fa fa-user-o" aria-hidden="true"></i>
         <a class="admin" href="">Administration</a>
       </div>
     </div>
   </div>
 </div>
</nav>

@yield('content')

<div class="container">
  <div class="row">
    <p> Copyright<i class=" cop fa fa-copyright" aria-hidden="true"></i> BLOG MM 2017</p>
  </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"</script>

</body>
</html>
