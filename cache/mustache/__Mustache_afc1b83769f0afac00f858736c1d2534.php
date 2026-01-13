<?php

class __Mustache_afc1b83769f0afac00f858736c1d2534 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="container mt-5">
';
        $buffer .= $indent . '    <div class="card border-0 shadow-lg">
';
        $buffer .= $indent . '        <div class="card-header bg-white py-3">
';
        $buffer .= $indent . '            <h5 class="mb-0 fw-bold text-secondary">Cerca nel tuo Frigo</h5>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="card-body p-4">
';
        $buffer .= $indent . '            <form action="ricette" method="POST">
';
        $buffer .= $indent . '                
';
        $buffer .= $indent . '                <label class="form-label fw-bold text-muted small uppercase">Ingredienti e Quantità</label>
';
        $buffer .= $indent . '                <div id="ingredienti-container">
';
        $buffer .= $indent . '                    <div class="row g-2 mb-3 align-items-center ingrediente-row">
';
        $buffer .= $indent . '                        <div class="col-7">
';
        $buffer .= $indent . '                            <input type="text" name="ingredienti[]" class="form-control form-control-sm border-0 border-bottom bg-light" placeholder="Ingrediente (es. Latte)">
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="col-4">
';
        $buffer .= $indent . '                            <input type="number" name="quantita[]" class="form-control form-control-sm border-0 border-bottom bg-light" placeholder="Quantità">
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="col-1 text-center">
';
        $buffer .= $indent . '                            <a href="javascript:void(0)" class="text-muted" onclick="rimuoviRiga(this)" style="text-decoration: none;">&times;</a>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="mb-4">
';
        $buffer .= $indent . '                    <a href="javascript:void(0)" class="text-primary small fw-bold" onclick="aggiungiIngrediente()" style="text-decoration: none;">
';
        $buffer .= $indent . '                        + Aggiungi un altro ingrediente
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <hr class="text-light">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="row mt-4">
';
        $buffer .= $indent . '                    <div class="col-12">
';
        $buffer .= $indent . '                        <label class="form-label fw-bold text-muted small mb-3">Preferenze e Diete</label>
';
        $buffer .= $indent . '                        <div class="d-flex flex-wrap gap-3">
';
        $buffer .= $indent . '                            <div class="form-check">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="dieta_ebraica" id="kosher">
';
        $buffer .= $indent . '                                <label class="form-check-label small" for="kosher">Kosher</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="form-check">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="dieta_musulmana" id="halal">
';
        $buffer .= $indent . '                                <label class="form-check-label small" for="halal">Halal</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="form-check">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="vegana" id="vegan">
';
        $buffer .= $indent . '                                <label class="form-check-label small" for="vegan">Vegana</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="mt-5 text-center">
';
        $buffer .= $indent . '                    <button type="submit" class="btn btn-dark px-5 py-2 fw-bold">CERCA RICETTE</button>
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

        return $buffer;
    }
}
