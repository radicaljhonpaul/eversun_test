<?php
    include('../../layouts/header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-12">
            <?php
                include('../../layouts/breadcrumb.php');
            ?>
        </div>

        <!-- Instruction for the task -->
        <div class="col-xs-12 col-md-6 col-lg-4">
            <h6 class="fw-bold">3. Create the given pattern</h6>
            
            <table class="mt-4">
                <tr>
                    <td>1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>6</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>8</td>
                    <td>12</td>
                    <td>16</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>10</td>
                    <td>15</td>
                    <td>20</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>8</td>
                    <td>12</td>
                    <td>16</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>6</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                </tr>
            </table>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-7 ps-5">
            <h6 class="fw-bold pb-3">Solution</h6>
            
            <?php
                // Define the size of the matrix
                $size = 5;

                // Generate the matrix
                for ($i = 1; $i <= $size; $i++) {
                    // Print the first half of the row
                    for ($j = 1; $j <= $i; $j++) {
                        echo $i * $j . "&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                    // Move to the next line
                    echo "<br>";
                }

                // Bottom half of matrix
                for ($i = $size - 1; $i >= 1; $i--) {
                    // Print first half -> row
                    for ($j = 1; $j <= $i; $j++) {
                        echo $i * $j . "&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                    // Move to next line
                    echo "<br>";
                }
                ?>
        </div>
    </div>
</div>
<?php
    include('../../layouts/footer.php');
?>
