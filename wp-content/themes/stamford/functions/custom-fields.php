<?php

add_filter('acf/settings/remove_wp_meta_box', '__return_false', 9999);

class AutoActivator {
		
		const ACTIVATION_KEY = 'b3JkZXJfaWQ9MzYwNDN8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE0LTA3LTI5IDEwOjUyOjM4';
		
		/**
		 * AutoActivator constructor.
		 * This will update the license field option on acf
		 * Works only on backend to not attack performance on frontend
		 */
		public function __construct() {
			if (
				function_exists( 'acf' ) &&
			    is_admin() &&
				!acf_pro_get_license_key()
			) {
				acf_pro_update_license(self::ACTIVATION_KEY);
			}
		}
		
	}
       
new AutoActivator();

if( function_exists('register_field_group') ):

register_field_group(array (
	'key' => 'group_53e4ab3519fd5',
	'title' => 'Global',
	'fields' => array (
		array (
			'key' => 'field_537e3cbe808d0',
			'label' => 'Organisation information',
			'name' => '',
			'prefix' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
		),
		array (
			'key' => 'field_5298aa885b1b9',
			'label' => 'Organisation Name',
			'name' => 'global_name',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'shortcode: [name]',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'e.g. Organisation Name',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5298aa805b1b8',
			'label' => 'Site Address',
			'name' => 'global_address',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'shortcode: [address]',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'e.g. 123 Made Up St, Town / City, Norfolk PE33 000',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5298aa735b1b7',
			'label' => 'Primary Email Address',
			'name' => 'global_email',
			'prefix' => '',
			'type' => 'email',
			'instructions' => 'shortcode: [email]',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'e.g. info@example.co.uk',
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_537f2f7013d84',
			'label' => 'Phone & Fax',
			'name' => '',
			'prefix' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
		),
		array (
			'key' => 'field_5298aa5d5b1b6',
			'label' => 'Phone Number',
			'name' => 'global_phone',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'shortcode: [phone]',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'e.g. 01234 56789',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_537e441b95619',
			'label' => 'Mobile Number',
			'name' => 'global_mobile',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Shortcode : [mobile]',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'e.g. 0123456789',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_537e44479561a',
			'label' => 'Fax Number',
			'name' => 'global_fax',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Shortcode : [fax]',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'e.g. 01234 56789',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_537f2f3613d83',
			'label' => 'Company Numbers',
			'name' => '',
			'prefix' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
		),
		array (
			'key' => 'field_537f2c066ac46',
			'label' => 'Registered Company No.',
			'name' => 'global_company_number',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Shortcode : [company no]',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'e.g. 06638192',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_537f2c286ac47',
			'label' => 'Registered VAT No.',
			'name' => 'global_vat_number',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Shortcode : [vat no]',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'e.g.	878 4154 83',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_537e3c9d808cf',
			'label' => 'Social Media',
			'name' => '',
			'prefix' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
		),
		array (
			'key' => 'field_52a896f03be55',
			'label' => 'Twitter',
			'name' => 'global_twitter',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'shortcode: [twitter]',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'e.g. https://twitter.com/example',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_52a896fabdcc5',
			'label' => 'Facebook',
			'name' => 'global_facebook',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'shortcode: [facebook]',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'e.g. https://www.facebook.com/example',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_52a9a964310c3',
			'label' => 'LinkedIn',
			'name' => 'global_linkedin',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'shortcode: [linkedin]',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'e.g. https://www.linkedin.com/company/example',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'site-details',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;
