<?php

class Format{
    public function textShorten($text,$limit = 400){
        $text = $text. " ";
        $text = substr($text,0,$limit);
        $text = substr($text,0,strrpos($text,' '));
        $text=$text.".....";
        return $text;

    }
    public function validation($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

public function  title(){
    $path = $_SERVER['SCRIPT_FILENAME'];
    $title=basename($path,'.php');   //php r sathe file ta  add korba
   //$title=str_replace('_',' ',$title)   jokhon underscore thakba tokhon replace korta hoi
    if($title=='animallover'){
        $title='home';
    }elseif($title=='contact'){
        $title='contact';
    }elseif($title=='about'){
        $title='about';
    }elseif($title=='gallery'){
        $title='gallery';
    }elseif($title=='blog'){
        $title='blog';
    
}
 return  $title=ucfirst($title);
}
}

?>
