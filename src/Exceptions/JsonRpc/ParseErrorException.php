<?php

namespace HuangYi\Swoole\Exceptions\JsonRpc;

class ParseErrorException extends ResponseException
{
    /**
     * NotFoundException constructor.
     *
     * @param string $message
     * @param int $code
     */
    public function __construct($message = "Parse error", $code = -32700)
    {
        parent::__construct($message, $code);
    }
}
