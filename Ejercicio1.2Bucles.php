<html><head>
<title>Welcome!</title>
</head><body>
<div style="text-align: center">
<p>Welcome friend!<br/>
<?php
date_default_timezone_set("Europe/Madrid");
echo "The previous month is: ";
echo date("F");
echo ", ";
echo date("");
?>
<br/>
</div>
    </body>
</html>