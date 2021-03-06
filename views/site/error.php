<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var string $name
 * @var string $message
 * @var Exception $exception
 */

$this->title = $name;
?>

<div class="well">
    <h1 class="grey lighter smaller">
        <span class="blue bigger-125">
            <i class="icon-random"></i>
Something Went Wrong

        </span>
    </h1>

    <hr>
    <h3 class="lighter smaller">
        <?= nl2br(Html::encode($message)) ?>
    </h3>

    <div class="space"></div>


    <hr>
    <div class="space"></div>

    <div class="center">
        <a href="#" class="btn btn-grey" onclick="window.history.go(-1)">
            <i class="icon-arrow-left"></i>
            Go Back
        </a>

        <a href="/" class="btn btn-primary">
            <i class="icon-dashboard"></i>
            Dashboard
        </a>
    </div>
</div>