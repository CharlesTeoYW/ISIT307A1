<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        // To show question question 2, and make question 1 disappear.
        function toShow2 () {
            document.getElementById ("element2").style.display = "block";
            document.getElementById ("element1").style.display = "none";
        }

        function toShow3 () {
            document.getElementById ("element3").style.display = "block";
            document.getElementById ("element2").style.display = "none";
        }

        function toShow4 () {
            document.getElementById ("element4").style.display = "block";
            document.getElementById ("element3").style.display = "none";
        }

        function toShow5 () {
            document.getElementById ("element5").style.display = "block";
            document.getElementById ("element4").style.display = "none";
        }

        function toNone2 () {
            document.getElementById ("element2").style.display = "none";
            document.getElementById ("element1").style.display = "block";
        }

        function toNone3 () {
            document.getElementById ("element3").style.display = "none";
            document.getElementById ("element2").style.display = "block";
        }

        function toNone4 () {
            document.getElementById ("element4").style.display = "none";
            document.getElementById ("element3").style.display = "block";
        }

        function toNone5 () {
            document.getElementById ("element5").style.display = "none";
            document.getElementById ("element4").style.display = "block";
        }
    </script>

<?php 

    if($_POST ["submit"] == "History") 
    {
        echo "<h1> History Test</h1>";
    }

    $score = 0;
    if(isset($_POST["score"]))
    {
        $score = $_POST["score"];
    }

    $q1 = $q2 = $q3 = $q4 = $q5 = 0;

    //Assign a unique number between 1-10 for $q1 to $q5
    $q1 = rand (1, 10);
    do {
        $q2 = rand (1, 10);
    } while ($q1 == $q2);

    do {
        $q3 = rand (1, 10);
    } while ($q3 == $q2 || $q3 == $q1);

    do {
        $q4 = rand (1, 10);
    } while ($q4 == $q3 || $q4 == $q2 || $q4 == $q1 );

    do {
        $q5 = rand (1, 10);
    } while ($q5 == $q4 || $q5 == $q3 || $q5 == $q2 || $q5 == $q1);

    if ($_POST ["submit"] == "History")
    {
        $question1 = new History ($q1);
        $question2 = new History ($q2);
        $question3 = new History ($q3);
        $question4 = new History ($q4);
        $question5 = new History ($q5);
    }

    //Display Question 1
    echo "<form action='results.php' method='POST'>";
    echo "<div id='element1'>";
    echo "<h2> Question 1: </h2>";
    echo "<b>";
    echo $question1->get_questions ();
    echo "</b>";
    echo "<br>";

    if ($_POST ["submit"] == "History") 
    {
        // if there is choices, echo out the choices, else echo out text 
        if ($question1->get_choices ()) { 
            echo "Answer: ";
            echo "<br>";
            echo '<input type="radio" id="1_1" name="question1" value="'.$question1->get_choices()[0].'">';
            echo '<label for="1_1">'.$question1->get_choices()[0].'</label><br>';
            
            echo '<input type="radio" id="1_2" name="question1" value="'.$question1->get_choices()[1].'">';
            echo '<label for="1_2">'.$question1->get_choices()[1].'</label><br>';
            
            echo '<input type="radio" id="1_3" name="question1" value="'.$question1->get_choices()[2].'">';
            echo '<label for="1_3">'.$question1->get_choices()[2].'</label><br>';
            
            echo '<input type="radio" id="1_4" name="question1" value="'.$question1->get_choices()[3].'">';
            echo '<label for="1_4">'.$question1->get_choices()[3].'</label><br>';
        } else {
            echo '<label for="1_1">Answer: </label>';
            echo '<input type="text" id="1_1" name="question1"><br>';
        }
    }

    ?>
    <input type="hidden" name="answer1" value="<?php echo $question1->get_answers(); ?>">
    <br>
    <button type="button" onclick="toShow2 ()">Next</button>  
    </div>

    <?php
    // Question 2
    echo "<div style='display: none' id='element2'>";
    echo "<h2> Question 2: </h2>";
    echo "<b>";
    echo $question2->get_questions ();
    echo "</b>";
    echo "<br>";

    if ($_POST ["submit"] == "History") 
    {
        if ($question2->get_choices ()) {
            echo "Answer: ";
            echo "<br>";
            echo '<input type="radio" id="2_1" name="question2" value="'.$question2->get_choices()[0].'">';
            echo '<label for="2_1">'.$question2->get_choices()[0].'</label><br>';
            
            echo '<input type="radio" id="2_2" name="question2" value="'.$question2->get_choices()[1].'">';
            echo '<label for="2_2">'.$question2->get_choices()[1].'</label><br>';
            
            echo '<input type="radio" id="2_3" name="question2" value="'.$question2->get_choices()[2].'">';
            echo '<label for="2_3">'.$question2->get_choices()[2].'</label><br>';
            
            echo '<input type="radio" id="2_4" name="question2" value="'.$question2->get_choices()[3].'">';
            echo '<label for="2_4">'.$question2->get_choices()[3].'</label><br>';
        } else {
            echo '<label for="2_1">Answer: </label>';
            echo '<input type="text" id="2_1" name="question2"><br>';
        }
    }
    ?>
    <input type="hidden" name="answer2" value="<?php echo $question2->get_answers(); ?>">
    <br>
    <button type="button" onclick="toNone2 ()">Prev</button>
    <button type="button" onclick="toShow3 ()">Next</button>    
    </div>
    
    <?php
    // Question 3
    echo '<div style="display: none" id="element3">';
    echo "<h2> Question 3: </h2>";
    echo "<b>";
    echo $question3->get_questions ();
    echo "</b>";
    echo "<br>";
    if ($_POST ["submit"] == "History") 
    {
        if ($question3->get_choices()) {
            echo "Answer: ";
            echo "<br>";
            echo '<input type="radio" id="3_1" name="question3" value="'.$question3->get_choices()[0].'">';
            echo '<label for="3_1">'.$question3->get_choices()[0].'</label><br>';
            
            echo '<input type="radio" id="3_2" name="question3" value="'.$question3->get_choices()[1].'">';
            echo '<label for="3_2">'.$question3->get_choices()[1].'</label><br>';
            
            echo '<input type="radio" id="3_3" name="question3" value="'.$question3->get_choices()[2].'">';
            echo '<label for="3_3">'.$question3->get_choices()[2].'</label><br>';
            
            echo '<input type="radio" id="3_4" name="question3" value="'.$question3->get_choices()[3].'">';
            echo '<label for="3_4">'.$question3->get_choices()[3].'</label><br>';
        } else {
            echo '<label for="3_1">Answer: </label>';
            echo '<input type="text" id="3_1" name="question3"><br>';
        }
    }
    ?>
    <input type="hidden" name="answer3" value="<?php echo $question3->get_answers(); ?>">
    <br>
    <button type="button" onclick="toNone3 ()">Prev</button>
    <button type="button" onclick="toShow4 ()">Next</button>        
    </div>

    <?php
    // Question 4
    echo '<div style="display: none" id="element4">';
    echo "<h2> Question 4: </h2>";
    echo "<b>";
    echo $question4->get_questions ();
    echo "</b>";
    echo "<br>";
    if ($_POST ["submit"] == "History") 
    {
        if ($question4->get_choices ()) {
            echo "Answer: ";
            echo "<br>";
            echo '<input type="radio" id="4_1" name="question4" value="'.$question4->get_choices()[0].'">';
            echo '<label for="4_1">'.$question4->get_choices()[0].'</label><br>';
            
            echo '<input type="radio" id="4_2" name="question4" value="'.$question4->get_choices()[1].'">';
            echo '<label for="4_2">'.$question4->get_choices()[1].'</label><br>';
            
            echo '<input type="radio" id="4_3" name="question4" value="'.$question4->get_choices()[2].'">';
            echo '<label for="4_3">'.$question4->get_choices()[2].'</label><br>';
            
            echo '<input type="radio" id="4_4" name="question4" value="'.$question4->get_choices()[3].'">';
            echo '<label for="4_4">'.$question4->get_choices()[3].'</label><br>';
        } else {
            echo '<label for="4_1">Answer: </label>';
            echo '<input type="text" id="4_1" name="question4"><br>';
        }
    }
    ?>
    <input type="hidden" name="answer4" value="<?php echo $question4->get_answers (); ?>">
    <br>
    <button type="button" onclick="toNone4 ()">Prev</button>
    <button type="button" onclick="toShow5 ()">Next</button>    
    </div>

    <?php
    // Question 5
    echo '<div style="display: none" id="element5">';
    echo "<h2> Question 5: </h2>";
    echo "<b>";
    echo $question5->get_questions ();
    echo "</b>";
    echo "<br>";
    if ($_POST ["submit"] == "History") 
    {
        if ($question5->get_choices ()) {
            echo "Answer: ";
            echo "<br>";
            echo '<input type="radio" id="5_1" name="question5" value="'.$question5->get_choices()[0].'">';
            echo '<label for="5_1">'.$question5->get_choices()[0].'</label><br>';
            
            echo '<input type="radio" id="5_2" name="question5" value="'.$question5->get_choices()[1].'">';
            echo '<label for="5_2">'.$question5->get_choices()[1].'</label><br>';
            
            echo '<input type="radio" id="5_3" name="question5" value="'.$question5->get_choices()[2].'">';
            echo '<label for="5_3">'.$question5->get_choices()[2].'</label><br>';
            
            echo '<input type="radio" id="5_4" name="question5" value="'.$question5->get_choices()[3].'">';
            echo '<label for="5_4">'.$question5->get_choices()[3].'</label><br>';
        } else {
            echo '<label for="5_1">Answer: </label>';
            echo '<input type="text" id="5_1" name="question5"><br>';
        }
    }
    ?>
    <input type="hidden" name="answer5" value="<?php echo $question5->get_answers (); ?>">
    <br>
    <button type="button" onclick="toNone5 ()">Prev</button> &nbsp
    <input type="hidden" name="nickname" value="<?php echo $nickname?>">
    <input type="hidden" name="score" value="<?php echo $score?>"><br><br>
    <input type="submit" name ="submit" value="Submit">  
    </div>
