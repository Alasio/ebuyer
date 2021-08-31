<?php

namespace App\Exceptions;

class AjaxExceptionHandler extends \Exception
{
    private static $instance;
    public $exceptions = array();

    /**
     * @return AjaxExceptionHandler
     *
     * @author AC ashwclark@outlook.com
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new AjaxExceptionHandler();
        }
        return self::$instance;
    }

    /**
     * @param $field
     * @param $error
     *
     * @author AC ashwclark@outlook.com
     */
    public function addError($field, $error)
    {
        $this->exceptions[$field][] = $error;
    }

    /**
     * @return bool
     *
     * @author AC ashwclark@outlook.com
     */
    public function hasErrors()
    {
        return !empty($this->exceptions);
    }

    /**
     * @return array
     *
     * @author AC ashwclark@outlook.com
     */
    public function getErrors()
    {
        return $this->exceptions;
    }

    /**
     * @return array
     *
     * @author AC ashwclark@outlook.com
     */
    public function getAllErrors()
    {
        $em = AjaxExceptionHandler::getInstance();
        $exceptions = array();
        foreach ($em->getErrors() as $key => $val) {
            foreach ($val as $exception) {
                if ($exception instanceof InvalidArgumentException) {
                    $exceptions[$key][] = $exception->getMessage();
                }
            }
        }
        return ['status' => 2, 'exceptions' => $exceptions];
    }
}