<?php
//Data for this script was gathered from : http://www.finetunedmac.com/forums/ubbthreads.php?ubb=showflat&Number=32011
//And http://www.macrumors.com/2010/04/16/apple-tweaks-serial-number-format-with-new-macbook-pro/
//And https://beetstech.com/blog/decode-meaning-behind-apple-serial-number
//And https://news.techable.com/decode-apple-serial-number/
//And https://www.ashfordlaptoprepair.co.uk/blog/decode-your-apple-mac-serial-number/
//3rd or 4th digit (for 12 digit serial) is the year of manufacture using Base-27.
//11 digit serials are very straightforward, 3rd digit is last digit of year, and 4-5 digit are week number.

// Array Containing Factory Codes
$factory_code = array(
	'E' => 'Singapore',
	'F' => 'Fountain Colorado, USA',
	'FC' => 'Fountain Colorado, USA',
	'XA' => 'USA (Elk Grove/Sacramento, California)',
	'XB' => 'USA',
	'QP' => 'USA',
	'G8' => 'USA',
	'RN' => 'Mexico',
	'CK' => 'Cork, Ireland',
	'VM' => 'Foxconn, Pardubice, Czech Republic',
	'SG' => 'Singapore',
	'MB' => 'Malaysia',
	'PT' => 'Korea',
	'CY' => 'Korea',
	'EE' => 'Taiwan',
	'QT' => 'Taiwan (Quanta Computer)',
	'UV' => 'Taiwan',
	'FK' => 'Foxconn-Zhengzhou, China',
	'F1' => 'Foxconn-Zhengzhou, China',
	'F2' => 'Foxconn-Zhengzhou, China',
	'W8' => 'Shanghai China',
	'DL' => 'Foxconn-China',
	'DM' => 'Foxconn-China',
	'DN' => 'Foxconn, Chengdu, China',
	'YM' => 'Hon Hai/Foxconn, China',
	'7J' => 'Hon Hai/Foxconn, China',
	'1C' => 'China',
	'4H' => 'China',
	'MQ' => 'China',
	'WQ' => 'China',
	'F7' => 'China',
	'C0' => 'Tech Com-Quanta Computer Subsidiary, China',
	'C3' => 'Foxconn, Shenzhen, China',
	'C7' => 'Foxconn, Changhai, China',
	'RM' => 'Refurbished/remanufactured',
	'F5K' => 'USA (Flextronics)',
	'CK2' => 'Cork, Ireland',
	'C02' => 'Tech Com-Quanta Computer Subsidiary, China', 
	'C07' => 'Tech Com-Quanta Computer Subsidiary, China',
	'YM0' => 'China (Hon Hai/Foxconn)',
	'C17' => 'China',
	'C1M' => 'China',
	'C2V' => 'China',
	'C2Q' => 'China',
);

// Array for 12 digit year
$years = array(
	'0' => '2005-1',
	'1' => '2005-2',
	'2' => '2006-1',
	'3' => '2006-2',
	'4' => '2007-1',
	'5' => '2007-2',
	'7' => '2008-2',
	'8' => '2009-1',
	'9' => '2009-2',
	'C' => '2010-1',
	'D' => '2010-2',
	'F' => '2011-1',
	'G' => '2011-2',
	'H' => '2012-1',
	'J' => '2012-2',
	'K' => '2013-1',
	'L' => '2013-2',
	'M' => '2014-1',
	'N' => '2014-2',
	'P' => '2015-1',
	'Q' => '2015-2',
	'R' => '2016-1',
	'S' => '2016-2',
	'T' => '2017-1',
	'V' => '2017-2',
	'W' => '2018-1',
	'X' => '2018-2',
	'Y' => '2019-1',
	'Z' => '2019-2',
);

//Years for 11 digit serial. Yes, it ignores the year 2000 and before.
$years11 = array(
	'0' => '2010',
	'1' => '2011',
	'2' => '2012',
	'3' => '2003',
	'4' => '2004',
	'5' => '2005',
	'6' => '2006',
	'7' => '2007',
	'8' => '2008',
	'9' => '2009',
);

//Week is the next digit following year, specifying weeks 1 through 26.
//Weeks 27 through 52 are designated by the "half" of the year specified above.
//For 12 digit serials only, 11 doesn't require array and is calculated from serial
$weeks = array(
	'1' => '1',
	'2' => '2',
	'3' => '3',
	'4' => '4',
	'5' => '5',
	'6' => '6',
	'7' => '7',
	'8' => '8',
	'9' => '9',
	'C' => '10',
	'D' => '11',
	'F' => '12',
	'G' => '13',
	'H' => '14',
	'J' => '15',
	'K' => '16',
	'L' => '17',
	'M' => '18',
	'N' => '19',
	'P' => '20',
	'Q' => '21',
	'R' => '22',
	'T' => '23',
	'V' => '24',
	'W' => '25',
	'X' => '26',
	'Y' => '53',
);

