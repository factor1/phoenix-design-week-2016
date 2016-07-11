<?php
/*-----------------------------------------------------------------------------
  Adds thumbnail support and additional thumbnail sizes
-----------------------------------------------------------------------------*/

if( function_exists('prelude_features') ){
  // Use add_image_size below to add additional thumbnail sizes
  add_image_size('profile-picture', 320, 320, array('center','center'));
}
