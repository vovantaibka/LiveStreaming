<?php
/**
 * Created by PhpStorm.
 * User: francy
 * Date: 12/14/17
 * Time: 7:49 AM
 */

namespace LiveStreaming\LearningDP\Block;

class Helloworld extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
        return "Hello World!";
    }
}