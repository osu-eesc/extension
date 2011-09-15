<?php
// $Id: template.php,v 1.5 2010/09/17 21:36:06 eternalistic Exp $

/**
 * Changed breadcrumb separator
 */
function acquia_prosper_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">'. implode(' &rarr; ', $breadcrumb) .'</div>';
  }
}


/**
 * Theme override for theme_menu_item()
 * Adds unique classes and ids for menu items
 * Can be used for image replacement
 */
function eesc_prosper_menu_item($link, $has_children, $menu = '', $in_active_trail = FALSE, $extra_class = NULL) {
  $class = ($menu ? 'expanded' : ($has_children ? 'collapsed' : 'leaf'));
  if (!empty($extra_class)) {
    $class .= ' '. $extra_class;
  }
  if ($in_active_trail) {
    $class .= ' active-trail';
  }
 
  // Add unique identifier
  static $item_id = 0;
  $item_id += 1;
  $id .= ''. 'menu-item-custom-id-' . $item_id;
  // Add semi-unique class
  $class .= ' ' . preg_replace("/[^a-zA-Z0-9]/", "", strip_tags($link));
 
  return '<li class="'. $class .'" id="' . $id . '">'. $link . $menu ."</li>\n";
}

/**
 * Theme override for theme_preprocess_page()
 * Adds template suggestion per content type
 * Also set a variable for a taxonomy term and tid 
 * for display on page-news_story.tpl.php
 */
function extension_preprocess_page(&$vars, $hook) {
	if (isset($vars['node'])) {
   $vars['template_files'][] = 'page-'. $vars['node']->type; 
	}
	
	if ($vars['node']->taxonomy) {
		foreach($vars['node']->taxonomy AS $tax_term) {
			$vars['story_vid']  = $tax_term->vid;
				if ($vars['story_vid'] == 2) {
					$vars['story_taxonomy']  = t($tax_term->name);
					$vars['story_tid']  = t($tax_term->tid);
				}
		}
	}
}
function extension_date_all_day_label() {
return '';
}