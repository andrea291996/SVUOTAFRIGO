<?php

class __Mustache_f2e59fc4fdf9d7afe6f715c6e2cd7dcd extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<form action="accedi" method="post">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div data-mdb-input-init class="form-outline mb-4">
';
        $buffer .= $indent . '    <input type="email" class="form-control" name="email" required />
';
        $buffer .= $indent . '    <label class="form-label">Email address</label>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div data-mdb-input-init class="form-outline mb-2">
';
        $buffer .= $indent . '    <input type="password" class="form-control" name="password" required />
';
        $buffer .= $indent . '    <label class="form-label">Password</label>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- Password dimenticata -->
';
        $buffer .= $indent . '  <div class="text-end mb-4">
';
        $buffer .= $indent . '    <a href="password-dimenticata" class="text-muted">
';
        $buffer .= $indent . '      Password dimenticata?
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <button type="submit" class="btn btn-primary btn-block mb-4">
';
        $buffer .= $indent . '    Sign in
';
        $buffer .= $indent . '  </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }
}
