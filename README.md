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

## ActiveForm


### Create a Request Form

use `php artisan make:request Person` to make a RequestForm

the class should implements RequestActiveForm

```
<?php

namespace App\Http\Requests;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use zacksleo\laravel\yii\contracts\RequestActiveForm;

class Person extends FormRequest implements RequestActiveForm
{
    public $model;

    public function __construct($id)
    {
        $this->model = \App\Models\Person::query()->find($id);
        parent::__construct([], [], [], [], [], [], []);
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'img' => 'file'
        ];
    }

    public function getModel(): Model
    {
        return $this->model;
    }
}

```

View

```

<?php
use zacksleo\laravel\yii\widgets\ActiveForm;
use zacksleo\laravel\yii\helpers\Html;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->textInput() ?>

<?= $form->field($model, 'img')->textInput() ?>

<div class="form-group">
    <?= Html::submitButton('Save',
        ['class' => $model->model->exists() ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

```
