<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'MHSServerModpack',
    'title' => 'MHS Server SMP',
    'version' => '0',
    'priority' => 0,
    'location' => 'mhsservermodpack.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
