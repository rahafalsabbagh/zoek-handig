	<div class="blokje infoblokje">
		<img src="images/robi/plaatjesblok1.png" width="240" height="154" alt="" />
		<h2>Plaatjes zoeken</h2>
		<p>Er zijn veel plekken waar je naar plaatjes kunt zoeken. Natuurlijk doen we ons best om vervelende plaatjes niet te laten zien.</p>
	</div>
	<div class="grid">
		<div class="zoekblokje plaatje1">
			<h3>Bing Afbeeldingen</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="bingimg" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
		</div>
		<div class="zoekblokje plaatje2">
			<h3>Google Afbeeldingen</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="googleimg" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
		</div>
		<div class="zoekblokje plaatje3">
			<h3>Flickr</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="flickr" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
		</div>
		<div class="zoekblokje plaatje4">
			<h3>Nationaal Archief</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="gahetna" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
			<ul><?php
				$feed = new SimplePie();
				$feed->set_feed_url('http://www.gahetna.nl/rss/nieuws');
				$feed->handle_content_type();
				$feed->init();

				$i = 0;
				foreach ($feed->get_items() as $item) :
					echo '<li><a href="' . $item->get_permalink() . '" target="_blank">' . $item->get_title() . '</a></li>';
					if (++$i == 5) break;
				endforeach;
				?></ul>
		</div>
	</div>