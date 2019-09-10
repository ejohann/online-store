<div id="bodyleft">
    <h3>Content Management</h3>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?view_all_categories">View All Categories</a></li>
        <li><a href="index.php?view_all_sub_categories">View All Sub-categories</a></li>
    </ul>
</div>

<?php 
    if(isset($_GET['view_all_categories'])){
        include_once("category.php");
    }
    if(isset($_GET['view_all_sub_categories'])){
        include_once("sub_category.php");
    }

?>