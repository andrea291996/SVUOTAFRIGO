<?php

class __Mustache_35900f7b441db0b9c17c90a2a77273f8 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1>login</h1>
';
        $buffer .= $indent . '<form action="accedi" method="post">
';
        $buffer .= $indent . '<input type="email" name="email">
';
        $buffer .= $indent . '<input type="password" name="password">
';
        $buffer .= $indent . '</form>';

        return $buffer;
    }
}
