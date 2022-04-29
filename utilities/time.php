<?php
    setlocale(LC_TIME, "fr_FR");
    $daty = utf8_encode(strftime("%A %d %B %Y, %H:%M:%S"));
?>
<div><?php echo $daty; ?></div>