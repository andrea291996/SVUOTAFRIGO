<?php

class __Mustache_c6c52090e8450459ef67842b116e36dc extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->findDot('Success.0', true);
        $buffer .= $this->section08bf693acefa210a934ef4869769374c($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->findDot('Error.0', true);
        $buffer .= $this->section9edf2ff34478dbdc438615c62680e2b5($context, $indent, $value);

        return $buffer;
    }

    private function section7e48d325337a782315b7ab9f92aca0a6(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '{{{.}}}<br>';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '<br>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08bf693acefa210a934ef4869769374c(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
    <div class="alert alert-success" role="alert">
        {{#Success}}{{{.}}}<br>{{/Success}}
    </div>
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
                
                $buffer .= $indent . '    <div class="alert alert-success" role="alert">
';
                $buffer .= $indent . '        ';
                $value = $context->find('Success');
                $buffer .= $this->section7e48d325337a782315b7ab9f92aca0a6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9edf2ff34478dbdc438615c62680e2b5(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
    <div class="alert alert-danger" role="alert">
        {{#Error}}{{{.}}}<br>{{/Error}}
    </div>
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
                
                $buffer .= $indent . '    <div class="alert alert-danger" role="alert">
';
                $buffer .= $indent . '        ';
                $value = $context->find('Error');
                $buffer .= $this->section7e48d325337a782315b7ab9f92aca0a6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
