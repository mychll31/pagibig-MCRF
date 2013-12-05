<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <title></title>
    </head>
    <body>
        <table width="100%" border="1" style="border-collapse: collapse;border: 0px;"> 
            <tr>
                <td colspan="9" align="center" style="border:0px;"><img src="images/logo.jpg" /></td>
            </tr>
            <tr>
                <td>PERIOD COVERED<br />
                        <select>
                            <option>January</option><option>February</option><option>March</option><option>April</option><option>May</option><option>June</option>
                            <option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option>
                        </select>
                        <select>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                    </select></td>
                <td colspan="6" style="border-top:1px solid white;"></td>
                <td colspan="2" align="center" class=""><div class="empno">Employer's Pag-IBIG ID No.</div>
                    <input type="button" class="profilebtn" onclick="window.open('editprofile.php?con=pagibigno')" value ="<?=$pn?>" /></td>
            </tr>
            <tr>
                <td colspan="4">EMPLOYER/BUSINESS NAME<i>(Per SEC Registration, if private)</i>
                    <br /><input type="button" class="profilebtn" onclick="window.open('editprofile.php')" value ="<?=$bn?>" />
                </td>
                <td colspan="2">EMPLOYERS SSS NO.<br /><i>(for private Employers only)</i>
                    <br /><input type="button" class="profilebtn" onclick="window.open('editprofile.php')" value ="<?=$sss?>" />
                </td>
                <td colspan="3">AGENCY/BRANCH/DIVISION CODE<br /><i>(for government Employers only)</i>
                    <br /><input type="button" class="profilebtn" onclick="window.open('editprofile.php')" value ="<?=$dc?>" />
                </td>
            </tr>
            <tr>
                <td colspan="4">BUSINESS ADDRESS<i>(Unit/Room/Floor/Building/Street)</i>
                    <br /><input type="button" class="profilebtn" onclick="window.open('editprofile.php')" value ="<?=$add?>" />
                </td>
                <td>ZIP CODE
                    <br /><input type="button" class="profilebtn" onclick="window.open('editprofile.php')" value ="<?=$zip?>" />
                </td>
                <td colspan="2">TIN
                    <br /><input type="button" class="profilebtn" onclick="window.open('editprofile.php')" value ="<?=$tin?>" />
                </td>
                <td colspan="2">CONTACT NO/S.
                    <br /><input type="button" class="profilebtn" onclick="window.open('editprofile.php')" value ="<?=$cn?>" />
                </td>
            </tr>
            <tr>
                <th rowspan="2">Pag-IBIG ID No.</th>
                <th colspan="4" style="border-bottom: 0px;">NAME OF EMPLOYEES</th>
                <th colspan="3">CONTRIBUTION</th>
                <th rowspan="2">REMARKS</th>
            </tr>
            <tr>
                <td style="border-top: 0px;border-right: 0px;font-style: italic;">Last Name</td>
                <td style="border-top: 0px;border-right: 0px;border-left: 0px;font-style: italic;">First Name</td>
                <td style="border-top: 0px;border-right: 0px;border-left: 0px;font-style: italic;">Name Extension<br />(Jr.,III,etc.)</td>
                <td style="border-top: 0px;border-right: 0px;border-left: 0px;font-style: italic;">Middle Name</td>
                <td>EMPLOYEE</td>
                <td>EMPLOYER</td>
                <td>TOTAL</td>
            </tr>
            <tbody id="tblalter">