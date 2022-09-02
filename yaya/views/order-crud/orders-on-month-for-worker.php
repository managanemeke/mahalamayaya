<?php

use yii\helpers\Html;

$this->title = "Заказы за $year_month месяц";
print(Html::tag('h3',$this->title));
print(Html::tag('br'));


function mala($date){
    $kama = ["class" => "namara"];
    $ma = "";
    $ma .= Html::tag('div', $date, $kama);
    for($na = 0; $na < 1; $na++) {
        $ma .= Html::tag('div','',$kama);
    }
    return($ma);
}
function mara($kalata) {
    $kama = ["class" => "namara"];
    $na = "";
    foreach($kalata as $ma) {
        $na .= Html::tag('div',$ma["worker_name"],$kama);
        $na .= Html::tag('div',$ma["meal_sum"],$kama);
    }
    return($na);
}
function maha($total){
    $kama = ["class" => "namara"];
    $ma = "";
    $ma .= Html::tag('div',"Итого:",$kama);
    $ma .= Html::tag('div',$total,$kama);
    return($ma);
}
?>
<style>
    .kalatama {
        display: grid;
        grid-auto-flow: row;
        grid-template-columns: 3fr 1fr;
    }
    .namara {
        padding: 0.5rem;
        border-collapse: collapse;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
    }
    .namara:nth-child(2n) {
        border-right: none;
    }
</style>
<div class="kalatama">
<?php
    //print_r($kalata);
    print(mala($year_month));
    print(mara($kalata));
    print(maha($total));
?>
</div>
