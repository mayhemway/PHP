<?
$cars = [
    ['name' => 'Такси 1', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 2', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 3', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 4', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 5', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
];
$distance = array();
$passenger = rand(0, 1000);

foreach ($cars as $key => $item){
    if ($item['position'] > $passenger){
        $cars[$key]['distance'] = $item['position'] - $passenger;
	} else {
		$cars[$key]['distance'] = $passenger - $item['position'];
	} 
    if ($item['isFree']){
        $distance[]=$cars[$key]['distance'];
    }
}
$minDistance = min($distance);
foreach ($cars as $key => $item){
    $thisCar = '';
	if (!$item['isFree']) {
		$statusCar = '(занят)';
	} else {
		$statusCar = '(свободен)';
	}
	if ($item['distance'] == $minDistance) {
        $thisCar = ' - едет это такси';
    }
    echo '"'.$item['name'].', стоит на '.$item['position'].' км, до пассажира '.$item['distance'].' км '.$statusCar.$thisCar.'"';
    echo '<br>';
}
?>