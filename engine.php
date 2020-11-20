<?php
//function addslashes Returns a string with backslashes added before characters that need to be escaped like (\)
// var_dump($_POST['q']);
if (isset($_POST['submit'])) {
	echo $_POST['q'];
}

$q = addslashes($_POST['q']);
// Convert all applicable characters to HTML entities until suit URl link
$qHtml = htmlentities($q);
$engine = addslashes($_POST['engine']);

switch ($engine) {
		// DIEREN
	case 'rangerclub':
		$url = "https://www.rangerclub.nl/nl/dieren/zoek_een_dier/lijst.cfm?zoekstring=" . $qHtml;
		break;
		// FILMPJES
	case 'klokhuis':
		$url = "http://www.hetklokhuis.nl/onderwerp/" . $qHtml;
		break;
	case 'schooltv':
		$url = "http://www.schooltv.nl/zoekresultaten/?q=" . $qHtml;
		break;
	case 'vimeo':
		$url = "http://vimeo.com/search?q=" . $qHtml;
		break;
	case 'youtube':
		$url = "https://www.youtube.com/results?safe=active&hl=nl&gl=NL&q=" . $qHtml;
		break;
	case 'zapp':
		$url = "http://www.zapp.nl/zoeken?utf8=%E2%9C%93&query=" . $qHtml;
		break;
		// NIEUWS
	case '7days':
		$url = "http://www.sevendays.nl/search/node/" . $qHtml;
		break;
	case 'bingnews':
		$url = "http://www.bing.com/news/search?adlt=strict&q=" . $qHtml;
		break;
	case 'googlenews':
		$url = "https://www.google.nl/search?safe=active&hl=nl&gl=nl&tbm=nws&q=" . $qHtml;
		break;
	case 'jeugdjournaal':
		$url = "http://jeugdjournaal.nl/zoeken?s=" . $qHtml;
		break;
	case 'kidsweek':
		$url = "https://www.google.nl/search?q=in%3Akidsweek.nl+test&oq=in%3Akidsweek.nl+" . $qHtml;
		break;
	case 'nieuwsbeest':
		$url = "http://nieuwsbeest.nl/?s=" . $qHtml;
		break;
	case 'schooltvweekjournaal':
		$url = "http://www.schooltv.nl/zoekresultaten/?q=" . $qHtml;
		break;
		// PLAATJES
	case 'bingimg':
		$url = "http://www.bing.com/images/search?adlt=strict&q=" . $qHtml;
		break;
	case 'flickr':
		$url = "https://www.flickr.com/search/?text=" . $qHtml;
		break;
	case 'googleimg':
		$url = "https://www.google.nl/search?tbm=isch&source=hp&safe=active&q=" . $qHtml;
		break;
	case 'gahetna':
		$url = "http://www.gahetna.nl/zoeken/q/zoekterm/" . $qHtml . "#max-fotocollectie";
		break;
		// WEBSITES
	case 'google':
		$url = "http://www.google.nl/#safe=active&q=" . $qHtml;
		break;
	case 'bing':
		$url = "http://www.bing.com/search?adlt=strict&q=" . $qHtml;
		break;
	case 'kidsproof':
		$url = "https://www.kidsproofplus.nl/NL/Zoeken/" . $qHtml;
		break;
	case 'kiddle':
		$url = "https://www.kiddle.co/s.php?q=" . $qHtml;
		break;

		// WERKSTUKKEN
	case 'digischool':
		$url = "http://wp.digischool.nl/wereldorientatie/?s=" . $qHtml;
		break;
	case 'entoennu':
		$url = "http://www.entoen.nu/zoeken?q=" . $qHtml;
		break;
	case 'wikikids':
		$url = "http://wikikids.wiki.kennisnet.nl/" . $qHtml;
		break;
}

header("Location: $url");
