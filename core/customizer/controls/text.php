<?php  /**
 * Text UI Control
 *
 * This file is used to register and display the custom Text UI Checkbox
 *
 * @package Hatch
 * @since Hatch 1.0
 */

if( !class_exists( 'Hatch_Customize_Text_Control' ) ) {

	class Hatch_Customize_Text_Control extends WP_Customize_Control {

		public $type = 'text';

		public $description = '';

		public $subtitle = '';

		public $separator = false;

		public $required;

		public function render_content() { ?>

			<label class="customizer-text">
				<span class="customize-control-title">

					<?php echo esc_html( $this->label ); ?>

					<?php if ( isset( $this->description ) && '' != $this->description ) { ?>
						<a href="#" class="button tooltip" title="<?php echo strip_tags( esc_html( $this->description ) ); ?>">?</a>
					<?php } ?>

				</span>

				<?php if ( '' != $this->subtitle ) : ?>
					<div class="customizer-subtitle"><?php echo $this->subtitle; ?></div>
				<?php endif; ?>

				<input type="text" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); ?> />
			</label>
			<?php if ( $this->separator ) echo '<hr class="customizer-separator">'; ?>
		<?php }
	}
} // !class_exists( 'Hatch_Customize_Text_Control' )