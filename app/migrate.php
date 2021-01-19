<?php

// Routes::map('/api/migrate', 'Migrate::init');
// Migrate::init();


class Migrate
{

    public static  function slip()
    {
        $slips = [
            [
                "title" => "Y98",
                "color" => "#F8B856",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc1.jpg",
                "pantone" => "#150C"
            ],
            [
                "title" => "Y07",
                "color" => "#FFE857",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc2.jpg",
                "pantone" => "#114C"
            ],
            [
                "title" => "Y0157",
                "color" => "#F4A14B",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc3.jpg",
                "pantone" => "#164C"
            ],
            [
                "title" => "P16",
                "color" => "#7A81BE",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc4.jpg",
                "pantone" => "#272C"
            ],
            [
                "title" => "P01",
                "color" => "#333",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc5.jpg",
                "pantone" => "#2096C"
            ],
            [
                "title" => "P01A",
                "color" => "#333",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc6.jpg",
                "pantone" => "#7663C"
            ],
            [
                "title" => "R109",
                "color" => "#F6C1D8",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc7.jpg",
                "pantone" => "#230C"
            ],
            [
                "title" => "RC284",
                "color" => "#F0919C",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc8.jpg",
                "pantone" => "#7423C"
            ],
            [
                "title" => "R41",
                "color" => "#BB004D",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc9.jpg",
                "pantone" => "#215C"
            ],
            [
                "title" => "R08",
                "color" => "#E7290F",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc10.jpg",
                "pantone" => "#1795C"
            ],
            [
                "title" => "R1195A",
                "color" => "#D20037",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc11.jpg",
                "pantone" => "#193C"
            ],
            [
                "title" => "R252B",
                "color" => "#B9292B",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc12.jpg",
                "pantone" => "#704C"
            ],
            [
                "title" => "R36",
                "color" => "#333",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc13.jpg",
                "pantone" => "#7641C"
            ],
            [
                "title" => "YC188",
                "color" => "#FFFBE3",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc14.jpg",
                "pantone" => "#7499C"
            ],
            [
                "title" => "Y02",
                "color" => "#F8EDDB",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc15.jpg",
                "pantone" => "#4685C"
            ],
            [
                "title" => "N206",
                "color" => "#FFF5E0",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc16.jpg",
                "pantone" => "#7506C"
            ],
            [
                "title" => "N26A",
                "color" => "#F3E9CC",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc17.jpg",
                "pantone" => "#468C"
            ],
            [
                "title" => "N26",
                "color" => "#D4B274",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc18.jpg",
                "pantone" => "#465C"
            ],
            [
                "title" => "N190",
                "color" => "#B66E00",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc19.jpg",
                "pantone" => "#7516C"
            ],
            [
                "title" => "N34",
                "color" => "#333",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc20.jpg",
                "pantone" => "#7589C"
            ],
            [
                "title" => "G066B",
                "color" => "#9FCE82",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc21.jpg",
                "pantone" => "#7488C"
            ],
            [
                "title" => "GC011",
                "color" => "#333",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc22.jpg",
                "pantone" => "#7737C"
            ],
            [
                "title" => "G70",
                "color" => "#00834D",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc23.jpg",
                "pantone" => "#348C"
            ],
            [
                "title" => "G78",
                "color" => "#4AB134",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc24.jpg",
                "pantone" => "#361C"
            ],
            [
                "title" => "G02",
                "color" => "#008A7D",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc25.jpg",
                "pantone" => "#3288C"
            ],
            [
                "title" => "G279",
                "color" => "#004537",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc26.jpg",
                "pantone" => "#3308C"
            ],
            [
                "title" => "B136A",
                "color" => "#333",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc27.jpg",
                "pantone" => "#2190C"
            ],
            [
                "title" => "B38",
                "color" => "#333",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc28.jpg",
                "pantone" => "#2184C"
            ],
            [
                "title" => "B59",
                "color" => "#333",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc29.jpg",
                "pantone" => "#7686C"
            ],
            [
                "title" => "B154A",
                "color" => "#050E5F",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc30.jpg",
                "pantone" => "#2766C"
            ],
            [
                "title" => "E06",
                "color" => "#AEAEAF",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc31.jpg",
                "pantone" => "#Cool Gray 8C"
            ],
            [
                "title" => "E18",
                "color" => "#767575",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc32.jpg",
                "pantone" => "#Cool Gray 11C"
            ],
            [
                "title" => "C07",
                "color" => "#271800",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc33.jpg",
                "pantone" => "#Black C"
            ],
            [
                "title" => "W07A",
                "color" => "#FFFFFF",
                "thumbnail" => "https://www.tienyih.com/app/uploads/tainyi/fc374.jpg",
                "pantone" => "White"
            ]
        ];
        foreach ($slips as   $slip) {
            $post_ID  =   wp_insert_post(array(
                'post_name'    => sanitize_title($slip['title']),
                'post_title' => $slip['title'],
                'post_status'   => 'publish',
                'post_author'   => 1,
                'post_type'   => 'slip',
            ));
            $image_id = attachment_url_to_postid($slip['thumbnail']);
            set_post_thumbnail($post_ID, $image_id);
            update_post_meta($post_ID, 'color', $slip['color']);
            update_post_meta($post_ID, 'pantone', $slip['pantone']);
        }
        return 'done';
    }
    public static  function init()
    {



        if (\WP_ENV === 'production') die('not allow');


        add_action('init', [__CLASS__, 'set_pages']);
        add_action('init',  [__CLASS__, 'set_cats']);
        add_action('init',  [__CLASS__, 'set_products']);
        // add_action('init',  [__CLASS__, 'set_faq']);
        add_action('init', [__CLASS__, 'custom_permalinks']);

        update_option('uploads_use_yearmonth_folders ', 0);
        update_option('thumbnail_size_w ', 580);
        update_option('thumbnail_size_h ', 360);
        update_option('medium_size_w ', 800);
        update_option('medium_size_h ', 800);
        update_option('large_size_w ', 1680);
        update_option('large_size_h ', 1024);

        // update_option('uploads_use_yearmonth_folders ', 0);
        if (class_exists('woocommerce')) {
            add_action('init',  [__CLASS__, 'set_wc_cats']);
            # code...
            // not working 這三個
            // update_option('woocommerce_enable_myaccount_registration', true);
            // update_option('woocommerce_enable_signup_and_login_from_checkout', true);
            // update_option('woocommerce_enable_checkout_login_reminder', 1);

            update_option('woocommerce_ship_to_destination ', 'shipping');
            update_option('woocommerce_enable_shipping_calc ', false);
            update_option('woocommerce_manage_stock ', true);
            update_option('woocommerce_hold_stock_minutes', 0);
            update_option('woocommerce_store_address', '');
            update_option('woocommerce_allowed_countries', 'specific');
            update_option('woocommerce_default_country', 'TW:台北市');
            update_option('woocommerce_specific_allowed_countries', ['TW']);
            update_option('woocommerce_currency', 'TWD');
            update_option('woocommerce_price_num_decimals', 0);
            update_option('woocommerce_hold_stock_minutes', 0);
        }
        return 'done';
    }

