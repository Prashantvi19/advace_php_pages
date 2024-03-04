<?php
session_start();
// session_unset('mail'); Tjis use for one session end but not for all sessions logout pages should be all private sessions started so that we don't that becouse all service detroyed by server for that we end all privte cervices that why we should use session_destroy() for all sessions will ended by server
session_destroy();
$msg = " Please coming soon!";
header('location:login.php?msg='.$msg);
?>