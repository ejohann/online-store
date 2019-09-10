<?php if(isset($_GET['view_all_categories'])) : ?>
    <div id="bodyright">
        <h3>Add New Category Here</h3>
        <form method="POST">
            <table>
                <tr>
                    <td>Enter Category Name: </td>
                    <td><input type="text" name="category_name"></td>
                </tr>
            </table>
            <center><button name="add_category">Add Category</button></center>
        </form>
    </div>
<?php else : ?>
   
<?php endif; ?>