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
$items = Contact::getContacts();
?>
<h1>About Us<a class="button" href="index.php?content=contactmaint&id=0">Add</a></h1>
<p>We are all happy to be a part of this. Please contact any of us with questions.</p>

<ul class="ulfancy">
  <?php foreach ($items as $i=>$item) : ?>
    <li class="row<?php echo $i % 2; ?>">
      <h2><?php echo htmlspecialchars($item->name()); ?></h2>
      <p>Position: <?php echo htmlspecialchars($item->getPosition()); ?><br />
      <?php echo htmlspecialchars($item->getEmail()); ?><br />
      Phone: <?php echo htmlspecialchars($item->getPhone()); ?><br /></p>
    </li>
  <?php endforeach; ?>
</ul>