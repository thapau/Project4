<!DOCTYPE html>
<html lang="en">
<head>
    <title>Your Starbuck's Order</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
       <br><br>
<?php


//get method
$coffee= $_REQUEST['coffee'];
$size=$_REQUEST['size'];
$cream=$_REQUEST['cream'];
$sugar=$_REQUEST['sugar'];

 #calculate price of coffee
        
 $price=$coffee*$size;
 $final_price= $price + (0.14 * $price) ;

#Apply formatting($ and decimal places)
  $final_price="$".number_format($final_price,2);
  $fsize="$".number_format($size,2);   

?>

<div class="header">
    <h1>Thanks for your order. Here it is:</h1>
</div>
<div class="content">
   <div class="order">
    <?   
   
for($i=1;$i<=$coffee;$i++)
if($size == 1.5)     
       echo "<img src='images/cup.jpg' width='80'>"; 
else if($size == 1.75)
       echo "<img src='images/cup.jpg' width='120'>";   
else if($size == 2.0)
       echo "<img src='images/cup.jpg' width='160'>";  
else
       echo "<img src='images/cup.jpg' width='200'>";  
           
      
if($cream >= 1)
echo "<img src='images/plus.jpg'>";

for($i=1;$i<=$cream;$i++)
        echo "<img src='images/cream.jpg'>";          

if($sugar >= 1)
         echo "<img src='images/plus.jpg'>";

for($i=1;$i<=$sugar;$i++)
        echo "<img src='images/sugar.jpg'>";
?>
</div>
</div> 
<div class="Cost">      
<?
echo "<br>Cost: $fsize x $coffee + tax = $final_price";
?>   
</div>    
              
        
        
        
</div>







</body>
</html>