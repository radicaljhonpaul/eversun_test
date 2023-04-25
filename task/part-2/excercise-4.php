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
            <h6 class="fw-bold">4. Create a queue of integers using arrays (first in first out )</h6>
            <ol>
                <li>Create input fields and push a button to insert a new value</li>
                <li>Create a pop button to remove the old value</li>
                <li>Always display the existing stack content</li>
                <li>Do not use pre-defined PHP array functions like array_pop</li>
            </ol>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-7 ps-5">
            <h6 class="fw-bold pb-3">Solution</h6>
            <?php
                // Initialize queue array
                $queue = array();

                // Check if a new value was submitted
                if(isset($_POST['new_value'])){
                $new_value = $_POST['new_value'];
                    // Push new value onto queue if it's a valid integer
                    if(is_numeric($new_value)){
                        array_push($queue, (int)$new_value);
                    }
                }

                // Check if pop button was clicked
                if(isset($_POST['pop'])){
                    // Remove oldest value from queue if it's not empty
                    if(count($queue) > 0){
                        $popped_value = $queue[0];
                        array_shift($queue);
                    }
                }

                // Display queue content
                echo "<pre>";
                echo "Queue Content:\n";
                if(count($queue) > 0){
                    foreach($queue as $value){
                        echo $value . "\n";
                    }
                } else {
                    echo "Empty\n";
                }

                // Display the popped value if there was one
                if(isset($popped_value)){
                    echo "Popped Value: " . $popped_value . "\n";
                }

                echo "</pre>";

                // Display form
                echo "<form method='post'>";
                echo "<label>New Value</label>";
                echo "<input class='form-control mb-2' type='text' name='new_value'> ";
                echo "<button class='btn btn-outline-primary' type='submit'>Push</button> ";
                echo "<button class='btn btn-outline-danger' type='submit' name='pop'>Pop</button>";
                echo "</form>";
            ?>
        </div>
    </div>
</div>
<?php
    include('../../layouts/footer.php');
?>
