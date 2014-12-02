# Yii2 file/image upload behavior for ActiveRecord #
 
## FileUploadBehavior ##

This behavior allow you to add file and image uploading logic with ActiveRecord behavior.

### Usage ###
Attach the behavior to your controller class:

    public function behaviors()
    {
        return [
            'reflink' => [
                'class' => '\yiidreamteam\reflink\ReflinkBehavior',
                'refParamName' => 'ref',
                'refSessionName' => 'referrerId',
            ],
        ];
    }

Use 
    
    $this->getReferrerId();

    
## Licence ##

MIT
    
## Contacts ##

* https://github.com/yii-dream-team/yii2-reflink-behavior