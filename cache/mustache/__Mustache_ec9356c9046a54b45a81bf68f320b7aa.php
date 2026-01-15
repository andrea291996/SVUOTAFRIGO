<?php

class __Mustache_ec9356c9046a54b45a81bf68f320b7aa extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<form action="registrati" method="post">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- Email -->
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
        $buffer .= $indent . '  <!-- Password -->
';
        $buffer .= $indent . '  <div data-mdb-input-init class="form-outline mb-4">
';
        $buffer .= $indent . '    <input type="password" class="form-control" name="password" required />
';
        $buffer .= $indent . '    <label class="form-label">Password</label>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <button type="submit"
';
        $buffer .= $indent . '          class="btn btn-primary btn-block mb-4">
';
        $buffer .= $indent . '    Sign up
';
        $buffer .= $indent . '  </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</form>
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
