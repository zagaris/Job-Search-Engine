<?php class Template{
    // Path To Template
    protected $template;
    // Vars Passed in
    protected $vars = array();

    /*
     * Class Constructor
     */
    public function __construct($template){
        $this->template = $template;
    }

     /* __get() and __set() are run when writing data to inaccessible properties.
     * Get template variables
     */
    public function __get($key){
        return $this->vars[$key];
    }

    public function __set($key, $value){
        $this->vars[$key] = $value;
    }

     /*
     * Convert Object To String
     */
    public function __toString(){
        
        extract($this->vars);
        //print_r($this->vars );
        //echo getcwd();
        chdir(dirname($this->template));
       // chdir("templates");
        //echo getcwd();
        ob_start();

        include basename($this->template);

        return ob_get_clean();
    }



}