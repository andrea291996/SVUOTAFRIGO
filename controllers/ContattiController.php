<?php 

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ContattiController extends Controller {
    
    //get
    public function index(Request $request, Response $response, $args){
        $page = PageConfigurator::instance()->getPage(); 
        $page->setTitle("Contatti");
        $page->add("content", new ContattiView());
        return $response;
    }

    //post
    public function contatti_post(Request $request, Response $response, $args){
        $data = $request->getParsedBody();
        $email = $data["email"];
        $message = $data["message"];

        //validazione email
        if(empty($email) || empty($message)){
            UIMessage::setError("Email e/o il messaggio sono vuori");
            return $response->withHeader("Location", "./assistenza")->withStatus(302);
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           UIMessage::setError("Non è una email valida");
            return $response->withHeader("Location", "./assistenza")->withStatus(302);
        }

        //crea il file di contatti
        $file = getcwd()."/messages/contatti.json"; 
        $data = [];

        if(file_exists($file)){ 
            $messages = file_get_contents($file); 
            $data = json_decode($messages, true); 
        }

        //scrive sul file
        $curDate = date("Y-m-d H:i:s");
        $newdata = ['email' => $email, 'message' => $message, 'date' => $curDate];
        array_push($data, $newdata); 
        $contact = json_encode($data); 
        file_put_contents($file, $contact); 
        UIMessage::setSuccess("Il tuo messaggio è stato preso in consegna!!!");
        return $response->withHeader("Location", "./assistenza")->withStatus(302);
    }
    
}