</form>
</body>
</html>

<?php
class History
{
    private $question;
    private $answer;
    private $choices;

    function __construct ($number)
    {
        $historyArray = file("historyQns.txt", FILE_IGNORE_NEW_LINES);

        switch ($number)
        {
            case 1:
                $this -> question = $historyArray[0];
                $this -> answer = "Temasek";
                break;
            case 2:
                $this -> question = $historyArray[1];
                $this -> answer = "1819";
                break;
            case 3: 
                $this -> question = $historyArray[2];
                $this -> answer = "Sang Nila Utama";
                break;
            case 4:
                $this -> question = $historyArray[3];
                $this -> answer = "Anglo-Dutch Treaty";
                break;
            case 5: 
                $this -> question = $historyArray[4];
                $this -> choices = array ("The British", "The Japanese", "The Americans", "The Europeans");
                $this -> answer = "The British";
                break;
            case 6:
                $this -> question = $historyArray[5];
                $this -> choices = array ("Jasvinder Seah", "Iskanda Shah", "Magnus Midbot", "Seong Hyeuk");
                $this -> answer = "Iskanda Shah";
                break;
            case 7:
                $this -> question = $historyArray[6];
                $this -> choices = array ("Penang and Perak", "Malacca and Johore", "Malacca and Penang", "Johore and Perak");
                $this -> answer = "Malacca and Penang";
                break;
            case 8:
                $this -> question = $historyArray[7];
                $this -> choices = array ("Sir Francis Light", "John Crawford", "William Farquhar", "Sir Stamford Raffles");
                $this -> answer = "Sir Stamford Raffles";
                break;
            case 9: 
                $this -> question = $historyArray[8];
                $this -> choices = array ("1945","1943", "1942", "1944");
                $this -> answer = "1942";
                break;
            default:
                $this -> question = $historyArray[9];
                $this -> choices = array ("Malay States", "Malayan Union", "Malaya", "The Straits Settlements");
                $this -> answer = "The Straits Settlements";
        }
    }
    function get_questions()
    {
        return $this -> question;
    }

    function get_choices()
    {
        return $this -> choices;
    }

    function get_answers ()
    {
        return $this -> answer;
    }
}

?>