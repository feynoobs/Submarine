<?php

define('MIN_OF_SPEC', 170);
define('MIN_OF_CAPACITY', 90);
define('MIN_OF_SPEED', 10);
define('MIN_OF_DISTANCE', 100);
define('MIN_OF_LUCK', 150);

define('BONUS_OF_SPEC', 30);
define('BONUS_OF_CAPACITY', 40);
define('BONUS_OF_SPEED', 20);
define('BONUS_OF_DISTANCE', 23);
define('BONUS_OF_LUCK', 20);

define('USE_KAI', false);

$bodys = [
    ['name' => 'シャーク級艦体', 'params' => [-10, 30, 20, 40, 20], 'cost' => 5],
    ['name' => 'ウンキウ級艦体', 'params' => [15, 10, 0, 60, 15], 'cost' => 9],
    ['name' => 'ホエール級艦体', 'params' => [-15, 55, 35, 15, 20], 'cost' => 12],
    ['name' => 'シーラカンス級艦体', 'params' => [40, -10, 25, 40, 25], 'cost' => 14],
    ['name' => 'シルドラ級艦体', 'params' => [10, 75, 30, -15, 5], 'cost' => 17],

    ['name' => 'シャーク改級艦体', 'params' => [-5, 40, 25, 45, 35], 'cost' => 20],
    ['name' => 'ウンキウ改級艦体', 'params' => [20, 15, 5, 65, 25], 'cost' => 20],
    ['name' => 'ホエール改級艦体', 'params' => [-10, 55, 40, 20, 30], 'cost' => 20],
    ['name' => 'シーラカンス改級艦体', 'params' => [40, -5, 30, 40, 30], 'cost' => 20],
    ['name' => 'シルドラ改級艦体', 'params' => [10, 80, 30, -15, 10], 'cost' => 20],

];

$tails = [
    ['name' => 'シャーク級艦尾', 'params' => [-30, 20, 60, 30, 15], 'cost' => 5],
    ['name' => 'ウンキウ級艦尾', 'params' => [15, 0, 30, 40, 25], 'cost' => 9],
    ['name' => 'ホエール級艦尾', 'params' => [15, 20, 0, 55, 15], 'cost' => 12],
    ['name' => 'シーラカンス級艦尾', 'params' => [10, 25, 35, 25, 25], 'cost' => 14],
    ['name' => 'シルドラ級艦尾', 'params' => [20, 60, 35, -15, 5], 'cost' => 17],

    ['name' => 'シャーク改級艦尾', 'params' => [-25, 25, 70, 35, 25], 'cost' => 20],
    ['name' => 'ウンキウ改級艦尾', 'params' => [20, 5, 35, 45, 35], 'cost' => 20],
    ['name' => 'ホエール改級艦尾', 'params' => [20, 20, 5, 60, 20], 'cost' => 20],
    ['name' => 'シーラカンス改級艦尾', 'params' => [10, 25, 40, 30, 30], 'cost' => 20],
    ['name' => 'シルドラ改級艦尾', 'params' => [20, 60, 35, -10, 10], 'cost' => 20],
];

$heads = [
    ['name' => 'シャーク級艦首', 'params' => [50, 40, 10, -20, 15], 'cost' => 5],
    ['name' => 'ウンキウ級艦首', 'params' => [60, 20, 20, -15, 10], 'cost' => 9],
    ['name' => 'ホエール級艦首', 'params' => [25, 60, -15, 20, 15], 'cost' => 12],
    ['name' => 'シーラカンス級艦首', 'params' => [65, 10, -10, 30, 0], 'cost' => 14],
    ['name' => 'シルドラ級艦首', 'params' => [45, 30, -15, 40, 40], 'cost' => 17],

    ['name' => 'シャーク改級艦首', 'params' => [55, 50, 15, -15, 25], 'cost' => 20],
    ['name' => 'ウンキウ改級艦首', 'params' => [65, 25, 25, -10, 20], 'cost' => 20],
    ['name' => 'ホエール改級艦首', 'params' => [25, 65, -10, 25, 25], 'cost' => 20],
    ['name' => 'シーラカンス改級艦首', 'params' => [70, 15, -10, 30, 5], 'cost' => 20],
    ['name' => 'シルドラ改級艦首', 'params' => [45, 30, -10, 40, 40], 'cost' => 20],

];

$bridges = [
    ['name' => 'シャーク級艦橋', 'params' => [20, 20, 20, 20, 20], 'cost' => 5],
    ['name' => 'ウンキウ級艦橋', 'params' => [25, 5, 25, 30, 30], 'cost' => 9],
    ['name' => 'ホエール級艦橋', 'params' => [0, 25, 20, 45, 40], 'cost' => 12],
    ['name' => 'シーラカンス級艦橋', 'params' => [55, 20, 35, -15, 50], 'cost' => 14],
    ['name' => 'シルドラ級艦橋', 'params' => [55, 20, -5, 30, 60], 'cost' => 17],

    ['name' => 'シャーク改級艦橋', 'params' => [25, 25, 30, 25, 35], 'cost' => 20],
    ['name' => 'ウンキウ改級艦橋', 'params' => [30, 10, 30, 35, 40], 'cost' => 20],
    ['name' => 'ホエール改級艦橋', 'params' => [0, 30, 25, 50, 45], 'cost' => 20],
    ['name' => 'シーラカンス改級艦橋', 'params' => [60, 20, 35, -10, 55], 'cost' => 20],
    ['name' => 'シルドラ改級艦橋', 'params' => [60, 20, -5, 30, 60], 'cost' => 20],
];

$result = [];
foreach ($bodys as $body) {
    foreach ($tails as $tail) {
        foreach ($heads as $head) {
            foreach ($bridges as $bridge) {
                if (USE_KAI === false) {
                    if (($body['cost'] === 20) ||
                        ($tail['cost'] === 20) ||
                        ($head['cost'] === 20) ||
                        ($bridge['cost'] === 20)) {
                        continue;
                    }
                }
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
