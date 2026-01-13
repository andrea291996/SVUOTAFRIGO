<?php

class __Mustache_a92954e9abfb9a87c9b79359ca5f8c8a extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<b>Nome:</b> ';
        $value = $this->resolveValue($context->find('getCodice'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';
        $buffer .= $indent . '<br> Tipologia: € ';
        $value = $this->resolveValue($context->find('getPrezzo'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';
        $buffer .= $indent . '<br> Dieta: ';
        $value = $this->resolveValue($context->find('applicaSconto'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';
        $buffer .= $indent . '<br> Procedimento: ';
        $value = $this->resolveValue($context->find('getDescrizione'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
';

        return $buffer;
    }
}
