<?php 

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "http://www.xovi.de/xovilichter/"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Xovilichter.Dynapso/1.0 (+https://github.com/xovilichter/xovi)');
curl_setopt($ch, CURLOPT_REFERER, 'https://github.com/xovilichter/xovi'); 
$output = curl_exec($ch);
curl_close($ch);

// den code ein wenig aufräumen
$output = str_replace("\n", '', $output);
$output = str_replace("\t", '', $output);
$output = str_replace('itemprop="itemListElement"', ' ', $output);
$output = str_replace('  ', ' ', $output);
$output = str_replace('  ', ' ', $output);
$output = str_replace('  ', ' ', $output);
$output = str_replace('  ', ' ', $output);
$output = str_replace(' <', '<', $output);

preg_match_all('#<div class="line"><span class="(.*)">(.*).</span><span class="(.*)"><a href="(.*)" target="_blank">(.*)</a></span><span class="(.*)">(.*)</span><span class="(.*)">(.*)</span><span class="gplus">(.*)</span></div>#Uis', $output, $matches);

$search_results = array();

foreach($matches[2] as $n => $position){
	$search_results[] = array(
		'position' => $position,
		'url' => $matches[4][$n],
	);
}

print_r($search_results);
