<?php
$wp_customize->add_setting( 'ultrapress_body_font_heading',
	array(
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control( 
	new Ultrapress_Simple_Notice_Custom_Control( 
		$wp_customize, 'ultrapress_body_font_heading',
		array(
			'label' => esc_html__( 'Body Font Styles', 'ultrapress' ),
			'type' => 'heading',
			'section' => 'body_style',
			'priority' => 1
		)
	) 
);
$wp_customize->add_setting( 'ultrapress_body_font_family',
	array(
		'default' => '{"font":"Lato","regularweight":"regular","italicweight":"italic","boldweight":"regular","category":"sans-serif"}',
		'sanitize_callback' => 'ultrapress_google_font_sanitization',
		'transport' => 'refresh',
	)
);
$wp_customize->add_control( 
	new Ultrapress_Google_Font_Select_Custom_Control( 
		$wp_customize, 'ultrapress_body_font_family',
		array(
			'label' => esc_html__( 'Body Font Family' , 'ultrapress'),
			'section' => 'body_style',
			'input_attrs' => array(
				'font_count' => 'all',
				'orderby' => 'alpha',
			),
			'priority' => 2
		)
	) 
);
$wp_customize->add_setting( 'ultrapress_body_font_color',
	array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'ultrapress_hex_rgba_sanitization'
	)
);
$wp_customize->add_control( 
	new Ultrapress_Customize_Alpha_Color_Control(
		$wp_customize, 'ultrapress_body_font_color',
		array(
			'label' => esc_html__( 'Text Color', 'ultrapress' ),
			'section' => 'body_style',
			'show_opacity' => false,
			'priority' => 3
		)
	) 
);
$wp_customize->add_setting( 'ultrapress_body_font_size',
	array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'absint'
	)
);
$wp_customize->add_control( 
	new Ultrapress_Slider_Custom_Control( 
		$wp_customize, 'ultrapress_body_font_size',
		array(
			'label' => esc_html__( 'Font Size(px)', 'ultrapress' ),
			'section' => 'body_style',
			'input_attrs' => array(
				'min' => 0,
				'max' => 100,
				'step' => 1,
			),
			'priority' => 4
		)
	) 
);
$wp_customize->add_setting( 'ultrapress_body_line_height',
	array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'ultrapress_floatval'
	)
);
$wp_customize->add_control( 
	new Ultrapress_Slider_Custom_Control( 
		$wp_customize, 'ultrapress_body_line_height',
		array(
			'label' => esc_html__( 'Line Height(em)', 'ultrapress' ),
			'section' => 'body_style',
			'input_attrs' => array(
				'min' => 0,
				'max' => 10,
				'step' => 0.1,
			),
			'priority' => 5
		)
	) 
);
/* BlockQuote */
$wp_customize->add_setting( 'ultrapress_bquote_font_heading',
	array(
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control( 
	new Ultrapress_Simple_Notice_Custom_Control( 
		$wp_customize, 'ultrapress_bquote_font_heading',
		array(
			'label' => esc_html__( 'BlockQuote', 'ultrapress' ),
			'type' => 'heading',
			'section' => 'body_style',
			'priority' => 8
		)
	) 
);
$wp_customize->add_setting( 'ultrapress_bquote_font_family',
	array(
		'default' => '{"font":"Lato","regularweight":"regular","italicweight":"italic","boldweight":"regular","category":"sans-serif"}',
		'sanitize_callback' => 'ultrapress_google_font_sanitization',
		'transport' => 'refresh',
	)
);
$wp_customize->add_control( 
	new Ultrapress_Google_Font_Select_Custom_Control( 
		$wp_customize, 'ultrapress_bquote_font_family',
		array(
			'label' => esc_html__( 'Font Family' , 'ultrapress'),
			'section' => 'body_style',
			'input_attrs' => array(
				'font_count' => 'all',
				'orderby' => 'alpha',
			),
			'priority' => 8
		)
	) 
);

$wp_customize->add_setting( 'ultrapress_bquote_font_size',
	array(
		'default' => '19',
		'transport' => 'refresh',
		'sanitize_callback' => 'absint'
	)
);
$wp_customize->add_control( 
	new Ultrapress_Slider_Custom_Control( 
		$wp_customize, 'ultrapress_bquote_font_size',
		array(
			'label' => esc_html__( 'Font Size(px)', 'ultrapress' ),
			'section' => 'body_style',
			'input_attrs' => array(
				'min' => 0,
				'max' => 100,
				'step' => 1,
			),
			'priority' => 8
		)
	) 
);

/* Preformatted */
$wp_customize->add_setting( 'ultrapress_preform_font_heading',
	array(
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control( 
	new Ultrapress_Simple_Notice_Custom_Control( 
		$wp_customize, 'ultrapress_preform_font_heading',
		array(
			'label' => esc_html__( 'Preformatted', 'ultrapress' ),
			'type' => 'heading',
			'section' => 'body_style',
			'priority' => 9
		)
	) 
);
$wp_customize->add_setting( 'ultrapress_preform_font_family',
	array(
		'default' => '{"font":"Lato","regularweight":"regular","italicweight":"italic","boldweight":"regular","category":"sans-serif"}',
		'sanitize_callback' => 'ultrapress_google_font_sanitization',
		'transport' => 'refresh',
	)
);
$wp_customize->add_control( 
	new Ultrapress_Google_Font_Select_Custom_Control( 
		$wp_customize, 'ultrapress_preform_font_family',
		array(
			'label' => esc_html__( 'Font Family' , 'ultrapress'),
			'section' => 'body_style',
			'input_attrs' => array(
				'font_count' => 'all',
				'orderby' => 'alpha',
			),
			'priority' => 9
		)
	) 
);

$wp_customize->add_setting( 'ultrapress_preform_font_size',
	array(
		'default' => '15',
		'transport' => 'refresh',
		'sanitize_callback' => 'absint'
	)
);
$wp_customize->add_control( 
	new Ultrapress_Slider_Custom_Control( 
		$wp_customize, 'ultrapress_preform_font_size',
		array(
			'label' => esc_html__( 'Font Size(px)', 'ultrapress' ),
			'section' => 'body_style',
			'input_attrs' => array(
				'min' => 0,
				'max' => 100,
				'step' => 1,
			),
			'priority' => 9
		)
	) 
);