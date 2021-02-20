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

    // if($isset(getCategories())) $action = 'edit_categories';

    switch($action) {
        case 'list_items':
            $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
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
        case 'add_item':
            $categories = get_categories();
            include('view/add_item_form.php');
            break;
        case 'edit_categories':
            $categories = get_categories();
            include('view/category_list.php'); 
            break;
        case 'add_category_name':
            $name = filter_input(INPUT_POST, 'cat_name', FILTER_SANITIZE_STRING);
            add_category($name);
            // try {
            //     add_category($name);
            // } catch(NameException $e) {
            //     if($name) {
            //         $message = "There is already a category by that name";
            //         header(`Location: view/category_list.php?message=${message}`);
            //     }
            // }
            header('Location: .?action=list_items');
            break;
        case 'insert_item':
            if($category_id && $title && $description) {
                $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
                $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
                $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
                add_item($category_id, $title, $description);
                include('.');
            } else echo $title;
            
            
            break;
        default:
            $category_id = 0;
            include('.');
            break;
    }
?>