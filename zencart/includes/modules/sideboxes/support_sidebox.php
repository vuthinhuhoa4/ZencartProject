<?php
/**
 * blank sidebox - allows a blank sidebox to be added to your site
 *
 * @package templateSystem
 * @copyright 2007 Kuroi Web Design
  * @copyright Portions Copyright 2003-2007 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: FACEBOOK_SIDEBOX.php 2007-05-26 kuroi $
 */

  // test if box should display
  $show_support_sidebox = true;

  if ($show_support_sidebox == true) {
      require($template->get_template_dir('tpl_support_sidebox.php',DIR_WS_TEMPLATE, $current_page_base,'sideboxes'). '/tpl_support_sidebox.php');
      $title =  BOX_HEADING_SUPPORT_SIDEBOX;
      $title_link = false;
      require($template->get_template_dir($column_box_default, DIR_WS_TEMPLATE, $current_page_base,'common') . '/' . $column_box_default);
 }
?>