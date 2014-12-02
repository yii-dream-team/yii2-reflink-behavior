<?php

namespace yiidreamteam\reflink;

/**
 * Class ReflinkBehavior
 *
 * @property string $queryParam
 * @property string $sessionVar
 */
class ReflinkBehavior extends \yii\base\Behavior
{

    public $queryParam = 'ref';
    public $sessionVar = 'referrerId';

    public function events()
    {
        return [
            \yii\web\Controller::EVENT_BEFORE_ACTION => 'setReferrerId',
        ];
    }

    /**
     * Get $refParamName from $_GET request and store to Session 
     * @return string|null
     */
    public function getReferrerId()
    {
        return \Yii::$app->session->get($this->sessionVar);
    }

    /**
     * Get $refParamName from $_GET request and store to Session 
     * @return string|null
     */
    public function setReferrerId()
    {
        if (($referrerId = \Yii::$app->request->get($this->queryParam))) {
            \Yii::$app->session->set($this->sessionVar, $referrerId);
        }
    }

}
