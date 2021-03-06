<?php
$changelog = array(
    array(
        'version'  => 'Version 2.8.1',
        'released' => '2018-01-14',
        'changes' => array(
            array(
                'title'       => __( 'Setup Wizard', 'wpuf' ),
                'type'        => 'New',
                'description' => __( 'Setup Wizard added to turn off payment options and install pages.', 'wpuf' ) .
                '<img src="'. WPUF_ASSET_URI .'/images/whats-new/wizard.gif" alt="Setup Wizard">'
            ),
            array(
                'title'       => __( 'Multi-select Category', 'wpuf' ),
                'type'        => 'New',
                'description' => __( 'Add multi-select to default category in post form settings.', 'wpuf' ) .
                '<img src="'. WPUF_ASSET_URI .'/images/whats-new/category.png" alt="Multi-select Category">'
            ),
            array(
                'title'       => __( 'Select Text option for Taxonomy', 'wpuf' ),
                'type'        => 'Improvement',
                'description' => __( 'Add Select Text option for taxonomy fields. Now you can add default text with empty value as first option for Taxonomy dropdown.', 'wpuf' )
            ),
            array(
                'title'       => __( 'Taxonomy Checkbox Inline', 'wpuf' ),
                'type'        => 'Improvement',
                'description' => __( 'Added checkbox inline option to taxonomy checkbox. You can now display Taxonomy checkbox fields inline.', 'wpuf' )
            ),
        )
    ),

    array(
        'version'  => 'Version 2.8',
        'released' => '2018-01-06',
        'changes' => array(
            array(
                'title'       => __( 'Manage schedule for form submission', 'wpuf' ),
                'type'        => 'New',
                'description' => __( 'Do not accept form submission if the current date is not between the date range of the schedule.', 'wpuf' ) .
                '<img src="'. WPUF_ASSET_URI .'/images/whats-new/schedule.png" alt="Manage schedule for form submission">'
            ),
            array(
                'title'       => __( 'Restrict form submission based on the user roles', 'wpuf' ),
                'type'        => 'New',
                'description' => __( 'Restrict form submission based on the user roles. Now you can manage user role base permission on form submission.', 'wpuf' ) .
                '<img src="'. WPUF_ASSET_URI .'/images/whats-new/role-base.png" alt="Restrict form submission based on the users role">'
            ),
            array(
                'title'       => __( 'Limit how many entries a form will accept', 'wpuf' ),
                'type'        => 'New',
                'description' => __( 'Limit how many entries a form will accept and display a custom message when that limit is reached.', 'wpuf' ) .
                '<img src="'. WPUF_ASSET_URI .'/images/whats-new/limit.png" alt="Limit how many entries a form will accept">'
            ),
            array(
                'title'       => __( 'Show/hide Admin Bar', 'wpuf' ),
                'type'        => 'New',
                'description' => __( 'Control the admin bar visibility based on user roles.', 'wpuf' ) .
                '<img src="'. WPUF_ASSET_URI .'/images/whats-new/admin-bar.png" alt="Show/hide Admin Bar">'
            ),
            array(
                'title'       => __( 'Ajax Login widget', 'wpuf' ),
                'type'        => 'New',
                'description' => __( 'Login user is more simple now with Ajax Login Widget. The simple ajax login form do not required page loading for login.', 'wpuf' ) .
                '<br><br><iframe width="100%" height="372" src="https://www.youtube.com/embed/eZYSuXsCw8E" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>'
            ),
            array(
                'title'       => __( 'Form submission with Captcha field', 'wpuf' ),
                'type'        => 'Improvement',
                'description' => __( 'Form field validation process updated if form submits with captcha field.', 'wpuf' )
            ),
        )
    )
);

function _wpuf_changelog_content( $content ) {
    $content = wpautop( $content, true );

    return $content;
}
?>

<div class="wrap wpuf-whats-new">
    <h1><?php _e( 'What\'s New in WPUF?', 'wpuf' ); ?></h1>

    <div class="wedevs-changelog-wrapper">

        <?php foreach ( $changelog as $release ) { ?>
            <div class="wedevs-changelog">
                <div class="wedevs-changelog-version">
                    <h3><?php echo esc_html( $release['version'] ); ?></h3>
                    <p class="released">
                        (<?php echo human_time_diff( time(), strtotime( $release['released'] ) ); ?> ago)
                    </p>
                </div>
                <div class="wedevs-changelog-history">
                    <ul>
                        <?php foreach ( $release['changes'] as $change ) { ?>
                            <li>
                                <h4>
                                    <span class="title"><?php echo esc_html( $change['title'] ); ?></span>
                                    <span class="label <?php echo strtolower( $change['type'] ); ?>"><?php echo esc_html( $change['type'] ); ?></span>
                                </h4>

                                <div class="description">
                                    <?php echo _wpuf_changelog_content( $change['description'] ); ?>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>

</div>
