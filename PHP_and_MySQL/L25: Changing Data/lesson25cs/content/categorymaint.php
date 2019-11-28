<?php
/**
 * categorymaint.php
 *
 * Maintenance for the Categories table
 *
 * @version  1.2 2011-02-03
 * @package  Smithside Auctions
 * @copyright  Copyright (c) 2011 Smithside Auctions
 * @license  GNU General Public License
 * @since    Since Release 1.0
 */
$item = new Category;
?>
<h1>Category Maintenance</h1>

<form action="index.php?content=categories" method="post" name="maint" id="maint">

  <fieldset class="maintform">
    <legend>Add a Category</legend>
    <ul>
    <li><label for="cat_name" class="required">Category</label><br />
      <input type="text" name="cat_name" id="cat_name" class="required" 
      value="<?php echo $item->getCat_name(); ?>" /></li>
    <li><label for="cat_description">Description</label><br />
      <textarea rows="5" cols="60" name="cat_description" 
      id="cat_description"><?php echo $item->getCat_description(); ?></textarea></li>
    <li><label for="cat_image" >Image</label><br />
      <input type="text" name="cat_image" id="cat_image" 
      value="<?php echo $item->getCat_image(); ?>" /></li>
    </ul>
    
    <?php 
    // create token
    $salt = 'SomeSalt';
    $token = sha1(mt_rand(1,1000000) . $salt); 
    $_SESSION['token'] = $token;
    ?>
    <input type="hidden" name="cat_id" id="cat_id" value="<?php echo $item->getCat_id(); ?>" />
    <input type="hidden" name="task" id="task" value="category.maint" />
    <input type='hidden' name='token' value='<?php echo $token; ?>'/>
    <input type="submit" name="save" value="Save" />
    <a class="cancel" href="index.php?content=categories">Cancel</a>
  </fieldset>
</form>
