<?php

if (!defined('FW')) {
    die('Forbidden');
}

$cfg = array(
    'page_builder' => array(
        'title' => esc_html__('Tabs', 'bizipress'),
        'description' => esc_html__('Add some Tabs', 'bizipress'),
        'tab' => esc_html__('Content Elements', 'bizipress'),
        'popup_size' => 'medium'
    )
);
