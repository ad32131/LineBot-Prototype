<?php
$AccessToken ='8JylyVPskZ1lHFZmIjChyOClmjSkCH5g2EbjL6mKWiEraZnI7Pn2zf1JskQilnfGhGTmrUKa1nqDNZpEtG5QwsofNQ25c28xLHIWk/fd6mfUIUGawNaOaOaHPIqZeVK90UzMRyYqZjtyKDdC+b2Z/gdB04t89/1O/w1cDnyilFU=';

function init_msg($AccessToken){
    return array(
        'Authorization: Bearer '.$AccessToken.'',
        'Content-Type:application/json'
        );
}
?>