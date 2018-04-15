<?php

namespace zacksleo\laravel\yii\contracts;

use Illuminate\Database\Eloquent\Model;

interface RequestActiveForm
{
    /**
     * @return Model
     */
    public function getModel(): Model;
}
