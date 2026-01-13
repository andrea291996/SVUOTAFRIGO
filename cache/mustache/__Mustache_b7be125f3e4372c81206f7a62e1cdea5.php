<?php

class __Mustache_b7be125f3e4372c81206f7a62e1cdea5 extends \Mustache\Template
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
        $buffer .= $indent . '                
';
        $buffer .= $indent . '                <div class="row mb-4">
';
        $buffer .= $indent . '                    <div class="col-12">
';
        $buffer .= $indent . '                        <label class="form-label fw-bold"><i class="fas fa-carrot me-2 text-warning"></i>Cosa hai in frigo?</label>
';
        $buffer .= $indent . '                        <div id="ingredienti-wrapper">
';
        $buffer .= $indent . '                            <div class="row g-2 mb-3 ingredient-row align-items-center">
';
        $buffer .= $indent . '                                <div class="col-md-6">
';
        $buffer .= $indent . '                                    <div class="input-group">
';
        $buffer .= $indent . '                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
';
        $buffer .= $indent . '                                        <input type="text" name="ingredienti[]" class="form-control" placeholder="es. Melanzane">
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="col-md-2">
';
        $buffer .= $indent . '                                    <button type="button" class="btn btn-success w-100 add-row-btn">
';
        $buffer .= $indent . '                                        <i class="fas fa-plus me-1"></i> Aggiungi
';
        $buffer .= $indent . '                                    </button>
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
        $buffer .= $indent . '                                    <label class="form-check-label" for="halal">Halal</label>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="form-check mb-2">
';
        $buffer .= $indent . '                                    <input class="form-check-input" type="checkbox" name="dieta_ebraica" id="kosher">
';
        $buffer .= $indent . '                                    <label class="form-check-label" for="kosher">Kosher</label>
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
        $buffer .= $indent . '                        <h6 class="text-danger fw-bold mb-3">Allergie (Senza...)</h6>
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
        $buffer .= $indent . '                <div class="mt-4 pt-3 border-top text-end">
';
        $buffer .= $indent . '                    <button type="submit" class="btn btn-primary btn-lg px-5 shadow-sm">
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
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . 'document.addEventListener(\'DOMContentLoaded\', function() {
';
        $buffer .= $indent . '    const wrapper = document.getElementById(\'ingredienti-wrapper\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Usiamo la delega degli eventi sul wrapper
';
        $buffer .= $indent . '    wrapper.addEventListener(\'click\', function(e) {
';
        $buffer .= $indent . '        // Logica per AGGIUNGERE riga
';
        $buffer .= $indent . '        if (e.target.closest(\'.add-row-btn\')) {
';
        $buffer .= $indent . '            const newRow = document.createElement(\'div\');
';
        $buffer .= $indent . '            newRow.className = \'row g-2 mb-3 ingredient-row align-items-center animate__animated animate__fadeIn\';
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '            newRow.innerHTML = `
';
        $buffer .= $indent . '                <div class="col-md-6">
';
        $buffer .= $indent . '                    <div class="input-group">
';
        $buffer .= $indent . '                        <span class="input-group-text"><i class="fas fa-plus-circle text-muted"></i></span>
';
        $buffer .= $indent . '                        <input type="text" name="ingredienti[]" class="form-control" placeholder="Altro ingrediente...">
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col-md-2 d-flex gap-2">
';
        $buffer .= $indent . '                    <button type="button" class="btn btn-success w-50 add-row-btn">
';
        $buffer .= $indent . '                        <i class="fas fa-plus"></i>
';
        $buffer .= $indent . '                    </button>
';
        $buffer .= $indent . '                    <button type="button" class="btn btn-danger w-50 remove-row">
';
        $buffer .= $indent . '                        <i class="fas fa-trash"></i>
';
        $buffer .= $indent . '                    </button>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            `;
';
        $buffer .= $indent . '            wrapper.appendChild(newRow);
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        // Logica per RIMUOVERE riga
';
        $buffer .= $indent . '        if (e.target.closest(\'.remove-row\')) {
';
        $buffer .= $indent . '            const row = e.target.closest(\'.ingredient-row\');
';
        $buffer .= $indent . '            // Evitiamo di rimuovere se è l\'unica riga rimasta (opzionale)
';
        $buffer .= $indent . '            row.remove();
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '});
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }
}
