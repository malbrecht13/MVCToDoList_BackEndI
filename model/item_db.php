<?php
    function get_items_by_category($category_id) {
        global $db;
        $query = 'SELECT * FROM ToDoItems
                  WHERE categoryID = :category_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        $items = $statement->fetchAll();
        $statement->closeCursor();
        return $items;
    }

    function get_item($item_id) {
        global $db;
        $query = 'SELECT *
                FROM ToDoItems
                WHERE ItemNum = :item_id';
        $statement = $db->prepare($query);
        $statement->execute();
        $item = $statement->fetch();
        $statement->closeCursor();
        return $item;
    }

    function delete_item($item_num) {
        global $db;
        $query = 'DELETE FROM ToDoItems
                    WHERE ItemNum = :item_num';
        $statement = $db->prepare($query);
        $statement->bindValue(':item_num', $item_num);
        $statement->execute();
        $statement->closeCursor();
        
    }

    function add_item($category_id, $title, $description) {
        global $db;
        $query = 'INSERT INTO ToDoItems (Title, Description, categoryID)
                    VALUES (:title, :description, 
                    WHERE categoryID = :category_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':category_id', $category_name);
        $statement->execute();
        $statement->closeCursor();
    }
