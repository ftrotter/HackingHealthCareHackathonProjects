<?php
require_once('vendor/autoload.php');

use Endroid\QrCode\QrCode;
class QRMarkDown extends \cebe\markdown\GithubMarkdown{

	protected function renderLink($block)
	{
		if (isset($block['refkey'])) {
			if (($ref = $this->lookupReference($block['refkey'])) !== false) {
				$block = array_merge($block, $ref);
			} else {
				if (strncmp($block['orig'], '[', 1) === 0) {
					return '[' . $this->renderAbsy($this->parseInline(substr($block['orig'], 1)));
				}
				return $block['orig'];
			}
		}

		$old_url = '<a href="' . htmlspecialchars($block['url'], ENT_COMPAT | ENT_HTML401, 'UTF-8') . '"'
			. (empty($block['title']) ? '' : ' title="' . htmlspecialchars($block['title'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE, 'UTF-8') . '"')
			. '>' . $this->renderAbsy($block['text']) . '</a>';

		$text = $this->renderAbsy($block['text']);
		$url = htmlspecialchars($block['url'], ENT_COMPAT | ENT_HTML401, 'UTF-8');
		$alt = '';
		if(!empty($block['title'])){
			$alt = 'alt="'. htmlspecialchars($block['title'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE, 'UTF-8') .'"';
		}

		$parse = parse_url($url);
		if(isset($parse['host'])){
			$domain = $parse['host'];
		}else{
			$domain = '';
		}

		$md5_url = md5($url); //this will be our qrcode filename
		$qr_code_file = "qrcode_images/".$md5_url . ".png";
		$qr_code_save_to_file = __DIR__ . "/html_out/$qr_code_file";;

		$qrCode = new QrCode($url);
		$qrCode->writeFile($qr_code_save_to_file);

		$qr_link = "
<div class='card' style='width: 100px;'>
  <img class='card-img-top' src='$qr_code_file' $alt>
  <div class='card-body'>
    <h5 class='card-title'>from $domain</h5>
  </div>
</div>
		";
		$qr_link = "<b>$text</b> <img width='100px'  $alt src='$qr_code_file'>";

		return($qr_link);

	}


	protected function renderUrl($block)
	{
		echo "Running renderUrl\n";
		$url = htmlspecialchars($block[1], ENT_COMPAT | ENT_HTML401, 'UTF-8');
		$decodedUrl = urldecode($block[1]);
		$secureUrlText = preg_match('//u', $decodedUrl) ? $decodedUrl : $block[1];
		$text = htmlspecialchars($secureUrlText, ENT_NOQUOTES | ENT_SUBSTITUTE, 'UTF-8');
		$normal_link = "<a href=\"$url\">$text</a>";

		$qr_link = "$text <img src='./fredtrotter.png'>";
		return($qr_link);
	}

	protected function renderAutoUrl($block)
	{
		echo "Running renderAutoUrl\n";
		$href = htmlspecialchars($block[1], ENT_COMPAT | ENT_HTML401, 'UTF-8');
		$decodedUrl = urldecode($block[1]);
		$secureUrlText = preg_match('//u', $decodedUrl) ? $decodedUrl : $block[1];
		$text = htmlspecialchars($secureUrlText, ENT_NOQUOTES | ENT_SUBSTITUTE, 'UTF-8');
		$old_link =  "<a href=\"$href\">$text</a>";
		$qr_link = "$text <img src='./fredtrotter.png'>";
		return($qr_link);
	}

}
