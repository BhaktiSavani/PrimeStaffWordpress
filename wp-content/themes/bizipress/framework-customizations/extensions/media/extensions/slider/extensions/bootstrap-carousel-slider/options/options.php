<?php

if ( !defined( 'FW' ) )
	die( 'Forbidden' );
/*
 * options.php - extra options shown after default options on add and edit slider page.
 */
$options = array(
	'unique_id' => array(
		'type' => 'unique'
	),
	'class' => array(
		'label'			 => __( 'Switch', 'bizipress' ),
		'type'			 => 'switch',
		'right-choice'	 => array(
			'value'	 => 'default',
			'label'	 => __( 'Default', 'bizipress' )
		),
		'left-choice'	 => array(
			'value'	 => 'classic',
			'label'	 => __( 'Classic', 'bizipress' )
		),
		'value'			 => 'default',
		'desc'			 => __( 'If you want  you can use classic style', 'bizipress' ),

	),
    'modern_style' => array(
        'type'  => 'switch',
        'value' => 'no',
        'label' => __('Classic Box ', 'bizipress'),
        'left-choice' => array(
            'value' => 'yes',
            'label' => __('Yes', 'bizipress'),
        ),
        'right-choice' => array(
            'value' => 'no',
            'label' => __('No', 'bizipress'),
        ),
    )

);
