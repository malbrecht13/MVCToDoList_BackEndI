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
            $category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
            $items = get_items_by_category($category_id);
            $categories = get_categories();
            include('view/item_list.php');
            break;
        case 'delete_item':
            $item_num = filter_input(INPUT_POST, 'itemNum', FILTER_VALIDATE_INT);
            if($item_num) {
                delete_item($item_num);
                include('.');
            }
            break;
    }
?>