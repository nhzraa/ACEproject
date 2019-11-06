<?php
/**
 * ****************************************************************************
 * Micro Protector
 * 
 * Version: 1.0
 * Release date: 2007-09-10
 * 
 * USAGE:
 *   Define your requested password below and inset the following code
 *   at the beginning of your page:
 *   <?php require_once("microProtector.php"); ?>
 * 
 *   See the attached example.php.
 * 
 ******************************************************************************/


$Password = 'acidcubic88'; // Set your password here



/******************************************************************************/
   if (isset($_POST['submit_pwd'])){
      $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';
      
      if ($pass != $Password) {
         showForm("Wrong password");
         exit();     
      }
   } else {
      showForm();
      exit();
   }
   
function showForm($error="LOGIN"){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Login Page</title>
   <link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="main">
      <div class="caption">
        <div align="center">
          <p>&nbsp;</p>
        <?php echo $error; ?></div>
      </div>
      <div id="icon">&nbsp;</div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd">
        <div align="center">
          <p>Password:          </p>
          <table>
            <tr><td height="50"><div align="center"><br />
              <input class="text" name="passwd" type="password"/>
              <br />
              <br />
<input class="text" type="submit" name="submit_pwd" value="Login"/>
              <br />
            </div></td></tr>
</table>
          <p>&nbsp;</p>
  <p>&nbsp;</p>
        </div>  
      </form>
      
 
<?php   
}
?>

