<?php

class stage
{
    private $commentaire_stage;
    private $note_stage;
    
    public function stage($commentairestage, $notestage) //constructeur
    {
        $this->commentaire_stage = $commentairestage;
        $this->note_stage  = $notestage;
       
    }
    
    
    public function get_commentaire_stage()
    {
        return $this->commentairestage;
    }
    
    public function get_note_stage()
    {
        return $this->notestage;
    }
    
    public function set_commentaire_stage($commentairestage)
    {
        $this->commentaire_stage = $commentairestage;
    }
    
    public function set_note_stage($notestage)
    {
        $this->note_stage = $notestage;
    }
 
}

?>
