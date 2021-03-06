<?php
/*
	This program scrapes the healthcare related projects from Socrata's meta site
	And then creates a list of the dataset, organized by originating domain name

	Many of the items under the 'health' tag on the socrata site have little do with healthcare. 
	And given that almost everything could impact health, including crime, waste management and ecology
	
	As a result, many of the 'health' tag results from the website are not really 'healthcare' per se..
	
	To handle this, the socrata_name_filter.php file 
	the socrata_name_filter.php file contains an array of string values that will cause 
	

*/
	$base_url = "http://api.us.socrata.com/api/catalog/v1?categories=health&limit=100&offset=";

	$is_more = true;
	$offset = 0;
	$dataset_by_domain = [];
	$domain_attributions = [];
	while($is_more){

		$url = $base_url . $offset;
		$json = file_get_contents($url);

		$data = json_decode($json,true);

		if(isset($data['results'])){

			$results = $data['results'];
			if(count($results) > 0){
				foreach($results as $this_result){
					$domain = $this_result['metadata']['domain'];

					$name = $this_result['resource']['name'];
					$description = $this_result['resource']['description'];
					$attribution = $this_result['resource']['attribution'];
					$permalink = $this_result['permalink'];;

					$tmp = [
						'name' 		=> $name,
						'description' 	=> $description,
						'permalink' 	=> $permalink,
					];

					$dataset_by_domain[$domain][] = $tmp;
					$domain_attributions[$domain][$attribution] = $attribution;
				}
			}else{
				$is_more = false;
			}

		}else{
			$is_more = false;
		}

		$offset = $offset + 500;
		echo '.';

		//$is_more = false;
	}



	$markdown = '
Socrata Healthcare Datasets
======================
';
//https://stackoverflow.com/a/14704792/144364
uasort($dataset_by_domain, function ($a, $b) {
    $a = count($a);
    $b = count($b);
    return ($a == $b) ? 0 : (($a > $b) ? -1 : 1);
});

	$socrata_dir = './socrata_markdown/';
	foreach($dataset_by_domain as $domain => $dataset_list){

		$dataset_count = count($dataset_list);

		$domain_file = $socrata_dir.$domain.'.md';

		$markdown .= "\n* [$domain]($domain_file) $dataset_count health datasets\n";
		$c = '';
		foreach($domain_attributions[$domain] as $attribution){
			if(strlen(trim($attribution)) > 0){	
				$markdown .= "$c  * $attribution ";
				$c = "\n";
			}
		}


		$domain_markdown = "# $domain health datasets\n";
	
		foreach($dataset_list as $this_dataset){

		
			$name = $this_dataset['name'];
			$description = $this_dataset['description'];
			$description = trim(preg_replace('/\s\s+/', ' ', $description));

			$permalink = $this_dataset['permalink'];

			$domain_markdown .= "* [$name]($permalink) - $description\n";
	
		}
		file_put_contents($domain_file,$domain_markdown);
		

	}

	file_put_contents('SocrataHealthDataSets.md',$markdown);