$production_line = array(
	'0' => '0',
	'1' => '1',
	'2' => '2',
	'3' => '3',
	'4' => '4',
	'5' => '5',
	'6' => '6',
	'7' => '7',
	'8' => '8',
	'9' => '9',
	'A' => '10',
	'B' => '11',
	'C' => '12',
	'D' => '13',
	'E' => '14',
	'F' => '15',
	'G' => '16',
	'H' => '17',
	'J' => '18',
	'K' => '19',
	'L' => '20',
	'M' => '21',
	'N' => '22',
	'P' => '23',
	'Q' => '24',
	'R' => '25',
	'S' => '26',
	'T' => '27',
	'U' => '28',
	'V' => '29',
	'W' => '30',
	'X' => '31',
	'Y' => '32',
	'Z' => '33',
);

$monthsdays = array(
	4 => '10/01',
	1 => '01/05',
	2 => '04/01',
	3 => '06/20',
);

// get serial from input form
$get_serial = $_GET['serial'];
$serial = strtoupper($get_serial);
$serial = trim(preg_replace('/\s+/', '', $serial));
$serial_length = strlen($serial);

if ($serial_length == 11) {
	//echo "Computer Pre-2012<br/>";
	$location = substr($serial, 0, 2);

	if (array_key_exists($location, $factory_code) != false) {
    	$factory_location = $factory_code[$location];
	} else {
		$location = substr($location, 0, -1);
		if (array_key_exists($location, $factory_code) != false) {
    		$factory_location = $factory_code[$location];
    	} else {
    		$factory_location = "Unknown";
    	}
    }

	$year = substr($serial, 2, 1);
	$week = substr($serial, 3, 2);  // week of manufacture
	$week_int = (int)$week; // + 1; <- not supposed to need +1, but thought i did before?
	$serial_last4 = substr($serial, 8, 3);
	$build_year = $years11[$year];
	$build_week = $week;
  	$digit_holder = '11_digit';

} elseif ($serial_length == 12) {
	//echo "Computer Post-2012<br/>";
	$location = substr($serial, 0, 3);

	if (array_key_exists($location, $factory_code) != false) {
    	$factory_location = $factory_code[$location];
	} else {
		$location = substr($location, 0, -1);
		if (array_key_exists($location, $factory_code) != false) {
    		$factory_location = $factory_code[$location];
    	} else {
    		$factory_location = "Unknown";
    	}
    }

	$year = substr($serial, 3, 1);
	$week = substr($serial, 4, 1);
	$serial_last4 = substr($serial, 8, 4);
	$build_year = $years[$year];
	$build_week = $weeks[$week];
	$digit_holder = '12_digit';

} else {
	die("Nothing to do!");
}

// Breakdowns for serial components, only used for display, not calculations
if ($digit_holder == '11_digit') {
	$manufacture_location = substr($serial, 0, 2); 
	$manufacture_year = substr($serial, 2, 1);
	$manufacture_week = substr($serial, 3, 2);
	$unique_id = substr($serial, 5, 3);
	// model info = serial_last4
		
} elseif ($digit_holder == '12_digit') {
	$manufacture_location = substr($serial, 0, 3); 
	$manufacture_year = substr($serial, 3, 1);
	$manufacture_week = substr($serial, 4, 1);
	$unique_id = substr($serial, 5, 3);
	// model info = serial_last4
}
//echo "test";


// This calculation is causing issues !!!!!!
if (($build_year == '-2') && ($build_week != '53')) {
	$build_week = $build_week + 26;
}


$build_year = substr($build_year, 0, 4);

// Beloow was old date calculations
// not sure how this was derived
/*
if ($build_week > 36) {
	$build_term = 1;
	$build_year++;
} else {
	$build_term = ceil($build_week/12);
}
*/

//$build_date = $monthsdays[$build_term] . "/" . $build_year;
$build_date = (new DateTime())->setISODate($build_year, $build_week)->format('M d '.$build_year);


$production_line_first_digit = substr($unique_id, 0, 1);
$production_line_second_digit = substr($unique_id, 1, 1);
$production_line_third_digit = substr($unique_id, 2, 1);
//echo $production_line_first_digit . " " . $production_line_second_digit . " " . $production_line_third_digit;
$production_line_first_digit_value = (int)$production_line[$production_line_first_digit];
$production_line_second_digit_value = (int)$production_line[$production_line_second_digit];
$production_line_third_digit_value = (int)$production_line[$production_line_third_digit];
//echo $production_line_first_digit_value . " " . $production_line_second_digit_value . " " . $production_line_third_digit_value;
$production_line_result = (68 * $production_line_first_digit_value) + (34 * $production_line_second_digit_value) + $production_line_third_digit_value;
//echo $production_line_result;


