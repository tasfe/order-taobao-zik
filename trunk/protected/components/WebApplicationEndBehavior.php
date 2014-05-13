<?php
/**
 * Created by PhpStorm.
 * User: zikoops
 * Date: 01/05/2014
 * Time: 17:37
 */

class WebApplicationEndBehavior extends CBehavior
{
    // Web application end's name.
    private $_endName;

    // Getter.
    // Allows to get the current -end's name
    // this way: Yii::app()->endName;
    public function getEndName()
    {
        return $this->_endName;
    }

    // Run application's end.
    public function runEnd($name)
    {
        $this->_endName = $name;

        // Attach the changeModulePaths event handler
        // and raise it.
        $this->onModuleCreate = array($this, 'changeModulePaths');
        $this->onModuleCreate(new CEvent($this->owner));

        $this->owner->run(); // Run application.
    }

    // This event should be raised when CWebApplication
    // or CWebModule instances are being initialized.
    public function onModuleCreate($event)
    {
        $this->raiseEvent('onModuleCreate', $event);
    }

    // onModuleCreate event handler.
    // A sender must have controllerPath and viewPath properties.
    protected function changeModulePaths($event)
    {
        $event->sender->controllerPath .= DIRECTORY_SEPARATOR.$this->_endName;
        $event->sender->viewPath .= DIRECTORY_SEPARATOR.$this->_endName;
    }
    public function init(){
        // We can configure our module depending on the value
        // of Yii::app()->endName.
        $this->foo = (Yii::app()->endName == 'front') ? 'bar1' : 'bar2';

        // Raise onModuleCreate event.
        Yii::app()->onModuleCreate(new CEvent($this));
    }
}