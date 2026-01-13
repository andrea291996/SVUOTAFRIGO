<?php

class __Mustache_d1aafc78ce0da536571c5e486207c0f4 extends \Mustache\Template
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
        $buffer .= $indent . 'password:
';
        $buffer .= $indent . '<input type="password" name="password">
';
        $buffer .= $indent . '</form>';

        return $buffer;
    }
}
