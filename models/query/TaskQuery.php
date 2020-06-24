<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\Task]].
 *
 */
class TaskQuery extends \yii\db\ActiveQuery
{
    /**
     * {@inheritdoc}
     * @return \app\models\Task[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Task|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
