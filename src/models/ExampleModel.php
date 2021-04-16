<?php

namespace yozh\validator\models;

use yozh\validator\components\validators\Validator;

/**
 * @property string $attr1
 * @property string $attr2
 * @property string $attr3
 */
class ExampleModel extends BaseActiveRecord
{
    /** {@inheritdoc} */
    public function rules($rules = []): array
    {
        return parent::rules(Validator::merge([
            'required' => [['attr1', 'attr2',], 'required'],
            'string.max.255' => [['attr1',], 'string', 'max' => 255],
            'string.max.4095' => [['attr2',], 'string', 'max' => 4095],
            'boolean' => [['attr3'], 'boolean'],
        ], $rules));
    }

}
