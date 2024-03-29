<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Codebase - Backend papges configuration file
 *
 */

// **************************************************************************************************
// BACKEND INCLUDED VIEWS
// **************************************************************************************************

//                              : Useful for adding different sidebars/headers per page or per section
$cb->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/backend/views/inc_header.php';
$cb->inc_footer                 = 'inc/backend/views/inc_footer.php';


// **************************************************************************************************
// BACKEND MAIN MENU
// **************************************************************************************************

// You can use the following array to create your main menu
$cb->main_nav                   = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Dashboards</span>',
        'icon'  => 'si si-cup',
        'sub'   => array(
            array(
                'name'  => 'Dashboard 1',
                'url'   => 'be_pages_dashboard.php'
            ),
            array(
                'name'  => 'Dashboard 2',
                'url'   => 'be_pages_dashboard2.php'
            ),
            array(
                'name'  => 'Dashboard 3',
                'url'   => 'be_pages_dashboard3.php'
            ),
            array(
                'name'  => 'Dashboard 4',
                'url'   => 'be_pages_dashboard4.php'
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Boxed Backend</span>',
        'icon'  => 'si si-compass',
        'url'   => 'bd_dashboard.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">User Interface</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Blocks</span>',
        'icon'  => 'si si-puzzle',
        'sub'   => array(
            array(
                'name'  => 'Styles',
                'url'   => 'be_blocks.php'
            ),
            array(
                'name'  => 'Widgets',
                'sub'   => array(
                    array(
                        'name'  => 'Users',
                        'url'   => 'be_blocks_widgets_users.php'
                    ),
                    array(
                        'name'  => 'Stats',
                        'url'   => 'be_blocks_widgets_stats.php'
                    )
                )
            ),
            array(
                'name'  => 'Tiles',
                'url'   => 'be_blocks_tiles.php'
            ),
            array(
                'name'  => 'Draggable',
                'url'   => 'be_blocks_draggable.php'
            ),
            array(
                'name'  => 'API',
                'url'   => 'be_blocks_api.php'
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Elements</span>',
        'icon'  => 'si si-energy',
        'sub'   => array(
            array(
                'name'  => 'Grid',
                'url'   => 'be_ui_grid.php'
            ),
            array(
                'name'  => 'Icons',
                'url'   => 'be_ui_icons.php'
            ),
            array(
                'name'  => 'Typography',
                'url'   => 'be_ui_typography.php'
            ),
            array(
                'name'  => 'Activity',
                'url'   => 'be_ui_activity.php'
            ),
            array(
                'name'  => 'Buttons',
                'url'   => 'be_ui_buttons.php'
            ),
            array(
                'name'  => 'Navigation',
                'url'   => 'be_ui_navigation.php'
            ),
            array(
                'name'  => 'Tabs',
                'url'   => 'be_ui_tabs.php'
            ),
            array(
                'name'  => 'Modals &amp; Tooltips',
                'url'   => 'be_ui_modals_tooltips.php'
            ),
            array(
                'name'  => 'Images',
                'url'   => 'be_ui_images.php'
            ),
            array(
                'name'  => 'Animations',
                'url'   => 'be_ui_animations.php'
            ),
            array(
                'name'  => 'Ribbons',
                'url'   => 'be_ui_ribbons.php'
            ),
            array(
                'name'  => 'Timeline',
                'url'   => 'be_ui_timeline.php'
            ),
            array(
                'name'  => 'Color Themes',
                'url'   => 'be_ui_color_themes.php'
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Tables</span>',
        'icon'  => 'si si-layers',
        'sub'   => array(
            array(
                'name'  => 'Styles',
                'url'   => 'be_tables_styles.php'
            ),
            array(
                'name'  => 'Responsive',
                'url'   => 'be_tables_responsive.php'
            ),
            array(
                'name'  => 'Helpers',
                'url'   => 'be_tables_helpers.php'
            ),
            array(
                'name'  => 'Pricing',
                'url'   => 'be_tables_pricing.php'
            ),
            array(
                'name'  => 'DataTables',
                'url'   => 'be_tables_datatables.php'
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Forms</span>',
        'icon'  => 'si si-note',
        'sub'   => array(
            array(
                'name'  => 'Bootstrap Elements',
                'url'   => 'be_forms_elements_bootstrap.php'
            ),
            array(
                'name'  => 'Material Elements',
                'url'   => 'be_forms_elements_material.php'
            ),
            array(
                'name'  => 'CSS Inputs',
                'url'   => 'be_forms_css_inputs.php'
            ),
            array(
                'name'  => 'Plugins',
                'url'   => 'be_forms_plugins.php'
            ),
            array(
                'name'  => 'Editors',
                'url'   => 'be_forms_editors.php'
            ),
            array(
                'name'  => 'Validation',
                'url'   => 'be_forms_validation.php'
            ),
            array(
                'name'  => 'Wizard',
                'url'   => 'be_forms_wizard.php'
            ),
            array(
                'name'  => 'Pre-made',
                'url'   => 'be_forms_premade.php'
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-visible">BD</span><span class="sidebar-mini-hidden">Build</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Layout</span>',
        'icon'  => 'si si-vector',
        'sub'   => array(
            array(
                'name'  => 'General',
                'sub'   => array(
                    array(
                        'name'  => 'Default',
                        'url'   => 'be_layout_default.php'
                    ),
                    array(
                        'name'  => 'Flipped',
                        'url'   => 'be_layout_flipped.php'
                    ),
                    array(
                        'name'  => 'Native Scrolling',
                        'url'   => 'be_layout_native_scrolling.php'
                    )
                )
            ),
            array(
                'name'  => 'Header',
                'sub'   => array(
                    array(
                        'name'  => 'Static',
                        'sub'   => array(
                            array(
                                'name'  => 'Modern',
                                'url'   => 'be_layout_header_modern.php'
                            ),
                            array(
                                'name'  => 'Classic',
                                'url'   => 'be_layout_header_classic.php'
                            ),
                            array(
                                'name'  => 'Classic Inverse',
                                'url'   => 'be_layout_header_classic_inverse.php'
                            ),
                            array(
                                'name'  => 'Glass',
                                'url'   => 'be_layout_header_glass.php'
                            ),
                            array(
                                'name'  => 'Glass Inverse',
                                'url'   => 'be_layout_header_glass_inverse.php'
                            )
                        )
                    ),
                    array(
                        'name'  => 'Fixed',
                        'sub'   => array(
                            array(
                                'name'  => 'Modern',
                                'url'   => 'be_layout_header_fixed_modern.php'
                            ),
                            array(
                                'name'  => 'Classic',
                                'url'   => 'be_layout_header_fixed_classic.php'
                            ),
                            array(
                                'name'  => 'Classic Inverse',
                                'url'   => 'be_layout_header_fixed_classic_inverse.php'
                            ),
                            array(
                                'name'  => 'Glass',
                                'url'   => 'be_layout_header_fixed_glass.php'
                            ),
                            array(
                                'name'  => 'Glass Inverse',
                                'url'   => 'be_layout_header_fixed_glass_inverse.php'
                            )
                        )
                    ),
                )
            ),
            array(
                'name'  => 'Sidebar',
                'sub'   => array(
                    array(
                        'name'  => 'Inverse',
                        'url'   => 'be_layout_sidebar_inverse.php'
                    ),
                    array(
                        'name'  => 'Hidden',
                        'url'   => 'be_layout_sidebar_hidden.php'
                    ),
                    array(
                        'name'  => 'Mini',
                        'url'   => 'be_layout_sidebar_mini.php'
                    )
                )
            ),
            array(
                'name'  => 'Side Overlay',
                'sub'   => array(
                    array(
                        'name'  => 'Visible',
                        'url'   => 'be_layout_side_overlay_visible.php'
                    ),
                    array(
                        'name'  => 'Hoverable',
                        'url'   => 'be_layout_side_overlay_hoverable.php'
                    )
                )
            ),
            array(
                'name'  => 'Main Content',
                'sub'   => array(
                    array(
                        'name'  => 'Boxed',
                        'url'   => 'be_layout_content_boxed.php'
                    ),
                    array(
                        'name'  => 'Narrow',
                        'url'   => 'be_layout_content_narrow.php'
                    ),
                    array(
                        'name'  => 'Full Width',
                        'url'   => 'be_layout_content_full_width.php'
                    )
                )
            ),
            array(
                'name'  => 'Hero',
                'sub'   => array(
                    array(
                        'name'  => 'Color',
                        'url'   => 'be_layout_hero_color.php'
                    ),
                    array(
                        'name'  => 'Image',
                        'url'   => 'be_layout_hero_image.php'
                    ),
                    array(
                        'name'  => 'Video',
                        'url'   => 'be_layout_hero_video.php'
                    )
                )
            ),
            array(
                'name'  => 'API',
                'url'   => 'be_layout_api.php'
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Components</span>',
        'icon'  => 'si si-trophy',
        'sub'   => array(
            array(
                'name'  => '<span class="sidebar-mini-hide">Main Menu</span>',
                'sub'   => array(
                    array(
                        'name'  => 'Link 1-1',
                        'url'   => '#'
                    ),
                    array(
                        'name'  => 'Link 1-2',
                        'url'   => '#'
                    ),
                    array(
                        'name'  => 'Sub Level 2',
                        'sub'   => array(
                            array(
                                'name'  => 'Link 2-1',
                                'url'   => '#'
                            ),
                            array(
                                'name'  => 'Link 2-2',
                                'url'   => '#'
                            ),
                            array(
                                'name'  => 'Sub Level 3',
                                'sub'   => array(
                                    array(
                                        'name'  => 'Link 3-1',
                                        'url'   => '#'
                                    ),
                                    array(
                                        'name'  => 'Link 3-2',
                                        'url'   => '#'
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            array(
                'name'  => 'Chat',
                'sub'   => array(
                    array(
                        'name'  => 'Multiple',
                        'url'   => 'be_comp_chat_multiple.php'
                    ),
                    array(
                        'name'  => 'Single',
                        'url'   => 'be_comp_chat_single.php'
                    )
                )
            ),
            array(
                'name'  => 'Charts',
                'url'   => 'be_comp_charts.php'
            ),
            array(
                'name'  => 'Gallery',
                'url'   => 'be_comp_gallery.php'
            ),
            array(
                'name'  => 'Sliders',
                'url'   => 'be_comp_sliders.php'
            ),
            array(
                'name'  => 'Scrolling',
                'url'   => 'be_comp_scrolling.php'
            ),
            array(
                'name'  => 'Rating',
                'url'   => 'be_comp_rating.php'
            ),
            array(
                'name'  => 'Filtering',
                'url'   => 'be_comp_filtering.php'
            ),
            array(
                'name'  => 'Appear',
                'url'   => 'be_comp_appear.php'
            ),
            array(
                'name'  => 'CountTo',
                'url'   => 'be_comp_countto.php'
            ),
            array(
                'name'  => 'Calendar',
                'url'   => 'be_comp_calendar.php'
            ),
            array(
                'name'  => 'Image Cropper',
                'url'   => 'be_comp_image_cropper.php'
            ),
            array(
                'name'  => 'Google Maps',
                'url'   => 'be_comp_maps_google.php'
            ),
            array(
                'name'  => 'Vector Maps',
                'url'   => 'be_comp_maps_vector.php'
            ),
            array(
                'name'  => 'Syntax Highlighting',
                'url'   => 'be_comp_syntax_highlighting.php'
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-visible">PG</span><span class="sidebar-mini-hidden">Pages</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Generic</span>',
        'icon'  => 'si si-globe-alt',
        'sub'   => array(
            array(
                'name'  => 'Blank',
                'url'   => 'be_pages_generic_blank.php'
            ),
            array(
                'name'  => 'Blank (Block)',
                'url'   => 'be_pages_generic_blank_block.php'
            ),
            array(
                'name'  => 'Blank (Breadcrumb)',
                'url'   => 'be_pages_generic_blank_breadcrumb.php'
            ),
            array(
                'name'  => 'Search',
                'url'   => 'be_pages_generic_search.php'
            ),
            array(
                'name'  => 'Profile',
                'url'   => 'be_pages_generic_profile.php'
            ),
            array(
                'name'  => 'Inbox',
                'url'   => 'be_pages_generic_inbox.php'
            ),
            array(
                'name'  => 'Invoice',
                'url'   => 'be_pages_generic_invoice.php'
            ),
            array(
                'name'  => 'FAQ',
                'url'   => 'be_pages_generic_faq.php'
            ),
            array(
                'name'  => 'Blog',
                'url'   => 'be_pages_generic_blog.php'
            ),
            array(
                'name'  => 'Story',
                'url'   => 'be_pages_generic_story.php'
            ),
            array(
                'name'  => 'Project List',
                'url'   => 'be_pages_generic_project_list.php'
            ),
            array(
                'name'  => 'Project',
                'url'   => 'be_pages_generic_project.php'
            ),
            array(
                'name'  => 'Upgrade Plan',
                'url'   => 'be_pages_generic_upgrade_plan.php'
            ),
            array(
                'name'  => 'Team',
                'url'   => 'be_pages_generic_team.php'
            ),
            array(
                'name'  => 'Contact',
                'url'   => 'be_pages_generic_contact.php'
            ),
            array(
                'name'  => 'Todo',
                'url'   => 'be_pages_generic_todo.php'
            ),
            array(
                'name'  => 'Coming Soon',
                'url'   => 'op_coming_soon.php'
            ),
            array(
                'name'  => 'Maintenance',
                'url'   => 'op_maintenance.php'
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Error</span>',
        'icon'  => 'si si-flag',
        'sub'    => array(
            array(
                'name'  => 'All',
                'url'   => 'be_pages_error_all.php'
            ),
            array(
                'name'  => '400',
                'url'   => 'op_error_400.php'
            ),
            array(
                'name'  => '401',
                'url'   => 'op_error_401.php'
            ),
            array(
                'name'  => '403',
                'url'   => 'op_error_403.php'
            ),
            array(
                'name'  => '404',
                'url'   => 'op_error_404.php'
            ),
            array(
                'name'  => '500',
                'url'   => 'op_error_500.php'
            ),
            array(
                'name'  => '503',
                'url'   => 'op_error_503.php'
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Authentication</span>',
        'icon'  => 'si si-lock',
        'sub'   => array(
            array(
                'name'  => 'All',
                'url'   => 'be_pages_auth_all.php'
            ),
            array(
                'name'  => 'Sign In',
                'url'   => 'op_auth_signin.php'
            ),
            array(
                'name'  => 'Sign In 2',
                'url'   => 'op_auth_signin2.php'
            ),
            array(
                'name'  => 'Sign In 3',
                'url'   => 'op_auth_signin3.php'
            ),
            array(
                'name'  => 'Sign Up',
                'url'   => 'op_auth_signup.php'
            ),
            array(
                'name'  => 'Sign Up 2',
                'url'   => 'op_auth_signup2.php'
            ),
            array(
                'name'  => 'Sign Up 3',
                'url'   => 'op_auth_signup3.php'
            ),
            array(
                'name'  => 'Lock Screen',
                'url'   => 'op_auth_lock.php'
            ),
            array(
                'name'  => 'Lock Screen 2',
                'url'   => 'op_auth_lock2.php'
            ),
            array(
                'name'  => 'Lock Screen 3',
                'url'   => 'op_auth_lock3.php'
            ),
            array(
                'name'  => 'Pass Reminder',
                'url'   => 'op_auth_reminder.php'
            ),
            array(
                'name'  => 'Pass Reminder 2',
                'url'   => 'op_auth_reminder2.php'
            ),
            array(
                'name'  => 'Pass Reminder 3',
                'url'   => 'op_auth_reminder3.php'
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">e-Commerce</span>',
        'icon'  => 'si si-handbag',
        'sub'   => array(
            array(
                'name'  => 'Dashboard',
                'url'   => 'be_pages_ecom_dashboard.php'
            ),
            array(
                'name'  => 'Orders',
                'url'   => 'be_pages_ecom_orders.php'
            ),
            array(
                'name'  => 'Order',
                'url'   => 'be_pages_ecom_order.php'
            ),
            array(
                'name'  => 'Products',
                'url'   => 'be_pages_ecom_products.php'
            ),
            array(
                'name'  => 'Product Edit',
                'url'   => 'be_pages_ecom_product_edit.php'
            ),
            array(
                'name'  => 'Customer',
                'url'   => 'be_pages_ecom_customer.php'
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Forum</span>',
        'icon'  => 'si si-bubbles',
        'sub'   => array(
            array(
                'name'  => 'Categories',
                'url'   => 'be_pages_forum_categories.php'
            ),
            array(
                'name'  => 'Topics',
                'url'   => 'be_pages_forum_topics.php'
            ),
            array(
                'name'  => 'Discussion',
                'url'   => 'be_pages_forum_discussion.php'
            )
        )
    )
);
