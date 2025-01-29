<html>
<head>
  <title>php</title>
</head>
<body><center>
<h1>chess board</h1>
<table width="500px" cellspacing="0px" cellpadding="0px" border="1">
<?php
for($row=1; $row<=8; $row++)
{
    echo"<tr>";
	for($column=1; $column<=8; $column++)
	{
        $total=$row+$column;
       	if($total%2==0)
        {
            echo"<td height='55px' width='4px' bgcolor='black'>";
        }
        else
        {
            echo"<td height='55px' width='4px' bgcolor='white'>";
        }
    }
	echo"</tr>";
}
?>
</center>
</body>
</html>	
	   
