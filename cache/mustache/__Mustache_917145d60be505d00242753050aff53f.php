<?php

class __Mustache_917145d60be505d00242753050aff53f extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1>login</h1>
';
        $buffer .= $indent . '<form action="accedi" method="post">
';
        $buffer .= $indent . 'email:
';
        $buffer .= $indent . '<input type="email" name="email">
';
        $buffer .= $indent . '<input type="password" name="password">
';
        $buffer .= $indent . '</form>';

        return $buffer;
    }
}
