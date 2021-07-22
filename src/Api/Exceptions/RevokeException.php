<?php declare(strict_types=1);

namespace App\Api\Exceptions {


    /**
     * Will be thrown if there is an error during the revoke endpoint process.
     * @package App\Api\Exceptions
     */
    class RevokeException extends BusinessException
    {

        /**
         * Constructor.
         * @param string $message The message.
         * @param int $code The code.
         */
        public function __construct(string $message, int $code)
        {
            parent::__construct($message, $code);
        }
    }
}

