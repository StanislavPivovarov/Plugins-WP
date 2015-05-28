<?php
class accordion_widget extends WP_Widget {

    public function __construct() {
        parent::__construct("nav_menu", "Accordion Widget",
            array("description" => "A simple widget to show menu in accordion style"));
    }
    function widget($args, $instance){
        $nav_menu = wp_get_nav_menu_object( $instance['nav_menu'] );
        ?>
        <div class="accordion" id="<?php echo $this->id.'-item'; ?>">

            <?php
            wp_nav_menu(
                array(
                    'fallback_cb' => '',
                    'menu' => $nav_menu,
                    'container' => false,
                )
            );
            ?>

        </div>
    <?php
    }

    function update( $new_instance, $old_instance ) {
        $instance['nav_menu'] = $new_instance['nav_menu'];

        return $instance;
    }
    public function form($instance) {
        $nav_menu = isset( $instance['nav_menu'] ) ? $instance['nav_menu'] : '';
        $menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );ы
?>
        <p>
            <label for="<?php echo $this->get_field_id('nav_menu'); ?>">Select Menu:</label>
            <select id="<?php echo $this->get_field_id('nav_menu'); ?>" name="<?php echo $this->get_field_name('nav_menu'); ?>">
                <?php
                foreach ( $menus as $menu ) {
                    $selected = $nav_menu == $menu->term_id ? ' selected="selected"' : '';
                    echo '<option'. $selected .' value="'. $menu->term_id .'">'. $menu->name .'</option>';
                }
                ?>
            </select>
        </p>
<?php
    }


}
?>