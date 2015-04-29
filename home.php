<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username']))
{
    session_destroy();
    header("Location:index.php");
}
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <link rel="stylesheet" type="text/css" media="screen" href="style.css"/>
<title>Home</title>
</head>

<body>
<div id="header">
   <div id="navigation">
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Events</a></li>
      <li><a href="">Resources</a></li>
      <li><a href="">Messages</a></li>
    </ul>
   </div>
</div>

<div id="container">
<div id="wrapper">
    <div id="content">
      <h3><strong>NEWS FEEDS</strong></h3>
      <p>A table of all current events and notices will be displayed here </p> <br />
      
    
    
    </div>
    </div>
    
    <div id="sidebar">
    <h3>Quick Links</h3>
   <button id="add_resource">Add Resource</button>
   <button id="add_event">Add new Event</button>
   <button id="add_message">Send Message</button>
    </div>
    <div id="footer">
    <p>2015 SARDA Gauteng </p>
  </div>
 
</body>
</html>
