	<div class="blokje infoblokje">
		<img src="images/robi/werkstukkenblok1.png" width="240" height="154" alt="" />
		<h2>Werkstukken</h2>
		<p>Natuurlijk laten we je niet naar complete werkstukken zoeken. Wel hebben we een serie handige zoekmachines waar je meer kunt vinden over geschiedenis, aardrijkskunde, godsdiensten, natuur en techniek.</p>
	</div>
	<div class="zoekblok-grid">
		<div class="zoekblokje werkstukken1">
			<h3>Digischool</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="digischool" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
		</div>
		<div class="zoekblokje werkstukken2">
			<h3>EnToen.nu</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="entoennu" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
			<ul><?php
				//new object from framework Simplepie that give RSS content
				//Then gebruik url RSS for site Jeugdjournaal to have the latest news
				$feed = new SimplePie();
				$feed->set_feed_url('http://entoen.nu/rss');
				$feed->handle_content_type();
				$feed->init();
				//give the latest 5 news with title and link
				$i = 0;
				foreach ($feed->get_items() as $item) :
					echo '<li><a href="' . $item->get_permalink() . '" target="_blank">' . $item->get_title() . '</a></li>';
					if (++$i == 5) break;
				endforeach;
				?></ul>
		</div>
		<div class="zoekblokje werkstukken3">
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
		<div class="zoekblokje werkstukken4">
			<h3>SchoolTV Beeldbank</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="schooltv" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
		</div>
		<div class="zoekblokje werkstukken5">
			<h3>Wikikids</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="wikikids" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
		</div>
	</div>