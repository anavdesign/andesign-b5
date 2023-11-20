<?php

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function andesign_b5_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface &$form_state, $form_id = NULL) {

  // Vertical tabs
  $form['andesign'] = [
    '#type'          => 'vertical_tabs',
    '#prefix'        => '<h2><small>' . t('andesign B5 Settings') . '</small></h2>',
    '#weight'        => -10,
  ];

/**
 * Layout
 */
  $form['layout'] = array(
    '#type'          => 'details',
    '#title'         => t('Layout'),
    '#weight'        => 0,
    '#group'         => 'andesign',
  );

  // Header Tab
  $form['layout']['header'] = array(
    '#type'          => 'details',
    '#title'         => t('Header'),
    '#weight'        => 0,
  );

  // Sticky Header
  $form['layout']['header']['sticky_header'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Sticky Header'),
    '#prefix'        => t('<h2>Sticky Header</h2>'),
    '#description'   => t('Check to make header sticky.'),
    '#default_value' => theme_get_setting('sticky_header'),
    '#weight'        => 0,
  );

  // Header Top Section
  $form['layout']['header']['header_top_section'] = [
    '#type'          => 'textfield',
    '#prefix'        => t('<ul><li><a href="https://getbootstrap.com/docs/5.3/layout/containers/" target="_blank">Bootstrap Containers</a></li><li><a href="https://getbootstrap.com/docs/5.3/layout/grid/" target="_blank">Bootstrap Grid System</a></li></ul><h2>Header Top</h2>'),
    '#title'         => t('Section Classes'),
    '#default_value' => theme_get_setting('header_top_section'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 1,
  ];

  // Header Top Container
  $form['layout']['header']['header_top_container'] = [
    '#type'          => 'textfield',
    '#title'         => t('Container Classes'),
    '#default_value' => theme_get_setting('header_top_container'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 2,
  ];

  // Header Top Row
  $form['layout']['header']['header_top_row'] = [
    '#type'          => 'textfield',
    '#title'         => t('Row Classes'),
    '#default_value' => theme_get_setting('header_top_row'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 3,
  ];

  // Header Main Section
  $form['layout']['header']['header_main_section'] = [
    '#type'          => 'textfield',
    '#prefix'        => t('<h2>Header Main</h2>'),
    '#title'         => t('Section Classes'),
    '#default_value' => theme_get_setting('header_main_section'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 4,
  ];

  // Header Main Container
  $form['layout']['header']['header_main_container'] = [
    '#type'          => 'textfield',
    '#title'         => t('Container Classes'),
    '#default_value' => theme_get_setting('header_main_container'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 5,
  ];

  // Header Main Row
  $form['layout']['header']['header_main_row'] = [
    '#type'          => 'textfield',
    '#title'         => t('Row Classes'),
    '#default_value' => theme_get_setting('header_main_row'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 6,
  ];

  // Header Left Column
  $form['layout']['header']['header_main_left'] = [
    '#type'          => 'textfield',
    '#prefix'        => t('<h2>Header Main Columns</h2><p>Add <a href="https://getbootstrap.com/docs/5.3/layout/columns/" target="_blank">Bootstrap Column</a> classes</p>'),
    '#title'         => t('Left Column Classes'),
    '#default_value' => theme_get_setting('header_main_left'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 7,
  ];

  // Header Main Column
  $form['layout']['header']['header_main_center'] = [
    '#type'          => 'textfield',
    '#title'         => t('Center Column Classes'),
    '#default_value' => theme_get_setting('header_main_center'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 8,
  ];

  // Header Right Column
  $form['layout']['header']['header_main_right'] = [
    '#type'          => 'textfield',
    '#title'         => t('Right Column Classes'),
    '#description'   => t('Column contains the mobile menu toggle icon'),
    '#default_value' => theme_get_setting('header_main_right'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 9,
  ];

  // Hero Tab
  $form['layout']['hero'] = array(
    '#type'          => 'details',
    '#title'         => t('Hero'),
    '#weight'        => 1,
  );

  // Hero Section
  $form['layout']['hero']['hero_section'] = [
    '#type'          => 'textfield',
    '#prefix'        => t('<ul><li><a href="https://getbootstrap.com/docs/5.3/layout/containers/" target="_blank">Bootstrap Containers</a></li><li><a href="https://getbootstrap.com/docs/5.3/layout/grid/" target="_blank">Bootstrap Grid System</a></li></ul><h2>Hero</h2>'),
    '#title'         => t('Section Classes'),
    '#default_value' => theme_get_setting('hero_section'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 0,
  ];

  // Hero Container
  $form['layout']['hero']['hero_container'] = [
    '#type'          => 'textfield',
    '#title'         => t('Container Classes'),
    '#default_value' => theme_get_setting('hero_container'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 1,
  ];

  // Hero Row
  $form['layout']['hero']['hero_row'] = [
    '#type'          => 'textfield',
    '#title'         => t('Row Classes'),
    '#default_value' => theme_get_setting('hero_row'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 2,
  ];

  // Title Tab
  $form['layout']['title'] = array(
    '#type'          => 'details',
    '#title'         => t('Page Title'),
    '#weight'        => 2,
  );

  // Page Title Section
  $form['layout']['title']['page_title_section'] = [
    '#type'          => 'textfield',
    '#prefix'        => t('<ul><li><a href="https://getbootstrap.com/docs/5.3/layout/containers/" target="_blank">Bootstrap Containers</a></li><li><a href="https://getbootstrap.com/docs/5.3/layout/grid/" target="_blank">Bootstrap Grid System</a></li></ul><h2>Page Title</h2>'),
    '#title'         => t('Section Classes'),
    '#default_value' => theme_get_setting('page_title_section'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 0,
  ];

  // Page Title Container
  $form['layout']['title']['page_title_container'] = [
    '#type'          => 'textfield',
    '#title'         => t('Container Classes'),
    '#default_value' => theme_get_setting('page_title_container'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 1,
  ];

  // Page Title Row
  $form['layout']['title']['page_title_row'] = [
    '#type'          => 'textfield',
    '#title'         => t('Row Classes'),
    '#default_value' => theme_get_setting('page_title_row'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 2,
  ];

  // Content
  $form['layout']['content'] = array(
    '#type'          => 'details',
    '#title'         => t('Content'),
    '#weight'        => 3,
  );

  // Content Top Section
  $form['layout']['content']['content_top_section'] = [
    '#type'          => 'textfield',
    '#prefix'        => t('<ul><li><a href="https://getbootstrap.com/docs/5.3/layout/containers/" target="_blank">Bootstrap Containers</a></li><li><a href="https://getbootstrap.com/docs/5.3/layout/grid/" target="_blank">Bootstrap Grid System</a></li></ul><h2>Content Top</h2>'),
    '#title'         => t('Section Classes'),
    '#default_value' => theme_get_setting('content_top_section'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 0,
  ];

  // Content Top Container
  $form['layout']['content']['content_top_container'] = [
    '#type'          => 'textfield',
    '#title'         => t('Container Classes'),
    '#default_value' => theme_get_setting('content_top_container'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 1,
  ];

  // Content Top Row
  $form['layout']['content']['content_top_row'] = [
    '#type'          => 'textfield',
    '#title'         => t('Row Classes'),
    '#default_value' => theme_get_setting('content_top_row'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 2,
  ];

  // Content Main Section
  $form['layout']['content']['content_main_section'] = [
    '#type'          => 'textfield',
    '#prefix'        => t('<h2>Content Main</h2>'),
    '#title'         => t('Section Classes'),
    '#default_value' => theme_get_setting('content_main_section'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 4,
  ];

  // Content Main Container
  $form['layout']['content']['content_main_container'] = [
    '#type'          => 'textfield',
    '#title'         => t('Container Classes'),
    '#default_value' => theme_get_setting('content_main_container'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 5,
  ];

  // Content Main Row
  $form['layout']['content']['content_main_row'] = [
    '#type'          => 'textfield',
    '#title'         => t('Row Classes'),
    '#default_value' => theme_get_setting('content_main_row'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 6,
  ];

  // Content Main Columns
  $form['layout']['content']['content_sidebar_main'] = [
    '#type'          => 'textfield',
    '#prefix'        => t('<h2>Content Main Columns</h2><p>Add <a href="https://getbootstrap.com/docs/5.3/layout/columns/" target="_blank">Bootstrap Column</a> classes</p>'),
    '#title'         => t('Main Column Classes'),
    '#default_value' => theme_get_setting('content_sidebar_main'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 7,
  ];

  // Content Sidebar
  $form['layout']['content']['content_sidebar_col'] = [
    '#type'          => 'textfield',
    '#title'         => t('Sidebar Column Classes'),
    '#default_value' => theme_get_setting('content_sidebar_col'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 8,
  ];

  // Content Bottom Section
  $form['layout']['content']['content_bottom_section'] = [
    '#type'          => 'textfield',
    '#prefix'        => t('<h2>Content Bottom</h2>'),
    '#title'         => t('Section Classes'),
    '#default_value' => theme_get_setting('content_bottom_section'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 9,
  ];

  // Content Bottom Container
  $form['layout']['content']['content_bottom_container'] = [
    '#type'          => 'textfield',
    '#title'         => t('Container Classes'),
    '#default_value' => theme_get_setting('content_bottom_container'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 10,
  ];

  // Content Bottom Row
  $form['layout']['content']['content_bottom_row'] = [
    '#type'          => 'textfield',
    '#title'         => t('Row Classes'),
    '#default_value' => theme_get_setting('content_bottom_row'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 11,
  ];

  // Footer
  $form['layout']['footer'] = array(
    '#type'          => 'details',
    '#title'         => t('Footer'),
    '#weight'        => 4,
  );

  // Footer Section
  $form['layout']['footer']['footer_section'] = [
    '#type'          => 'textfield',
    '#title'         => t('Section Classes'),
    '#prefix'        => t('<ul><li><a href="https://getbootstrap.com/docs/5.3/layout/containers/" target="_blank">Bootstrap Containers</a></li><li><a href="https://getbootstrap.com/docs/5.3/layout/grid/" target="_blank">Bootstrap Grid System</a></li></ul><h2>Footer</h2>'),
    '#default_value' => theme_get_setting('footer_section'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 0,
  ];

  // Footer Top Section
  $form['layout']['footer']['footer_top_section'] = [
    '#type'          => 'textfield',
    '#prefix'        => t('<h2>Footer Top</h2>'),
    '#title'         => t('Section Classes'),
    '#default_value' => theme_get_setting('footer_top_section'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 1,
  ];

  // Footer Top Container
  $form['layout']['footer']['footer_top_container'] = [
    '#type'          => 'textfield',
    '#title'         => t('Container Classes'),
    '#default_value' => theme_get_setting('footer_top_container'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 2,
  ];

  // Footer Top Row
  $form['layout']['footer']['footer_top_row'] = [
    '#type'          => 'textfield',
    '#title'         => t('Row Classes'),
    '#default_value' => theme_get_setting('footer_top_row'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 3,
  ];

  // Footer Main Section
  $form['layout']['footer']['footer_main_section'] = [
    '#type'          => 'textfield',
    '#prefix'        => t('<h2>Footer Main</h2>'),
    '#title'         => t('Section Classes'),
    '#default_value' => theme_get_setting('footer_main_section'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 4,
  ];

  // Footer Main Container
  $form['layout']['footer']['footer_main_container'] = [
    '#type'          => 'textfield',
    '#title'         => t('Container Classes'),
    '#default_value' => theme_get_setting('footer_main_container'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 5,
  ];

  // Footer Main Row
  $form['layout']['footer']['footer_main_row'] = [
    '#type'          => 'textfield',
    '#title'         => t('Row Classes'),
    '#description'   => t('<p>&bull; The row class is automatically added to the content main row if the sidebar exist.</p>'),
    '#default_value' => theme_get_setting('footer_main_row'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 6,
  ];

  // Footer Bottom Section
  $form['layout']['footer']['footer_bottom_section'] = [
    '#type'          => 'textfield',
    '#prefix'        => t('<h2>Footer Bottom</h2>'),
    '#title'         => t('Section Classes'),
    '#default_value' => theme_get_setting('footer_bottom_section'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 7,
  ];

  // Footer Bottom Container
  $form['layout']['footer']['footer_bottom_container'] = [
    '#type'          => 'textfield',
    '#title'         => t('Container Classes'),
    '#default_value' => theme_get_setting('footer_bottom_container'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 8,
  ];

  // Footer Bottom Row
  $form['layout']['footer']['footer_bottom_row'] = [
    '#type'          => 'textfield',
    '#title'         => t('Row Classes'),
    '#default_value' => theme_get_setting('footer_bottom_row'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 9,
  ];

  // Mobile Menu
  $form['layout']['mobile_menu'] = array(
    '#type'          => 'details',
    '#title'         => t('Mobile Menu'),
    '#weight'        => 5,
  );

  // Mobile Menu Position
  $form['layout']['mobile_menu']['mobile_menu_position'] = array(
    '#type'          => 'select',
    '#prefix'        => t('<h2>Mobile Menu Position</h2>'),
    '#options'       => array(
    'left'           => t('Left'),
    'right'          => t('Right'),
    'full'           => t('Full'),
    ),
    '#description'   => t('Set the menu slide-in from direction.'),
    '#default_value' => theme_get_setting('mobile_menu_position'),
    '#weight'        => 0,
  );

  // Mobile Menu Section
  $form['layout']['mobile_menu']['mobile_menu_section'] = [
    '#type'          => 'textfield',
    '#title'         => t('Section Classes'),
    '#prefix'        => t('<ul><li><a href="https://getbootstrap.com/docs/5.3/layout/containers/" target="_blank">Bootstrap Containers</a></li><li><a href="https://getbootstrap.com/docs/5.3/layout/grid/" target="_blank">Bootstrap Grid System</a></li></ul><h2>Mobile Menu</h2>'),
    '#default_value' => theme_get_setting('mobile_menu_section'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 1,
  ];

  // Mobile Menu Container
  $form['layout']['mobile_menu']['mobile_menu_container'] = [
    '#type'          => 'textfield',
    '#title'         => t('Container Classes'),
    '#default_value' => theme_get_setting('mobile_menu_container'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 2,
  ];

  // Mobile Menu Content
  $form['layout']['mobile_menu']['mobile_menu_header'] = [
    '#type'          => 'textfield',
    '#prefix'        => t('<h2>Mobile Menu Content</h2>'),
    '#title'         => t('Header Classes'),
    '#default_value' => theme_get_setting('mobile_menu_header'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 3,
  ];

  // Mobile Menu Content
  $form['layout']['mobile_menu']['mobile_menu_content'] = [
    '#type'          => 'textfield',
    '#title'         => t('Content Classes'),
    '#default_value' => theme_get_setting('mobile_menu_content'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 4,
  ];

  // Mobile Menu Footer
  $form['layout']['mobile_menu']['mobile_menu_footer'] = [
    '#type'          => 'textfield',
    '#title'         => t('Footer Classes'),
    '#default_value' => theme_get_setting('mobile_menu_footer'),
    '#size'          => 60,
    '#maxlength'     => 255,
    '#weight'        => 5,
  ];

/**
 * Theming
 */
  $form['theming'] = array(
    '#type'          => 'details',
    '#title'         => t('Theming'),
    '#weight'        => 1,
    '#group'         => 'andesign',
  );

  // Viewport Size
  $form['theming']['breakpoints_toolbar'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Enable Breakpoints Toolbar'),
    '#prefix'        => t('<h2>Theme Breakpoints Toolbar</h2>'),
    '#description'   => t('Show the viewport width, height, breakpoint and device. Use durring theme development,'),
    '#default_value' => theme_get_setting('breakpoints_toolbar'),
    '#weight'        => 0,
  );

}
