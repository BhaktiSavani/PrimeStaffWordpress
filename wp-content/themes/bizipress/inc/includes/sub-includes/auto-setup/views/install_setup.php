<?php if ( !defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' ); ?>
<div class="wrap">
    <h1><?php esc_html_e( 'Auto Setup', 'bizipress' ) ?></h1>

    <p class="sub-header"><?php esc_html_e( 'Choose one of the install methods below.', 'bizipress' ) ?></p>
    <br/>
	<?php if ( $has_demo_content ): ?>
		<!-- START INSTALL PLUGINS AND DEMO CONTENT -->
		<div class="postbox auto-setup-box plugins-and-demo">
			<div class="header hndle">
				<h3><span><?php esc_html_e( 'Plugins & Demo Content', 'bizipress' ) ?></span></h3>
			</div>
			<div class="content">

				<p>
					<?php echo bizipress_kses( $messages[ 'plugins_and_demo' ] ); ?>
				</p>
				<ul>
					<li>
						<div class="dashicons dashicons-yes"></div>
						<span><?php esc_html_e( 'Unyson Framework', 'bizipress' ) ?></span></li>
					<?php foreach ( $plugins_list as $plugin_name ): ?>
						<li>
							<div class="dashicons dashicons-yes"></div>
							<span><?php printf( esc_html__( '%s Plugin', 'bizipress' ), $plugin_name ); ?></span></li>
					<?php endforeach; ?>
					<li>
						<div class="dashicons dashicons-yes"></div>
						<span><?php esc_html_e( 'Demo Content', 'bizipress' ) ?></span></li>
				</ul>
			</div>
			<div class="actions">
				<a class="button button-primary"
				   href="<?php echo esc_url($import_demo_content_url); ?>"><?php esc_html_e( 'Install Plugins & Demo Content', 'bizipress' ) ?></a>

			</div>
		</div>
		<!-- END INSTALL PLUGINS AND DEMO CONTENT -->
	<?php endif; ?>
    <!-- START INSTALL PLUGINS ONLY CONTENT -->
    <div class="postbox auto-setup-box plugins-only">
        <div class="header hndle">
            <h3><span><?php esc_html_e( 'Plugins Only', 'bizipress' ) ?></span></h3>
        </div>
        <div class="content">

            <p>
				<?php echo bizipress_kses($messages[ 'plugins_only' ]) ?>
            </p>
            <ul>
                <li>
                    <div class="dashicons dashicons-yes"></div>
                    <span><?php esc_html_e( 'Unyson Framework', 'bizipress' ) ?></span></li>
				<?php foreach ( $plugins_list as $plugin_name ): ?>
					<li>
						<div class="dashicons dashicons-yes"></div>
						<span><?php printf( esc_html__( '%s Plugin', 'bizipress' ), $plugin_name ); ?></span></li>
				<?php endforeach; ?>
                <li>
                    <div class="dashicons dashicons-no-alt"></div>
                    <span><?php esc_html_e( 'Demo Content', 'bizipress' ) ?></span></li>
            </ul>
        </div>
        <div class="actions">
            <a class="button button-primary"
               href="<?php echo esc_url($install_dependencies_url); ?>"><?php esc_html_e( 'Install Plugins Only', 'bizipress' ) ?></a>

        </div>
    </div>
    <!-- END INSTALL PLUGINS ONLY CONTENT -->

    <!-- START SKIP AUTO SETUP -->
    <div class="postbox auto-setup-box skip-auto-setup">
        <div class="header hndle">
            <h3><span><?php esc_html_e( 'Skip Auto Setup', 'bizipress' ) ?></span></h3>
        </div>
        <div class="content">

            <p>
				<?php echo bizipress_kses($messages[ 'skip_auto_install' ]) ?>
            </p>
            <ul>
                <li>
                    <div class="dashicons dashicons-no-alt"></div>
                    <span><?php esc_html_e( 'Unyson Framework', 'bizipress' ) ?></span></li>
				<?php foreach ( $plugins_list as $plugin_name ): ?>
					<li>
						<div class="dashicons dashicons-no-alt"></div>
						<span><?php printf( esc_html__( '%s Plugin', 'bizipress' ), $plugin_name ); ?></span></li>
				<?php endforeach; ?>
                <li>
                    <div class="dashicons dashicons-no-alt"></div>
                    <span><?php esc_html_e( 'Demo Content', 'bizipress' ) ?></span></li>
            </ul>
        </div>
        <div class="actions">
            <a class="button button-secondary"
               href="<?php echo esc_url($skip_auto_install_url); ?>"><?php esc_html_e( 'Skip Auto Setup', 'bizipress' ) ?></a>

        </div>
    </div>
    <!-- END SKIP AUTO SETUP -->
</div>