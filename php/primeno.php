<html>
<head>
<title>php</title>
</head>
<body>
	<center><h2>Prime number Generation</h2></center>
	<form method="post">
	  <label for="n1">Enter 1st number(n1):</label>
	  <input type="number" name="n1" id="n1" required>
	  <br>
	  <label for="n2">Enter 2nd number(n2):</label>
	  <input type="number" name="n2" id="n2" required>
	  <br>
	  <input type=submit value="submit">
	</form>
    <?php 
		function isprime($num)
		{
			if($num<2)
			{
				return false;
			}
			for($i=2; $i<=sqrt($num); $i++)
			{
				if($num % $i==0)
				{
					return false;
				}
			}
			return true;
		}
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$n1=intval($_POST['n1']);
			$n2=intval($_POST['n2']);
			if($n1>$n2)
			{
				$temp=$n1;
				$n1=$n2;
				$n2=$temp;
			}
			echo"<h1> prime number between $n1 and $n2 </h1>";
			echo"<ul>";
			for($i=$n1; $i<=$n2; $i++)
			{
				if(isprime($i))
				{
					echo"<li>$i</li>";
				}
			}
			echo"</ul>";
		}
	?>
</body>
</html>

	  