<?php 

function cwc_viewpdf($attr, $url) {
    return '<iframe src="http://docs.google.com/viewer?url=' . $url . '&embedded=true" style="width:' .$attr['width']. '; height:' .$attr['height']. ';" frameborder="0">Your browser should support iFrame to view this PDF document</iframe>';
}
add_shortcode('embedpdf', 'cwc_viewpdf');