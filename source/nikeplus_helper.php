<?php

require_once('workflows.php');

$wf = new Workflows();
$q = trim(strtolower($argv[1]));
$parts = explode(' ', $q);

if ($parts[0] == '') {
    $wf->result('alfrednikeplusworkflow.me', '', 'Nike+ Me', 'Search my nike+ summary', 'icon.png', 'no', ' me');
    $wf->result('alfrednikeplusworkflow.activities', '', 'Nike+ Activities', 'Search my nike+ activities', 'icon.png', 'no', ' activities');
    echo $wf->toxml();
}
