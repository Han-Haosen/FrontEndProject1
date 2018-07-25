<?php //Creating an award for fun
function sanitizeString($var)
{
    if (get_magic_quotes_gpc())
        $var = stripslashes($var);
        $var = htmlentities($var);
        $var = strip_tags($var);
        return $var;
}
$award = "Default Award";
$person = "receiver";
$giver = "giver";
if (isset($_POST['award'])) $award = sanitizeString($_POST['award']);
if (isset($_POST['person'])) $person = sanitizeString($_POST['person']);
if (isset($_POST['giver'])) $giver = sanitizeString($_POST['giver']);
?>

<!DOCTYPE html>
<html>
<head>
<title>Creating Certificate</title>
<link rel="stylesheet" href="style1.css" type="text/css"/>
</head>
 <body>
 	<form method="post" action="index.php">
      What is the award you want to generate?
      <input type="text" name="award"><br>
      To whom you want to give the award?
      <input type="text" name="person"><br>
      Who gives out the award?
      <input type="text" name="giver"><br>
      <input type="submit" id="submission" value = "submit">
    </form>
    <div class='border'>
      <h1><?php echo $award; ?></h1>
      <h2>Awarded To:</h2>
      <h3><?php echo $person; ?></h3>
      <h2>Granted by:</h2>
      <h3><?php echo $giver; ?></h3>
    </div>
  </body>
</html>