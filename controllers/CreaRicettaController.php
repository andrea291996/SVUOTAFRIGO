<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CreaRicettaController extends Controller{
    
    function crearicetta(Request $request, Response $response, $args) {    
        $page = PageConfigurator::instance()->getPage(); 
        $page->setTitle("Crea Ricetta");
        $page->add("js", new PageElement("js/ricettefiltri"));
        $page->add("content", new PageElement("ricette/crea_ricetta"));
        return $response;
    }

function crearicetta_post(Request $request, Response $response, $args){
        $db = Database::getInstance()->getConnection();
        $dati_ricetta = $request->getParsedBody();
        $id_utente = $_SESSION['utente_id'];
        $titolo = trim($dati_ricetta['nome']); 
        $procedimento = trim($dati_ricetta['procedimento']);
        $tipologia = isset($dati_ricetta['antipasto']) ? 'Antipasto' :
                     (isset($dati_ricetta['primo']) ? 'Primo' :
                     (isset($dati_ricetta['secondo']) ? 'Secondo' :
                     (isset($dati_ricetta['contorno']) ? 'Contorno' :
                     (isset($dati_ricetta['dolce']) ? 'Dolce' : null))));
        $ingredienti = isset($dati_ricetta['ingredienti']) ? $dati_ricetta['ingredienti'] : [];
        $vegetariana = isset($dati_ricetta['vegetariana']) ? 1 : 0;
        $vegana = isset($dati_ricetta['vegana']) ? 1 : 0;
        $dieta_musulmana = isset($dati_ricetta['dieta_musulmana']) ? 1 : 0;
        $dieta_ebraica = isset($dati_ricetta['dieta_ebraica']) ? 1 : 0;
        $senza_glutine = isset($dati_ricetta['senza_glutine']) ? 1 : 0;
        $senza_lattosio = isset($dati_ricetta['senza_lattosio']) ? 1 : 0;
        $senza_crostacei = isset($dati_ricetta['senza_crostacei']) ? 1 : 0;
        $senza_frutta_secca = isset($dati_ricetta['senza_frutta_secca']) ? 1 : 0;
        //var_dump($ingredienti);
        //die();
        $stmt = $db->prepare("SELECT COUNT(*) FROM ricette WHERE titolo = :titolo");
        $stmt->execute([':titolo' => $titolo]);

        if($stmt->fetchColumn() > 0){
            UIMessage::setError("Ricetta con lo stesso nome già presente. Per favore modifica il nome.");
            return $response->withHeader('Location', BASE_PATH.'/crearicetta')->withStatus(302);
        }
        //inserisco la ricetta nella tabella ricette e prendo il suo id
        //sistema gli ingredienti. ne prendo uno, guardo se c'è: se si prendo il suo id, se non c'è lo inserisco e prendo il suo id.
        //gli ingredienti vanno inseriti nella tabella ingredienti con nome e id.
        //poi inserisco nella tabella ricette_ingredienti l'id della ricetta con l'id degli ingredienti
        $sql = "INSERT INTO ricette 
                (titolo, procedimento, tipologia, dieta_musulmana, dieta_ebraica, vegetariana, vegana, senza_glutine, senza_lattosio, senza_crostacei, senza_frutta_secca, id_utente)
                VALUES 
                (:titolo, :procedimento, :tipologia, :dieta_musulmana, :dieta_ebraica, :vegetariana, :vegana, :senza_glutine, :senza_lattosio, :senza_crostacei, :senza_frutta_secca, :id_utente)";

        $stmt = $db->prepare($sql);
        $stmt->execute([
            ':titolo' => $titolo,
            ':procedimento' => $procedimento,
            ':tipologia' => $tipologia,
            ':dieta_musulmana' => $dieta_musulmana,
            ':dieta_ebraica' => $dieta_ebraica,
            ':vegetariana' => $vegetariana,
            ':vegana' => $vegana,
            ':senza_glutine' => $senza_glutine,
            ':senza_lattosio' => $senza_lattosio,
            ':senza_crostacei' => $senza_crostacei,
            ':senza_frutta_secca' => $senza_frutta_secca,
            ':id_utente' => $id_utente
        ]);
        $id_ricetta = $db->lastInsertId();
        //DA CAMBIAREEEEEEEEEEEEEEEEEEE
        foreach($ingredienti as $ing) {
            $stmt = $db->prepare("INSERT INTO ricette_ingredienti (id_ricetta, id_ingrediente) VALUES (:id_ricetta, :id_ingrediente)");
            $stmt->execute([
        ':id_ricetta' => $id_ricetta,
        ':id_ingrediente' => $ing
        ]);
}

        UIMessage::setSuccess("Inserimento ricetta effettuato con successo.");
        return $response->withHeader('Location', BASE_PATH.'/crearicetta')->withStatus(302);  
    }
}
