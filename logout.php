<?php
session_start();
session_destroy();
?>
<script language="javascript">
    var confirmation = confirm("Anda Yakin Akan Logout??");
    if (confirmation) {
        document.location = "home.php";
    } else {
        history.back(-1);
        // User cancelled the action, you can add additional logic here if needed.
    }
</script>