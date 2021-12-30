<?php

function curl(string $url): string
{
	$curl = curl_init($url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_HEADER, false);

	$html = curl_exec($curl);
	curl_close($curl);

	return $html;
}
