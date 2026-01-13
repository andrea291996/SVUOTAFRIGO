<?php

class __Mustache_2496be0bb63cb524c6d55724ae37ae1f extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('carousel');
        $buffer .= $this->section118121add84ff5a1559c0afbe7f8b3eb($context, $indent, $value);
        $buffer .= $indent . '    
';
        $buffer .= $indent . '<div class="container">
';
        $value = $context->find('content');
        $buffer .= $this->section118121add84ff5a1559c0afbe7f8b3eb($context, $indent, $value);
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section118121add84ff5a1559c0afbe7f8b3eb(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
        {{{render}}}
    ';
            $value = call_user_func($value, $source, $this->lambdaHelper);
    
            if ($value instanceof \Mustache\RenderedString) {
                return $value->getValue();
            }
    
            if (is_string($value)) {
                if (strpos($value, '{{') === false) {
                    return $value;
                }
    
                return $this->mustache
                    ->loadLambda($value)
                    ->renderInternal($context);
            }
        }
    
        if (!empty($value)) {
            $values = $this->isIterable($value) ? $value : [$value];
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('render'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
