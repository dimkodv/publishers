<?php
namespace app\widgets\registrationForm;

use app\models\PublishersForm;
use yii\base\Widget;


class RegistrationFormWidget extends Widget
{
    public $formName;

    public function init(){
        parent::init();
        if($this->formName === null) $this->formName = 'formId';
    }

    public function run()
    {
        $model = new PublishersForm();

        return $this->render('block',['model' => $model, 'formName' =>$this->formName]);
    }
}