<?php
    require('model/database.php');
    require('model/category_db.php');
    require('model/item_db.php');

    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if($action == NULL) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
        if ($action == NULL) {
            $action = 'list_items';
        }
    }

    switch($action) {
        case 'list_items':
            $items = get_items_by_category($category_id);
            include('item_list.php');
            break;
    }
?>