<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/iconn.jpeg" title="hospital">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PHP</title>
    <style>
        h3{
            display: inline;
        }
        #mycourse{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Let's Explore PHP</h1>
    <p>This is a server side scripting language.</p>

    <?php   
    echo "Welcome Everyone<br/>";
    // echo "<br/>";
    echo "<em>We are seeing PHP syntax.</em>";
    echo "<hr/>";
    $course = "WebDevelopment";
    $topic = "PHP";
    echo $course;
    echo "<br/>";
    echo "I am studying $course";
    echo "<br/>";
    echo "We have started " . $topic . " sessions from today.";
    echo "<br/>";
    echo $topic ." ".$course;
    echo "<br/>";
    echo "We are studying "."<h3>".$topic."</h3>" ." "."<em id='mycourse'>".$course."</em>"; 
    echo "<hr/>";

    $n1 = 10;
    $n2 = 5;
    $output = $n1 + $n2;
    
    echo $output; // 10 + (-5) = 10 - 5 = 5

    ?>
</body>
</html>