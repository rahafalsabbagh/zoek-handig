<?php
//function addslashes Returns a string with backslashes added before characters that need to be escaped like (\)
$pagina = addslashes($_GET['pagina']);
require_once('autoloader.php');
require_once('library/SimplePie.php');
if (!$pagina) $pagina = 'nieuws';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Kids.Zoekhandig.nl</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!-- <script type="text/javascript" src="js/jquery.masonry.min.js"></script>
	<script> -->
	<!-- window.onload = function() {

	var wall = new Masonry(document.getElementById('container'), {
	columnWidth: 20
	});

	}; -->
	<!-- </script> -->
</head>

<body>
	<div id="header">
		<p>Zoek Slim...</p>
		<h1>ZoekHandig.nl naar <?php echo $pagina ?></h1>
	</div>
	<!-- <h3>Wat wil jij zoeken:</h3> -->
	<ul id="navigatie">
		<li><a href="websites" class="websites">Websites</a></li>
		<li><a href="nieuws" class="nieuws">Nieuws</a></li>
		<li><a href="plaatjes" class="plaatjes">Plaatjes</a></li>
		<li><a href="filmpjes" class="filmpjes">Filmpjes</a></li>
		<li><a href="werkstukken" class="werkstukken">Werkstukken</a>
		</li>
	</ul>
	<div id="container">
		<?php
		switch ($pagina) {
			case 'filmpjes':
				include('formulieren/filmpjes.php');
				break;
			case 'nieuws':
				include('formulieren/nieuws.php');
				break;
			case 'plaatjes':
				include('formulieren/plaatjes.php');
				break;
			case 'websites':
				include('formulieren/websites.php');
				break;
			case 'werkstukken':
				include('formulieren/werkstukken.php');
				break;
			default:
				include('formulieren/nieuws.php');
				break;
		}
		?>
		<!-- 
         with function Rand change photo with every refresh between 3 photos
	     -->
		<div class="blokje cbsblokje">
			<img src="images/robi/cbsblok<?php echo rand(0, 3) ?>.png" width="240" height="154" alt="" />
			<h3>Wist je dat...</h3>
			<!-- 
		 with function Rand change text with every refresh between 10 texts
		 you can see in page quote.php
	     -->
			<p><?php include('quote.php'); ?></p>
			<p class="cbslink">Bron: <a href="http://www.cbs.nl/" target="_blank">CBS</a></p>
		</div>
	</div>
	<div class="copyright ">
		<p>Copyright 2014 <a href="http://www.massmedium.nl" target="_blank">MassMedium.nl</a></p>
	</div>

	<script>
		// add javascript for style and input value
		const inputQ = document.querySelectorAll('.box');

		let val; // input value
		let classNames; // calss Names

		// loop in all inputs
		inputQ.forEach(i => {

			//listen on change in input
			i.addEventListener('change', (e) => {
				val = e.target.value;
			})

			//when focus on input change class name, get the value
			// and hidde h3 element
			i.addEventListener('focus', (e) => {

				const target = e.target.parentNode.parentNode; //get the patent div

				if (val === undefined) {
					e.target.value = ""
				} else {
					e.target.value = val
				}

				let v = target.firstElementChild;
				v.style.visibility = 'hidden'; // hidde h3

				classNames = target.className;
				console.log('befor', classNames);

				let classNamesArr = classNames.split(" "); // make arr
				console.log(classNamesArr);
				target.classList.add(`${classNamesArr[0]}Hover`);
				target.classList.add(`${classNamesArr[1]}Hover`);

				classNames = target.className;
				console.log('after', classNames);
			})

			//when out focus from input change class name, empty the value
			// and show h3 element
			i.addEventListener('focusout', (e) => {
				const target = e.target.parentNode.parentNode
				classNames = target.className;

				e.target.value = ""
				let v = target.firstElementChild;
				v.style.visibility = 'visible';
				let classNamesArr = classNames.split(" ");
				target.classList.remove(`${classNamesArr[2]}`);
				target.classList.remove(`${classNamesArr[3]}`);
			})

		})
	</script>

</body>

</html>