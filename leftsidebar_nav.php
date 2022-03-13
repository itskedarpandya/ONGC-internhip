<?php
$connect = mysqli_connect("localhost", "root", "", "electdept");
$connect1 = mysqli_connect("localhost", "root", "", "civildept");
$connect2 = mysqli_connect("localhost", "root", "", "itdept");
$connect3 = mysqli_connect("localhost", "root", "", "hrdept");
//acmaintanence notices
function make_queryacm($connect)
{
 $query = "SELECT * FROM acmaintanence ORDER BY id DESC";
 $result = mysqli_query($connect, $query);
 return $result;
}
function displaydocacm($connect)
{
 $output = '';
 $result = make_queryacm($connect);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="electdept/acmaintanence/'.$row["files"].'">';
 
 return $output;
}
//substation1 notices
function make_queryss1($connect)
{
 $query = "SELECT * FROM substation1 ORDER BY id DESC";
 $result = mysqli_query($connect, $query);
 return $result;
}
function displaydocss1($connect)
{
 $output = '';
 $result = make_queryss1($connect);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="electdept/substation1/'.$row["files"].'">';
 
 return $output;
}
//substation2 notices
function make_queryss2($connect)
{
 $query = "SELECT * FROM substation2 ORDER BY id DESC";
 $result = mysqli_query($connect, $query);
 return $result;
}
function displaydocss2($connect)
{
 $output = '';
 $result = make_queryss2($connect);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="electdept/substation2/'.$row["files"].'">';
 
 return $output;
}
//substation3 notices
function make_queryss3($connect)
{
 $query = "SELECT * FROM substation3 ORDER BY id DESC";
 $result = mysqli_query($connect, $query);
 return $result;
}
function displaydocss3($connect)
{
 $output = '';
 $result = make_queryss3($connect);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="electdept/substation3/'.$row["files"].'">';
 
 return $output;
}
//civildept 
//colonymaintanence
function make_querycm($connect1)
{
 $query = "SELECT * FROM colonymaintanaence ORDER BY id DESC";
 $result = mysqli_query($connect1, $query);
 return $result;
}
function displaydoccm($connect1)
{
 $output = '';
 $result = make_querycm($connect1);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="civildept/colonymaintanaence/'.$row["files"].'">';
 
 return $output;
}
//drainagemaintenance
function make_querydm($connect1)
{
 $query = "SELECT * FROM drainagemaintanaence ORDER BY id DESC";
 $result = mysqli_query($connect1, $query);
 return $result;
}

