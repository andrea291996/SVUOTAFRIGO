<?php

class __Mustache_728b03260fa785fa312589a07c42a8d4 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->findDot('Success.0', true);
        $buffer .= $this->sectionEd7c9c3ee276fe2bfcd348ce6a5c4650($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->findDot('Error.0', true);
        $buffer .= $this->section883fa700fb36692100c1eec1a7ddc868($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->findDot('Info.0', true);
        $buffer .= $this->section37962d1a7c9cd5fedb86bbf787733842($context, $indent, $value);

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

    private function sectionEd7c9c3ee276fe2bfcd348ce6a5c4650(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{#Success}}{{{.}}}<br>{{/Success}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                
                $buffer .= $indent . '    <div class="alert alert-success alert-dismissible fade show" role="alert">
';
                $buffer .= $indent . '        ';
                $value = $context->find('Success');
                $buffer .= $this->section7e48d325337a782315b7ab9f92aca0a6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section883fa700fb36692100c1eec1a7ddc868(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{#Error}}{{{.}}}<br>{{/Error}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                
                $buffer .= $indent . '    <div class="alert alert-danger alert-dismissible fade show" role="alert">
';
                $buffer .= $indent . '        ';
                $value = $context->find('Error');
                $buffer .= $this->section7e48d325337a782315b7ab9f92aca0a6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section37962d1a7c9cd5fedb86bbf787733842(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{#Info}}{{{.}}}<br>{{/Info}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                
                $buffer .= $indent . '    <div class="alert alert-info alert-dismissible fade show" role="alert">
';
                $buffer .= $indent . '        ';
                $value = $context->find('Info');
                $buffer .= $this->section7e48d325337a782315b7ab9f92aca0a6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
