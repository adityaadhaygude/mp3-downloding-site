<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>MP3 music</title>
  </head>
  <body>
  <br>
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
              <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          
          <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
          
        </div>
      </nav>

  <div class="container" style="min-height:600px">
  <div class="col-12">
  <div class="table-responsive">
  <table class="table table-striped table-bordered table-hover my-5" id="dataTables-example">
   
    <?php
        $noresults= true;
        include 'config.php';
        $query = $_GET['search'];
        $id=1;
        $sql1 = "select * from mp3 where filename like '%$query%' or artist like '%$query%'";
        $result = mysqli_query($conn,$sql1);
        if(mysqli_num_rows ( $result )){
            echo '<thead>
    <tr>
        <th>SN</th>
        <th>Song</th>
        <th>Artist</th>
        <th>Download</th>
    </tr>
    </thead>
    <tbody> ';
        }
        while($row = mysqli_fetch_assoc($result)){
            $noresults=false;
            $filename = $row['filename'];
    echo '
    <tr>
    <th>'.$id.'</th>
    <th><a href="music.php?name='.$row['filename'].'">'.$row['filename'].'</a></th>
    <th>'.$row['artist'].'</th>
    <th> <a href="music.php?name='.$row['filename'].'" class="btn btn-primary">Download </a> </th>
</tr>';
    $id = $id+1;
  }
  if($noresults){
    echo '<div class="alert alert-success my-3" role="alert">
    No results found!
  </div>';
}
  
        

    mysqli_close($conn);
?>
    </tbody>
  </table>
  </div>
  </div>
  </div>
    <footer class=" pt-2 text-center bg-dark text-light justify-content-center" style="min-height:50px;">&copycopyright 2020</footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>