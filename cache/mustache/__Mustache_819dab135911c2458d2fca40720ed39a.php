<?php

class __Mustache_819dab135911c2458d2fca40720ed39a extends \Mustache\Template
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
        $buffer .= $indent . '            <form action="/SVUOTAFRIGO/ricette" method="POST">
';
        $buffer .= $indent . '                
';
        $buffer .= $indent . '                <div class="row mb-4">
';
        $buffer .= $indent . '                    <div class="col-12">
';
        $buffer .= $indent . '                        <label class="form-label fw-bold"><i class="fas fa-carrot me-2 text-warning"></i>Cosa hai in frigo?</label>
';
        $buffer .= $indent . '                        
';
        $buffer .= $indent . '                        <div class="row g-2 mb-3 align-items-center">
';
        $buffer .= $indent . '                            <div class="col-md-6">
';
        $buffer .= $indent . '                                <div class="input-group">
';
        $buffer .= $indent . '                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
';
        $buffer .= $indent . '                                    <input type="text" id="input-ingrediente-nuovo" class="form-control" placeholder="es. Melanzane">
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="col-md-2">
';
        $buffer .= $indent . '                                <button type="button" id="btn-aggiungi-ingrediente" class="btn btn-success w-100">
';
        $buffer .= $indent . '                                    <i class="fas fa-plus me-1"></i> Aggiungi
';
        $buffer .= $indent . '                                </button>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        <div id="lista-ingredienti-confermati">
';
        $buffer .= $indent . '                            </div>
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
        $buffer .= $indent . '                             <div class="col-6">
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
        $buffer .= $indent . '    const btnAggiungi = document.getElementById(\'btn-aggiungi-ingrediente\');
';
        $buffer .= $indent . '    const inputNuovo = document.getElementById(\'input-ingrediente-nuovo\');
';
        $buffer .= $indent . '    const listaConfermati = document.getElementById(\'lista-ingredienti-confermati\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    btnAggiungi.addEventListener(\'click\', function() {
';
        $buffer .= $indent . '        const valore = inputNuovo.value.trim();
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        if (valore === "") {
';
        $buffer .= $indent . '            alert("Inserisci il nome di un ingrediente");
';
        $buffer .= $indent . '            return;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        // Creiamo la riga per l\'ingrediente confermato
';
        $buffer .= $indent . '        const newRow = document.createElement(\'div\');
';
        $buffer .= $indent . '        newRow.className = \'row g-2 mb-2 align-items-center animate__animated animate__fadeIn\';
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        // Nota: Qui l\'input ha name="ingredienti[]", quindi verrà inviato al POST
';
        $buffer .= $indent . '        newRow.innerHTML = `
';
        $buffer .= $indent . '            <div class="col-md-6">
';
        $buffer .= $indent . '                <div class="input-group">
';
        $buffer .= $indent . '                    <span class="input-group-text bg-light"><i class="fas fa-check text-success"></i></span>
';
        $buffer .= $indent . '                    <input type="text" name="ingredienti[]" class="form-control" value="${valore}" readonly>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-md-2">
';
        $buffer .= $indent . '                <button type="button" class="btn btn-outline-danger w-100 remove-row">
';
        $buffer .= $indent . '                    <i class="fas fa-trash"></i> Cancella
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        `;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        listaConfermati.appendChild(newRow);
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        // Puliamo l\'input principale per il prossimo ingrediente
';
        $buffer .= $indent . '        inputNuovo.value = \'\';
';
        $buffer .= $indent . '        inputNuovo.focus();
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Delega evento per la rimozione
';
        $buffer .= $indent . '    listaConfermati.addEventListener(\'click\', function(e) {
';
        $buffer .= $indent . '        if (e.target.closest(\'.remove-row\')) {
';
        $buffer .= $indent . '            e.target.closest(\'.row\').remove();
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Permetti l\'invio con il tasto INVIO nell\'input
';
        $buffer .= $indent . '    inputNuovo.addEventListener(\'keypress\', function(e) {
';
        $buffer .= $indent . '        if (e.key === \'Enter\') {
';
        $buffer .= $indent . '            e.preventDefault();
';
        $buffer .= $indent . '            btnAggiungi.click();
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
