<?php

$current_url = "$_SERVER[REQUEST_URI]";
$uri = explode("/", $current_url);
$link = end($uri);
$task = explode(".", $link);
$taskName = explode("-", $task[0]);

$part = $uri[3];
$partNo = explode("-", $part);

// Define the HTML for the header
$breadcrumb = <<<HTML
<!-- Optional Bootstrap JavaScript -->
<div class="col-xs-12 col-md-6 col-lg-12 py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../../index.php">Table of Contents</a></li>
            <li class="breadcrumb-item active text-capitalize fw-bold" aria-current="page"> $partNo[0] $partNo[1] - $taskName[0] $taskName[1] </li>
        </ol>
    </nav>
</div>
HTML;

// Output the header
echo $breadcrumb;
?>