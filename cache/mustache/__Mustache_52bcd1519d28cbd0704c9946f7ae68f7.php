<?php

class __Mustache_52bcd1519d28cbd0704c9946f7ae68f7 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="container mt-5">
';
        $buffer .= $indent . '    <div class="card shadow-sm">
';
        $buffer .= $indent . '        <div class="card-header bg-dark text-white">
';
        $buffer .= $indent . '            <h5 class="mb-0">Filtra Ricette per Ingredienti</h5>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="card-body">
';
        $buffer .= $indent . '            <form action="ricette" method="POST">
';
        $buffer .= $indent . '                
';
        $buffer .= $indent . '                <div id="ingredienti-container">
';
        $buffer .= $indent . '                    <div class="row g-2 mb-2 ingrediente-row">
';
        $buffer .= $indent . '                        <div class="col-md-7">
';
        $buffer .= $indent . '                            <label class="form-label">Ingrediente</label>
';
        $buffer .= $indent . '                            <input type="text" name="ingredienti[]" class="form-control" placeholder="Es: Farina">
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="col-md-3">
';
        $buffer .= $indent . '                            <label class="form-label">Quantità</label>
';
        $buffer .= $indent . '                            <input type="number" name="quantita[]" class="form-control" placeholder="gr">
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="col-md-2 d-flex align-items-end">
';
        $buffer .= $indent . '                            <button type="button" class="btn btn-outline-danger w-100" onclick="rimuoviRiga(this)">
';
        $buffer .= $indent . '                                <i class="fas fa-trash"></i>
';
        $buffer .= $indent . '                            </button>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <button type="button" class="btn btn-secondary btn-sm mb-4" onclick="aggiungiIngrediente()">
';
        $buffer .= $indent . '                    <i class="fas fa-plus"></i> Aggiungi un altro ingrediente
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <hr>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="mt-4">
';
        $buffer .= $indent . '                    <button type="submit" class="btn btn-primary w-100">Cerca con questi ingredienti</button>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </form>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . 'function aggiungiIngrediente() {
';
        $buffer .= $indent . '    const container = document.getElementById(\'ingredienti-container\');
';
        $buffer .= $indent . '    const nuovaRiga = document.createElement(\'div\');
';
        $buffer .= $indent . '    nuovaRiga.className = \'row g-2 mb-2 ingrediente-row\';
';
        $buffer .= $indent . '    nuovaRiga.innerHTML = `
';
        $buffer .= $indent . '        <div class="col-md-7">
';
        $buffer .= $indent . '            <input type="text" name="ingredienti[]" class="form-control" placeholder="Altro ingrediente">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-md-3">
';
        $buffer .= $indent . '            <input type="number" name="quantita[]" class="form-control" placeholder="gr">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-md-2">
';
        $buffer .= $indent . '            <button type="button" class="btn btn-outline-danger w-100" onclick="rimuoviRiga(this)">
';
        $buffer .= $indent . '                <i class="fas fa-trash"></i>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    `;
';
        $buffer .= $indent . '    container.appendChild(nuovaRiga);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'function rimuoviRiga(btn) {
';
        $buffer .= $indent . '    const rows = document.querySelectorAll(\'.ingrediente-row\');
';
        $buffer .= $indent . '    if (rows.length > 1) {
';
        $buffer .= $indent . '        btn.closest(\'.ingrediente-row\').remove();
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }
}
