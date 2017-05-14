<?php

	for ($i = 0; $i <= count($c->people); $i++) {
		echo $hs->hotel[$i] . ': ' . $c->people[$i] . ' ' . $p->price[$i] . '<br>';
	}

?>