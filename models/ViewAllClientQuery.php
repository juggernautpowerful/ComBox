<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ViewAllClient]].
 *
 * @see ViewAllClient
 */
class ViewAllClientQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ViewAllClient[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ViewAllClient|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
