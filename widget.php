<?php
namespace Elementor;

// Asegúrate de que esto solo se ejecute dentro de WordPress y Elementor
if (!defined('ABSPATH')) exit; // Sal de WordPress si es accesado directamente

class Mi_Widget extends Widget_Base {

    public function get_name() {
        return 'widget';
    }

    public function get_title() {
        return __('Mi Widget', 'text_domain');
    }

    public function get_icon() {
        return 'eicon-post-list';
    }

    public function get_categories() {
        return ['basic'];
    }

    protected function _register_controls() {
        // Controles del widget
    }

    protected function render() {
        // Contenido del widget
        $this->widget_css(); // Enlazar archivo CSS
        ?>
      <div class="site-outer">
        <div class="site-inner">
            <section class="container-fluid">
                <!-- ACCORDION ROW -->
                <div class="row">
                        <ul class="accordion-group" id="accordion">
                            <li class="out" style="background-image: url('https://images.unsplash.com/photo-1556912172-45b7abe8b7e1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80');">
                                <div class="accordion-overlay"></div>
                                <h3>Rustic</h3>
                                <section class="hidden-xs">
                                    <article>
                                        <p>Rual and rustic</p>
                                    </article>
                                </section>
                            </li>
                            <li  style="background-image: url('https://images.unsplash.com/photo-1484154218962-a197022b5858?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1953&q=80');">
                                <div class="accordion-overlay"></div>
                                <h3>Clean</h3>
                                <section class="hidden-xs">
                                    <article>
                                        <p>For the single or couple
                                        </p>
                                    </article>
                                </section>
                            </li>
                            <li style="background-image: url('https://images.unsplash.com/photo-1507089947368-19c1da9775ae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1955&q=80');">
                                <div class="accordion-overlay"></div>
                                <h3>Stylish</h3>
                                <section class="hidden-xs">
                                    <article>
                                        <p>When people want it cosy but stylish</p>
                                    </article>
                                </section>
                            </li>
                            <li style="background-image: url('https://images.unsplash.com/photo-1495433324511-bf8e92934d90?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80');">
                                <div class="accordion-overlay"></div>
                                <h3>Family</h3>
                                <section class="hidden-xs">
                                    <article>
                                        <p>For the family dinner</p>
                                    </article>
                                </section>
                            </li>
                        </ul>
                </div>

        <script src="<?php echo esc_url(get_stylesheet_directory_uri() . '/widget/script.js'); ?>"></script>
        <?php
    }

    public function widget_css() {
        wp_enqueue_style('widget', get_stylesheet_directory_uri() . '/widget/style.css');
    }
}

Plugin::instance()->widgets_manager->register_widget_type(new Mi_Widget());
