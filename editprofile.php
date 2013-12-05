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
     
<h2>EMPLOYER PROFILE</h2>

<?php include 'dbconn.php'; ?>
<?php
error_reporting(0);

    $sql1 = $conn->prepare("SELECT * FROM employer_profile");
    $sql1->execute();
    $profile = $sql1->fetchAll();
    $pn="";$bn='';$sss='';$dc='';$add='';$zip='';$tin='';$cn='';
    foreach($profile as $profile){
        if($profile['pagibig_no']!= 'No Data yet'){$pn .= $profile['pagibig_no'];}else{$pn .= '';}
        if($profile['buss_name']!= 'No Data yet'){$bn .= $profile['buss_name'];}else{$bn .= '';}
        if($profile['sss_no']!= 'No Data yet'){$sss .= $profile['sss_no'];}else{$sss .= '';}
        if($profile['div_code']!= 'No Data yet'){$dc .= $profile['div_code'];}else{$dc .= '';}
        if($profile['address']!= 'No Data yet'){$add .= $profile['address'];}else{$add .= '';}
        if($profile['zip_code']!= 'No Data yet'){$zip .= $profile['zip_code'];}else{$zip .= '';}
        if($profile['tin']!= 'No Data yet'){$tin .= $profile['tin'];}else{$tin .= '';}
        if($profile['contact_no']!= 'No Data yet'){$cn .= $profile['contact_no'];}else{$cn .= '';}
    }

    if($_POST['submit']){
        $pagibigno = $_POST['pagibigno'];
        $buss = $_POST['buss_name'];
        $sss = $_POST['sss'];
        $div_code = $_POST['div_code'];
        $address = $_POST['address'];
        $zip = $_POST['zip'];
        $tin = $_POST['tin'];
        $con = $_POST['con'];

        $sql = $conn->prepare("UPDATE `employer_profile` SET
                `pagibig_no` = '$pagibigno',
                `buss_name` = '$buss',
                `sss_no` = '$sss',
                `div_code` = '$div_code',
                `address` = '$address',
                `zip_code` = '$zip',
                `tin` = '$tin',
                `contact_no` = '$con'
                WHERE `id` = 1;");

        $sql->execute();

        $mess = "Record Added";
        header("Location: dataCount.php");
        $alert = 'right';
    }else{
        $mess = "All Fields with * are required<br><br>";
        $alert = 'warning';
    }

?>
<div class="mess">
    <?php
        echo "<div class='$alert'>".$mess."</div>";
     ?>
</div>
<table>
<form method="post" action="#">
    <tr>
        <td>Employer's Pag-IBIG ID No.:</td>
        <td><input type="text" name="pagibigno" id="pagibigno" value="<?=$pn?>" /></td>
    </tr>
    <tr>
        <td>Employer/Business Name:</td>
        <td><input type="text" name="buss_name" value="<?=$bn?>" /></td>
    </tr>
    <tr>
        <td>Employer SSS NO.:</td>
        <td><input type="text" name="sss" value="<?=$sss?>" /></td>
    </tr>
    <tr>
        <td>AGENCY/BRANCH/DIVISION CODE):</td>
        <td><input type="text" name="div_code" value="<?=$dc?>" /></td>
    </tr>
    <tr>
        <td>Business Address<br>(Unit/Room/Floor/Building/Street):</td>
        <td><input type="text" name="address" value="<?=$add?>" /></td>
    </tr>
    <tr>
        <td>ZIP CODE:</td>
        <td><input type="text" name="zip" value="<?=$zip?>" /></td>
    </tr>
    <tr>
        <td>TIN:</td>
        <td><input type="text" name="tin" value="<?=$tin?>" /></td>
    </tr>
    <tr>
        <td>Contact No/s.:</td>
        <td><input type="text" name="con" value="<?=$cn?>" /></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input class="btn" type="submit" name="submit" value="submit"/>
            <a class="btn" href="JavaScript:window.close()">Cancel</a>
        </td>
</form>
    </table>

