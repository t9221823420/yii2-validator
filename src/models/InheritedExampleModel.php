<?php

namespace yozh\validator\models;

use yozh\validator\components\validators\Validator;

class InheritedExampleModel extends ExampleModel
{
    /** {@inheritdoc} */
    public function rules($rules = []): array
    {
        return parent::rules(Validator::merge([
            'required' => [['attr1',], 'required'],
        ], $rules));
    }

}
