<?php
include 'config.php';
if(isset($_POST['save_audio']) && $_POST['save_audio']=="Upload Audio")
{
  $dir = 'songs/';
  $img = 'song_img/';
  $audio_path = $dir.basename($_FILES['audioFile']['name']);
  $image_path = $img.basename($_FILES['imageFile']['name']);
  $filename = basename($_FILES['audioFile']['name']);
  $tagline = $_POST['tagline'];
  $lyrics = $_POST['lyrics'];
  $lyrics_hindi = $_POST['lyrics_hindi'];
  if(move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path))
  {
    echo "uploaded successfully";
    saveAudio($audio_path,$tagline,$lyrics,$lyrics_hindi,$filename,$image_path);
    displayAudios();
  }
}

function saveAudio($path,$tagline,$lyrics,$lyrics_hindi,$filename,$image_path)
{
  
  $query = "insert into mp3(filename,tagline,lyrics,lyrics_hindi,path,image) values ('{$filename}','{$tagline}','{$lyrics}','{$lyrics_hindi}','{$path}','{$image_path}')";
  mysqli_query($conn,$query);

  if(mysqli_affected_rows($conn)>0)
  {
    echo "audio file path saved in database";
  }
  mysqli_close($conn);
}

function displayAudios()
{
  
  $query = "select * from mp3";
  $result = mysqli_query($conn,$query);

  while($row = mysqli_fetch_array($result))
  {
    echo '<a href="play.php?name='.$row['filename'].'">'.$row['filename'].' </a>';
    echo "<br>";
  }

  mysqli_close($conn);
}

?>
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
     

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>