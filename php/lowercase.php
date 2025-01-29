<html>
<head>
<title>lowercase</title>
<script>
    function isAllLowerCase()
	{
	    var inputString=document.getElementById("inputString").value;
	    if(inputString===inputString.toLowerCase())
	    {
	      document.getElementById("result").innerText="The String is all lowercase";	
		}
		else
		{
		  document.getElementById("result").innerText="The String is not lowercase";
		}
	}
</script>
</head>
<body>
    <h2>Check if string is All Lowercase</h2>
	<label for="inputString">Enter a String : </label>
	<input type="text" id="inputString">
	<button onclick="isAllLowerCase()">Check</button>
	<p id="result"></p>
</body>
</html>
		