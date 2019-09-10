<?php if(isset($_GET['view_all_sub_categories'])) : ?>
    <?php include("./inc/init.php"); ?>
    <div id="bodyright">
        <h3>Add New Sub-Category Here</h3>
        <form method="POST">
            <table>
                <tr>
                    <td>Select Category Name: </td>
                    <td>
                        <select type="text" name="category_id" required>
                            <?php 
                               $categories = DB_Helper::allCategories();
                                foreach($categories as $category){
                                    echo "<option value='".$category['id']."'>".$category['category_name']."</option>";
                               }
                            ?>
                        </select>    
                    </td>
                </tr>
                <tr>
                    <td>Enter Sub-Category Name: </td>
                    <td><input type="text" name="sub_category_name" required></td>
                </tr>
            </table>
            <center><button name="add_sub_category">Add Sub-Category</button></center>
        </form>
        <?php 
            if(isset($_POST['add_sub_category'])){
               if(DB_Helper::addSubCategory($_POST['sub_category_name'], $_POST['category_id'])){
                    echo "<script>alert('Sub-Category added successfully!');</script>";
                  }
                else{
                    echo "<script>alert('Sub-Category NOT successfully added!');</script>";
                }
            }
        ?>
    </div>
<?php else : ?>
   
<?php endif; ?>