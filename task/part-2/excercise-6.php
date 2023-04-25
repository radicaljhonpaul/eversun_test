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
        <div class="col-xs-12 col-md-6 col-lg-3">
            <h6 class="fw-bold mb-3">6. Fix the code function to output the correct result. Explain your answer</h6>

            <pre>
                function bubbleSort($lists){

                    $length = count($lists);

                    for ($parent=0; $parent < $length ; $parent++) { 
                        # code...
                        for ($child=0; $child < $length - $parent; $child++) { 
                            # code...
                            if($lists[$child] > $lists[$child + 1]){
                                $temp = $lists[$child + 1];
                                $lisp[$child] = $lists[$child + 1];
                                $lists[$child + 1] = $temp;
                            }
                        }
                    }
                }
            </pre>
        
        </div>

        <div class="col-xs-12 col-md-6 col-lg-4">
            <h6 class="fw-bold pb-3">Solution</h6>
            <?php

                function bubbleSort($lists){

                    $length = count($lists);

                    for ($parent=0; $parent < $length ; $parent++) { 
                        # code...
                        for ($child=0; $child < $length - $parent; $child++) { 
                            # code...
                            if($lists[$child] > $lists[$child + 1]){
                                $temp = $lists[$child + 1];
                                $lisp[$child] = $lists[$child + 1];
                                $lists[$child + 1] = $temp;
                            }
                        }
                    }
                }

                function newBubbleSort($lists){
                    $length = count($lists);
                
                    for ($parent = 0; $parent < $length - 1; $parent++) { 
                        for ($child = 0; $child < $length - $parent - 1; $child++) { 
                            if ($lists[$child] > $lists[$child + 1]) {
                                $temp = $lists[$child];
                                $lists[$child] = $lists[$child + 1];
                                $lists[$child + 1] = $temp;
                            }
                        }
                    }
                
                    return $lists;
                }

                // Test Output
                $myArray = array(7, 2, 9, 3, 5);

                echo "<h6> This is the result of the newBubbleSort()</h6>";
                $sortedArray = newBubbleSort($myArray);
                print_r($sortedArray);

                echo "<hr class='my-3'>";

                echo "<h6> This is the result of the bubbleSort(), that has errors</h6>";
                $erroredSortedArray = bubbleSort($myArray);
                print_r($erroredSortedArray);

            ?>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-5">
            <h6 class="fw-bold mb-3">Explaination</h6>

            <ol>
                <li>The outer loop's condition should be $parent < $length - 1 instead of $parent < $length, as the last element is already in its final position after the previous iterations.</li>
                <li>The inner loop's condition should be $child < $length - $parent - 1 instead of $child < $length - $parent, as the last $parent elements are already sorted.</li>
                <li>The line $lisp[$child] = $lists[$child + 1]; assigns the value of $lists[$child + 1] to a non-existent variable $lisp[$child], which should be $lists[$child].</li>
                <li>Also, the line $temp = $lists[$child + 1]; should store the value of $lists[$child] instead of $lists[$child + 1], as the latter will be overwritten in the next line.</li>
                <li>Finally, the function should return the sorted array $lists.</li>
            </ol>
        </div>
    </div>
</div>
<?php
    include('../../layouts/footer.php');
?>
