<h1>Novosti</h1>
<ul>
<?php
	foreach($novosti as $novost) {
		echo '<ol>';
		echo '<li>'.$novost->autor.'</li>';
		echo '<li>'.$novost->novost.'</li>';
		echo '</ol>';
		echo '<br>';
	}
?>
</ul>