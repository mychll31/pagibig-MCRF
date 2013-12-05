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
              border-radius: 28px;
              font-family: Arial;
              color: #ffffff;
              font-size: 15px;
              padding: 10px 20px 10px 20px;
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
     
<h2>EMPLOYEE PROFILE</h2>
<?php 
    error_reporting(0);
    include 'dbconn.php'; ?>

<?php
$id=$_GET['id'];

    $sql = $conn->prepare("SELECT * FROM contribution WHERE id=$id");
    $sql->execute();
    $profile = $sql->fetchAll();

    $pn='';$ln='';$fn='';$ex='';$mn='';$ec='';$ecr='';$r='';$s='';
        foreach($profile as $profile){
            if($_GET['pass'] == 'edit'){$pn .= "value = '".$profile['pagibig_no']."'";}else{$pn .= 'required';}
            if($_GET['pass'] == 'edit'){$ln .= "value = '".$profile['lastname']."'";}else{$ln .= 'required';}
            if($_GET['pass'] == 'edit'){$fn .= "value = '".$profile['firstname']."'";}else{$fn .= 'required';}
            if($_GET['pass'] == 'edit'){$ex .= "value = '".$profile['ext']."'";}else{$ex .= '';}
            if($_GET['pass'] == 'edit'){$mn .= "value = '".$profile['middlename']."'";}else{$mn .= 'required';}
            if($_GET['pass'] == 'edit'){$ec .= "value = '".$profile['employeeCont']."'";}else{$ec .= 'required';}
            if($_GET['pass'] == 'edit'){$ecr .= "value = '".$profile['employerCont']."'";}else{$ecr .= 'required';}
            if($_GET['pass'] == 'edit'){$r .= "value = '".$profile['remarks']."'";}else{$r .= 'required';}
            if($_GET['pass'] == 'edit'){$s .= $profile['status'];}else{$s .= '';}
        }

    if($_POST['submit']){
        $pagibigno = $_POST['pagibigno'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $mname = $_POST['middlename'];
        $extname = $_POST['ext'];
        $empcont = $_POST['empcont'];
        $employercont = $_POST['employercont'];
        $remark = $_POST['remarks'];
        if($_POST['status'] == "on"){$status=1;}else{$status=0;}

        if($_GET['pass']=='add'){
            $mess = "Record Added";
            $sql = $conn->prepare("INSERT INTO `contribution` (`id`, `pagibig_no`, `lastname`, `firstname`, `ext`, `middlename`, `employeeCont`, `employerCont`, `remarks`)
            VALUES (NULL, '$pagibigno','$lname','$fname','$extname','$mname','$empcont','$employercont','$remark')");
        }else{
            $mess = "Record Updated";
            $sql = $conn->prepare("UPDATE `contribution` SET
                    `pagibig_no` = '$pagibigno',
                    `lastname` = '$lname',
                    `firstname` = '$fname',
                    `ext` = '$extname',
                    `middlename` = '$mname',
                    `employeeCont` = '$empcont',
                    `employerCont` = '$employercont',
                    `remarks` = '$remark',
                    `status` = '$status'
                    WHERE `id` = $id");
        }
        header("Location: dataCount.php");
        $sql->execute();

        
        $alert = 'right';
    }else{
        $mess = "All Fields with * are required<br /><br />";
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
        <td>Pagibig No.*</td>
        <td><input type="text" name="pagibigno" <?=$pn?>/></td>
    </tr>
    <tr>
        <td>Last name:*</td>
        <td><input type="text" name="lastname" <?=$ln?></td>
    </tr>
    <tr>
        <td>First name:*</td>
        <td><input type="text" name="firstname" <?=$fn?>/></td>
    </tr>
    <tr>
        <td>extension name:</td>
        <td><input type="text" name="ext" <?=$ex?>/></td>
    </tr>
    <tr>
        <td>Middle name:*</td>
        <td><input type="text" name="middlename" <?=$mn?>/></td>
    </tr>
    <tr>
        <td>Employee Contribution:*</td>
        <td><input type="text" name="empcont" <?=$ec?>/></td>
    </tr>
    <tr>
        <td>Employer Contribution:*</td>
        <td><input type="text" name="employercont" <?=$ecr?>/></td>
    </tr>
    <tr>
        <td>Remarks:*</td>
        <td><input type="text" name="remarks" <?=$r?>/></td>
    </tr>
    <tr>
        <td>Status:*</td>
        <td><input type="checkbox" name="status" <?php if($s ==1){echo "checked";}if($_GET['pass']=="add"){ echo "checked";}?> /></td>
    </tr>
    <tr align="center">
        <td colspan="2"><br /><br /><input type="submit" name="submit" value="submit" class="btn" />&nbsp;&nbsp;&nbsp;<a class="btn" href="JavaScript:window.close()">Cancel</a></td>
    </tr>
</form>
    </table>