<?php
/**
 * about.php
 *
 * Content for About us page
 *
 * @version    1.2 2011-02-03
 * @package    Smithside Auctions
 * @copyright  Copyright (c) 2011 Smithside Auctions
 * @license    GNU General Public License
 * @since      Since Release 1.0
 */
// Get the contact information
$items = array();
$items[] = new Contact(array('first_name'=>'Martha',
 'last_name'=>'Smith', 
 'position'=>'none', 
 'email'=>'martha@example.com', 
 'phone'=>''));
$items[] = new Contact(array('first_name'=>'George',
 'last_name'=>'Smith', 
 'position'=>'none', 
 'email'=>'george@example.com', 
 'phone'=>'515-555-1236'));
$items[] = new Contact(array('first_name'=>'Jeff',
 'last_name'=>'Meyers', 
 'position'=>'hip hop expert for shure', 
 'email'=>'jeff@example.com', 
 'phone'=>''));
$items[] = new Contact(array('first_name'=>'Peter',
 'last_name'=>'Meyers', 
 'position'=>'none', 
 'email'=>'peter@example.com', 
 'phone'=>'515-555-1237'));
$items[] = new Contact(array('first_name'=>'Sally',
 'last_name'=>'Smith', 
 'position'=>'none', 
 'email'=>'sally@example.com', 
 'phone'=>'515-555-1235'));
$items[] = new Contact(array('first_name'=>'Sarah',
 'last_name'=>'Finder', 
 'position'=>'Lost Soul', 
 'email'=>'finder@a.com', 
 'phone'=>'555-123-5555'));

?>
<h1>About Us</h1>
<p>We are all happy to be a part of this. Please contact any of us with questions.</p>

<ul class="ulfancy">
  <?php foreach ($items as $i=>$item) : ?>
    <li class="row<?php echo $i % 2; ?>">
      <h2><?php echo $item->name(); ?></h2>
      <p>Position: <?php echo $item->getPosition(); ?><br />
      <?php echo $item->getEmail(); ?><br />
      Phone: <?php echo $item->getPhone(); ?><br /></p>
    </li>
  <?php endforeach; ?>
</ul>