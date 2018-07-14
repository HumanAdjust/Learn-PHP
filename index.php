<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="index color.css">
        <meta charset="utf-8" />
        <title>Storage Area Main Site</title>
          <script language="javascript">
  function showPopup() { window.open("Entech Security Storage Area Info.html", "a", "width=600, height=650, left=100, top=50"); }
          function goReplace(str) { location.replace(str); }
  function showPopup2() { window.open("Login Info.html", "a", "width=700, height=400, left=100, top=50"); }
          function goReplace(str) { location.replace(str); }
  function showPopup3() { window.open("Entech Security Storage Area Info.html", "a", "width=600, height=650, left=100, top=50"); }
          function goReplace(str) { location.replace(str); }

  </script>
    </head>
    <body>
        <h1 style="text-align: center">Entech Security Data Storage Area <input type='image' src='question mark.png' width=20px onclick='showPopup3();'></h1>
        <h3 style="text-align: center">Extra High Security Storage Area, No Access Other Than Manager (Classification: Deep Web/Hidden Site/Security Clearance Level 6)</h3><hr>
        <?php
            /*if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
                echo "<p style='text-align: center'>Please login for access the Security Files. <input type='button' onclick=location.href='login.php' value='login'><input type='image' src='question mark.png' width=20px onclick='showPopup2();'/><hr>";
            } else {
                $user_id = $_SESSION['user_id'];
                $user_name = $_SESSION['user_name'];
                echo "<p style='text-align: center;'><strong>$user_name </strong>Welcome, ($user_id)! <input type='button' value='Logout' onclick=location.href='logout.php' style='font-weight:400px; color: black;'/><br></p>";
                /*echo "<script type='text/javascript'>location.href='Main Page.php'; </script><br />";*/
                //echo "<meta http-equiv=refresh content=2; url='C:\xampp\htdocs\Test\Entech Security Data Storage Area(Testing)\Main Page.php'>";*/
			if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
				echo "<meta http-equiv='refresh' content='0;url=login.php'>";
				exit;
			} else{
			/*else {
                $user_id = $_SESSION['user_id'];
                $user_name = $_SESSION['user_name'];
                echo "<p style='text-align: center;'><strong>$user_name </strong>Welcome, ($user_id)! <input type='button' value='Logout' onclick=location.href='logout.php' style='font-weight:400px; color: black;'/><br></p>";
                echo "<script type='text/javascript'>location.href='Main Page.php'; </script><br />";
			echo "<meta http-equiv=refresh content=2; url='C:\xampp\htdocs\Test\Entech Security Data Storage Area(Testing)\Main Page.php'>";}*/
			$user_id = $_SESSION['user_id'];
			$user_name = $_SESSION['user_name'];
			echo "<p style='text-align: center'>Welcome, $user_name($user_id)! <input type='button' value='Logout' onclick=location.href='logout.php'";}
			//echo "<p><a href='logout.php'>Logout</a></p>";
        ?>
        <hr></hr>
        <input type="button" value="Go to Mail Server" onclick=location.href="'logout.php'"/>
        <!--<div1>
       <!--<button type="image" onclick="showPopup();">Need Help?</button>
        <input type="button" value="Need Help?" onclick="showPopup();" />
        <input type="button" value="Show Files" />
        <input type="button" value="Go to the Mail Server" onclick="goReplace('Mail Server.html')" />
        </div>-->
        <!--<div1 style="margin: auto;">
        <p style="text-shadow: -1px 0 #848484, 0 1px #848484, 1px 0 #848484, 0 -1px #848484; font-size: 28px; font-weight: Bold;">Entech Security Files Storage Area Info</h3>
        <hr />
        <p style="text-shadow: -1px 0 #848484, 0 1px #848484, 1px 0 #848484, 0 -1px #848484; font-size: 18px; margin: auto">This website contains Entech's confidential information and sensitive data. Therefore, you are prohibited from accessing any files other than the person in charge, and you are required to log in using the ID and password provided by the company manager offline, and any personal and personal files associated with your storage are prohibited. Also, do not modify / delete files without permission.</p>
        </div>-->
    </body>
</html>
