<?php

class Animal {

    protected function Deplacement()
    {
        return "Je me déplace";
    }
    public function mange()
    {
        return "Je mange chaque jour";
    }
}

class Elephant extends Animal 
{
    public function quiSuisje()
    {
        return "Je suis un Elephant et ".$this->Deplacement();
    }
}

class Chat extends Animal 
{

    public function quiSuisJe()
    {
        return "Je suis un Chat";
    }

    public function mange()
    {
        return "je mange comme un chat";
    }
}

$elephant = new Elephant;

echo $elephant->mange();
echo "\n";
echo $elephant->quiSuisJe();
echo "\n";

$chat = new chat;

echo $chat->mange();
echo "\n";
echo $chat->quiSuisJe();
echo "\n";

