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
            <h6 class="fw-bold">2. Manipulation of multidimensional array</h6>
            <ol>
                <li>Create a 4x4 table</li>
                <li>Generate a random number from 1 - 100</li>
                <li>The number generated should always be unique</li>
                <li>Sum up the number per column and row</li>
            </ol>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-7 ps-5">
            <h6 class="fw-bold pb-3">Solution</h6>
            <?php
                // Create a 4x4 table
                $table = array(
                    array(0, 0, 0, 0),
                    array(0, 0, 0, 0),
                    array(0, 0, 0, 0),
                    array(0, 0, 0, 0)
                );
                
                // Generate unique random numbers from 1 to 100
                $numbers = array();
                while(count($numbers) < 16){
                    $num = mt_rand(1, 100);
                    if(!in_array($num, $numbers)){
                    $numbers[] = $num;
                    }
                }
                
                // Fill the table with the random numbers
                for($i = 0; $i < 4; $i++){
                    for($j = 0; $j < 4; $j++){
                    $table[$i][$j] = $numbers[$i * 4 + $j];
                    }
                }
                
                // Calculate the sum of each row and column
                $rowSum = array(0, 0, 0, 0);
                $colSum = array(0, 0, 0, 0);
                for($i = 0; $i < 4; $i++){
                    for($j = 0; $j < 4; $j++){
                    $rowSum[$i] += $table[$i][$j];
                    $colSum[$j] += $table[$i][$j];
                    }
                }
                
                // Print the table and the sums
                echo "Table: <br/>";
                for($i = 0; $i < 4; $i++){
                    for($j = 0; $j < 4; $j++){
                    echo $table[$i][$j] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                    echo "| <span class='fw-bold'>" . $rowSum[$i] . "</span> <br/>";
                }
                echo "<span class='fw-bold'>" . $colSum[0] . "</span>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<span class='fw-bold'>" . $colSum[1] . "</span>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<span class='fw-bold'>" . $colSum[2] . "</span>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "<span class='fw-bold'>" . $colSum[3] . "</span>" . " <br/>";
            ?>
        </div>
    </div>
</div>
<?php
    include('../../layouts/footer.php');
?>
