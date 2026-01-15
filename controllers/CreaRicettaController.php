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
        $titolo = ucfirst(strtolower($titolo));
        if(empty($titolo)){
            UIMessage::setError("Il titolo non può essere vuoto dai!");
            return $response->withHeader('Location', BASE_PATH.'/crearicetta')->withStatus(302);
        }
        $procedimento = trim($dati_ricetta['procedimento']);
        if(empty(trim($procedimento))){
            UIMessage::setError("Il procedimento non può essere vuoto.");
            return $response->withHeader('Location', BASE_PATH.'/crearicetta')->withStatus(302);
        }
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
        $stmt = $db->prepare("SELECT COUNT(*) FROM ricette WHERE titolo = :titolo");
        $stmt->execute([':titolo' => $titolo]);
        if($stmt->fetchColumn() > 0){
            UIMessage::setError("Ricetta con lo stesso nome già presente. Per favore modifica il nome.");
            return $response->withHeader('Location', BASE_PATH.'/crearicetta')->withStatus(302);
        }
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
        $ingredienti = array_map('trim', $ingredienti); // rimuovi spazi
        $ingredienti = array_filter($ingredienti, fn($i) => !empty($i)); // rimuovi vuoti
        $ingredienti = array_map(fn($i) => ucfirst(strtolower($i)), $ingredienti); // normalizza
        $ingredienti = array_unique($ingredienti); // rimuovi duplicati
        foreach($ingredienti as $ing) {
                $ing = trim($ing);
                if(empty($ing)) continue; 
                $ing = ucfirst(strtolower($ing)); 
                $stmt = $db->prepare("SELECT id FROM ingredienti WHERE nome = :nome");
                $stmt->execute([':nome' => $ing]);
                $id_ingrediente = $stmt->fetchColumn();
                if(!$id_ingrediente){
                    $stmt = $db->prepare("INSERT INTO ingredienti (nome) VALUES (:nome)");
                    $stmt->execute([':nome' => $ing]);
                    $id_ingrediente = $db->lastInsertId();
                }

                $stmt = $db->prepare("INSERT INTO ricette_ingredienti (id_ricetta, id_ingrediente) VALUES (:id_ricetta, :id_ingrediente)");
                $stmt->execute([
                    ':id_ricetta' => $id_ricetta,
                    ':id_ingrediente' => $id_ingrediente
                ]);
            }
        UIMessage::setSuccess("Inserimento ricetta effettuato con successo.");
        return $response->withHeader('Location', BASE_PATH.'/crearicetta')->withStatus(302);  
    }
}
