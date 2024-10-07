jQuery(document).ready(function ($) {
    $('.my-news-ticker').AcmeTicker({
        type:'typewriter',/*horizontal/horizontal/Marquee/type*/
        direction: 'right',/*up/down/left/right*/
        speed:50,/*true/false/number*/ /*For vertical/horizontal 600*//*For marquee 0.05*//*For typewriter 50*/
        controls: {
            prev: $('.acme-news-ticker-prev'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
            toggle: $('.acme-news-ticker-pause'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
            next: $('.acme-news-ticker-next')/*Can be used for horizontal/horizontal/marquee/typewriter*/
        }
    });
})