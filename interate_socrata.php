<?php

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

		$offset = $offset + 100;
		echo '.';
		$is_more = false;
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

		$markdown .= "* [$domain]($domain_file) $dataset_count health datasets from: ";
		$c = '';
		foreach($domain_attributions[$domain] as $attribution){
			$markdown .= "$c $attribution ";
			$c = ',';
		}


		$domain_markdown = "# $domain health datasets\n";
	
		foreach($dataset_list as $this_dataset){

		
			$name = $this_dataset['name'];
			$description = $this_dataset['description'];
			$permalink = $this_dataset['permalink'];

			$domain_markdown .= "* [$name]($permalink) - $description";
	
		}
		file_put_contents($domain_file,$domain_markdown);
		
		$markdown .= "\n";

	}

	file_put_contents('SocrataHealthDataSets.md',$markdown);

