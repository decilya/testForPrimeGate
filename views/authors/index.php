<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Authors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Authors', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'id',
            'name',
            'birth',
            'rating',

            ['class' => 'yii\grid\ActionColumn'],

            [
                'label' => 'Ссылка',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a(
                        'Книги',
                        $data->url,
                        [
                            'title' => 'Смелей вперед!',
                            'target' => '_blank'
                        ]
                    );
                }
            ],
        ],

    ]); ?>


</div>
