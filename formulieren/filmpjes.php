	<div class="blokje infoblokje">
		<img src="images/robi/filmpjesblok1.png" width="240" height="154" alt="" />
		<h2>Filmpjes zoeken</h2>
		<p>Er zijn veel plekken waar je naar filmpjes kunt zoeken. Natuurlijk doen we ons best om vervelende filmpjes niet te laten zien.</p>
	</div>
	<div class="grid">
		<div class="zoekblokje film1">
			<h3>Klokhuis</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="klokhuis" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
			<ul><?php
				// $feed = new SimplePie();
				// $feed->set_feed_url('http://www.uitzendinggemist.nl/programmas/290-het-klokhuis.rss');
				// $feed->handle_content_type();
				// $feed->init();

				// $i = 0;
				// foreach ($feed->get_items() as $item):
				// 	$title = $item->get_title();
				// 	$cleanTitle = preg_replace('/Het Klokhuis - /', '', $title);
				// 	$cleanTitle = preg_replace('/\([a-z][A-Z]\s\)/', '', $cleanTitle);
				// 	echo '<li><a href="'.$item->get_permalink().'" target="_blank">'.$cleanTitle.'</a></li>';
				// 	if (++$i == 5) break;
				// endforeach;
				?></ul>
		</div>
		<div class="zoekblokje film2">
			<h3>SchoolTV Beeldbank</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="schooltv" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
			<ul><?php
				// $feed = new SimplePie();
				// $feed->set_feed_url('http://www.uitzendinggemist.nl/programmas/1461-schooltv-weekjournaal.rss');
				// $feed->handle_content_type();
				// $feed->init();

				// $i = 0;
				// foreach ($feed->get_items() as $item):
				// 	$title = $item->get_title();
				// 	$cleanTitle = preg_replace('/Schooltv-weekjournaal - /', '', $title);
				// 	$cleanTitle = preg_replace('/\([a-z][A-Z]\s\)/', '', $cleanTitle);
				// 	echo '<li><a href="'.$item->get_permalink().'" target="_blank">'.$cleanTitle.'</a></li>';
				// 	if (++$i == 5) break;
				// endforeach;
				?></ul>
		</div>
		<div class="zoekblokje film3">
			<h3>Vimeo</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="vimeo" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
		</div>
		<div class="zoekblokje film4">
			<h3>YouTube</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="youtube" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
		</div>
		<div class="zoekblokje film5">
			<h3>Zapp.nl</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="zapp" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
		</div>
	</div>