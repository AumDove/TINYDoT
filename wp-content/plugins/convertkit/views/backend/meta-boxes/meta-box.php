<?php
/**
 * MetaBox template
 *
 * @package ConvertKit
 * @author ConvertKit
 */

?>
<table class="form-table">
	<tbody>
		<tr valign="top">
			<th scope="row"><label for="wp-convertkit-form"><?php esc_html_e( 'Form', 'convertkit' ); ?></label></th>
			<td>
				<select name="wp-convertkit[form]" id="wp-convertkit-form">
					<option <?php selected( -1, $meta['form'] ); ?> value="-1"><?php esc_html_e( 'Default', 'convertkit' ); ?></option>
					<option <?php selected( 0, $meta['form'] ); ?> value="0"><?php esc_html_e( 'None', 'convertkit' ); ?></option>
					<?php foreach ( $forms as $form ) { ?>
					<option <?php selected( $form['id'], $meta['form'] ); ?> value="<?php echo $form['id']; // WPCS: XSS ok. ?>">
						<?php echo $form['name']; // WPCS: XSS ok. ?></option>
					<?php } ?>
				</select>

				<p class="description">
					<?php
					/* translators: 1: settings url */
					printf( __( 'Choose <code>Default</code> to use the form specified on the <a href="%s" target="_blank">settings page</a>,', 'convertkit' ), esc_attr( esc_url( $settings_link ) ) ); // WPCS: XSS ok.
					echo __( '<code>None</code> to not display a form, or any other option to specify a particular form for this piece of content.', 'convertkit' ); // WPCS: XSS ok.
					?>
				</p>

				<p class="description">
					<?php esc_html_e( 'To make changes to your forms,', 'convertkit' ); ?>
					<a href="https://app.convertkit.com/" target="_blank"><?php esc_html_e( 'sign in to ConvertKit', 'convertkit' ); ?></a>
				</p>
			</td>
		</tr>

		<?php if ( 'page' === $post->post_type ) { ?>
		<tr valign="top">
			<th scope="row"><label for=""><?php esc_html_e( 'Landing Page', 'convertkit' ); ?></label></th>
			<td>
				<select name="wp-convertkit[landing_page]" id="wp-convertkit-landing_page">
					<option <?php selected( '', $meta['landing_page'] ); ?> value="0"><?php _e( 'None', 'convertkit' ); // WPCS: XSS ok. ?></option>
					<?php foreach ( $landing_pages as $landing_page ) {
						$name = sanitize_text_field( $landing_page['name'] ); ?>
					<option <?php selected( $landing_page['url'], $meta['landing_page'] ); ?> value="<?php echo esc_attr( $landing_page['url'], 'convertkit' ); ?>"><?php echo esc_attr( $name ); ?></option>
					<?php } ?>
				</select>
				<p class="description"><?php esc_html_e( 'Select a landing page to make it appear in place of this page.', 'convertkit' ); ?></p>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<?php wp_nonce_field( 'wp-convertkit-save-meta', 'wp-convertkit-save-meta-nonce' );

