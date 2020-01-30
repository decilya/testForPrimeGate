<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/** @var \app\models\Authors $author */

$this->title = 'Authors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-books-index">

    <h1><?= Html::encode("Книги автора: " . $author->name) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'created_year',
            'name',
            'rating',
        ],

    ]); ?>

</div>
