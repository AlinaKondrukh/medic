<?php

use app\models\Reception;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\ReceptionSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Заявления';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reception-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'patient_fio',
            'date_of_reception',
            'description:ntext',
            //'status_id',
            [
                'attribute' => 'status',
                'content' => function ($reception) {
                    $html = Html::beginForm(['update', 'id' => $reception->id]);
                    $html .= Html::activeDropDownList($reception, 'status_id',
                    [
                        1 => 'Принята',
                        2 => 'Отклонена'
                    ],
                    [
                        'prompt' => [
                            'text' => 'Новая',
                            'options' => [
                                'style' => 'display:none'
                            ]
                        ]
                    ]
                );
                $html .= Html::submitButton('Подтвердить', ['class' => 'btn btn-link']);
                $html .= Html::endForm();
                return $html;
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
