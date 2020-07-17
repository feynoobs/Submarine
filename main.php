<?php

define('MIN_OF_SPEC', 170);
define('MIN_OF_CAPACITY', 90);
define('MIN_OF_SPEED', 10);
define('MIN_OF_DISTANCE', 100);
define('MIN_OF_LUCK', 160);

define('BONUS_OF_SPEC', 20);
define('BONUS_OF_CAPACITY', 25);
define('BONUS_OF_SPEED', 15);
define('BONUS_OF_DISTANCE', 20);
define('BONUS_OF_LUCK', 15);

$bodys = [
    ['name' => 'シャーク級艦体', 'params' => [-10, 30, 20, 40, 20], 'cost' => 5],
    ['name' => 'ウンキウ級艦体', 'params' => [15, 10, 0, 60, 15], 'cost' => 9],
    ['name' => 'ホエール級艦体', 'params' => [-15, 55, 35, 15, 20], 'cost' => 12],
    ['name' => 'シーラカンス級艦体', 'params' => [40, -10, 25, 40, 25], 'cost' => 14],
    ['name' => 'シルドラ級艦体', 'params' => [10, 75, 30, -15, 5], 'cost' => 17],
];

$tails = [
    ['name' => 'シャーク級艦尾', 'params' => [-30, 20, 60, 30, 15], 'cost' => 5],
    ['name' => 'ウンキウ級艦尾', 'params' => [15, 0, 30, 40, 25], 'cost' => 9],
    ['name' => 'ホエール級艦尾', 'params' => [15, 20, 0, 55, 15], 'cost' => 12],
    ['name' => 'シーラカンス級艦尾', 'params' => [10, 25, 35, 25, 25], 'cost' => 14],
    ['name' => 'シルドラ級艦尾', 'params' => [20, 60, 35, -15, 5], 'cost' => 17],
];

$heads = [
    ['name' => 'シャーク級艦首', 'params' => [50, 40, 10, -20, 15], 'cost' => 5],
    ['name' => 'ウンキウ級艦首', 'params' => [60, 20, 20, -15, 10], 'cost' => 9],
    ['name' => 'ホエール級艦首', 'params' => [25, 60, -15, 20, 15], 'cost' => 12],
    ['name' => 'シーラカンス級艦首', 'params' => [65, 10, -10, 30, 0], 'cost' => 14],
    ['name' => 'シルドラ級艦首', 'params' => [45, 30, -15, 40, 40], 'cost' => 17],
];

$bridges = [
    ['name' => 'シャーク級艦橋', 'params' => [20, 20, 20, 20, 20], 'cost' => 5],
    ['name' => 'ウンキウ級艦橋', 'params' => [25, 5, 25, 30, 30], 'cost' => 9],
    ['name' => 'ホエール級艦橋', 'params' => [0, 25, 20, 45, 40], 'cost' => 12],
    ['name' => 'シーラカンス級艦橋', 'params' => [55, 20, 35, -15, 50], 'cost' => 14],
    ['name' => 'シルドラ級艦橋', 'params' => [55, 20, -5, 30, 60], 'cost' => 17],
];

$result = [];
foreach ($bodys as $body) {
    foreach ($tails as $tail) {
        foreach ($heads as $head) {
            foreach ($bridges as $bridge) {
                $cost = $body['cost'] + $tail['cost'] + $head['cost'] + $bridge['cost'];
                if ($cost <= 80) {
                    $spec = $body['params'][0] + $tail['params'][0] + $head['params'][0] + $bridge['params'][0] + BONUS_OF_SPEC;
                    $capacity = $body['params'][1] + $tail['params'][1] + $head['params'][1] + $bridge['params'][1] + BONUS_OF_CAPACITY;
                    $speed = $body['params'][2] + $tail['params'][2] + $head['params'][2] + $bridge['params'][2] + BONUS_OF_SPEED;
                    $distance = $body['params'][3] + $tail['params'][3] + $head['params'][3] + $bridge['params'][3] + BONUS_OF_DISTANCE;
                    $luck = $body['params'][4] + $tail['params'][4] + $head['params'][4] + $bridge['params'][4] + BONUS_OF_LUCK;
                    if ($spec >= MIN_OF_SPEC) {
                        if ($capacity >= MIN_OF_CAPACITY) {
                            if ($speed >= MIN_OF_SPEED) {
                                if ($distance >= MIN_OF_DISTANCE) {
                                    if ($luck >= MIN_OF_LUCK) {
                                        $result[] = [
                                            'body' => $body['name'], 
                                            'tail' => $tail['name'],
                                            'head' => $head['name'], 
                                            'bridge' => $bridge['name'], 
                                            'spec' => $spec,
                                            'capacity' => $capacity,
                                            'speed' => $speed,
                                            'distance' => $distance,
                                            'luck' => $luck,
                                            'sum' => $spec + $capacity + $speed + $distance + $luck,
                                            'cost' => $cost,
                                        ];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

$sort = [];
foreach ($result as $key => $value) {
    $sort[$key] = $value['sum'];
}
array_multisort($sort, SORT_DESC, $result);
foreach ($result as $data) {
    printf(
        "%-32s %-32s %-32s %-32s %03d %03d %03d %03d %03d %03d %02d\n", 
        $data['body'], $data['tail'], $data['head'], $data['bridge'], $data['spec'], $data['capacity'], $data['speed'], $data['distance'], $data['luck'], $data['sum'], $data['cost']);
}
