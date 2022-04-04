<?php
require_once $conf->_ROOT_PATH.'/lib/smarty/Smarty.class.php';
require_once $conf->_ROOT_PATH.'/lib/Messages.class.php';
require_once $conf->_ROOT_PATH.'/app/calc/calc_form.php';
require_once $conf->_ROOT_PATH.'/app/calc/calc_result.php';

class calc_ctrl {

	private $mess;
	private $form; 
	private $wynik; 

	public function __construct(){
		$this->mess = new Messages();
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
                $this->mess->addError('Druga wartość nie jest liczbą całkowitą');
            }
        } else $this->mess->addError('Pierwsza wartość nie jest liczbą całkowitą');
    } else $this->mess->addError('');
    
    if($this->mess->numofErrors() == 0) return true;
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
        global $conf;
        $smarty = new Smarty();
        $smarty->assign('conf',$conf);

        $smarty->assign('page_title','Kalkulator pól figur');
        $smarty->assign('page_description','Kalkulator z szablonem, smarty, obiektowy <br> i front controller');
        $smarty->assign('page_header','Kaja Nowicka PAW1');


        $smarty->assign('form', $this->form);
        $smarty->assign('wynik',$this->wynik->wynik);
        $smarty->assign('mess',$this->mess->getErrors());  

        $smarty->display($conf->_ROOT_PATH.'/app/calc/calc_view.php');
    }


} 

        


