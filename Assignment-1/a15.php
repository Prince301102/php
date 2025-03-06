
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regular expression</title>
</head>
<body>
    <?php
        $str = "Hello World!";
        $pattern = "/World/";

        if (preg_match($pattern, $str)) {
            echo "Pattern found!<br>";
        } else {
            echo "Pattern not found.<br>";
        }

        $fstr = "Today is Wednesday";
        $rstr = "/Wednesday/";
        $replace = "sunday";

        $result = preg_replace($rstr, $replace, $fstr);
        echo "After replacement: $result<br>";

        $stringToSplit = "apple,banana,orange,grape";
        $patternSplit = "/,/";
        $fruits = preg_split($patternSplit, $stringToSplit);

        echo "Fruits array: ";
        print_r($fruits);
    ?>

</body>
</html>