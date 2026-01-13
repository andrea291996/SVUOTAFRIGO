<?php

class __Mustache_b56a974e5c1b0e783bfeeb2a902b3aa3 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
';
        $buffer .= $indent . '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="/SVUOTAFRIGO/assets/fontawesome/js/all.min.js"></script>
';
        $buffer .= $indent . '<script src="/SVUOTAFRIGO/filtri.js"></script>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section896ed2a1a407e9e16e79160420a80870($context, $indent, $value);

        return $buffer;
    }

    private function section896ed2a1a407e9e16e79160420a80870(\Mustache\Context $context, $indent, $value)
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
                
                $buffer .= $indent . '    ';
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
