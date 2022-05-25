<?php

// Check core class for avoid errors
if (class_exists('CSF')) {
   //
   // Set a unique slug-like ID
   //
   $prefix = 'conskip_theme_option';

   //
   // Create options
   //
   CSF::createOptions($prefix, array(
      'menu_title'      => 'Theme Settings',
      'menu_slug'       => 'theme-settings',
      'framework_title' => 'Conskip Settings <small>by Aminul Islam</small>',
   ));


   //Header Section
   CSF::createSection($prefix, array(
      'title'  => 'Header',
      'id'     => 'header',
      'icon'   => 'fas fa-heading',
      'fields' => array(
         array(
            //'id' => 'copy_right_text', 
            //'type'  => 'text',
            //'title' => 'header',
         )
      )

   ));
   // Footer a section
   CSF::createSection($prefix, array(
      'title' => 'Footer',
      'id'    => 'footer-settings',
      'icon'  => 'fab fa-foursquare',
   ));
   // Footers a section
   CSF::createSection($prefix, array(
      'title'  => 'Footers',
      'id'     => 'accordion_footers',
      'parent' => 'footer-settings',
      'icon'   => 'fas fa-file-import',
      'fields' => array(
         array(
            'id'     => 'footer_sidebar-2',
            'title'  => 'Footer Section',
            'type'   => 'accordion',
            'accordions' => array(
               //Footer #1

               //Footer #2
               array(
                  'title' => 'Footer #2',
                  'id' => 'footer_sidebar_text',
                  'fields' => array(
                     array(
                        'title' => 'Menu Title :',
                        'id'    => 's_menu_title',
                        'type'  => 'text',
                        'default'    => 'Our Service'
                     ),
                     array(
                        'id'          => 's_footer_sidebar',
                        'type'        => 'select',
                        'title'       => 'Select Footer :',
                        'placeholder' => 'Select a Footer',
                        'options'     => 'sidebars',
                     ),
                     array(
                        'id'          => 's_footer_menu',
                        'type'        => 'select',
                        'title'       => 'Select Menu :',
                        'placeholder' => 'Select a Menu',
                        'options'     => 'menus',
                     ),
                     array(
                        'id'     => 'item_link',
                        'type'   => 'repeater',
                        'title'  => 'Item URL :',
                        'fields' => array(
                           array(
                              'id'    => 'text_url',
                              'type'  => 'link',
                              'edit_title'   => 'Edit Link',
                              'remove_title' => 'Remove Link',
                           ),
                        ),
                     ),
                     array(
                        'id'      => 's_footer_confirm',
                        'type'    => 'checkbox',
                        'title'   => 'You Confirm :',
                        'label'   => 'Yes, Please do it.',
                        'default' =>  false // or true 
                     ),
                  ),
               )
               //Footer #2


            ),
         ),
      ),

   ));

   // Copy Right a section
   CSF::createSection($prefix, array(
      'title'  => 'Copy Right',
      'id'     => 'copy-rights',
      'parent' => 'footer-settings',
      'icon'   => 'fas fa-copy',
      'fields' => array(
         array(
            'id'    => 'copy_right_text',
            'type'  => 'text',
            'title' => 'Copy Right Text',
         )
      ),

   ));
}
