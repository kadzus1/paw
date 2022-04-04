<?php
require_once 'calc_form.php';
require_once 'calc_result.php';

class calc_ctrl {

	private $form; 
	private $wynik; 

	public function __construct(){
		$this->form = new calc_form();
		$this->wynik = new calc_result();
                
	}
        
       

public function getParams(){
		if(isset($_REQUEST['x'])) $this->form->x = $_REQUEST['x'];
                if(isset($_REQUEST['y'])) $this->form->y = $_REQUEST['y'];
                if(isset($_REQUEST['operacja'])) $this->form->op = $_REQUEST['operacja'];
                
                
	}

     
public function spr(){

    if(!is_null($this->form->x) && !is_null($this->form->y) && !is_null($this->form->op)) {
        if(is_numeric ($this->form->x)) {
            if(!is_numeric ($this->form->y)) {
                getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
            }
        } else getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
    } else getMessages()->addError('');
    
    if(getMessages()->numofErrors() == 0) return true;
    else return false;
}
    
    
    
    
    public function process(){
        $this->getParams();
        
        
        if($this->spr()){
            if($this->form->op=='kwadrat') $this->wynik->wynik=$this->form->x*$this->form->x;
            elseif ($this->form->op=='prostokat') $this->wynik->wynik=$this->form->x*$this->form->y;
            else $this->wynik->wynik=$this->form->x*$this->form->y;

        }
        $this->widok();
    }
    
  


    public function widok(){

        getSmarty()->assign('page_title','Kalkulator pól figur');
        getSmarty()->assign('page_description','Kalkulator z szablonem, smarty, obiektowy <br> i front controller');
        getSmarty()->assign('page_header','Kaja Nowicka PAW1');


        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('wynik',$this->wynik->wynik); 

        getSmarty()->display('calc_view.php');
    }


} 

        


