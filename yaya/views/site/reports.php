<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Отчёты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::input('text','sasahasa',"",
        ["class" => "sasahasa",
        "placeholder" => "2022-09-01 or 2022-09"]) ?>

    <?= Html::button('GOODFP!', ['id' => 'goodfp']) ?>  
    <?= Html::button('GOODFW!', ['id' => 'goodfw']) ?>  
    <?= Html::button('GOOMFW!', ['id' => 'goomfw']) ?>  

<script>
function homo(ma){
  let lanaka = document.createElement("a");
  lanaka.setAttribute("href",ma);
  //lanaka.setAttribute("target","_blank");
  lanaka.click();
}
function tomo(){
    let sasahasa = document.querySelector(".sasahasa");
    let ma = "/order-crud/get-orders-on-date-for-provider?date="+sasahasa.value;
    homo(ma);
}
function tono(){
    let sasahasa = document.querySelector(".sasahasa");
    let ma = "/order-crud/get-orders-on-date-for-worker?date="+sasahasa.value;
    homo(ma);
}
function togo(){
    let sasahasa = document.querySelector(".sasahasa");
    let ma = "/order-crud/get-orders-on-month-for-worker?year_month="+sasahasa.value;
    homo(ma);
}
let goodfp = document.querySelector("#goodfp");
goodfp.addEventListener("click",tomo);
let goodfw = document.querySelector("#goodfw");
goodfw.addEventListener("click",tono);
let goomfw = document.querySelector("#goomfw");
goomfw.addEventListener("click",togo);

</script>

</div>
