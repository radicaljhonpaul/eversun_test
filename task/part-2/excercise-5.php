<?php
    include('../../layouts/header.php');
?>
<style>
    .table-container {
    margin: 20px;
    }

    table {
    border-collapse: collapse;
    width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: center;
        border: 1px solid #000;
    }

    th {
        font-weight: normal;
    }

    .even{
        font-weight: bold;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-12">
            <?php
                include('../../layouts/breadcrumb.php');
            ?>
        </div>

        <!-- Instruction for the task -->
        <div class="col-xs-12 col-md-6 col-lg-4">
            <h6 class="fw-bold">5. Using a PHP POST method, ask the user to input 2 numbers</h6>
            <ol>
                <li>Create a Grid using 2 inputs as the length and width.</li>
                <li>Insert random CONSONANT letters into the grid</li>
                <li>Display the grid in table</li>
            </ol>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-7 ps-5">
            <h6 class="fw-bold pb-3">Solution</h6>
            
            <?php

                // Check if form is submitted
                if(isset($_POST['submit'])){
                // Get user input
                $num1 = (int)$_POST['num1'];
                $num2 = (int)$_POST['num2'];

                // Define an array of consonant letters
                $consonants = array('B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z');

                // Initialize grid array
                $grid = array();

                // Generate random consonant letters for each cell in grid
                for($i = 0; $i < $num1; $i++){
                    $row = array();
                    for($j = 0; $j < $num2; $j++){
                    $row[] = $consonants[array_rand($consonants)];
                    }
                    $grid[] = $row;
                }

                // Display grid in a table
                echo "<table border='1'>";
                foreach($grid as $row){
                    echo "<tr>";
                    foreach($row as $cell){
                    echo "<td>" . $cell . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";

                } else {
                // Display input form
                echo "<form method='post'>";
                echo "<label>Number 1: </label>";
                echo "<input class='form-control' type='text' name='num1'> ";
                echo "<label>Number 2: </label>";
                echo "<input class='form-control' type='text' name='num2'> ";
                echo "<button class='btn btn-outline-primary mt-3' type='submit' name='submit'>Generate Grid</button>";
                echo "</form>";
                }

                ?>

        </div>
    </div>
</div>
<?php
    include('../../layouts/footer.php');
?>
