<?php
    include('../../layouts/header.php');
?>
<style>
    .pattern {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .row {
        display: flex;
        flex-direction: row;
    }

    .col {
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 16px;
        font-weight: bold;
        margin: 5px;
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
            <h6 class="fw-bold">4. Create the given pattern</h6>
            
            <div class="pattern">
                <div class="row">
                    <div class="col">1</div>
                    <div class="col">2</div>
                    <div class="col">4</div>
                    <div class="col">8</div>
                    <div class="col">16</div>
                </div>
                <div class="row">
                    <div class="col">2</div>
                    <div class="col">6</div>
                    <div class="col">18</div>
                    <div class="col">54</div>
                    <div class="col">162</div>
                </div>
                <div class="row">
                    <div class="col">3</div>
                    <div class="col">12</div>
                    <div class="col">48</div>
                    <div class="col">192</div>
                    <div class="col">768</div>
                </div>
                <div class="row">
                    <div class="col">4</div>
                    <div class="col">20</div>
                    <div class="col">100</div>
                    <div class="col">500</div>
                    <div class="col">2500</div>
                </div>
                <div class="row">
                    <div class="col">5</div>
                    <div class="col">30</div>
                    <div class="col">180</div>
                    <div class="col">1080</div>
                    <div class="col">6480</div>
                </div>
                <div class="row">
                    <div class="col">6</div>
                    <div class="col">42</div>
                    <div class="col">294</div>
                    <div class="col">2058</div>
                    <div class="col">14406</div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-7 ps-5">
            <h6 class="fw-bold pb-3">Solution</h6>
            
            <?php
                $rows = 6; // number of rows in the pattern
                $cols = 5; // number of columns in the pattern
                $start = 1; // starting value in the pattern
                
                // define the factors for each row
                $factors = array(2, 3, 4, 5, 6, 7);
                
                // loop through each row
                for ($i = 1; $i <= $rows; $i++) {
                
                  // start each row with the initial value
                  $current = $i;
                
                  // loop through each column in the row
                  for ($j = 0; $j < $cols; $j++) {
                
                    // output the current value in the row
                    echo $current . " ";
                
                    // multiply the current value by the factor for this row
                    $current *= $factors[$i-1];
                  }
                
                  // end the row with a line break
                  echo "<br>";
                
                }
            ?>


        </div>
    </div>
</div>
<?php
    include('../../layouts/footer.php');
?>
