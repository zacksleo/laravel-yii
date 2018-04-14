# laravel-yii
use Yii2 Gridview &amp; ActiveForm in laravel


## Get Started

## Grid View

```
echo \zacksleo\laravel\yii\grid\GridView::widget([
     'dataProvider' => new zacksleo\laravel\yii\data\ActiveDataProvider([
         'query' => \App\Models\User::query(),
     ]),
     'columns' => [
         'name',
         'image',
         [
             'class' => zacksleo\laravel\yii\grid\ActionColumn::class,
         ],
     ],
 ]);

```
