<?php

// fungsi base url
function base_url($url = null)
{
    $base_url = 'http://localhost/pendaftaran';
    if ($url != null) {
        return $base_url . "/" . $url;
    } else {
        return $base_url;
    }
}
