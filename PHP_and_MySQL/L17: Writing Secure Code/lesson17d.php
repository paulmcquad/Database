<?php $myClass = filter_input(INPUT_GET, 'class', FILTER_SANITIZE_STRING); ?>
<div class="<?php echo $myClass; ?>">Text goes here</div>

// call with ?class=red to get this result:
// <div class="red">Text goes here</div>
