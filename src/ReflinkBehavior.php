<?php

namespace yiidreamteam\reflink;

/**
 * Class ReflinkBehavior
 *
 * @property string $refParamName
 * @property string $refSessionName
 */
class ReflinkBehavior extends \yii\base\Behavior
{

    public $refParamName = 'ref';
    public $refSessionName = 'referrerId';
    
    public function events()
    {
        return [
            \yii\web\Controller::EVENT_BEFORE_ACTION => 'getReferrerId',
        ];
    }

    /**
     * Get $refParamName from $_GET request and store to Session 
     * @return string|null
     */
    public function getReferrerId()
    {
        if (($referrerId = \Yii::$app->request->get($this->refParamName))) {
            \Yii::$app->session->set($this->refSessionName, $referrerId);
        }
        
        return \Yii::$app->session->get($this->refSessionName);
    }

}
