<?php

class __Mustache_e70e1c92804af9c7defb46e199029edd extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="box-comandi-grigio">
';
        $buffer .= $indent . '    <h2>Cosa vuoi fare oggi?</h2>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('comandi'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' 
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
