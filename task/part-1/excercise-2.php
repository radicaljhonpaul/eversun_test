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
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-12">
            <?php
                include('../../layouts/breadcrumb.php');
            ?>
        </div>

        <!-- Instruction for the task -->
        <div class="col-xs-12 col-md-6 col-lg-4">
            <h6 class="fw-bold">2. Create the given pattern (x)</h6>
            <div class="asterisk-container pt-5">
                
                <div class="bottom">
                    <div class="asterisk bottom-left">*</div>
                    <div class="asterisk">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="asterisk">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="asterisk bottom-right">*</div>
                </div>

                <div class="bottom">
                    <div class="asterisk">5</div>
                    <div class="asterisk">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="asterisk">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="asterisk">5</div>
                </div>

                <div class="bottom">
                    <div class="asterisk bottom-left">*</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk bottom-right">*</div>
                </div>
                <div class="bottom">
                    <div class="asterisk">3</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk">3</div>
                </div>
                <div class="bottom">
                    <div class="asterisk">*</div>
                    <div class="asterisk">*</div>
                </div>
                <div class="bottom">
                    <div class="asterisk">1</div>
                </div>
                <div class="top">
                    <div class="asterisk">*</div>
                    <div class="asterisk">*</div>
                </div>
                <div class="top">
                    <div class="asterisk">3</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk">3</div>
                </div>
                <div class="top">
                    <div class="asterisk top-left">*</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk">&nbsp;</div>
                    <div class="asterisk top-right">*</div>
                </div>

                <div class="top">
                    <div class="asterisk">5</div>
                    <div class="asterisk">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="asterisk">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="asterisk">5</div>
                </div>

                <div class="top">
                    <div class="asterisk top-left">*</div>
                    <div class="asterisk">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="asterisk">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="asterisk top-right">*</div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-7 ps-5">
            <h6 class="fw-bold pb-3">Solution</h6>
            
            <?php
                function printPattern($size) {
                    // Loop -> row
                    for ($i = $size - 1; $i > 1; $i--) {
                        // Loop -> column of the row
                        for ($j = 1; $j < ($size * 2 - 1); $j++) {
                            // asterisk or blank
                            if($i + $j == $size + 1){
                                if($i == 5 || $i == 3){
                                    echo "&nbsp;". $i;
                                }else{
                                    echo '&nbsp;*&nbsp;';
                                }
                            }else if($j - $i == $size - 1){
                                if($i == 5 || $i == 3){
                                    echo "&nbsp;&nbsp;&nbsp;&nbsp" .$i;
                                }else{
                                    echo '&nbsp;*&nbsp;';
                                }
                            }else {
                                echo "&nbsp;&nbsp;&nbsp;";
                            }
                        }
                        // Print new line
                        echo "<br/>";
                    }

                    // Loop -> row
                    for ($i = 1; $i < $size; $i++) {
                        // Loop -> column of the row
                        for ($j = 1; $j < ($size * 2 - 1); $j++) {
                            // asterisk or blank
                            if ($j == $size && $i == 1) {
                                echo '&nbsp;1&nbsp;';
                            }else if($i + $j == $size + 1){
                                if($i == 5 || $i == 3){
                                    echo "&nbsp;". $i;
                                }else{
                                    echo '&nbsp;*&nbsp;';
                                }
                            }else if($j - $i == $size - 1){
                                if($i == 5 || $i == 3){
                                    echo "&nbsp;&nbsp;&nbsp;&nbsp" .$i;
                                }else{
                                    echo '&nbsp;*&nbsp;';
                                }
                            }else {
                                echo "&nbsp;&nbsp;&nbsp;";
                            }
                        }
                        // Print new line
                        echo "<br/>";
                    }

                    
                }

                $asteriskSize = 7;
                $diamondCount = 0;

                // while ($diamondCount < 2) {
                    printPattern($asteriskSize);
                    $diamondCount++;
                // }
            ?>
        </div>
    </div>
</div>
<?php
    include('../../layouts/footer.php');
?>
