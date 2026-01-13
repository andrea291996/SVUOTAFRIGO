<?php

class __Mustache_df08a0b92318e5a65730b51161b45276 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<html>
';
        $buffer .= $indent . '    <head>
';
        if ($partial = $this->mustache->loadPartial('head')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    </head>
';
        $buffer .= $indent . '    <body>
';
        $buffer .= $indent . '  
';
        $value = $context->find('header');
        $buffer .= $this->section16771a22c373e7b157256fbfa091bbe4($context, $indent, $value);
        $value = $context->find('content');
        $buffer .= $this->section16771a22c373e7b157256fbfa091bbe4($context, $indent, $value);
        $value = $context->find('footer');
        $buffer .= $this->section16771a22c373e7b157256fbfa091bbe4($context, $indent, $value);
        if ($partial = $this->mustache->loadPartial('script')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </body>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }

    private function section16771a22c373e7b157256fbfa091bbe4(\Mustache\Context $context, $indent, $value)
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
                
                $buffer .= $indent . '            ';
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
