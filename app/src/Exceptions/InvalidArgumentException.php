<?php

namespace App\Exceptions;

class InvalidArgumentException extends \Exception
{
    /**
     * @return array
     *
     * @author AC ashwclark@outlook.com
     */
    public function action() {
        return array('statusCode' => 2, 'message' => $this->getMessage());
    }
}
