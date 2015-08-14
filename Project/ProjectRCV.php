<?php
	$Name = $_POST["Name"];
	$Limit = $_POST["Limit"];
	$Country = $_POST["Country"];
	$Attribute = $_POST["Attribute"];
	$NameTokens = explode(" ", $Name);
	$sizeofNameTokens = count($NameTokens);

	$string =  $NameTokens[0] . '+';
	$itt = 1;
	for ($itt = 1; $itt < $sizeofNameTokens; $itt ++)
	{
		$string = $string . $NameTokens[$itt];
		if ($itt+1 < $sizeofNameTokens)
		{
			$string = $string . '+';
		}
	}
	if (!(empty($Limit)))
		$string = $string . '&limit=' . $Limit;
	if (!(empty($Country)))
		$string = $string . '&country=' . $Country;
	if (!(empty($Attribute)))
		$string = $string . '&media=' . $Attribute;
	$sendString = 'https://itunes.apple.com/search?term=' . $string;

	$apiResponse = file_get_contents($sendString);
	// print $sendString;
	// $apiResponse = file_get_contents('https://itunes.apple.com/search?term=jack+johnson');
	// print $apiResponse;
	$obj = utf8_decode($apiResponse);
	$results = json_decode($obj);
	// $resultCount = $results->results[$i]->resultCount;
	// print $resultCount;
	// $trackName = $results->results[0]->trackName;

	// $new_url = $results->results[0]->trackName;
	// print $new_url;

	// $icount = count($results);
	// print $icount;
	$i = 0;
	while ($i < 60000)
	{

		$artistName = $results->results[$i]->artistName;
		$trackName = $results->results[$i]->trackName;
		$collectionName = $results->results[$i]->collectionName;
		if (empty($artistName))
		{
			break;
		}
		print 'Arist Name: <b>' . $artistName . '</b><br>';
		print '___Track Name: ' . $trackName . '<br>';
		print '______Collection Name: ' . $collectionName . '<br><br>';
		$i = $i + 1;
	}










	// $allResults = $json->results;
	// $appInfo = $allResults[0];

	//Load any value into a variable by specifing a key e.g. "sellerName"
	// $sellerName = $appInfo->artistID;

	//Use Variables     LOOK at EXPLODE FUNCTION
	// echo $sellerName;
?>
