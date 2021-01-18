<div class="blokje infoblokje">
	<img src="images/robi/nieuwsblok1.png" width="240" height="154" alt="hier kun je zoeken voor nieuwsberichten" />
	<h2>Nieuws zoeken</h2>
	<p>Gebruik de zoekblokjes op deze pagina om nieuwsberichten te vinden.</p>
	<p>Wil je echt handig zoeken, gebruik de knoppen hierboven om te kiezen WAT je gaat zoeken!</p>
</div>
<div class="zoekblok-grid">
	<div class="zoekblokje nieuws">
		<h3>Bing Nieuws</h3>
		<form method="post" target="_blank" action="engine.php">
			<input name="q" type="text" class="box" />
			<input name="engine" type="hidden" value="bingnews" />
			<input type="submit" value="Zoeken" class="button" />
		</form><br />
	</div>
	<div class="zoekblokje nieuws">
		<h3>7 Days</h3>
		<form method="post" target="_blank" action="engine.php">
			<input name="q" type="text" class="box" />
			<input name="engine" type="hidden" value="7days" />
			<input type="submit" value="Zoeken" class="button" />
		</form><br />
		<ul><?php
			$feed = new SimplePie();
			$feed->set_feed_url('http://www.sevendays.nl/nieuws/rss.php');
			$feed->handle_content_type();
			$feed->init();

			$i = 0;
			foreach ($feed->get_items() as $item) :
				echo '<li><a href="' . $item->get_permalink() . '" target="_blank">' . $item->get_title() . '</a></li>';
				if (++$i == 5) break;
			endforeach;
			?></ul>
	</div>
	<div class="zoekblokje nieuws">
		<h3>Google-Nieuws</h3>
		<form method="post" target="_blank" action="engine.php">
			<input name="q" type="text" class="box" />
			<input name="engine" type="hidden" value="googlenews" />
			<input type="submit" value="Zoeken" class="button" />
		</form><br />
	</div>
	<div class="zoekblokje nieuws">
		<h3>Jeugdjournaal</h3>
		<form method="post" target="_blank" action="engine.php">
			<input name="q" type="text" class="box" />
			<input name="engine" type="hidden" value="jeugdjournaal" />
			<input type="submit" value="Zoeken" class="button" />
		</form><br />
		<ul><?php
			//new object from framework Simplepie that give RSS content
			//Then gebruik url RSS for site Jeugdjournaal to have the latest news
			// $feed = new SimplePie();
			// $feed->set_feed_url('http://feeds.nos.nl/jeugdjournaal');
			// $feed->handle_content_type();
			// $feed->init();
			//give the latest 5 news with title and link
			// $i = 0;
			// foreach ($feed->get_items() as $item) :
			// 	echo '<li><a href="' . $item->get_permalink() . '" target="_blank">' . $item->get_title() . '</a></li>';
			// 	if (++$i == 5) break;
			// endforeach;
			?></ul>
	</div>
	<div class="zoekblokje nieuws">
		<h3>Kidsweek</h3>
		<form method="post" target="_blank" action="engine.php">
			<input name="q" type="text" class="box" />
			<input name="engine" type="hidden" value="kidsweek" />
			<input type="submit" value="Zoeken" class="button" />
		</form><br />
		<ul><?php
			//new object from framework Simplepie that give RSS content
			//Then gebruik url RSS for site Jeugdjournaal to have the latest news
			$feed = new SimplePie();
			$feed->set_feed_url('http://www.kidsweek.nl/nieuws/rss.php');
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
	<div class="zoekblokje nieuws">
		<h3>Nieuwsbeest.nl</h3>
		<form method="post" target="_blank" action="engine.php">
			<input name="q" type="text" class="box" />
			<input name="engine" type="hidden" value="nieuwsbeest" />
			<input type="submit" value="Zoeken" class="button" />
		</form><br />
	</div>
	<div class="zoekblokje nieuws">
		<h3>SchoolTV </h3>
		<form method="post" target="_blank" action="engine.php">
			<input name="q" type="text" class="box" />
			<input name="engine" type="hidden" value="schooltvweekjournaal" />
			<input type="submit" value="Zoeken" class="button" />
		</form><br />
		<ul><?php
			$feed = new SimplePie();
			$feed->set_feed_url('http://www.schooltv.nl/weekjournaal/xml/rss_dossiers/');
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