function displaydocdm($connect1)
{
 $output = '';
 $result = make_querydm($connect1);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="civildept/drainagemaintanaence/'.$row["files"].'">';
 
 return $output;
}
//officemaintanence
function make_queryom($connect1)
{
 $query = "SELECT * FROM officemaintanaence ORDER BY id DESC";
 $result = mysqli_query($connect1, $query);
 return $result;
}
function displaydocom($connect1)
{
 $output = '';
 $result = make_queryom($connect1);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="civildept/officemaintanaence/'.$row["files"].'">';
 
 return $output;
}
//itdepartment
//infocom section
function make_queryic($connect2)
{
 $query = "SELECT * FROM infocom ORDER BY id DESC";
 $result = mysqli_query($connect2, $query);
 return $result;
}
function displaydocic($connect2)
{
 $output = '';
 $result = make_queryic($connect2);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="itdept/infocom/'.$row["files"].'">';
 
 return $output;
}
//database maintanence section
function make_querydbm($connect2)
{
 $query = "SELECT * FROM databasemaintenance ORDER BY id DESC";
 $result = mysqli_query($connect2, $query);
 return $result;
}
function displaydocdbm($connect2)
{
 $output = '';
 $result = make_querydbm($connect2);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="itdept/databasemaintenance/'.$row["files"].'">';
 
 return $output;
}
//development section
function make_queryd($connect2)
{
 $query = "SELECT * FROM development ORDER BY id DESC";
 $result = mysqli_query($connect2, $query);
 return $result;
}
function displaydocd($connect2)
{
 $output = '';
 $result = make_queryd($connect2);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="itdept/development/'.$row["files"].'">';
 
 return $output;
}
//hr department
//rps
function make_queryrps($connect3)
{
 $query = "SELECT * FROM rps ORDER BY id DESC";
 $result = mysqli_query($connect3, $query);
 return $result;
}
function displaydocrps($connect3)
{
 $output = '';
 $result = make_queryrps($connect3);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="hrdept/rps/'.$row["files"].'">';
 
 return $output;
}
//estate section
function make_queryes($connect3)
{
 $query = "SELECT * FROM estatesection ORDER BY id DESC";
 $result = mysqli_query($connect3, $query);
 return $result;
}
function displaydoces($connect3)
{
 $output = '';
 $result = make_queryes($connect3);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="hrdept/estatesection/'.$row["files"].'">';
 
 return $output;
}
//las
function make_querylas($connect3)
{
 $query = "SELECT * FROM las ORDER BY id DESC";
 $result = mysqli_query($connect3, $query);
 return $result;
}
function displaydoclas($connect3)
{
 $output = '';
 $result = make_querylas($connect3);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="hrdept/las/'.$row["files"].'">';
 
 return $output;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.vertical-menu {
  width: 330px;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
}
.dropdown {
  position: relative;
  display: block;
}
.dropdown-content {
  display: none;
  position: relative;
  
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

</style>
</head>
<body>

<br><br><br><br><br><br>
<h3 style="font-family:Bradley Hand; font-style:italic;">Department Notices</h3>
<br>
<div class="vertical-menu">
    <div class="dropdown">
        <a href="#">Electrical Department</a>
  	        <div class="dropdown-content">
               <?php 
               $callacm = displaydocacm($connect);
               echo "$callacm AC Maintanence Section</a>" 
               ?>
               <?php
               $callss1 = displaydocss1($connect);
               echo "$callss1 Sub-Station 1</a>"
               ?>
               <?php
               $callss2 = displaydocss2($connect);
               echo "$callss2 Sub-Station 2</a>"
               ?>
               <?php
               $callss3 = displaydocss3($connect);
               echo "$callss3 Sub-Station 3</a>"
               ?>
                <a href="http://localhost/InternshipProject/electdept/">All Notices</a>
            </div>
    </div>
    <div class="dropdown">
        <a href="#">Civil Department</a>
             <div class="dropdown-content">
             <?php 
               $callom = displaydocom($connect1);
               echo "$callom Office Maintanence Section</a>" 
             ?>
             <?php 
               $callcm = displaydoccm($connect1);
               echo "$callcm Colony Maintanence Section</a>" 
             ?>
             <?php 
               $calldm = displaydocdm($connect1);
               echo "$calldm Drainage Maintanence Section</a>" 
             ?>
               <a href="http://localhost/InternshipProject/civildept/">All Notices</a>
            </div>
    </div>
    <div class="dropdown">
        <a href="#">IT Department</a>
            <div class="dropdown-content">
            <?php 
               $callic = displaydocic($connect2);
               echo "$callic InfoCom Section</a>" 
            ?>
            <?php 
               $calldbm = displaydocdbm($connect2);
               echo "$calldbm Database Maintanence Section</a>" 
            ?>
            <?php 
               $calld = displaydocd($connect2);
               echo "$calld Development Section</a>" 
            ?>
                <a href="http://localhost/InternshipProject/itdept/">All Notices</a>
            </div>
    </div>
    <div class="dropdown">
        <a href="#">HR Department</a>
            <div class="dropdown-content">
            <?php 
               $callrps = displaydocrps($connect3);
               echo "$callrps Recruitment & Promotion Section</a>" 
            ?>
            <?php 
               $calles = displaydoces($connect3);
               echo "$calles Estate Section</a>" 
            ?>
            <?php 
               $calllas = displaydoclas($connect3);
               echo "$callrps Loan and Advance Section</a>" 
            ?>
                <a href="http://localhost/InternshipProject/hrdept/">All Notices</a>
            </div>
    </div>
</div>

</body>
</html>
