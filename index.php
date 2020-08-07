
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Download mp3 songs from adsongs. You also get lyrics in two versions. Download hindi lyrics or english lyrics and songs here.">
    <meta name="keywords" content="download songs,download mp3,download mp3 songs,download hindi mp3 songs,songs,mp3 songs,lyrics,hindi lyrics,english lyrics,audio songs,bollywood songs,90's songs,latest songs,album songs,fresh songs,hindi songs,old songs" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>MP3 music</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: rgb(219, 35, 219);">
        <a class="navbar-brand" href="#" id="logo"><img src="https://img.icons8.com/color/48/000000/musical--v1.png"/>Songs.AD</a>
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
              <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
            </li>
          </ul>
           <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

    <div class="container" id="homecontainer">
        <div class="row justify-content-center py-5">

        <?php
          include 'config.php';
          $query = "select * from mp3 limit 6";
            $result = mysqli_query($conn,$query);

            while($row = mysqli_fetch_array($result))
            {
              // echo '<a href="play.php?name='.$row['filename'].'">'.$row['filename'].' </a>';
              // echo "<br>";
              $filename = $row[1];
              $tagline = $row[2];
              
              echo '<div class="card" style="width: 300px;" id="card">
              <img class="card-img-top img-responsive " src="'.$row['image'].'" alt="Card image cap" style="height: 200px;">
              <div class="card-body">
                <h5 class="card-title">'.$filename.'</h5>
                <p class="card-text">'.$tagline.'</p>
                <a href="music.php?name='.$row['filename'].'" class="btn btn-primary">Download </a>
              </div>
          </div>';
            
            }
        ?>
            
           
       
        </div>
        <div class="row justify-content-center pb-3">
            <a href="songs.php" class="btn btn-success">More songs <i class="fa fa-angle-double-right"></i></a>  
        </div>
    </div>

     <footer class=" pt-2 text-center bg-dark text-light justify-content-center" style="min-height:50px;">&copycopyright 2020</footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>