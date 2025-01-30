<?php
require_once get_template_directory() . '/includes/enqueue-scripts.php';
require_once get_template_directory() . '/includes/custom-post-types.php';
require_once get_template_directory() . '/includes/meta-boxes.php';
require_once get_template_directory() . '/includes/event-scheduler.php';
require_once get_template_directory() . '/includes/admin-customizations.php';
require_once get_template_directory() . '/includes/debug.php';

add_action('init', function() {
    do_action('check_event_end_date'); // 手動でイベントを実行
});