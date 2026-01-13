<?php

// Singleton >> Design Pattern

class TemplateEngine {
    protected $engine;
    protected static $instance=null; // attributo statico che rimane costante su tutti gli oggetti che nascono da questa classe

    function __construct() {
       $options = ['extension' => TENGINE_TEMPLATE_FILE_EXTENSION];         // estensione nominata da noi, sennò di default dà .mustache
        $this->engine = new \Mustache\Engine([
            'cache'=>TENGINE_CACHE_FOLDER,
            'cache_file_mode'=>TENGINE_CACHE_FILE_MODE,
            'entity_flags' => ENT_QUOTES,
            'loader' => new \Mustache\Loader\FilesystemLoader(TEMPLATES_FOLDER, $options),   // caricamento cartella che segue tale percorso
            'partials_loader' => new \Mustache\Loader\FilesystemLoader(TEMPLATES_FOLDER, $options) // {{> bar}}
        ]);
    }

    function render($template, $data=[]){   
        return $this->engine->render($template, $data);
    }

    static function instance(){   // per gli attributi statici non si usa $this, ma self
        if(!self::$instance)
            self::$instance = new TemplateEngine();
        return self::$instance;
    }
}