<?php
$url = 'https://restcountries.com/v3.1/independent?status=true'; 
$data = file_get_contents($url);

$phpArr = json_decode($data, true); 

if ($phpArr) {
    echo '<ol>'; 
    foreach($phpArr as $k){
        if (isset($k['name'])) {
            echo '<li>'.$k['name']['common'].' '.$k['idd']['root'].$k['idd']['suffixes'][0].'</li>';
        }
    }
    echo '</ol>';
} else {
    echo 'Error: Unable to retrieve country data.';
}
?>