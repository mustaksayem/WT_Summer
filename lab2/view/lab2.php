<html>
<body>
<h1>Calculator</h1>
<form action = "../control/process.php" method="post">
<table>
<tr><td> Enter Number1 :</td><td> <Input type= "text" name="num1"></td>

<tr><td> Enter Number2 :</td><td> <Input type= "text" name="num2"></td>
</tr>
<td>Enter choices: </td>
<td>
    <input type = "radio" name = "Operation" value ="add">add
    <input type = "radio" name = "Operation" value ="sub">substraction
    <input type = "radio" name = "Operation" value ="multiply">multiplication
    <input type = "radio" name = "Operation" value ="division">division
</td>
<tr> <td> <input type = "submit" value = "Resend"> </td> </tr>

</table>

</body>
</html> 