<?php
    include_once "/utilities/config.php";
    function nombre_calc(){
        return $value_calc = array(7,8,9,'-',4,5,6,'+',1,2,3,'*','.',0, '=', '/');
    }
    
    function affiche_calc(){
        $length = count(nombre_calc());
        $value_calcul = nombre_calc();
        $index=0;
        $caracter = "";
        while($index<$length){
            $caracter.= "<div class='pave_calc mb-2'>";
                for($k=0; $k<4; $k++){ 
                   $caracter.= input_format($value_calcul[$index], "button", $value_calcul[$index], "btn btn-secondary button-calc", $value_calcul[$index]);
                    $index+=1;
                }
            $caracter.= "</div>";
        }
        return $caracter;
    }
    
    function input_label_texte($class1, $class2, $class3, $id, $name, $value, $type, $liste){
        return <<<HTML
             <div class="$class1">
                <div class="$class2">
                    <span class="$class3" id="$id">$value</span>
                    <input type="$type" class="form-control" list="$liste">
            </div>
        </div>
HTML;
    }
    
    function data_liste($id, $options){
        $liste="";
        foreach($options as $option){
           $liste .= "<option value=". $option .">" .$option."</option>";
        }
        return <<<LISTE
            <datalist id="$id">
               $liste
            </datalist>
LISTE;
    }
    
    function input_format($nom, $type, $value, $classe, $id){
        return <<<HTML
            <input type='$type' name='$nom' value='$value' class='$classe' id="$id"/>
HTML;
    }
    function nav_item_menu($class, $texte){
        return <<<MENU
            <li class="$class">$texte</li>
MENU;
    }
?>