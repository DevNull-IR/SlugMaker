<?php

if (! function_exists('slugMaker')){
	function slugMaker(string $slug,array $data = []){
		$concat = $data['concat'] ?? '-';
		$is_dash = $data['is_dash'] ?? true;
		$is_lang = $data['is_lang'] ?? false;
		$slug = str_replace('?',null,trim($slug));
		$slug = str_replace('!',null,trim($slug));
		$slug = str_replace( [ '#', '$', '%', '^', '&', '*', '(', ')', '.', '=', '+'] , null, trim( $slug ) );
		if(!$is_dash){
			$slug = str_replace(['_','-'],null,trim($slug));
		}
		if($is_lang){
			$slug = preg_replace('/[^a-z-A-Z\d\s!@#$%^&*\(\)_\-+=.]+/u', null, $slug);
		}
		$slug = str_replace(' ',$concat,trim($slug));
		return $slug;
	}
}
