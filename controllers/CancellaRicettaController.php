<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CancellaRicettaController extends Controller{

    function cancella(Request $request, Response $response, $args){
    $data = $request->getParsedBody();
    $idRicetta = $data['id_ricetta'] ?? null;

    if ($idRicetta) {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("DELETE FROM ricette WHERE id = ?");
        $stmt->execute([$idRicetta]);
        UIMessage::setSuccess("Ricetta eliminata correttamente.");
    }
    return $response->withHeader('Location', BASE_PATH . '/lemiericette')->withStatus(302);
}
}

