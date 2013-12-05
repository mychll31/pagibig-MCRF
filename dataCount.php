<?php
include 'data_array.php';
#echo "<pre>";
#print_r($profile);
#echo "</pre>";

$pn="";$bn='';$sss='';$dc='';$add='';$zip='';$tin='';$cn='';
foreach($profile as $profile){
    $pn .= $profile['pagibig_no'];
    $bn .= $profile['buss_name'];
    $sss .= $profile['sss_no'];
    $dc .= $profile['div_code'];
    $add .= $profile['address'];
    $zip .= $profile['zip_code'];
    $tin .= $profile['tin'];
    $cn .= $profile['contact_no'];
}


$count=0;
$pagecount=0;
$addempCont=0;
$addemployer=0;
$addtotalCont=0;
$totalempCont=0;
$totalemployerCont=0;
$totalCont=0;
$empCount=0;
$totalcount=0;
$pgid = 1;

$totaldata = count($data);
$tpageCount = $totaldata/40;
$whole = floor($tpageCount);      // 3
$fraction = $tpageCount - $whole; // .25
if($fraction != 0){
    $totalpageCount = $whole + 1;
}

    foreach($data as $data){
        $count++;
        $empCount++;

        if($count > 40){
            $pagecount++;
            $count=1;
            /*echo "<br>TOTAL EMPLOYEE CONT PER Page " . $addempCont;
            echo "<br>TOTAL EMPLOYER CONT PER Page " . $addemployer;
            echo "<br>TOTAL CONT PER Page " . $addtotalCont;*/
            #include 'footer.php';
            
            include 'footer.php';echo "<br>";
            #echo "<br>$pagecount Page";
            #echo "<hr>";
            
            $addempCont = 0;
            $addemployer = 0;
            $addtotalCont = 0;
        }
        
        if($count==1){
            include 'header.php';
        }
        
        $addempCont = $addempCont + $data['employeeCont'];   //employee contribution
        $addemployer = $addemployer + $data['employerCont'];     //employer contribution
        $addtotalCont = $addtotalCont + ($data['employeeCont']+$data['employerCont']);   //total contribution
        #echo "$count &nbsp;".$data[0]. "<br>";
        echo "
            <tr>
                <td align='center' style='border-top: 0px;border-bottom:0px;'>".$data['pagibig_no']."</td>
                <td nowrap style='border:0px;'>".$count."<a class=\"empbtn\" href=\"addemployee.php?pass=edit&id=".$data['id']."\" target=\"_blank\" >. ".$data['lastname']." </a></td>
                <td nowrap style='border:0px;'><a class=\"empbtn\" href=\"addemployee.php?pass=edit&id=".$data['id']."\" target=\"_blank\" >".$data['firstname']."</a></td>
                <td style='border:0px;'>".$data['ext']."</td>
                <td nowrap style='border:0px;'><a class=\"empbtn\" href=\"addemployee.php?pass=edit&id=".$data['id']."\" target=\"_blank\" >".$data['middlename']."</a></td>
                <td align='center' style='border-top:0px;border-bottom:0px;'>".$data['employeeCont']."</td>
                <td align='center' style='border-top:0px;border-bottom:0px;'>".$data['employerCont']."</td>
                <td align='center' style='border-top:0px;border-bottom:0px;'>".($data['employeeCont']+$data['employerCont'])."</td>
                <td align='center' style='border-top:0px;border-bottom:0px;'> ".$data['remarks']."</td>
            </tr>
        ";
        $totalempCont = $totalempCont + $data['employeeCont'];  //total employee contribution
        $totalemployerCont = $totalemployerCont + $data['employerCont'];     //total employer contribution
        $totalCont = $totalCont + ($data['employeeCont'] + $data['employerCont']);
        $totalcount++;
        
        if($count == 40){
            #echo "TOTAL EMPLOYEE PER PAGE $count";
            $ccount = $count;
            #echo "FOOTER$count";
            #include 'footer.php';
        }
        
    }
    
    $lastcount = $count;
    if($count < 40){
        while($count < 40){
            $count++;
            echo "<tr>
                    <td style='border-top: 0px;border-bottom:0px;'></td><td style='border:0px;'>".$count."</td>
                    <td style='border:0px;'></td><td style='border:0px;'></td>
                    <td style='border:0px;'></td><td style='border-top:0px;border-bottom:0px;'></td>
                    <td style='border-top:0px;border-bottom:0px;'></td><td style='border-top:0px;border-bottom:0px;'></td><td style='border-top:0px;border-bottom:0px;'></td>
                </tr>";
        }
    }
    
    /*LAST PAGE*/
    
    /*echo "LAST PAGE<br>TOTAL EMPLOYEE PER PAGE $lastcount<br>";*/
    include 'footerlast.php';
    
    if($lastcount < 40){
        $pagecount++;
        /*echo "TOTAL EMPLOYEE CONT PER Page " . $addempCont;
        echo "<br>TOTAL EMPLOYER CONT PER Page " . $addemployer;
        echo "<br>TOTAL CONT PER Page " . $addtotalCont;*/
        #echo "<br>$pagecount Page<hr>";
    }
    
/*    echo "TOTAL EMP CONT LAST PAGE ".$totalempCont;
    echo "<br>TOTAL EMPLOYER CONT LAST PAGE ".$totalemployerCont;
    echo "<br>TOTAL TOTAL CONT ".$totalCont;
    echo "<br>TOTAL NO. EMPLOYEE LAST PAGE ".$totalcount;*/
    
?>