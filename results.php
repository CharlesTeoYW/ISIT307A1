<html>
<head>
    <h1> Points </h1>
</head>
<body>
<?php
    $score = $currentScore = $correct = $wrong = 0;
    $nickname = $_POST ["nickname"];

    if (isset ($_POST ['question1'])) {
        if ($_POST ['question1'] == $_POST ['answer1']) {
            $correct++; //correct answer 
        } else {
            $wrong++; // wrong answer 
        }
    } else {
        $wrong++; // didnt answer
    }

    if (isset ($_POST ['question2'])) {
        if ($_POST ['question2'] == $_POST ['answer2']) {
            $correct++; //correct answer 
        } else {
            $wrong++; // wrong answer 
        }
    } else {
        $wrong++; // didnt answer
    }

    if (isset ($_POST ['question3'])) {
        if ($_POST ['question3'] == $_POST ['answer3']) {
            $correct++; //correct answer 
        } else {
            $wrong++; // wrong answer 
        }
    } else {
        $wrong++; // didnt answer
    }

    if (isset ($_POST ['question4'])) {
        if ($_POST ['question4'] == $_POST ['answer4']) {
            $correct++; //correct answer 
        } else {
            $wrong++; // wrong answer 
        }
    } else {
        $wrong++; // didnt answer
    }

    if (isset ($_POST ['question5'])) {
        if ($_POST ['question5'] == $_POST ['answer5']) {
            $correct++; //correct answer 
        } else {
            $wrong++; // wrong answer 
        }
    } else {
        $wrong++; // didnt answer
    }

    function calculateScore ($correct, $wrong) {
        $calculate = ($correct * 5) - ($wrong * 3);
        return $calculate;
    }

    $currentScore = calculateScore ($correct, $wrong);

    $score = $_POST['score'] + $currentScore;

    echo "Number of correct: $correct";
    echo "<br>";
    echo "Number of wrong: $wrong"; 
    echo "<br>";
    echo "Your current points from this quiz: $currentScore";
    echo "<br>";
    echo "Total Points: $score";

    // $points = ;

    ?>
    <br><br>
    If you would like to continue with another test: 
    <form name=subjects method='POST' action='History.php'>
    <input type="hidden" name="score" value="<?php echo $score; ?>">
    <input type='submit' name='submit' value='Singapore History' onclick="this.form.target='_blank';return true;">
    <br><br>
    <input type='submit' name='submit' value='Singapore Geography' onclick="subjects.action='geographyQn.php';  return true;">
    
    <br><br>
    If you would like to check the leaderboard for the overall scores of all the players in the quiz
    <br>
    <input type='submit' name='submit' value='Leaderboard' onclick="subjects.action='leaderboard.php';  return true;">
    <br><br>
    If you would like to exit the quiz:
    <br>
    <input type='submit' formaction='a1.php' name='Exit' value='Exit'>
    </form>
</body>
</html>