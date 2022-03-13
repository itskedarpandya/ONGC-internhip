<?php
$connect = mysqli_connect("localhost", "root", "", "images");
function make_query1($connect)
{
 $query = "SELECT * FROM images ORDER BY id ASC";
 $result = mysqli_query($connect, $query);
 return $result;
}
function make_gallery($connect)
{
 $output = '';
 $count = 0;
 $result = make_query1($connect);
 while($row = mysqli_fetch_array($result))
 {
    if($count == 0)
    {
     $output .= '<div class="item active"><br>';
    }
    else
    {
     $output .= '<div class="item"><br>';
    }
    $output .= '<img src="images/'.$row["image"].'"style= "height:100px; width: 200px;"/><br><br>';
 }
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
    <br><br><br><br><br><br>
    <h3 style="font-family:Bradley Hand; font-style:italic;"> Images Gallery </h3><br><br>
    <marquee direction="up" height="20%" onmouseover="this.stop();" onmouseout="this.start();">
    <div class="gallery" align="center">
        <?php echo make_gallery($connect); ?>
        
</div>
</marquee>
    
</body>
</html>