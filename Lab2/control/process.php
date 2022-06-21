<?php

$first_name=$_REQUEST['fname'];
$last_name=$_REQUEST['lname'];
$pass_word=$_REQUEST['pass'];
$email=$_REQUEST['ename'];
$file=$_REQUEST['file'];



if(is_numeric($first_name))
{
    echo "Please enter valid first name";
}

if (is_numeric($last_name))
{
    echo "Plese enter valid last name";
}

if(strlen($pass_word) <= '6')
{
    echo "Must be more than 6<br>";
}
if ((!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))||empty($email)) {
    echo "Invalid email"; 
}

if(empty($file))
{
    echo "Must add a file<br>";
}

if(isset($_POST['submit']))
{
    
    if(empty($_POST['designation']))
    {
        echo "You must choose one designation<br>";
    }
    
}

if(isset($_POST['language1'])||(isset($_POST['language2']))||(isset($_POST['language3'])))
{
    echo "select check box ";
}
else 
{
    echo" checkbox not selected ";
}
?>