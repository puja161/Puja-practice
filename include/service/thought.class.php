<?php

class Thought_Service_Thought extends Phpfox_Service  
{ 
    public function getData($iTotal) 
    { 
        return $this->database()->select('*') 
            ->from(Phpfox::getT('thought'), 't') 
            ->limit($iTotal) 
            ->execute('getRows'); 
    } 
	
	
} 
?>