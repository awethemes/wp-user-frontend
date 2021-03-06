<div class="wpuf-dashboard-container">
    <nav class="wpuf-dashboard-navigation">
        <ul>
            <?php
                if ( is_user_logged_in() ) {
                    foreach ( $sections as $section ) {
                        if ( 'subscription' == $section['slug']) {
                            if ( 'on' == wpuf_get_option( 'show_subscriptions', 'wpuf_my_account' ) || 'on' != wpuf_get_option( 'enable_payment', 'wpuf_payment', 'on' ) ) {
                                continue;
                            }
                        }
                        echo sprintf(
                            '<li><a href="%s">%s</a></li>',
                            add_query_arg( array( 'section' => $section['slug'] ), get_permalink() ),
                            $section['label']
                        );
                    }
                }
            ?>
        </ul>
    </nav>

    <div class="wpuf-dashboard-content <?php echo ( ! empty( $current_section ) ) ? $current_section['slug'] : ''; ?>">
        <?php
            if ( ! empty( $current_section ) && is_user_logged_in() ) {
                do_action( "wpuf_account_content_{$current_section['slug']}", $sections, $current_section );
            }
        ?>
    </div>
</div>
