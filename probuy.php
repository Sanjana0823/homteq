<?php include("db.php"); //include db.php file to connect to DB
$pagename="A smart buy for a smart home"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
//retrieve the product id passed from previous page using the GET method and the $_GET superglobal variable

echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

//applied to the query string u_prod_id
//store the value in a local variable called $prodid
$prodId=$_GET['u_prod_id'];
//display the value of the product id, for debugging purposes
echo "<p>Selected product Id: ".$prodId;
include("footfile.html"); //include head layout
echo "</body>";
?>