	<div class="blokje infoblokje">
		<img src="images/robi/websiteblok1.png" width="240" height="154" alt="" />
		<h2>Websites zoeken</h2>
		<p>Zoek via de grote zoekmachines naar websites, maar zonder dat je vervelende resultaten te zien krijgt.</p>
	</div>
	<div class="zoekblok-grid">
		<div class="zoekblokje website1">
			<h3>Bing</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="bing" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
		</div>
		<div class="zoekblokje website2">
			<h3>Google</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="google" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
		</div>

		<div class="zoekblokje website3">
			<h3>MeesterSipke</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="meestersipke" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
		</div>
		<!-- 
		<div class="zoekblokje website4">
			<h3>kiddle</h3>
			<form method="post" target="_blank" action="engine.php">
				<input name="q" type="text" class="box" />
				<input name="engine" type="hidden" value="kiddle" />
				<input type="submit" value="Zoeken" class="button" />
			</form><br />
		</div> -->
	</div>