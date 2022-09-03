<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Справочники';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <ul>
        <li>
    <?php
        $title = "Workers";
        $href = "/worker-crud/index";
        $options = ["href" => $href];
        print(Html::tag('a',$title,$options));
        //
    ?>
        </li>
        <li>
    <?php
        $title = "Providers";
        $href = "/provider-crud/index";
        $options = ["href" => $href];
        print(Html::tag('a',$title,$options));
        //
    ?>
        </li>
        <li>
    <?php
        $title = "Sections";
        $href = "/section-crud/index";
        $options = ["href" => $href];
        print(Html::tag('a',$title,$options));
        //
    ?>
        </li>
        <li>
    <?php
        $title = "Meals";
        $href = "/meal-crud/index";
        $options = ["href" => $href];
        print(Html::tag('a',$title,$options));
        //
    ?>
        </li>
        <li>
    <?php
        $title = "Orders";
        $href = "/order-crud/index";
        $options = ["href" => $href];
        print(Html::tag('a',$title,$options));
        //
    ?>
        </li>
    </ul>

</div>
