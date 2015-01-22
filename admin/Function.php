<?php 
function getBrowse($matches)
    {
        
        if(strstr($matches,'Mozilla') && !strstr($matches,'MSIE')){
            $browseinfo = 'Netscape Navigator';
        }
        if(strstr($matches,'Opera')) {
            $browseinfo = 'Opera';
        }
        if(strstr($matches,'Mozilla') && strstr($matches,'MSIE')){

            $browseinfo = 'Internet Explorer';
        }
        if(strstr($matches,'Chrome')){
             $browseinfo="Chrome";
        }
        if(strstr($matches,'Safari')){
            $browseinfo="Safari";
        }
        if(strstr($matches,'Firefox')){
            $browseinfo="Firefox";
        }

        return $browseinfo;
    }
 ?>