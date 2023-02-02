
<html>
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
    // session_start ();

    if ($_POST ["submit"] == "Singapore Geography") {
        echo "<h1>Singapore Geography Test</h1>";
    }

    $score = 0;
    if(isset($_POST["score"])){
        $score = $_POST["score"];
    }

    $q1 = $q2 = $q3 = $q4 = $q5 = 0;

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

    if ($_POST ["submit"] == "Singapore Geography")
    {
        $question1 = new Geography ($q1);
        $question2 = new Geography ($q2);
        $question3 = new Geography ($q3);
        $question4 = new Geography ($q4);
        $question5 = new Geography ($q5);
    }
    
    // Question 1
    echo "<form action='results.php' method='POST'>";
    echo "<div id='element1'>";
    echo "<h2> Question 1: </h2>";
    echo "<b>";
    echo $question1->get_questions ();
    echo "</b>";
    echo "<br>";

    if ($_POST ["submit"] == "Singapore Geography") {
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

    if ($_POST ["submit"] == "Singapore Geography") {
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
    if ($_POST ["submit"] == "Singapore Geography") {
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
    if ($_POST ["submit"] == "Singapore Geography") {
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
    if ($_POST ["submit"] == "Singapore Geography") {
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
class Geography 
{
    private $question;
    private $answer;
    private $choices;

    function __construct ($number)
    {
        $geographyArray = file ("geographyQns.txt", FILE_IGNORE_NEW_LINES);

        switch ($number)
        {
            case 1:
                $this->question = $geographyArray [0];
                $this->answer = "Tropical";
                break;
            case 2:
                $this->question = $geographyArray [1];
                $this->answer = "Monsoon";
                break;
            case 3:
                $this->question = $geographyArray [2];
                $this->answer = "No";
                break;
            case 4:
                $this->question = $geographyArray [3];
                $this->answer = "Northern";
                break;
            case 5:
                $this->question = $geographyArray [4];
                $this->choices = array ("50 island", "63 island", "78 island", "47 island");
                $this->answer = "63 island";
                break;
            case 6:
                $this->question = $geographyArray [5];
                $this->choices = array ("GMT+5", "GMT+8", "GMT+9", "GMT-6");
                $this->answer = "GMT+8";
                break;
            case 7:
                $this->question = $geographyArray [6];
                $this->choices = array ("March to August", "September to December", "November to February", "January to March");
                $this->answer = "November to February";
                break;
            case 8:
                $this->question = $geographyArray [7];
                $this->choices = array ("22 degree celcius to 30 degree celcius", "25 degree celcius to 32 degree celcius", "25 degree celcius", "28 degree celcius");
                $this->answer = "25 degree celcius to 32 degree celcius";
                break;
            case 9:
                $this->question = $geographyArray [8];
                $this->choices = array ("March to August", "September to December", "November to February", "July to October");
                $this->answer = "July to October";
                break;
            default:
                $this->question = $geographyArray [9];
                $this->choices = array ("95", "75", "96", "60");
                $this->answer = "95";
        }
    }

    function get_questions ()
    {
        return $this->question;
    }

    function get_choices ()
    {
        return $this->choices;
    }

    function get_answers ()
    {
        return $this->answer;
    }
}
?>