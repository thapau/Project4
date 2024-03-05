<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Starbucks Order</title>
    
    <link rel="stylesheet" href="css/style1.css">
</head>
<body><br>
   <img src="images/logo-en.png" width="150px" height="150px">
    <h1>Welcome to Starbucks !</h1>
   
<table>
    <tr><td>
        <h2>Give us some numbers...</h2></td>

<form action="order.php" method="post"><tr>
<td>Number of Coffees:</td>
<td><input type="number" name="coffee" id="coffee" value="1" min="1" max="10" >
    </td></tr>
<tr>
<td>Size:</td>
<td><select name="size" id="size">
    <option value="1.5">Small</option>
    <option value="1.75">Medium</option>
    <option value="2.0">Large</option>
    <option value="2.5">Extra-Large</option>
    </select></td></tr>
<tr>
<td>How many Creams?</td>
<td><input type="number" name="cream" id="cream" value="0" min="0" max="10">
        </td></tr>
<tr>
<td>How many Sugars?</td>
<td><input type="number" name="sugar" id="sugar" value="0" min="0" max="10">
       </td></tr>
<tr><td>
    <input type="submit" value="Order Coffee" id="submit"> 
</td>
</tr>
</table>
</form>


</body>
</html>