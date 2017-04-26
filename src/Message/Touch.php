<?php
/**
 * Created by PhpStorm.
 * User: Hanson
 * Date: 2017/1/15
 * Time: 12:29.
 */

namespace Hanson\Vbot\Message;

use Hanson\Vbot\Message\MessageInterface;
use Hanson\Vbot\Foundation\Vbot;

class Touch extends Message implements MessageInterface
{
    public function __construct(Vbot $vbot)
    {
        parent::__construct($vbot);

        $this->make();
    }

    public function make()
    {
        $this->content = '[点击事件]';
    }
}
