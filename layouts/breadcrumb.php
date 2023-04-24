<?php

$current_url = "$_SERVER[REQUEST_URI]";
$uri = explode("/", $current_url);
$link = end($uri);
$task = explode(".", $link);
$taskName = explode("-", $task[0]);

// Define the HTML for the header
$breadcrumb = <<<HTML
<!-- Optional Bootstrap JavaScript -->
<div class="col-xs-12 col-md-6 col-lg-12 py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../../index.php">Table of Contents</a></li>
            <li class="breadcrumb-item active text-capitalize" aria-current="page"> $taskName[0] $taskName[1] </li>
        </ol>
    </nav>
</div>
HTML;

// Output the header
echo $breadcrumb;
?>