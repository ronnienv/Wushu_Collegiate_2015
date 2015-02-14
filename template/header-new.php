<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/database/db_content.php');

// set session variables
if(isset($_GET['logout'])){
    unset($_SESSION['userid']);
    unset($_SESSION['usernm']);
    unset($_SESSION['isadmin']);

}
    
if(isset($_POST['userlogin'])) {
    $dbc = db_connect() or die('We are currently experiencing database technical problems.  Please try again later.');
    
    $username = mysql_real_escape_string($_POST['usernm']);  
        $password = md5(mysql_real_escape_string($_POST['pword']));  

    $select = "SELECT * FROM user_accounts WHERE usernm= '" . $username . "' AND pword = '" . $password . "' ";                
    $export = mysql_query($select);
    $row = mysql_fetch_assoc($export);

    if($row){
        $isadmin = 0;
        $userid = $row["userid"];
     
        $_SESSION['userid'] = $userid;
        $_SESSION['usernm'] = $_POST['usernm'];
        $_SESSION['isadmin'] = $isadmin;
    }
    else{
        
        $select = "SELECT * FROM admin_accounts WHERE usernm = '".$username."' AND pword = '".$password."' ";
        $export = mysql_query($select);
        $row = mysql_fetch_assoc($export);
        if($row){
            $userid = $row["adminid"];
            $isadmin = 1;
            $_SESSION['userid'] = $userid;
            $_SESSION['usernm'] = $_POST['usernm'];
            $_SESSION['isadmin'] = $isadmin;
        }
    }
    
    mysql_close($dbc);
} 
/* ********************************************************************* */
?>
<!--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="The official Collegiate Wushu website." />
<meta name="keywords" content="wushu, chinese martial arts, college sports, college clubs" />
<title>Collegiate Wushu</title>
<link rel="stylesheet" href="/template/collegiates.css" type="text/css" />

<?php /*?>disable enter key from submitting a form<?php */?>
<script type="text/javascript">
function stopRKey(evt) {
  var evt = (evt) ? evt : ((event) ? event : null);
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;}
}
document.onkeypress = stopRKey;
</script>

</head>

<body>
<?php /*?>/* ********************************************************************* */ ?>
<?php /*?>begin right-side content<?php */?>
<div id="navBar">
<?php /*?>account menu <?php */?> 
  <div class="relatedLinks">

<?php   
    if(isset($_SESSION['userid'])) {
        echo ">" . $_SESSION['usernm'] . " <a href=/home.php?logout=1>[logout]</a><br>"; ?>
    <ul>
      <li><a href=<?php if($_SESSION['isadmin']==0) echo '"/accounthome.php?viewpage=1"'; else {echo '"/adminhome.php?viewpage=1"';}?>>Account Panel</a></li>
    </ul>
<?php 
    }
    else {
        if(isset($_POST['userlogin'])) 
            echo "<span class=errortext>Invalid login!</span>"; ?>
        <form action="/tournament/info.php" method="post">
          <input name="usernm" type="text" id="adminlogin" size="16"/>
          <br />
          <input name="pword" type="password" id="adminlogin" size="16"/>
          <br />
          <input name="userlogin" type="submit" id="adminlogin" value="Login"/>
        </form>
        <br>First time? Then <a href = "/account/register.php">Register</a>!
        <br>Lost Password? Click <a href = "/account/password.php">here</a>!
<?php 
    } ?>
  </div>
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Collegiate Wushu</title>
  
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jasny-bootstrap.min.css">
  <!-- Main Style -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  
  <!-- Responsive Style -->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  
  <!--Fonts-->
  <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css">

  <!-- Extras -->
  <link rel="stylesheet" type="text/css" href="assets/extras/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/extras/lightbox.css">
  <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.theme.css">
  <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.transitions.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
              <![endif]-->
</head>