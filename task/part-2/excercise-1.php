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
            <h6 class="fw-bold">Generate a random character from a -k</h6>
            <ol>
                <li>Create a 4 x 5 table</li>
                <li>Display all the random characters inside the table</li>
                <li>Highlight all the character that belongs to the even column</li>
            </ol>
            
            <div class="table-container1">
                <table>
                    <tr>
                    <th>a</th>
                    <th>b</th>
                    <th>c</th>
                    <th>d</th>
                    <th>e</th>
                    <th>f</th>
                    <th>g</th>
                    <th>h</th>
                    <th>i</th>
                    <th>j</th>
                    <th>k</th>
                    </tr>
                    <tr>
                    <td>0</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    </tr>
                </table>
            </div>

            <div class="table-container">
                <table>
                    <tr>
                    <td class="bg-success bg-opacity-50">A</td>
                    <td class="bg-success bg-opacity-50">C</td>
                    <td class="bg-success bg-opacity-50">E</td>
                    <td class="bg-success bg-opacity-50">G</td>
                    <td>h</td>
                    </tr>
                    <tr>
                    <td>f</td>
                    <td class="bg-success bg-opacity-50">A</td>
                    <td>j</td>
                    <td class="bg-success bg-opacity-50">K</td>
                    <td class="bg-success bg-opacity-50">A</td>
                    </tr>
                    <tr>
                    <td>f</td>
                    <td>h</td>
                    <td class="bg-success bg-opacity-50">I</td>
                    <td>j</td>
                    <td>d</td>
                    </tr>
                    <tr>
                    <td>b</td>
                    <td>b</td>
                    <td>b</td>
                    <td>b</td>
                    <td>b</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-7 ps-5">
            <h6 class="fw-bold pb-3">Solution</h6>
            <?php

                // generate random characters
                function generateRandomCharacter() {
                    global $characters;
                    $randomIndex = array_rand($characters);
                    return $characters[$randomIndex];
                }

                // arr of characters and integers
                $characters = array('a','b','c','d','e','f','g','h','i','j','k');
                $integers = array(0,1,2,3,4,5,6,7,8,9,10);
                
                // Create table
                echo "<h6 class='fw-bold'> Odd/Even Column </h6>";
                echo "<table>";
                // header row
                echo "<tr>";
                foreach ($characters as $char) {
                    echo "<th>$char</th>";
                }
                echo "</tr>";

                // data rows
                echo "<tr>";
                foreach ($integers as $num) {
                    echo "<td>$num</td>";
                }
                echo "</tr>";
                echo "</table>";
                echo "<br class='my-3'>";

                // create 4x5 table with random characters and highlight even columns
                echo "<table>";
                for ($row = 1; $row <= 4; $row++) {
                    echo "<tr>";
                    for ($col = 1; $col <= 5; $col++) {
                        $randomCharacter = generateRandomCharacter();
                            $index = array_search($randomCharacter, $characters);
                            if ($index % 2 == 0) {
                                $randomCharacter = "<b>".strtoupper($randomCharacter)."</b>";
                            }
                        echo "<td>".$randomCharacter."</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            ?>
        </div>
    </div>
</div>
<?php
    include('../../layouts/footer.php');
?>
