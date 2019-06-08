<?PHP

class StringModifier {

    public function modifyString($string){
        
        $symbols = array("'");
        $formattedTitle = str_replace($symbols, "", $string);
        return $formattedTitle;

    }

}

?>