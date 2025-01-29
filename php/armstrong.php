<?php
// Function to check if a number is an Armstrong number
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = (int) log10($number) + 1;

    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }

    return $sum == $number;
}

// Example usage
$number = 153;
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>
