<?php

class StringUtils{
  public static function secondCase($name){
    if(strlen($name)===1){
      return strtolower($name);
    }
    elseif(strlen($name)===0){
      return "";
    }
    else{
    $name = strtolower($name);
    $name[1] = strtoUpper($name[1]);
    return $name;
    }
  }
}

class Pajamas{
  private $owner, $fit, $color;
  function __construct(
    $owner = "JaneDoe",
    $fit = "fine",
    $color = "red"){
    $this->owner = StringUtils::secondCase($owner);
    $this->fit = $fit;
    $this->color = $color;
  }

  public function describe(){
    return "$this->owner's $this->color pajamas fit $this->fit.";
  }

  public function setFit($fit){
    $this->fit = $fit;
  }
}

class ButtonablePajamas extends Pajamas{
    private $button_state = "unbuttoned";

    public function describe(){
       return parent::describe() . " They also have buttons which are currently $this->button_state.";
    }

    public function toggleButtons(){
      if($this->button_state = "unbuttoned"){
        $this->button_state = "buttoned";
      }
      else{
        $this->button_state = "unbuttoned";
      }
    }
}

$chicken_PJs = new Pajamas("CHICKEN","comfortable","blue");
$chicken_PJs->setfit("tight");
echo $chicken_PJs->describe()."\n";
$moose_PJs = new ButtonablePajamas("moose");
echo $moose_PJs->describe()."\n";
$moose_PJs->toggleButtons();
echo $moose_PJs->describe();