<?php


namespace App\Exceptions;


class AjaxFormExceptionManager
{

    private static $instance;
    public $exceptions = [];

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new AjaxFormExceptionManager();
        }
        return self::$instance;
    }

    /**
     * @param $field
     * @param $error
     */
    public function addError($field, $error)
    {
        $this->exceptions[$field] = $error;
    }

    /**
     * @return bool
     */
    public function hasErrors()
    {
        return !empty($this->exceptions);
    }

    /**
     * @return array
     */
    public function getErrors()
    {

        $em = AjaxFormExceptionManager::getInstance();

        $exceptions = [];

        foreach ($em->exceptions as $field => $exception) {
            if ($exception instanceof InvalidArgumentException) {
                $exceptions[$field][] = $exception->getMessage();
            } else {
                $exceptions[$field][] = $exception;
            }
        }
        return $exceptions;
    }

}