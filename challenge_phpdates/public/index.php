<?php

$presentTime = new DateTime();
$destinationTime = new DateTime('2001-01-19 19:00');

echo $presentTime -> format('M d Y A h m');

?>
<br>
<?php

echo $destinationTime -> format('M d Y A h m');

?>
<br>
<?php

$timeTravel = $presentTime->diff($destinationTime);
echo $timeTravel -> format('Ce voyage est de %y ans, %m mois, %d jours, %h heures et %i minutes au total,');

?>
<br>
<?php

$timeTravelMinutes = ($presentTime -> getTimestamp() - $destinationTime -> getTimestamp()) / 60;
$timeTravelMinutes = abs(round($timeTravelMinutes));
echo 'ce qui représente ' . $timeTravelMinutes . ' minutes, et donc ' . ceil(($timeTravelMinutes)/10000) . ' litres de carburant';