// load and scan json file for model info
$file = 'database.json';
$json = file_get_contents($file);
$json_array = json_decode($json, true);
$someArray = $json_array;
$search_val = $serial_last4;
$count = 0;


// use this for nested json file
foreach ($someArray as $key => $value) {
	if($value['last4'] == $search_val)
	{
		$count++; // used to verify and activate apple query for model info
		$device_name = $value['name'];
		$identifier = $value['id'];
		$modelnum = $value['modelnum'];
		$message = "Product Found in Database";
	}
}

// use this for macmodelshelf style json dump
/*
foreach ($someArray as $key => $value) {
	if($key == $search_val) {
		$count++; // used to verify and activate apple query for model info
        $device_name = $value;
        $message = "Product Found in Database";
    }
}
*/

// if count was not incremented due to json search, then query apple for model info

if($count == 0) {

	$fetch_url = "http://support-sp.apple.com/sp/product?cc=".$serial_last4."&lang=en_US";
    	$url = str_replace( "&amp;", "&", urldecode(trim($fetch_url)) );
	$xml_obj = simplexml_load_file($url);
	$device_name = (string)$xml_obj->configCode;
}


    
// If model info was retreived from apple, add it to database to save future need to query
/*
if(!empty($xml_obj) && file_exists('database.json')) {
	$current_data = file_get_contents('database.json');
	$array_data = json_decode($current_data, true);
	$extra = array($serial_last4 => $device_name); // need to fix this  -> 'last4'  'name' 'id'
	$final_array = array_merge($array_data, $extra);
	$final_data = json_encode($final_array, JSON_PRETTY_PRINT);

	if(file_put_contents('database.json', $final_data)) {
		$message = "Database Updated Successfully";
	} else {
		$message = 'Error Updating Database or JSON File does not exit';
	}
}
*/

if(!empty($xml_obj) && file_exists('database.json')) {
	$current_data = file_get_contents('database.json');
	$array_data = json_decode($current_data, true);
	$extra = array(  'last4'		=>     $serial_last4,  
                     	 'name'			=>     $device_name,  
                     	 'id'			=>     $identifier,
                     	 'modelnum'		=>     $modelnum
                 );
	$array_data[] = $extra;
	$final_data = json_encode($array_data, JSON_PRETTY_PRINT);
	natsort($final_data);
	if(file_put_contents('database.json', $final_data)) {
		$message = "Database Updated Successfully";
	} else {
		$message = 'Error Updating Database or JSON File does not exit';
	}
}

?>

<!DOCTYPE html>
<html>

<head>
 <title>Serial Decoder</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #000000;
   font-family: monospace;
   font-size: 16px;
   text-align: left;
     }
  th {
   background-color: #337ab7;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>

<body>
   <table>
 	<tr>
		<th>Serial Information:</th>
		<th></th>
		
 	</tr>
 	<tr>
		<td>Serial #:</td>
		<td><?php echo $serial; ?></td>
	</tr>
	<tr>
		<td>Location of Manufacture:</td>
        <td><?php echo $manufacture_location; ?></td>
	</tr>
	<tr>
        <td>Year of Manufacture:</td>
        <td><?php echo $manufacture_year; ?></td>
	</tr>
	<tr>
        <td>Week of Manufacture:</td>
        <td><?php echo $manufacture_week; ?></td>
	</tr>
	<tr>
        <td>Unique Identifier:</td>
		<td><?php echo $unique_id; ?></td>
	</tr>
	<tr>
        <td>Model Info:</td>
        <td><?php echo $serial_last4; ?></td>

	</tr>
	<tr>
        <td>Model:</td>
		<td><?php echo $device_name; ?></td>

	</tr>
	<tr>
        <td>Location of Manufacture:</td>
		<td><?php echo $factory_location; ?></td>	 
	</tr>
	<tr>
        <td> Week of Manufacture:</td>
        <td><?php if ($digit_holder == '11_digit') { 
					echo $week_int;
				  } elseif ($digit_holder == '12_digit') {
					echo $weeks[$week];
				  };?></td>
	</tr>
	<tr>
        <td>Year:</td>
		<td><?php echo $build_year; ?></td>
	</tr>
	<tr>
        <td>Manufacture Date:</td>
		<td><?php echo $build_date; ?></td>
	</tr>
	<tr>
        <td>Production Line:</td>
		<td><?php echo $production_line_result; ?></td>
	</tr>
	<tr>
        <td>System Specifications:</td>
		<td><a href="http://support-sp.apple.com/sp/index?page=cpuspec&cc=<?php echo $serial_last4; ?>">View Hardware Specifications</a></td>
	</tr>
	<tr>
        <td>Message:</td>
		<td><?php echo $message; ?></td>
	</tr>
    </table>
</body>
</html>
