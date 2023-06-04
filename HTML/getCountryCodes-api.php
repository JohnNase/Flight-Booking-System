<select>
<?php
$url = 'https://restcountries.com/v3.1/independent?status=true'; 
$data = file_get_contents($url);

$phpArr = json_decode($data, true); 

if ($phpArr) { 
    foreach($phpArr as $k){
        if (isset($k['name'])) {
            $photo = $k['flags']['png'];
            echo '<option style="background-image: url('.$photo.');" '.$k['name']['common'].' '.$k['idd']['root'].$k['idd']['suffixes'][0].'</option>';
        }
    } 
} else {
    echo 'Error: Unable to retrieve country data.';
}
?>

<style>
    .custom-select {
  position: relative;
  display: inline-block;
}

.custom-select select {
  display: none;
}

.custom-select .select-selected {
  display: flex;
  align-items: center;
  padding: 5px;
  border: 1px solid #ccc;
  cursor: pointer;
  background-image: url('default-flag.png'); /* Default flag image */
  background-repeat: no-repeat;
  background-position: 5px center;
  padding-left: 30px;
}

.custom-select .select-selected:hover {
  background-color: #eaeaea;
}

.custom-select .select-selected:after {
  content: '';
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 5px 5px 0 5px;
  border-color: #555 transparent transparent transparent;
}

.custom-select .select-items {
  position: absolute;
  background-color: #f9f9f9;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
  display: none;
  max-height: 200px;
  overflow: auto;
  border: 1px solid #ccc;
}

.custom-select .select-items div {
  padding: 5px;
  cursor: pointer;
  display: flex;
  align-items: center;
}

.custom-select .select-items div:hover {
  background-color: #eaeaea;
}

.custom-select.open .select-selected:after {
  border-color: transparent transparent #555 transparent;
}

.custom-select.open .select-items {
  display: block;
}

</style>
</select>