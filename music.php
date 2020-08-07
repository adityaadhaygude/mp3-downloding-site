<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html";charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Hind&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
              <a class="nav-link" href="about.php">About <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact <span class="sr-only"></span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    
      <?php 
      include 'config.php';
      $fileName =  $_GET['name']; 
      mysqli_set_charset($conn,'utf8');
      $query = "select * from mp3 where filename='$fileName'";
      $result = mysqli_query($conn,$query);
      while($row = mysqli_fetch_array($result))
      {
        echo '<div class="container ">
        <div class="justify-content-center col-12">
            
            <div class="row justify-content-center">
                <div class="name_of_song my-4"><h1>'.$row['filename'].'</h1></div>
            </div>
            <div class="row justify-content-center" id="imgbox">
                <img src="'.$row['image'].'" alt="" style="width: 300px;">
            </div>
            <div class="row justify-content-center my-4">
                <audio controls>
                    <source src="'.$row['path'].'" type="audio/ogg">
                </audio>
            </div>
            <div class="row justify-content-center my-2">
                <a href="'.$row['path'].'" download="" class="btn btn-primary">Download</a>
            </div>
        
           
    <div class="lyrics p-3 col-12" id="lyrics">
    '.$row['lyrics'].'       
    </div>
    
    <div class="lyrics_hindi p-3 col-12" id="lyrics">
    '.$row['lyrics_hindi'].'  
    </div>';
      }
      ?>
    
</div>
</div>  

<!-- container ends here  -->
    <footer class=" pt-2 text-center bg-dark text-light justify-content-center" style="min-height:50px;">&copycopyright 2020</footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>