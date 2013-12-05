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

<?php
    $dateUpload=date('m-d-y_',time());
    $tmp= "upload/" . $dateUpload . "MCRF_data.csv";
    $file = file_get_contents($tmp);
    $data = array_map("str_getcsv", preg_split('/\r*\n+|\r+/', $file));

// configuration
include 'dbconn.php';

// database connection
// new data

foreach ($data as $data){
    $pagibig_no = $data[0];
    $lastname = $data[1];
    $firstname = $data[2];
    $ext = $data[3];
    $middlename = $data[4];
    $employeeCont = $data[5];
    $employerCont = $data[6];
    $remarks = $data[8];
    
    // query
    
    
    
    $sql = "SELECT COUNT(*) from contribution WHERE pagibig_no = ".$pagibig_no."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if($stmt->fetchColumn()) {
        //FOUND
        $sql = $conn->prepare("UPDATE `contribution` SET 
                `lastname` = '$lastname', 
                `firstname` = '$firstname', 
                `ext` = '$ext', 
                `middlename` = '$middlename', 
                `employeeCont` = '$employeeCont', 
                `employerCont` = '$employeeCont', 
                `remarks` = '$remarks' 
                WHERE `pagibig_no` = $pagibig_no");
    }else{
        $sql = $conn->prepare("INSERT INTO `contribution` (`id`, `pagibig_no`, `lastname`, `firstname`, `ext`, `middlename`, `employeeCont`, `employerCont`, `remarks`) 
        VALUES (NULL, '$pagibig_no','$lastname','$firstname','$ext','$middlename','$employeeCont','$employerCont','$remarks')");
    }
    $sql->execute();
}    
    
echo "File data successfully imported to database!!"; 
?>
<a href="dataCount.php">Done</a>