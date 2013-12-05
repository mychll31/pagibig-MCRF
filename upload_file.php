<html>
        <style>
            .btn {
              background: #3498db;
              background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
              background-image: -moz-linear-gradient(top, #3498db, #2980b9);
              background-image: -ms-linear-gradient(top, #3498db, #2980b9);
              background-image: -o-linear-gradient(top, #3498db, #2980b9);
              background-image: linear-gradient(to bottom, #3498db, #2980b9);
              -webkit-border-radius: 28;
              -moz-border-radius: 28;
              border-radius: 10px;
              font-family: Arial;
              color: #ffffff;
              font-size: 15px;
              padding: 10px 15px 10px 15px;
              text-decoration: none;

            }

            .btn:hover {
              background: #3cb0fd;
              background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
              background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
              background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
              background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
              background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
              text-decoration: none;
            }
            table tr,td,th{
                padding :5px;
            }
            .alert{
                width: 15%;
                background-color: pink;
                color: red;
                text-align: center;
                padding: 20px;
            }
            a{
                text-decoration: none;
            }
        </style>

        <center><img src="images/logo.jpg" width="80%" height="100px;"></center>
        <hr style="border:1px solid black" />
     
<h2>UPLOAD FILE</h2>

<?php
    $dateUpload=date('m-d-y_',time());
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    if ($extension == "csv")
      {
      if ($_FILES["file"]["error"] > 0)
        {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        }
      else
        {
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

        if (file_exists("upload/" . $_FILES["file"]["name"]))
          {
          echo $_FILES["file"]["name"] . "<br><br><br><div class='alert'> File already exists.! <a href=\"JavaScript:window.close()\">Close now.</a> <a href=\"getFile.php\">Try Again.</a></div>";
          }
        else
          {
          move_uploaded_file($_FILES["file"]["tmp_name"],
          "upload/". $dateUpload . "MCRF_data.csv");
          echo "Stored in: " . "upload/". $dateUpload . "MCRF_data.csv";
          echo '<br><br><form action="data_save.php" method="post" enctype="multipart/form-data"><input class="btn" type="submit" name="submit" value="Save to Database"></form>';
          }
        }
        
      }
    else
      {
      echo "<div class='alert'>Invalid file</div>";
      }
?>
