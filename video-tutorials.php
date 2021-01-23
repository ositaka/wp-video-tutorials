<?php
/*
*   Plugin Name: Video Tutorials
*   Description: Video tutorials for the suninabox.eu 
*   Author: Media Creators Studio
*   Author URI: https://mediacreators.studio 
*   Version: 1.0 
*/

function video_tutorials_add_main_page() {

    // add_menu_page('Page Title', 'Menu Item Name', 'user_pernissions', 'slug', 'callback_function', 'icon', (position in menu, ex "1"));
    add_menu_page('Example', 'Video Tutorials', 'edit_posts', 'video-tutorials', 'video_tutorials_create_page', 'dashicons-video-alt3',2);
    
    // add_submenu_page('slug', 'Page Title', 'SubMenu Item Name', 'user_pernissions', 'slug-for-submenu-item', 'callback_function');
    add_submenu_page('video-tutorials', 'Sub Page Contents', 'Sub Page', 'edit_posts', 'video-tutorials-sub-page', 'video_tutorials_create_subpage');

    
}
add_action('admin_menu', 'video_tutorials_add_main_page');


function video_tutorials_create_page() {
    $admin = current_user_can( 'manage_options' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-ui-core' );
    wp_enqueue_script( 'jquery-ui-dialog' );
    ?>
        <style>
            .boxes-container { 
                display: flex;
                flex-flow: column wrap;
                max-height: 800px;
                /* margin-left: -1em; Adjustment for the gutter */
                width: 100%;
                margin-top: 2em;
            }
            .box {margin: 0 2em 2em 0; /* Some gutter */ padding: 1em 2em; background: white; box-sizing: border-box; border-radius: 8px; box-shadow: 3px 3px 10px rgba(22,22,22,.05); }
            .box ul > ul { margin-left: 2em; margin-bottom: 1em; }

            .box .videos-list a { text-decoration: none!important; padding: .5em .5em .5em 0!important; }
            .dashicons { margin-right: 4px!important; margin-top: -2px }

            .ui-dialog { z-index: 99999; background: #0090c8; animation: fadeIn .6s; position: absolute; top:0!important; bottom: 0!important; left: 0!important; right: 0!important; }
            .ui-dialog-title { color: white; font-size: 16px; }
            .ui-dialog-titlebar.ui-widget-header { padding: 1em; }
            .ui-dialog-titlebar-close { position: absolute; top: 1em; right: 1em; }
        </style>
        
        <div class="wrap">
            <h1>Welcome to the Video Tutorials</h1>
            I am a text block with some interesting info on it. I am a text block with some interesting info on it.

            <div class="boxes-container">
                <div class="box">
                    <h2><span class="dashicons dashicons-admin-page"></span> Pages</h2>
                    <ul class="videos-list">
                        <?php if ( $admin ) : ?>
                            <li><a href="#" id="open-modal" data-video="56664" class="row-title"><span class="dashicons dashicons-hidden" title="Visible for Admin's only"></span> <span class="title">Add New Page</span></a></li>
                            <li><a href="#" id="open-modal" data-video="56664" class="row-title"><span class="dashicons dashicons-hidden" title="Visible for Admin's only"></span> <span class="title">Recover Page from Old Version</span></a></li>
                        <?php endif ?>
                        <li><a href="#" id="open-modal" data-video="458509326" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Edit Page</span></a></li>
                    </ul>
                </div>
                <div class="box">
                    <h2><span class="dashicons dashicons-format-image"></span> Products</h2>
                    <ul class="videos-list">
                        <li><a href="#" id="open-modal" data-video="458509326" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Add New Product</span></a></li>
                        <li><a href="#" id="open-modal" data-video="56664" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Edit Product</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Edit Price</span></a></li>
                    </ul>
                </div>
                <div class="box">
                    <h2><span class="dashicons dashicons-admin-users"></span> Users / Customers</h2>
                    <ul class="videos-list">
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Create New Customer</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Edit Customer Details</span></a></li>
                        <ul>
                            <li><a href="#" id="open-modal" data-video="32245454532"><span class="dashicons dashicons-controls-play"></span> <span class="title">Edit Billing Address</span></a></li>
                            <li><a href="#" id="open-modal" data-video="32245454532"><span class="dashicons dashicons-controls-play"></span> <span class="title">Edit Shipping Address</span></a></li>
                            <li><a href="#" id="open-modal" data-video="32245454532"><span class="dashicons dashicons-controls-play"></span> <span class="title">Set New Password</span></a></li>
                        </ul>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Delete Customer</span></a></li>
                    </ul>
                </div>
                <div class="box">
                    <h2><span class="dashicons dashicons-cart"></span> Orders</h2>
                    <ul class="videos-list">
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Quick View</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">View Order Details</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Processing New Order</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Filter Orders</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Edit Order</span></a></li>
                        <ul>
                            <li><a href="#" id="open-modal" data-video="877878787"><span class="dashicons dashicons-controls-play"></span> <span class="title">Add / Remove Items</span></a></li>
                            <li><a href="#" id="open-modal" data-video="877878787"><span class="dashicons dashicons-controls-play"></span> <span class="title">Add / Remove Discount</span></a></li>
                            <li><a href="#" id="open-modal" data-video="877878787"><span class="dashicons dashicons-controls-play"></span> <span class="title">Add / Remove TAX</span></a></li>
                            <li><a href="#" id="open-modal" data-video="877878787"><span class="dashicons dashicons-controls-play"></span> <span class="title">Set "Zero TAX"</span></a></li>
                            <li><a href="#" id="open-modal" data-video="877878787"><span class="dashicons dashicons-controls-play"></span> <span class="title">Set "Relatiegeschenken"</span></a></li>
                            <li><a href="#" id="open-modal" data-video="877878787"><span class="dashicons dashicons-controls-play"></span> <span class="title">Edit Shipping Method</span></a></li>
                        </ul>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Add Order Notes</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Add "Post Tracking"</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Create "Manual" order</span></a></li>
                        <ul>
                            <li><a href="#" id="open-modal" data-video="56446644"><span class="dashicons dashicons-controls-play"></span> <span class="title">Add Billing Address</span></a></li>
                            <li><a href="#" id="open-modal" data-video="3223"><span class="dashicons dashicons-controls-play"></span> <span class="title">Add Shipping Address</span></a></li>
                            <li><a href="#" id="open-modal" data-video="656"><span class="dashicons dashicons-controls-play"></span> <span class="title">Load Customer Address</span></a></li>
                            <li><a href="#" id="open-modal" data-video="877878787"><span class="dashicons dashicons-controls-play"></span> <span class="title">Set Shipping Method</span></a></li>
                        </ul>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Delete Order Permanently</span></a></li>
                    </ul>
                </div>
                <div class="box">
                    <h2><span class="dashicons dashicons-format-aside"></span> Invoices</h2>
                    <ul class="videos-list">
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Generate Invoice</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Edit Invoice</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Add "Notes" on Invoice</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Send E-mail with Invoice</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">Delete Invoice & Set same Number</span></a></li>
                    </ul>
                </div>
                <div class="box">
                    <h2><span class="dashicons dashicons-chart-bar"></span> Shop Analytics</h2>
                    <ul class="videos-list">
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">See Top Sellers</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">See Specific Product</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">See by Category</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-controls-play"></span> <span class="title">See by Country</span></a></li>
                    </ul>
                </div>
                <?php if ( $admin ) : ?>
                <div class="box">
                    <h2><span class="dashicons dashicons-admin-generic"></span> Admin & Site Settings</h2>
                    <ul class="videos-list">
                        <li><a href="#" id="open-modal" data-video="458509326" class="row-title"><span class="dashicons dashicons-hidden" title="Visible for Admin's only"></span> <span class="title">Do Something</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-hidden" title="Visible for Admin's only"></span> <span class="title">Something on WooCommerce</span></a></li>
                        <li><a href="#" id="open-modal" data-video="32245454532" class="row-title"><span class="dashicons dashicons-hidden" title="Visible for Admin's only"></span> <span class="title">Change the date on calendar</span></a></li>
                    </ul>
                </div>
                <?php endif ?>
            </div>
        </div>

        <div id="modal-content">
            <div style="padding:59.15% 0 0 0;position:relative;">
                <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </div>

        <script>
            let videos = document.querySelectorAll('[data-video]');

            [].forEach.call(videos, function(el) {
                
                el.addEventListener("click", e => {
                    e.preventDefault();

                    jQuery(function($) {
                        // set size of modal
                        var wWidth = $(window).width();
                        var wHeight = $(window).height();

                        var $info = $("#modal-content");
                        $info.dialog({                   
                            'dialogClass'   : 'wp-dialog',           
                            'modal'         : true,
                            'autoOpen'      : false, 
                            'closeOnEscape' : false,
                            'resizable'     : false,
                            'draggable'     : false,
                            'title'         : el.querySelector('.title').innerHTML,
                            'width'         : wWidth + 16,
                            'height'        : wHeight
                        });
                        $info.dialog('open');
                        $('body').css({'overflow': 'hidden'});
                    });

                    // add video from data-video="id"
                    document.querySelector('#modal-content iframe').src = '//player.vimeo.com/video/' + el.dataset.video + '?autoplay=1';
                    
                    // remove video on "close"
                    document.querySelector('.ui-dialog-titlebar-close').addEventListener('click', e => {
                        document.querySelector('#modal-content iframe').src = '';
                        document.querySelector('body').style.overflow = 'auto';
                        document.querySelector('body').style.minHeight = '130%';
                        
                        // exit fullscreen
                        if (document.exitFullscreen) { document.exitFullscreen(); } 
                        else if (document.msExitFullscreen) { document.msExitFullscreen(); } 
                        else if (document.mozCancelFullScreen) { document.mozCancelFullScreen(); } 
                        else if (document.webkitExitFullscreen) { document.webkitExitFullscreen(); }
                    });

                    // goes fullscreen onClick
                    if (document.documentElement.requestFullscreen) { document.documentElement.requestFullscreen(); } 
                    else if (document.documentElement.msRequestFullscreen) { document.documentElement.msRequestFullscreen(); } 
                    else if (document.documentElement.mozRequestFullScreen) { document.documentElement.mozRequestFullScreen(); } 
                    else if (document.documentElement.webkitRequestFullscreen) { document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT); }
                
                    return false;
                });

                
            });

        </script>
    <?php
}

function video_tutorials_create_subpage() {
    echo '
        <div class="wrap">
            <h1>Sug Page | Welcome to the Video Tutorials</h1>
            I am a text block with some interesting info on it. I am a text block with some interesting info on it.
        </div>
    ';
}

?>