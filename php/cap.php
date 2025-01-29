<html>
<head>
    <title>Countries and Capitals</title>
    </head>
<body>
    <center>

    <h2>Countries and Capitals Sorted by Country Name</h2>

    <?php
    
    $countries_and_capitals = [
        "Canada" => "Ottawa",
        "Germany" => "Berlin",
        "France" => "Paris",
        "Japan" => "Tokyo",
        "Australia" => "Canberra",
        "India" => "New Delhi",
        "United Kingdom" => "London",
        "Brazil" => "Brasília",
        "Mexico" => "Mexico City",
		"Italy" => "Rome"
    ];
    ksort($countries_and_capitals);
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Country</th><th>Capital</th></tr>";

    foreach ($countries_and_capitals as $country => $capital) 
	{
        echo "<tr><td>$country</td><td>$capital</td></tr>";
    }

    echo "</table>";
    ?>
</center>
</body>
</html>
