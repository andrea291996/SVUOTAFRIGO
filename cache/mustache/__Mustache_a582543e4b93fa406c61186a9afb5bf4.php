<?php

class __Mustache_a582543e4b93fa406c61186a9afb5bf4 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="container mt-5">
';
        $buffer .= $indent . '    <div class="card shadow-sm border-0">
';
        $buffer .= $indent . '        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center py-3">
';
        $buffer .= $indent . '            <h5 class="mb-0"><i class="fas fa-utensils me-2"></i> Filtra le tue Ricette</h5>
';
        $buffer .= $indent . '            <button type="button" class="btn btn-success btn-sm" id="add-row">
';
        $buffer .= $indent . '                <i class="fas fa-plus me-1"></i> Aggiungi ingrediente
';
        $buffer .= $indent . '            </button>
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
        $buffer .= $indent . '                        <label class="form-label fw-bold text-secondary">Ingredienti nel tuo frigo</label>
';
        $buffer .= $indent . '                        <div id="ingredienti-wrapper">
';
        $buffer .= $indent . '                            <div class="row g-2 mb-3 ingredient-row align-items-center">
';
        $buffer .= $indent . '                                <div class="col-md-7">
';
        $buffer .= $indent . '                                    <div class="input-group">
';
        $buffer .= $indent . '                                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
';
        $buffer .= $indent . '                                        <input type="text" name="ingredienti[]" class="form-control" placeholder="es. Melanzane" required>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="col-md-4">
';
        $buffer .= $indent . '                                    <div class="input-group">
';
        $buffer .= $indent . '                                        <input type="number" name="quantita[]" class="form-control" placeholder="Quantità">
';
        $buffer .= $indent . '                                        <span class="input-group-text">gr/ml</span>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="col-md-1 text-end">
';
        $buffer .= $indent . '                                    <button type="button" class="btn btn-outline-secondary disabled w-100">
';
        $buffer .= $indent . '                                        <i class="fas fa-trash"></i>
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
        $buffer .= $indent . '                <div class="row g-3 mb-4">
';
        $buffer .= $indent . '                    <div class="col-md-3">
';
        $buffer .= $indent . '                        <label class="form-label fw-bold">Per quante persone?</label>
';
        $buffer .= $indent . '                        <input type="number" name="persone" class="form-control" value="1">
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
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    <div class="col-md-6 ps-md-4">
';
        $buffer .= $indent . '                        <h6 class="text-danger fw-bold mb-3">Allergie (Senza...)</h6>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="mt-4 pt-3 border-top text-center">
';
        $buffer .= $indent . '                    <button type="submit" class="btn btn-primary btn-lg px-5 shadow">
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
        $buffer .= $indent . '    const addButton = document.getElementById(\'add-row\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    if (addButton) {
';
        $buffer .= $indent . '        addButton.addEventListener(\'click\', function() {
';
        $buffer .= $indent . '            const newRow = document.createElement(\'div\');
';
        $buffer .= $indent . '            // Usiamo classi Bootstrap per spaziatura e allineamento
';
        $buffer .= $indent . '            newRow.className = \'row g-2 mb-3 ingredient-row align-items-center\';
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '            newRow.innerHTML = `
';
        $buffer .= $indent . '                <div class="col-md-7">
';
        $buffer .= $indent . '                    <div class="input-group">
';
        $buffer .= $indent . '                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
';
        $buffer .= $indent . '                        <input type="text" name="ingredienti[]" class="form-control" placeholder="Altro ingrediente...">
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col-md-4">
';
        $buffer .= $indent . '                    <div class="input-group">
';
        $buffer .= $indent . '                        <input type="number" name="quantita[]" class="form-control" placeholder="Quantità">
';
        $buffer .= $indent . '                        <span class="input-group-text">gr/ml</span>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col-md-1 text-end">
';
        $buffer .= $indent . '                    <button type="button" class="btn btn-danger w-100 remove-row">
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
        $buffer .= $indent . '        });
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Gestione rimozione righe
';
        $buffer .= $indent . '    wrapper.addEventListener(\'click\', function(e) {
';
        $buffer .= $indent . '        // Cerca se il click è avvenuto sul tasto o sull\'icona dentro il tasto
';
        $buffer .= $indent . '        if (e.target.closest(\'.remove-row\')) {
';
        $buffer .= $indent . '            const row = e.target.closest(\'.ingredient-row\');
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
