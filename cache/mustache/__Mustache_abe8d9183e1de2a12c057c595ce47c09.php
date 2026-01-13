<?php

class __Mustache_abe8d9183e1de2a12c057c595ce47c09 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="container mt-5">
';
        $buffer .= $indent . '    <div class="card shadow-sm border-0">
';
        $buffer .= $indent . '        <div class="card-header bg-dark text-white py-3">
';
        $buffer .= $indent . '            <h5 class="mb-0"><i class="fas fa-utensils me-2"></i> Filtra le tue Ricette</h5>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="card-body p-4">
';
        $buffer .= $indent . '            <form action="ricette" method="POST">
';
        $buffer .= $indent . '                <div class="row g-3 mb-4" id="ingredienti-container">
';
        $buffer .= $indent . '                    <div class="col-md-6 ingredient-row">
';
        $buffer .= $indent . '                        <label class="form-label fw-bold">Ingredienti che hai in frigo</label>
';
        $buffer .= $indent . '                        <div class="input-group mb-2">
';
        $buffer .= $indent . '                            <span class="input-group-text"><i class="fas fa-search"></i></span>
';
        $buffer .= $indent . '                            <input type="text" name="ingrediente[]" class="form-control" placeholder="es. Melanzane">
';
        $buffer .= $indent . '                            <button type="button" class="btn btn-success" id="add-ingrediente">
';
        $buffer .= $indent . '                                <i class="fas fa-plus"></i>
';
        $buffer .= $indent . '                            </button>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                    <div class="col-md-3">
';
        $buffer .= $indent . '                        <label class="form-label fw-bold">Quantità totale (gr/ml)</label>
';
        $buffer .= $indent . '                        <input type="number" name="quantita" class="form-control" placeholder="0">
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="col-md-3">
';
        $buffer .= $indent . '                        <label class="form-label fw-bold">Persone</label>
';
        $buffer .= $indent . '                        <input type="number" name="persone" class="form-control" placeholder="1">
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="row">
';
        $buffer .= $indent . '                    <div class="col-md-6 border-end">
';
        $buffer .= $indent . '                        <h6 class="text-primary fw-bold mb-3">Diete e Preferenze</h6>
';
        $buffer .= $indent . '                        <div class="row">
';
        $buffer .= $indent . '                            <div class="col-6">
';
        $buffer .= $indent . '                                <div class="form-check mb-2">
';
        $buffer .= $indent . '                                    <input class="form-check-input" type="checkbox" name="dieta_musulmana" id="halal">
';
        $buffer .= $indent . '                                    <label class="form-check-label" for="halal">Musulmana (Halal)</label>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="form-check mb-2">
';
        $buffer .= $indent . '                                    <input class="form-check-input" type="checkbox" name="dieta_ebraica" id="kosher">
';
        $buffer .= $indent . '                                    <label class="form-check-label" for="kosher">Ebraica (Kosher)</label>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="col-6">
';
        $buffer .= $indent . '                                <div class="form-check mb-2">
';
        $buffer .= $indent . '                                    <input class="form-check-input" type="checkbox" name="vegetariana" id="veg">
';
        $buffer .= $indent . '                                    <label class="form-check-label" for="veg">Vegetariana</label>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="form-check mb-2">
';
        $buffer .= $indent . '                                    <input class="form-check-input" type="checkbox" name="vegana" id="vegan">
';
        $buffer .= $indent . '                                    <label class="form-check-label" for="vegan">Vegana</label>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="col-md-6 ps-md-4">
';
        $buffer .= $indent . '                        <h6 class="text-danger fw-bold mb-3">Allergie e Intolleranze</h6>
';
        $buffer .= $indent . '                        <div class="row">
';
        $buffer .= $indent . '                            <div class="col-6">
';
        $buffer .= $indent . '                                <div class="form-check mb-2">
';
        $buffer .= $indent . '                                    <input class="form-check-input" type="checkbox" name="senza_glutine" id="glu">
';
        $buffer .= $indent . '                                    <label class="form-check-label" for="glu">Glutine</label>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="form-check mb-2">
';
        $buffer .= $indent . '                                    <input class="form-check-input" type="checkbox" name="senza_lattosio" id="lat">
';
        $buffer .= $indent . '                                    <label class="form-check-label" for="lat">Lattosio</label>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="col-6">
';
        $buffer .= $indent . '                                <div class="form-check mb-2">
';
        $buffer .= $indent . '                                    <input class="form-check-input" type="checkbox" name="senza_crostacei" id="cro">
';
        $buffer .= $indent . '                                    <label class="form-check-label" for="cro">Crostacei</label>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="form-check mb-2">
';
        $buffer .= $indent . '                                    <input class="form-check-input" type="checkbox" name="senza_frutta_secca" id="fru">
';
        $buffer .= $indent . '                                    <label class="form-check-label" for="fru">Frutta Secca</label>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="mt-4 pt-3 border-top">
';
        $buffer .= $indent . '                    <button type="submit" class="btn btn-primary px-5 shadow-sm">
';
        $buffer .= $indent . '                        <i class="fas fa-search me-2"></i>Trova Ricette
';
        $buffer .= $indent . '                    </button>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </form>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
