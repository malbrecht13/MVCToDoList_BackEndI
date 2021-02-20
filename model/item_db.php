<?php
    function get_items_by_category($category_id) {
        if(!$category_id) {
            get_items();
        } else {
            global $db;
            $query = 'SELECT * FROM ToDoItems
                  WHERE categoryID = :category_id
                  ORDER BY Title';
            $statement = $db->prepare($query);
            $statement->bindValue(':category_id', $category_id);
            $statement->execute();
            $items = $statement->fetchAll();
            $statement->closeCursor();
            return $items;
        }
        
    }

    function get_items() {
        global $db;
        $query = 'SELECT *
                FROM ToDoItems
                ORDER BY categoryID, Title';
        $statement = $db->prepare($query);
        $statement->execute();
        $items = $statement->fetchAll();
        $statement->closeCursor();
        return $items;
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
?>