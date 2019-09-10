<?php if(isset($_GET['view_all_categories'])) : ?>
    <div id="bodyright">
        <h3>Add New Category Here</h3>
        <form method="POST">
            <table>
                <tr>
                    <td>Enter Category Name: </td>
                    <td><input type="text" name="category_name" required></td>
                </tr>
            </table>
            <center><button name="add_category">Add Category</button></center>
        </form>

        <?php 
            if(isset($_POST['add_category'])){
                include("./inc/init.php");
                if(DB_Helper::addCategory($_POST['category_name'])){
                    echo "<script>alert('Category added successfully!');</script>";
                  }
                else{
                    echo "<script>alert('Category NOT successfully added!');</script>";
                }
            }
        ?>
    </div>
<?php else : ?>
   
<?php endif; ?>