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
            <h6 class="fw-bold">3. Create a stack of integers using arrays( First in last out )</h6>
            <ol>
                <li>Create input fields and push a button to insert a new value</li>
                <li>Create a pop button to remove the top value</li>
                <li>Always display the existing stack content</li>
                <li>Do not use pre-defined PHP array functions like array_pop</li>
            </ol>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-7 ps-5">
            <h6 class="fw-bold pb-3">Solution</h6>
            <?php
                // Initialize stack array
                $stack = array();

                // Check if a new value is submitted
                if(isset($_POST['new_value'])){
                    $new_value = $_POST['new_value'];
                    // Push new value to stack if it's a valid integer
                    if(is_numeric($new_value)){
                        array_push($stack, (int)$new_value);
                    }
                }

                // Check if  pop button is clicked
                if(isset($_POST['pop'])){
                    // Pop top val from the stack if != empty
                    if(count($stack) > 0){
                        $popped_value = array_pop($stack);
                    }
                }

                // Display stack
                echo "<pre>";
                echo "Stack Content:\n";
                if(count($stack) > 0){
                    foreach($stack as $value){
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
