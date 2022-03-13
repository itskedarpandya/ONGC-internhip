<?php
$connect = mysqli_connect("localhost", "root", "", "documents");
function make_queryw($connect)
{
 $query = "SELECT * FROM documentsw ORDER BY id ASC";
 $result = mysqli_query($connect, $query);
 return $result;
}
function displaydocw($connect)
{
 $output = '';
 $result = make_queryw($connect);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="documentsw/'.$row["files"].'">';
 
 return $output;
}
function make_queryx($connect)
{
 $query = "SELECT * FROM documentsx ORDER BY id ASC";
 $result = mysqli_query($connect, $query);
 return $result;
}
function displaydocx($connect)
{
 $output = '';
 $result = make_queryx($connect);
 $row = mysqli_fetch_assoc($result);
 
    $output .= '<a href="documentsx/'.$row["files"].'">';
 
 return $output;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $callw = displaydocw($connect);
    $callx = displaydocx($connect);
    echo '<marquee onmouseover="this.stop();" onmouseout="this.start();" style="background-color: thistle; "><b><p style="font-family: ariel;">Click'.$callx.' here </a>to open a excel sheet!&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  Click'.$callw.' here </a>to open a word document!</p></b></marquee>';
    ?> 
</body>
</html>