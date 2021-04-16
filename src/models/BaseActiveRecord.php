<?php

namespace yozh\validator\models;

use yii\db\ActiveRecord;
use yozh\validator\traits\InheritedRulesTrait;

abstract class BaseActiveRecord extends ActiveRecord
{
    use InheritedRulesTrait;
}
