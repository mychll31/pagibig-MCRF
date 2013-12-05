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
        </style>

        <center><img src="images/logo.jpg" width="80%" height="100px;"></center>
        <hr style="border:1px solid black" />
     
<h2>UPLOAD FILE</h2>
    <form action="upload_file.php" method="post" enctype="multipart/form-data">
        <label for="file">Filename:</label>
        <input type="file" name="file" id="file"><br><br><br>
        <input class="btn" type="submit" name="submit" value="Submit">
    </form>
</html>