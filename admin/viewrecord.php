<?php

session_start();

include("../connection.php");
include("header.php");
include("Nav.php");


?>

<script type="application/javascript">

setInterval(function() => {
    $('#retriever ').load('');
},1000);

</script>


<div id="retriever">
<?php
include("retriever.php");
?>

</div>


