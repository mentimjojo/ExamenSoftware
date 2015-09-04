<?php
// Theme load class
class Themeload {

    public function loadTheme(){
        // Requiere theme
        require_once("../".GLOBAL_PATH."/".GLOBAL_THEME."/index.php");
    }

    public function loadPageSystem(){

    }
}
?>