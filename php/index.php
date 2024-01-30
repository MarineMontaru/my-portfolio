<?php

    $pageToDisplay = 'home';

    if (isset($_GET['page']) && $_GET['page'] !== '') {
        $pageToDisplay = $_GET['page'];
    }

    if ($pageToDisplay === 'works' || $pageToDisplay === 'work-detail') {
        require __DIR__ . '/inc/works-table.php';
    }

    require __DIR__ . '/inc/tpl/header.tpl.php';
    require __DIR__ . '/inc/tpl/banner.tpl.php';
    require __DIR__ . '/inc/tpl/' . $pageToDisplay . '.tpl.php';
    require __DIR__ . '/inc/tpl/footer.tpl.php';