<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CreaRicettaController extends Controller{
    
    //get
    //carica la pagina, template di crearicetta, js di ricettefiltri
    function crearicetta(Request $request, Response $response, $args) {    
        $page = PageConfigurator::instance()->getPage(); 
        $page->setTitle("Crea Ricetta");
        $page->add("js", new PageElement("js/ricettefiltri"));
        $page->add("content", new PageElement("ricette/crea_ricetta"));
        return $response;
    }

    //post
    function crearicetta_post(Request $request, Response $response, $args){
        //connessione al db
        $db = Database::getInstance()->getConnection();
        //prendo i dati scritti dall'utente
        $dati_ricetta = $request->getParsedBody();
        //riconosco l'utente 
        $id_utente = $_SESSION['utente_id'];
        //sistemo il titolo: no spazi, prima lettera maiuscola anche se l'utente lo ha scritto male
        $titolo = trim($dati_ricetta['nome']); 
        $titolo = ucfirst(strtolower($titolo));
        //il titolo non deve mai essere vuoto
        if(empty($titolo)){
            UIMessage::setError("Il titolo non può essere vuoto dai!");
            return $response->withHeader('Location', BASE_PATH.'/crearicetta')->withStatus(302);
        }
        //sistemo il procedimento: no spazi
        $procedimento = trim($dati_ricetta['procedimento']);
        //il procedimento non deve mai essere vuoto
        if(empty(trim($procedimento))){
            UIMessage::setError("Il procedimento non può essere vuoto.");
            return $response->withHeader('Location', BASE_PATH.'/crearicetta')->withStatus(302);
        }
        //tipologie
        $tipologia = isset($dati_ricetta['antipasto']) ? 'Antipasto' :
                     (isset($dati_ricetta['primo']) ? 'Primo' :
                     (isset($dati_ricetta['secondo']) ? 'Secondo' :
                     (isset($dati_ricetta['contorno']) ? 'Contorno' :
                     (isset($dati_ricetta['dolce']) ? 'Dolce' : null))));
        //ingredienti
        $ingredienti = isset($dati_ricetta['ingredienti']) ? $dati_ricetta['ingredienti'] : [];
        //diete
        $vegetariana = isset($dati_ricetta['vegetariana']) ? 1 : 0;
        $vegana = isset($dati_ricetta['vegana']) ? 1 : 0;
        $dieta_musulmana = isset($dati_ricetta['dieta_musulmana']) ? 1 : 0;
        $dieta_ebraica = isset($dati_ricetta['dieta_ebraica']) ? 1 : 0;
        //allergie
        $senza_glutine = isset($dati_ricetta['senza_glutine']) ? 1 : 0;
        $senza_lattosio = isset($dati_ricetta['senza_lattosio']) ? 1 : 0;
        $senza_crostacei = isset($dati_ricetta['senza_crostacei']) ? 1 : 0;
        $senza_frutta_secca = isset($dati_ricetta['senza_frutta_secca']) ? 1 : 0;
        //controllo che non esista già una ricetta con lo stesso nome e gestito l'eventuale errore con un messaggio all'utente
        $stmt = $db->prepare("SELECT COUNT(*) FROM ricette WHERE titolo = :titolo");
        $stmt->execute([':titolo' => $titolo]);
        if($stmt->fetchColumn() > 0){
            UIMessage::setError("Ricetta con lo stesso nome già presente. Per favore modifica il nome.");
            return $response->withHeader('Location', BASE_PATH.'/crearicetta')->withStatus(302);
        }
        //creazione query sql
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
        //crea nuovo id per la ricetta
        $id_ricetta = $db->lastInsertId();
        //sistemo gli ingredienti: no spazi vuoti, prima lettera maiuscola, no duplicati
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
                    //invio ingrediente
                    $stmt = $db->prepare("INSERT INTO ingredienti (nome) VALUES (:nome)");
                    $stmt->execute([':nome' => $ing]);
                    //prendo id ingrediente appena inviato
                    $id_ingrediente = $db->lastInsertId();
                }
                //invio id ingrediente e id ricetta 
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
