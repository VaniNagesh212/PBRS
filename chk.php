<?php
$currentTime = date('H');
echo $currentTime;

if($currentTime==15)
{
   header("location: Second_page.php");
}
else
{
    header("location: First_page.php");
} 
?>
