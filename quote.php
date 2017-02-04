<?php 
// Randomly generate a number: 0, 1, 2
$quote = Rand (0,2); 

//Based on the random number, gives a quote 
switch ($quote) {
	case 0:
		echo "<span class='poem'>Wild Geese</span><br />
		<span class='poet'>Mary Oliver</span><br />
		You do not have to be good.<br />
		You do not have to walk on your knees<br />
		for a hundred miles through the desert repenting.<br />
		You only have to let the soft animal of your body<br />
		love what it loves.<br />
		Tell me about despair, yours, and I will tell you mine.<br />
		Meanwhile the world goes on.<br />
		Meanwhile the sun and the clear pebbles of the rain<br />
		are moving across the landscapes, <br />
		over the prairies and the deep trees,<br />
		the mountains and the rivers.<br />
		Meanwhile the wild geese, high in the clean blue air,<br />
		are heading home again.<br />
		Whoever you are, no matter how lonely,<br />
		the world offers itself to your imagination,<br />
		calls to you like the wild geese, harsh and exciting  <br />
		over and over announcing your place <br />
		in the family of things.<br />";
		break;
	case 1:
		echo "<span class='poem'>Today, like every other day</span><br />
		<span class='poet'>Jalāl ad-Dīn Muhammad Rūmī</span><br />
		Today, like every other day, we wake up empty<br />
		and frightened.  Don't open the door to the study<br />
		and begin reading.  Take down a musical instrument.<br />
		Let the beauty we love be what we do.<br />
		There are hundreds of ways to kneel and kiss the ground.<br />";
		break;
	case 2:
		echo "<span class='poem'>Human Family</span><br />
		<span class='poet'>Maya Angelou</span><br />
		I note the obvious differences<br />
		in the human family.<br />
		Some of us are serious,<br />
		some thrive on comedy.<br /><br />
		I've sailed upon the seven seas<br />
		and stopped in every land,<br />
		I've seen the wonders of the world<br />
		not yet one common man.<br /><br />
		I know ten thousand women<br />
		called Jane and Mary Jane,<br />
		but I've not seen any two<br />
		who really were the same.<br /><br />
		Mirror twins are different<br />
		although their features jibe,<br />
		and lovers think quite different thoughts<br />
		while lying side by side.<br /><br />
		I note the obvious differences<br />
		between each sort and type,<br />
		but we are more alike, my friends,<br />
		than we are unalike.<br /><br />
		We are more alike, my friends,<br />
		than we are unalike.<br /><br />
		We are more alike, my friends,<br />
		than we are unalike.<br />";
		break;
}
?>