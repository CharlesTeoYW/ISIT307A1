<!DOCTYPE html>
<html>
<head>
    <title>Singapore General Knowledge Quiz</title>
    <meta charset = "utf-8" />
</head>

<body>
    <?php
    
    if (!isset ($_POST ['nickname'])) // first page 
    {
        echo "<h1>Welcome To The Test</h1>"; 
        echo '<form name=subjects method=POST action=History.php>';
        echo "<label for='nickname'> Nickname: </label>";
        echo "<input type='text' name='nickname' placeholder='Enter your Nickname' required><br><br>"; 
        echo "Select type of Quiz:";
        echo "<br> <br>";
        ?>
        <input type='submit' name='submit' value='History' onclick="subjects.action='historyQn.php';return true;">
        <input type='submit' name='submit' value="Singapore Geography" onclick="subjects.action='geographyQn.php';  return true;">
        <?php
        echo "</form>";
    } else {
        echo "You have come to the end of the quiz. Thank you for taking the quiz!";
    }
    ?>

</body>
</html>