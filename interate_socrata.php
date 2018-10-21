<?php

	$base_url = "http://api.us.socrata.com/api/catalog/v1?categories=health&limit=100&offset=";

	$is_more = true;
	$offset = 0;
	$dataset_by_domain = [];
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
					$permalink = $this_result['permalink'];;

					$tmp = [
						'name' 		=> $name,
						'description' 	=> $description,
						'permalink' 	=> $permalink,
					];

					$dataset_by_domain[$domain][] = $tmp;
				}
			}else{
				$is_more = false;
			}

		}else{
			$is_more = false;
		}

		$offset = $offset + 100;
		//echo '.';
	}



	$markdown = '
Socrata Healthcare Datasets
======================
';

	foreach($dataset_by_domain as $domain => $dataset_list){

		$markdown .= "## $domain\n";

		foreach($dataset_list as $this_dataset){
			$name = $this_dataset['name'];
			$description = $this_dataset['description'];
			$permalink = $this_dataset['permalink'];

			$markdown .= "* [$name]($permalink) - $description";
	
		}
	
		$markdown .= "\n";

	}

echo $markdown;
