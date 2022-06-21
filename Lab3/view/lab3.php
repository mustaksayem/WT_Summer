<?php
include "../control/process.php"
?>


<html>
    <head>
        <h2>Registration Form</h2> <hr> 
    </head>
    <body>
        <form action=""  method="post" enctype="multipart/form-data">
            <table>
              <tr>
                  <td> First name:</td>
                  <td> <input type="text"  name="fname">
                  <?php
                  echo $fnameerr;
                  ?></td>
                  
              </tr> 
              <tr>
                  <td>  Last name: </td>
                  <td> <input type="text"  name="lname">
                  <?php
                  echo $lnameerr;
                  ?></td>
                  
              </tr> 
              <tr>
                <td> Age: </td>
                <td> <input type="number" id="age" name="age"> 
                <?php
                  echo $ageerr;
                  ?></td>
            </tr>
            <tr>
                <td> Designation: </td>
                <td><input type="radio" name="designation" value="Junior Programmer"> Junior Programmer
                <input type="radio"  name="designation" value="Senior Programmer">Senior Programmer
                <input type="radio" name="designation" value="Project Load">Project Load
                    <?php
                  echo $deserr;
                  ?></td>
            </tr>
            <tr>
                <td> <label for="preferredlanguage">Preferred Language 
                <td><input type="checkbox"  name="Java" value="Java">Java
                <input type="checkbox" name="PHP" value="PHP">PHP
                <input type="checkbox" name="C++" value="C++">C++
                    <?php
                  echo $plerr." ".$pl1." ".$pl2." ".$pl3;
                  ?></td>
            </tr>
            <tr>
                <td> Email:</td>
                <td> <input type="text" name="email"> 
                <?php
                  echo $emailerr;
                  ?></td>
            </tr> 
            <tr>
              <td> Password:</td>
              <td> <input type="password" name="password"> 
              <?php
                  echo $passerr;
                  ?></td>
          </tr>
    
          <tr>
          
          <td>Please choose a file :</td>
         <td><input type="file" name="myfile">
             <?php
                  echo $fileerr;
                  ?></td>
          </tr>
 
         
         <tr>
            
        <td><input type="submit" name="Submit">
       <input type="reset" name="Reset"></td>

         <?php
                  echo $dataerr;
                  ?>

         </td>


       </tr>
            </table>
        </form>

    </body>
</html>