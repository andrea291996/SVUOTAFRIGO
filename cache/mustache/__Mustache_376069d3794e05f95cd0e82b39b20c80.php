<?php

class __Mustache_376069d3794e05f95cd0e82b39b20c80 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<form action="registrati" method="post">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- First / Last name (opzionali, puoi anche toglierli) -->
';
        $buffer .= $indent . '  <div class="row">
';
        $buffer .= $indent . '    <div class="col-md-6 mb-4">
';
        $buffer .= $indent . '      <div class="form-outline">
';
        $buffer .= $indent . '        <input type="text" class="form-control" name="nome" />
';
        $buffer .= $indent . '        <label class="form-label">First name</label>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="col-md-6 mb-4">
';
        $buffer .= $indent . '      <div class="form-outline">
';
        $buffer .= $indent . '        <input type="text" class="form-control" name="cognome" />
';
        $buffer .= $indent . '        <label class="form-label">Last name</label>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
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
        $buffer .= $indent . '  <!-- Checkbox -->
';
        $buffer .= $indent . '  <div class="form-check d-flex justify-content-center mb-4">
';
        $buffer .= $indent . '    <input class="form-check-input me-2" type="checkbox" />
';
        $buffer .= $indent . '    <label class="form-check-label">
';
        $buffer .= $indent . '      Subscribe to our newsletter
';
        $buffer .= $indent . '    </label>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- Submit -->
';
        $buffer .= $indent . '  <button type="submit" class="btn btn-primary btn-block mb-4">
';
        $buffer .= $indent . '    Sign up
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
