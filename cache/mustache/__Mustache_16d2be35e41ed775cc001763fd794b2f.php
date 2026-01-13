<?php

class __Mustache_16d2be35e41ed775cc001763fd794b2f extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="container mt-5" id="contenitore-filtri">
';
        $buffer .= $indent . '    <div class="card shadow border-0 overflow-hidden">
';
        $buffer .= $indent . '        <div class="card-header bg-dark bg-gradient text-white py-3">
';
        $buffer .= $indent . '            <h5 class="mb-0 d-flex align-items-center">
';
        $buffer .= $indent . '                <i class="fas fa-filter me-2 text-info"></i>Crea la tua ricetta
';
        $buffer .= $indent . '            </h5>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        <div class="card-body p-4 bg-light">
';
        $buffer .= $indent . '            <form action="/SVUOTAFRIGO/ricette" method="POST">
';
        $buffer .= $indent . '                
';
        $buffer .= $indent . '                <div class="row mb-5">
';
        $buffer .= $indent . '                    <div class="col-12">
';
        $buffer .= $indent . '                        <label class="form-label fw-bold fs-5 mb-3">
';
        $buffer .= $indent . '                            <i class="fas fa-refrigerator me-2 text-primary"></i>Quali ingredienti servono?
';
        $buffer .= $indent . '                        </label>
';
        $buffer .= $indent . '                        
';
        $buffer .= $indent . '                        <div class="row g-2 align-items-center">
';
        $buffer .= $indent . '                            <div class="col-md-9">
';
        $buffer .= $indent . '                                <div class="input-group input-group-lg shadow-sm">
';
        $buffer .= $indent . '                                    <span class="input-group-text bg-white border-end-0">
';
        $buffer .= $indent . '                                        <i class="fas fa-mortar-pestle text-muted"></i>
';
        $buffer .= $indent . '                                    </span>
';
        $buffer .= $indent . '                                    <input type="text" id="input-ingrediente-nuovo" class="form-control border-start-0" placeholder="es. Zucchine, Farina, Uova...">
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="col-md-3">
';
        $buffer .= $indent . '                                <button type="button" id="btn-aggiungi-ingrediente" class="btn btn-primary btn-lg w-100 shadow-sm">
';
        $buffer .= $indent . '                                    <i class="fas fa-plus-circle me-1"></i> Aggiungi
';
        $buffer .= $indent . '                                </button>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        <div id="lista-ingredienti-confermati" class="mt-3 d-flex flex-wrap gap-2">
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="row g-4">
';
        $buffer .= $indent . '                    <div class="col-md-4">
';
        $buffer .= $indent . '                        <div class="p-3 bg-white rounded shadow-sm h-100">
';
        $buffer .= $indent . '                            <h6 class="text-primary fw-bold mb-3 border-bottom pb-2">
';
        $buffer .= $indent . '                                <i class="fas fa-concierge-bell me-2"></i>Portata
';
        $buffer .= $indent . '                            </h6>
';
        $buffer .= $indent . '                            <div class="form-check mb-2 custom-check">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="antipasto" id="antipasto">
';
        $buffer .= $indent . '                                <label class="form-check-label" for="antipasto">Antipasto</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="form-check mb-2 custom-check">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="primo" id="primo">
';
        $buffer .= $indent . '                                <label class="form-check-label" for="primo">Primo</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="form-check mb-2 custom-check">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="secondo" id="secondo">
';
        $buffer .= $indent . '                                <label class="form-check-label" for="secondo">Secondo</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="form-check mb-2 custom-check">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="contorno" id="contorno">
';
        $buffer .= $indent . '                                <label class="form-check-label" for="contorno">Contorno</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="form-check mb-2 custom-check">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="dolce" id="dolce">
';
        $buffer .= $indent . '                                <label class="form-check-label" for="dolce">Dolce</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="col-md-4">
';
        $buffer .= $indent . '                        <div class="p-3 bg-white rounded shadow-sm h-100">
';
        $buffer .= $indent . '                            <h6 class="text-success fw-bold mb-3 border-bottom pb-2">
';
        $buffer .= $indent . '                                <i class="fas fa-leaf me-2"></i>Stile di Vita
';
        $buffer .= $indent . '                            </h6>
';
        $buffer .= $indent . '                            <div class="form-check mb-2">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="vegetariana" id="veg">
';
        $buffer .= $indent . '                                <label class="form-check-label" for="veg">Vegetariana</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="form-check mb-2">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="vegana" id="vegan">
';
        $buffer .= $indent . '                                <label class="form-check-label" for="vegan">Vegana</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="form-check mb-2 border-top mt-2 pt-2">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="dieta_musulmana" id="halal">
';
        $buffer .= $indent . '                                <label class="form-check-label" for="halal text-muted">Halal</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="form-check mb-2">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="dieta_ebraica" id="kosher">
';
        $buffer .= $indent . '                                <label class="form-check-label" for="kosher text-muted">Kosher</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="col-md-4">
';
        $buffer .= $indent . '                        <div class="p-3 bg-white rounded shadow-sm h-100 border-start border-danger border-3">
';
        $buffer .= $indent . '                            <h6 class="text-danger fw-bold mb-3 border-bottom pb-2">
';
        $buffer .= $indent . '                                <i class="fas fa-exclamation-triangle me-2"></i>Intolleranze
';
        $buffer .= $indent . '                            </h6>
';
        $buffer .= $indent . '                            <div class="form-check mb-2">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="senza_glutine" id="glu">
';
        $buffer .= $indent . '                                <label class="form-check-label" for="glu">Senza Glutine</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="form-check mb-2">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="senza_lattosio" id="lat">
';
        $buffer .= $indent . '                                <label class="form-check-label" for="lat">Senza Lattosio</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="form-check mb-2">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="senza_crostacei" id="cro">
';
        $buffer .= $indent . '                                <label class="form-check-label" for="cro">Senza Crostacei</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="form-check mb-2">
';
        $buffer .= $indent . '                                <input class="form-check-input" type="checkbox" name="senza_frutta_secca" id="fru">
';
        $buffer .= $indent . '                                <label class="form-check-label" for="fru">Senza Frutta Secca</label>
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
        $buffer .= $indent . '                <div class="mb-4">
';
        $buffer .= $indent . '                    <label class="form-label fw-bold fs-5">
';
        $buffer .= $indent . '                    <i class="fas fa-tag me-2 text-primary"></i>Titolo della ricetta
';
        $buffer .= $indent . '                    </label>
';
        $buffer .= $indent . '                    <input type="text" name="nome" class="form-control form-control-lg shadow-sm" placeholder="Es. Pasta al Pomodoro" required>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="mb-4 mt-4">
';
        $buffer .= $indent . '                    <label class="form-label fw-bold fs-5">
';
        $buffer .= $indent . '                        <i class="fas fa-scroll me-2 text-warning"></i>Procedimento
';
        $buffer .= $indent . '                    </label>
';
        $buffer .= $indent . '                    <textarea name="procedimento" class="form-control form-control-lg shadow-sm" rows="6" placeholder="Scrivi qui i passaggi della ricetta..." required></textarea>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="mt-5 pt-3 border-top text-center">
';
        $buffer .= $indent . '                    <button type="submit" class="btn btn-dark btn-lg px-5 py-3 rounded-pill shadow">
';
        $buffer .= $indent . '                        <i class="fas fa-search-location me-2"></i>Inserisci la tua ricetta
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
