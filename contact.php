
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>MP3 music</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: rgb(219, 35, 219);">
        <a class="navbar-brand" href="index.php" id="logo"><img src="https://img.icons8.com/color/48/000000/musical--v1.png"/>Songs.AD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="songs.php">Songs <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

    <div class="container" id="homecontainer">
    
      <div class="row justify-content-center py-5">
        <div class="col-md-6" style="background-color:white; padding:20px;">
        <h1 class="text-center" style="color:blue; font-weight:bold;"> Contact Us</h1>
          <form action="https://formspree.io/xrgyjggr" method="POST">
            <div class="form-group">
            <input type="text" name="Name" class="form-control" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"
              required="">
            </div>
            <div class="form-group">
            <input type="email" name="_replyto" class="form-control" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '_replyto';}"
              required="">
            </div>
            <div class="form-group">  
            <input type="text" name="Mobile number" class="form-control" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}"
              required="">
            </div>
            <div class="form-group">
            <textarea class="form-control" name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary my-2" value="Send">
            </div>
          </form>
        </div>
       </div>

       <div class="row justify-content-center">
       <a href="#"><i class="fa fa-facebook fa-2x mr-2" style="color:black;"></i>  </a>
       <a href="#"><i class="fa fa-instagram fa-2x mr-2" style="color:black;"></i> </a>
       <a href="#"><i class="fa fa-google fa-2x" style="color:black;"></i></a>
       </div>
    </div>

    <footer class=" pt-2 text-center bg-dark text-light justify-content-center" style="min-height:50px;">&copycopyright 2020</footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>