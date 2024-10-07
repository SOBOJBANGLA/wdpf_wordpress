<?php 
/*
Plugin Name: News Ticker
Plugin URI: http://wordpress.org/plugins/newsticker/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Abdullah
Version: 1.0
Author URI: http://mohiuddin.wdpf60.com/
*/

function news_ticker_setup(){
echo '<div class="acme-news-ticker">
    <div class="acme-news-ticker-label">Horizontal News</div>

    <div class="acme-news-ticker-box">
        <ul class="my-news-ticker">
            <li><a href="#">Test 1</a></li>
            <li><a href="#">Test 2</a></li>
            <li><a href="#">Test 3</a></li>
            <li><a href="#">Test 4</a></li>
            <li><a href="#">Test 5</a></li>
            <li><a href="#">Test 6</a></li>
            <li><a href="#">Test 7</a></li>
            <li><a href="#">Test 8</a></li>
        </ul>

    </div>
    <div class="acme-news-ticker-controls acme-news-ticker-horizontal-controls">
        <button class="acme-news-ticker-arrow acme-news-ticker-prev"></button>
        <button class="acme-news-ticker-pause"></button>
        <button class="acme-news-ticker-arrow acme-news-ticker-next"></button>
    </div>
</div> ';
    

}
//add_action( 'do_action', 'news_ticker_setup');

function newsticker_scripts() {
	//wp_enqueue_script( 'my-jquery', plugin_dir_url( __FILE__ ) . 'js/jquery.min.js', array( 'jquery' ) );

	wp_enqueue_script( 'acme-ticker', plugin_dir_url( __FILE__ ) . 'js/acmeticker.min.js', array( 'jquery' ),'',false );
	wp_enqueue_script( 'acme-ticker-init', plugin_dir_url( __FILE__ ) . 'js/script.js', array( 'jquery' ),'',true );
	wp_enqueue_style( 'acme-ticker', plugin_dir_url( __FILE__ ) . 'css/style.css','','1.0' );
};
add_action( 'wp_enqueue_scripts', 'newsticker_scripts' );