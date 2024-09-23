<?php

use Duche\StatsTest\Functions\Average;

test("peux calculer la moyenne d'une liste", function () {
    $list = [10, 15, 14, 16, 20];

    $result = Average::calculate($list);
    expect($result)->ToBe(15.0);
});

//peut faire plusieur test comme ca (copier coller)
// test("calculer la moyenne d'une liste", function () {
//     $list = [10, 15, 14, 16, 20];

//     $result = Average::calculate($list);
//     expect($result)->ToBe(20.0);
// });
