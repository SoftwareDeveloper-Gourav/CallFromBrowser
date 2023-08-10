<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+12179552567"><?php  echo $_POST['To'];?></Dial>
</Response>