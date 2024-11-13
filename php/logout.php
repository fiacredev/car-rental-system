
<?php
// starting the sessions
session_start();
// deal with destroying all of sessions
if(session_destroy()){
    header("location:login.php");
}

?>