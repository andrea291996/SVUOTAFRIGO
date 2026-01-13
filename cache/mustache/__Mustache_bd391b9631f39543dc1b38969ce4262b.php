<?php

class __Mustache_bd391b9631f39543dc1b38969ce4262b extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="navbar navbar-expand-lg bg-body-tertiary">
';
        $buffer .= $indent . '  <div class="container-fluid">
';
        $buffer .= $indent . '
';
        $value = $context->find('brand');
        $buffer .= $this->section17974e7fdf5e682c288fa3bebc5a8b75($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
';
        $buffer .= $indent . '      <span class="navbar-toggler-icon"></span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="collapse navbar-collapse" id="navbarSupportedContent">
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
';
        $buffer .= $indent . '
';
        $value = $context->find('items');
        $buffer .= $this->section8ffd893c35c229ea9cc22a06eb92a87a($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '      </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</nav>';

        return $buffer;
    }

    private function section17974e7fdf5e682c288fa3bebc5a8b75(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
    <a class="navbar-brand" href="{{href}}">{{title}}</a>
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
                
                $buffer .= $indent . '    <a class="navbar-brand" href="';
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

    private function section4414969266f94040869614cc847b9ff3(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
                <li><hr class="dropdown-divider"></li>
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
                
                $buffer .= $indent . '                <li><hr class="dropdown-divider"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEcf9498bf0936e4ca8857a304bcbef5d(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
                {{^isDivider}}
                <li><a class="dropdown-item" href="{{href}}">{{title}}</a></li>
                {{/isDivider}}

                {{#isDivider}}
                <li><hr class="dropdown-divider"></li>
                {{/isDivider}}

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
                
                $value = $context->find('isDivider');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <li><a class="dropdown-item" href="';
                    $value = $this->resolveValue($context->find('href'), $context);
                    $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('title'), $context);
                    $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                    $buffer .= '</a></li>
';
                }
                $buffer .= $indent . '
';
                $value = $context->find('isDivider');
                $buffer .= $this->section4414969266f94040869614cc847b9ff3($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section37a938eb7e8dd97b21890ae7400ab8a3(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{href}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{title}}
            </a>

            <ul class="dropdown-menu">
                {{#childs}}
                {{^isDivider}}
                <li><a class="dropdown-item" href="{{href}}">{{title}}</a></li>
                {{/isDivider}}

                {{#isDivider}}
                <li><hr class="dropdown-divider"></li>
                {{/isDivider}}

                {{/childs}}
            </ul>

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
                
                $buffer .= $indent . '            <li class="nav-item dropdown">
';
                $buffer .= $indent . '            <a class="nav-link dropdown-toggle" href="';
                $value = $this->resolveValue($context->find('href'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" role="button" data-bs-toggle="dropdown" aria-expanded="false">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <ul class="dropdown-menu">
';
                $value = $context->find('childs');
                $buffer .= $this->sectionEcf9498bf0936e4ca8857a304bcbef5d($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ffd893c35c229ea9cc22a06eb92a87a(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '

            {{^hasChilds}}
            <li class="nav-item">
            <a class="nav-link {{active}}" {{#active}}aria-current="page"{{/active}} href="{{href}}">{{title}}</a>
            </li>
            {{/hasChilds}}

            {{#hasChilds}}
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{href}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{title}}
            </a>

            <ul class="dropdown-menu">
                {{#childs}}
                {{^isDivider}}
                <li><a class="dropdown-item" href="{{href}}">{{title}}</a></li>
                {{/isDivider}}

                {{#isDivider}}
                <li><hr class="dropdown-divider"></li>
                {{/isDivider}}

                {{/childs}}
            </ul>

            </li>
            {{/hasChilds}}
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
                
                $buffer .= $indent . '
';
                $value = $context->find('hasChilds');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <li class="nav-item">
';
                    $buffer .= $indent . '            <a class="nav-link ';
                    $value = $this->resolveValue($context->find('active'), $context);
                    $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                    $buffer .= '" ';
                    $value = $context->find('active');
                    $buffer .= $this->section6dabfc6e3de0f7ff4baa136bb16e58d0($context, $indent, $value);
                    $buffer .= ' href="';
                    $value = $this->resolveValue($context->find('href'), $context);
                    $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('title'), $context);
                    $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                    $buffer .= '</a>
';
                    $buffer .= $indent . '            </li>
';
                }
                $buffer .= $indent . '
';
                $value = $context->find('hasChilds');
                $buffer .= $this->section37a938eb7e8dd97b21890ae7400ab8a3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
