<?php
chk_login();
if (isset($_GET['act'])) {
    $a = $_GET['act'];
    switch ($a) {
        case 'detail':
            include('modules/product/detail.php');
            break;
        case 'insert':
            include('modules/product/insert.php');
            break;
        case 'xl_insert':
            include('modules/product/xl_insert.php');
            break;
        case 'edit':
            include('modules/product/edit.php');
            break;
        case 'xl_edit':
            include('modules/product/xl_edit.php');
            break;
        case 'delete':
            include('modules/product/delete.php');
            break;
        default:
            include('modules/product/list.php');
            break;
    }
} else {
    include('modules/product/list.php');
}