    public static function set_pages()
    {


        $pages = [
            'home' => 'Home',
            'about' => '關於天毅',
            'introdution' => '購物袋介紹',
            'service' => '我們的服務',
            'process' => '服務流程',
            'contact' => 'Contact',
        ];
        foreach ($pages as $key => $value) {

            $post_exists =   get_page_by_path($key, OBJECT, 'page');

            if (!$post_exists) {
                $id =    wp_insert_post(array(
                    'post_name'    => sanitize_title($key),
                    'post_title' => $value,
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'   => 'page',
                    'no_found_rows' => true
                ));
                if ($key === 'home') {
                    update_option('show_on_front', 'page');
                    update_option('page_on_front', $id);
                }
            }
        }
    }

    public static function set_cats()
    {


        $cats = [
            'press' => [
                'title' => '最新消息',
                'children' => [
                    'real_testimony' => [
                        'title' => '真實口碑'
                    ],
                    'exhibition_info' => [
                        'title' => '參展資訊'
                    ],
                    'media_report' => [
                        'title' => '媒體報導'
                    ],
                    'product_info' => [
                        'title' => '商品資訊'
                    ]
                ]
            ]
        ];

        foreach ($cats as $key => $value) {
            if (!term_exists($key, 'category')) {
                $term =   wp_insert_term(
                    $value['title'],
                    'category',
                    array(
                        'slug' => $key,
                    )
                );

                if (isset($value['children'])) {
                    foreach ($value['children'] as $ckey => $cvalue) {
                        $subterm = wp_insert_term(
                            $cvalue['title'],
                            'category',
                            array(
                                'parent' => $term['term_id'],
                                'slug' => $ckey,
                            )
                        );
                        for ($i = 1; $i < 6; $i++) {
                            $post_ID  =   wp_insert_post(array(
                                'post_name'    => sanitize_title('Article test'),
                                'post_title' => '測試文章',
                                'post_status'   => 'publish',
                                'post_author'   => 1,
                                'post_type'   => 'post',
                                'post_category' => [$term['term_id'], $subterm['term_id']]

                            ));

                            set_post_thumbnail($post_ID, 5);
                        }
                    }
                }
            }
        }
    }

