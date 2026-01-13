<?php

class __Mustache_d1ab709286cda9b6aea2abc02ee43394 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
';
        $buffer .= $indent . '  <div class="container-fluid">
';
        $value = $context->find('brand');
        $buffer .= $this->sectionD05bb7ac241d437cc0af080612a33094($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
';
        $buffer .= $indent . '      <span class="navbar-toggler-icon"></span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="collapse navbar-collapse" id="navbarNav">
';
        $buffer .= $indent . '      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
';
        $value = $context->find('items');
        $buffer .= $this->sectionF6a32b2a9c393f1ef0994bdc4c83a21d($context, $indent, $value);
        $buffer .= $indent . '      </ul>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</nav>';

        return $buffer;
    }

    private function sectionD05bb7ac241d437cc0af080612a33094(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
    <a class="navbar-brand fw-bold" href="{{href}}">{{title}}</a>
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
                
                $buffer .= $indent . '    <a class="navbar-brand fw-bold" href="';
                $value = $this->resolveValue($context->find('href'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6dabfc6e3de0f7ff4baa136bb16e58d0(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = 'aria-current="page"';
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
                
                $buffer .= 'aria-current="page"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6a32b2a9c393f1ef0994bdc4c83a21d(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
        <li class="nav-item">
          <a class="nav-link {{active}}" {{#active}}aria-current="page"{{/active}} href="{{href}}">
            {{title}}
          </a>
        </li>
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
                
                $buffer .= $indent . '        <li class="nav-item">
';
                $buffer .= $indent . '          <a class="nav-link ';
                $value = $this->resolveValue($context->find('active'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" ';
                $value = $context->find('active');
                $buffer .= $this->section6dabfc6e3de0f7ff4baa136bb16e58d0($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('href'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '          </a>
';
                $buffer .= $indent . '        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
