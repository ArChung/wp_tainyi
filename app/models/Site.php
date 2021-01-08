<?php

namespace Domo\Models;



class Site
{
    /**
     * Option key, and option page slug
     * @var string
     */
    private $key = 'options';
    /**
     * Options page metabox id
     * @var string
     */
    private $metabox_id = 'option_';
    /**
     * Options Page title
     * @var string
     */
    protected $title = '';
    /**
     * Options Page hook
     * @var string
     */
    protected $options_page = '';
    /**
     * Holds an instance of the object
     *
     * @var domo_Admin
     **/
    private static $instance = null;
    /**
     * Constructor
     * @since 0.1.0
     */
    private function __construct()
    {
        // Set our title
        $this->title = __('Site Options', 'domo');
    }
    /**
     * Returns the running object
     *
     * @return domo_Admin
     **/
    public static function get_instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
            self::$instance->hooks();
        }
        return self::$instance;
    }
    /**
     * Initiate our hooks
     * @since 0.1.0
     */
    public function hooks()
    {
        add_action('admin_init', array($this, 'init'));
        add_action('admin_menu', array($this, 'add_options_page'));
        add_action('cmb2_admin_init', array($this, 'add_options_page_metabox'));
    }
    /**
     * Register our setting to WP
     * @since  0.1.0
     */
    public function init()
    {
        register_setting($this->key, $this->key);
    }
    /**
     * Add menu options page
     * @since 0.1.0
     */
    public function add_options_page()
    {
        $this->options_page = add_menu_page($this->title, $this->title, 'delete_others_pages', $this->key, array($this, 'admin_page_display'));
        // Include CMB CSS in the head to avoid FOUC
        add_action("admin_print_styles-{$this->options_page}", array('CMB2_hookup', 'enqueue_cmb_css'));
    }
    /**
     * Admin page markup. Mostly handled by CMB2
     * @since  0.1.0
     */
    public function admin_page_display()
    {
?>
        <div class="wrap cmb2-options-page <?php echo $this->key; ?>">
            <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
            <?php cmb2_metabox_form($this->metabox_id, $this->key); ?>
        </div>
<?php
    }
    /**
     * Add the options metabox to the array of metaboxes
     * @since  0.1.0
     */
    public function add_options_page_metabox()
    {
        // hook in our save notices
        add_action("cmb2_save_options-page_fields_{$this->metabox_id}", array($this, 'settings_notices'), 10, 2);
        $cmb = new_cmb2_box(array(
            'id' => $this->metabox_id,
            'hookup' => false,
            'cmb_styles' => false,
            'show_on' => array(
                // These are important, don't remove
                'key' => 'options-page',
                'value' => array($this->key),
            ),
        ));
        // Set our CMB2 fields
        // $cmb->add_field(array(
        //     'name' => __('營業時間', 'domo'),
        //     'id' => $this->metabox_id . 'working',
        //     'type' => 'textarea',
        // ));
        $cmb->add_field(array(
            'name' => __('LOGO', 'domo'),
            'id' => $this->metabox_id . 'logo',
            'type' => 'file',
            'desc' => '建議尺寸: 200 x 64 px',
        ));
        // $cmb->add_field(array(
        //     'name' => __('LOGO深色畫面用', 'domo'),
        //     'id' => $this->metabox_id . 'logo_dark',
        //     'type' => 'file',

        // ));
        // $cmb->add_field(array(
        //     'name' => __('LOGO淺色畫面用', 'domo'),
        //     'id' => $this->metabox_id . 'logo_light',
        //     'type' => 'textarea',
        //     'type' => 'file',
        // ));
        //   $cmb->add_field(array(
        //     'name' => __('預設Banner', 'domo'),
        //     'desc' => __('Tag、作者、搜尋結果...使用', 'domo'),
        //     'id' => $this->metabox_id . 'banner',
        //     'type' => 'file',
        // ));
        //   $cmb->add_field(array(
        //     'name' => __('竹職人刊登網址', 'domo'),
        //     // 'desc' => __('Tag、作者、搜尋結果...使用', 'domo'),
        //     'id' => $this->metabox_id . 'contact_link',
        //     'type' => 'text',
        // ));
        $cmb->add_field(array(
            'name' => __('Company name', 'domo'),
            'id' => $this->metabox_id . 'name',
            'type' => 'text',
        ));
        $cmb->add_field(array(
            'name' => __('TEL', 'domo'),
            'id' => $this->metabox_id . 'tel',
            'type' => 'text',
        ));
        // $cmb->add_field(array(
        //     'name' => __('Skype', 'domo'),
        //     'id' => $this->metabox_id . 'skype',
        //     'type' => 'text',
        // ));

        $cmb->add_field(array(
            'name' => __('Address', 'domo'),
            'id' => $this->metabox_id . 'address',
            'type' => 'text',
        ));
        // $cmb->add_field(array(
        //     'name' => __('Business', 'domo'),
        //     'id' => $this->metabox_id . 'business',
        //     'type' => 'text',
        // ));
        $cmb->add_field(array(
            'name' => __('EMAIL', 'domo'),
            'id' => $this->metabox_id . 'email',
            'type' => 'text',
        ));
        // $cmb->add_field(array(
        //     'name' => __('Facebook url', 'domo'),
        //     'id' => $this->metabox_id . 'facebook',
        //     'type' => 'text',
        // ));
        // $cmb->add_field(array(
        //     'name' => __('Youtube url', 'domo'),
        //     'id' => $this->metabox_id . 'youtube',
        //     'type' => 'text',
        // ));
        // $cmb->add_field(array(
        //     'name' => __('Instagram url', 'domo'),
        //     'id' => $this->metabox_id . 'instagram',
        //     'type' => 'text',
        // ));
        // $cmb->add_field(array(
        //     'name' => __('Line url', 'domo'),
        //     'id' => $this->metabox_id . 'line',
        //     'type' => 'text',
        // ));

        // $cmb->add_field( array(
        //     'name' => __( '訂購單', 'domo' ),
        //      'id'   => $this->metabox_id.'order_form',
        //     'type' => 'file',
        //     ) );

    }
    /**
     * Register settings notices for display
     *
     * @since  0.1.0
     * @param  int   $object_id Option key
     * @param  array $updated   Array of updated fields
     * @return void
     */
    public function settings_notices($object_id, $updated)
    {
        if ($object_id !== $this->key || empty($updated)) {
            return;
        }
        add_settings_error($this->key . '-notices', '', __('Settings updated.', 'domo'), 'updated');
        settings_errors($this->key . '-notices');
    }
    /**
     * Public getter method for retrieving protected/private variables
     * @since  0.1.0
     * @param  string  $field Field to retrieve
     * @return mixed          Field value or exception is thrown
     */
    public function __get($field)
    {
        // Allowed fields to retrieve
        if (in_array($field, array('key', 'metabox_id', 'title', 'options_page'), true)) {
            return $this->{$field};
        }
        throw new Exception('Invalid property: ' . $field);
    }
}
