<?php
	require_once('vendor/autoload.php');
	require_once('QRMarkDown.class.php');

	$md_glob = __DIR__ . '/markdown/*.md';

	$out_dir = __DIR__ . '/html_out/';

	$parser = new QRMarkDown();

	//use bootstrap 4...
	$html_footer = get_html_footer();

	foreach(glob($md_glob) as $this_md_file){

		$pathinfo = pathinfo($this_md_file);
		$filename = $pathinfo['filename'];
		$html_header = get_html_header($filename);
		$this_output_filename = $out_dir . $filename . '.html';

		$this_markdown = file_get_contents($this_md_file);
		$html_core = $parser->parse($this_markdown);

		$html = $html_header . $html_core . $html_footer;

		file_put_contents($this_output_filename,$html);
	}


function get_html_header($title){

	$html = '<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>'.$title.'</title>
  </head>
  <body>
<!-- end get_html_header -->
 <div class="container-fluid">
';

	return($html);

}

function get_html_footer(){

	$html = '

<!-- from get_html_footer()  -->
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

';

	return($html);

}
