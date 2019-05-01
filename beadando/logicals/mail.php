<?php




$youremail = "arvai92@gmail.com";

// a te mail címed, ahova a levelek menni fognak


$subject = "contact form";

// a levél tárgya


$thankyou = "sikeresmail.html";

// sikeres küldés után ez fog megjelenni a küldőnek



function check($postArg) { return (IsSet($_POST[$postArg]) && !Empty($_POST[$postArg])); }
if(!check('email')){
?>
Nem adtál meg mail címet, nyomd meg a VISSZA gombot.<br/>
<?php
}elseif(!check('name')){
?>
Nem adtál meg nevet, nyomd meg a VISSZA gombot.<br/>
<?php
}elseif(!check('message')){
?>
Nem írtál be üzenetet, nyomd meg a VISSZA gombot.<br/>
<?php
}else{
$msg = ereg_replace("\\\'", "'", $_POST['message']);
$msg = ereg_replace('\\\"', "\"", $msg);
$message1 = "from: " . $_POST['name'] . "\nemail: " . $_POST['email'] . "\nmessage:\n" . $msg;
mail($youremail, $subject, $message1, "From: " . $_POST['email'] . "\r\nReply-to: " . $_POST['email'] . "\r\n");
?>
<meta http-equiv="refresh" content="0; url=<?echo $thankyou;?>"">
<?php
}
?>
