<?php
/* @var $this AssignmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = [
    'CMS User Roles' => ['index'],
    'Assignments',
];
$this->pageTitle = Yii::t('AuthModule.main', 'Assignments');
?>

<?php $this->widget(
    'bootstrap.widgets.TbGridView',
    [
        'id' => 'auth-grid',
        'type' => [TbHtml::GRID_TYPE_BORDERED, TbHtml::GRID_TYPE_STRIPED],
        'dataProvider' => $dataProvider,
        'emptyText' => Yii::t('AuthModule.main', 'No assignments found.'),
        'columns' => [
            [
                'header' => Yii::t('AuthModule.main', 'User'),
                'class' => 'AuthAssignmentNameColumn',
            ],
            [
                'header' => Yii::t('AuthModule.main', 'Assigned items'),
                'class' => 'AuthAssignmentItemsColumn',
            ],
            [
                'class' => 'AuthAssignmentViewColumn',
            ],
        ],
    ]
);
