<?php
$var = $_GET['lockstatus'] ;

echo "var=".$var;
if($var==1) {
echo("The door is open");
}
else{
echo("The door is locked");
}
?>