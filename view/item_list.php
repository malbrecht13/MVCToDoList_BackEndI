<?php include('header.php'); ?>
    
    <form action="." method="get">
        <input type="hidden" name="action" value="list_items">
        <div id="category-select-div">
            <label for="select-box">Category</label>
            <select name="category_id" id="select-box">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category['categoryID'] ?>">
                        <?= $category['categoryName'] ?>
                    </option>
                <?php endforeach; ?>    
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <div id="table-div">
    <table class="table table-bordered">
        <tr class="bg-primary text-center">
            <th>Title</th>
            <th>Description</th>
            <th>Category</th>
            <th>&nbsp;</th>
        </tr>
        <tbody>
            <?php foreach ($items as $item) : ?>
                <tr>
                    <td><?= $item['Title']; ?></td>
                    <td><?= $item['Description']; ?>
                    <td><?= $item['categoryName']; ?>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action" value="delete_item">
                            <input type="hidden" name="itemNum" value="<?= $item['ItemNum']; ?>">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="link-div container">
        <a class="text-center" href="add_item_form.php">Add Another Item To List</a><br>
        <a class="text-center" href="category_list.php">View/Edit Categories</a>
     </div>
    
    

<?php include('footer.php'); ?>