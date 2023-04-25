<?php
    include('../../layouts/header.php');
?>
<style>
    .asterisk-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .top {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .bottom {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .asterisk {
        color: black;
        font-size: 30px;
        line-height: 18px;
        margin: 0 30px;
    }
    .top-left {
        transform: rotate(45deg);
    }
    .top-right {
        transform: rotate(-45deg);
    }
    .bottom-left {
        transform: rotate(-45deg);
    }
    .bottom-right {
        transform: rotate(45deg);
    }
</style>
<div class="container">
    <div class="row justify-content-between">
        <div class="col-xs-12 col-md-6 col-lg-12">
            <?php
                include('../../layouts/breadcrumb.php');
            ?>
        </div>

        <!-- Instruction for the task -->
        <div class="col-xs-12 col-md-6 col-lg-3">
            <h6 class="fw-bold">1. Create the given pattern</h6>
            <div class="asterisk-container pt-5">
                <div class="top">
                    <div class="asterisk">*</div>
                </div>
                <div class="top">
                    <div class="asterisk">*</div>
                    <div class="asterisk">*</div>
                </div>
                <div class="top">
                    <div class="asterisk">*</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk">*</div>
                </div>
                <div class="top">
                    <div class="asterisk top-left">*</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk top-right">*</div>
                </div>
                <div class="bottom">
                    <div class="asterisk bottom-left">*</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk bottom-right">*</div>
                </div>
                <div class="bottom">
                    <div class="asterisk">*</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk">*</div>
                </div>
                <div class="bottom">
                    <div class="asterisk">*</div>
                    <div class="asterisk">*</div>
                </div>
                <div class="bottom">
                    <div class="asterisk">*</div>
                </div>
                <div class="top">
                    <div class="asterisk">*</div>
                </div>
                <div class="top">
                    <div class="asterisk">*</div>
                    <div class="asterisk">*</div>
                </div>
                <div class="top">
                    <div class="asterisk">*</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk">*</div>
                </div>
                <div class="top">
                    <div class="asterisk top-left">*</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk top-right">*</div>
                </div>
                <div class="bottom">
                    <div class="asterisk bottom-left">*</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk bottom-right">*</div>
                </div>
                <div class="bottom">
                    <div class="asterisk">*</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk">*</div>
                </div>
                <div class="bottom">
                    <div class="asterisk">*</div>
                    <div class="asterisk">*</div>
                </div>
                <div class="bottom">
                    <div class="asterisk">*</div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-7 ps-5">
            <h6 class="fw-bold pb-3">Solution</h6>
            
            <?php
                function printDiamond($size, $reverse) {
                    // Loop -> row
                    for ($i = 1; $i <= $size; $i++) {
                        // Loop -> column of the row
                        for ($j = 1; $j <= ($size * 2 - 1); $j++) {
                            // asterisk or blank
                            if (($j == $size && $i == 1) || ($i + $j == $size + 1) || ($j - $i == $size - 1)) {
                                echo '&nbsp;*&nbsp;';
                            }else {
                                echo "&nbsp;&nbsp;&nbsp;";
                            } 
                        }
                        // Print new line
                        echo "<br/>";
                    }

                    if ($reverse) {
                        // Loop -> row
                        for ($i = $size - 1; $i >= 1; $i--) {
                            // Loop -> column of the row
                            for ($j = 1; $j <= ($size * 2 - 1); $j++) {
                                // asterisk or blank
                                if (($j == $size && $i == 1) || ($i + $j == $size + 1) || ($j - $i == $size - 1)) {
                                    echo '&nbsp;*&nbsp;';
                                }else {
                                    echo "&nbsp;&nbsp;&nbsp;";
                                }
                            }

                            // Print new line
                            echo "<br/>";
                        }
                    }
                }

                $asteriskSize = 4;
                $diamondCount = 0;

                while ($diamondCount < 2) {
                    printDiamond($asteriskSize, true);
                    $diamondCount++;
                }
            ?>
        </div>
    </div>
</div>
<?php
    include('../../layouts/footer.php');
?>