    public static function set_products()
    {


        $cats = [
            'product' => [
                'title' => '我們的產品',
                'children' => [
                    'cold_storage' => [
                        'title' => '保冷袋'
                    ],
                    'drawstring' => [
                        'title' => '束口袋'
                    ],
                    'carry' => [
                        'title' => '提袋'
                    ],
                    'special' => [
                        'title' => '特殊版袋'
                    ]
                ]
            ]
        ];

        foreach ($cats as $key => $value) {
            if (!term_exists($key, 'product_category')) {
                $term =   wp_insert_term(
                    $value['title'],
                    'product_category',
                    array(
                        'slug' => $key,
                    )
                );

                if (isset($value['children'])) {
                    foreach ($value['children'] as $ckey => $cvalue) {
                        $subterm = wp_insert_term(
                            $cvalue['title'],
                            'product_category',
                            array(
                                'parent' => $term['term_id'],
                                'slug' => $ckey,
                            )
                        );
                        for ($i = 1; $i < 1; $i++) {
                            $post_ID  =   wp_insert_post(array(
                                'post_name'    => sanitize_title('Article test'),
                                'post_title' => '測試產品',
                                'post_status'   => 'publish',
                                'post_author'   => 1,
                                'post_type'   => 'product',
                                'product_category' => [$term['term_id'], $subterm['term_id']]

                            ));

                            set_post_thumbnail($post_ID, 5);
                        }
                    }
                }
            }
        }
    }


    public static function custom_permalinks()
    {
        global $wp_rewrite;
        $wp_rewrite->page_structure = $wp_rewrite->root . '/%pagename%/'; // custom page permalinks
        $wp_rewrite->set_permalink_structure($wp_rewrite->root . '/%postname%/'); // custom post permalinks
    }

    public static  function menu()
    {


        $menuname = 'main';
        $menu_location = 'main_menu';
        // Does the menu exist already?
        $menu_exists = wp_get_nav_menu_object($menuname);

        // If it doesn't exist, let's create it.
        if (!$menu_exists) {
            $menu_id = wp_create_nav_menu($menuname);

            // Set up default BuddyPress links and add them to the menu.
            // wp_update_nav_menu_item($menu_id, 0, array(
            //     'menu-item-title' =>  __('Home'),
            //     'menu-item-classes' => 'home',
            //     'menu-item-url' => home_url('/'),
            //     'menu-item-status' => 'publish'
            //       'menu-item-object' => 'page',
            // ));



            // Grab the theme locations and assign our newly-created menu
            // to the BuddyPress menu location.
            if (!has_nav_menu($menu_location)) {
                $locations = get_theme_mod('nav_menu_locations');
                $locations[$menu_location] = $menu_id;
                set_theme_mod('nav_menu_locations', $locations);
            }
        }
    }
}
if (isset($_GET['import'])) {

    // Migrate::init();
}
if (isset($_GET['slip'])) {

    // Migrate::slip();
}
