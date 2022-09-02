<?php

use yii\helpers\Html;

$this->title = "Заказы на $date для работников";
print(Html::tag('h3',$this->title));
print(Html::tag('br'));


function mala($date){
    $kama = ["class" => "namara"];
    $ma = "";
    $ma .= Html::tag('div', $date, $kama);
    for($na = 0; $na < 5; $na++) {
        $ma .= Html::tag('div','',$kama);
    }
    return($ma);
}
function mara($kalata) {
    $kama = ["class" => "namara"];
    $na = "";
    foreach($kalata as $ma) {
        $na .= Html::tag('div',$ma["meal_name"],$kama);
        $na .= Html::tag('div',$ma["meal_amount"],$kama);
        $na .= Html::tag('div',"*",$kama);
        $na .= Html::tag('div',$ma["meal_price"],$kama);
        $na .= Html::tag('div',"=",$kama);
        $na .= Html::tag('div',$ma["meal_sum"],$kama);
    }
    return($na);
}
function maha($total){
    $kama = ["class" => "namara"];
    $ma = "";
    for($na = 0; $na < 4; $na++) {
        $ma .= Html::tag('div','',$kama);
    }
    $ma .= Html::tag('div',"Итого:",$kama);
    $ma .= Html::tag('div',$total,$kama);
    return($ma);
}
function mata($kalara){
    $ma = "";
    foreach($kalara as $ka){
        $ma .= mala($ka["worker_name"]);
        $ma .= mara($ka["orders"]);
        $ma .= maha($ka["total"]);
    }
    return($ma);
}
?>
<style>
    .kalatama {
        display: grid;
        grid-auto-flow: row;
        grid-template-columns: 8fr 1fr 1fr 1fr 1fr 2fr;
    }
    .namara {
        padding: 0.5rem;
        border-collapse: collapse;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
    }
    .namara:nth-child(6n) {
        border-right: none;
    }
</style>
<div class="kalatama">
<?php
    //print_r($kalara);
    print(mala($date));
    print(mata($kalara));
?>
</div>
