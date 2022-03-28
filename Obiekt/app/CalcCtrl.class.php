<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {

	private $msgs;  
	private $form;  
	private $result; 
	private $hide_intro; 

	public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}
	

	public function getParams(){
		$this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
		$this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
		$this->form->operacja = isset($_REQUEST ['operacja']) ? $_REQUEST ['operacja'] : null;
	}

	public function validate() {
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->operacja ))) {
			return false; 
		} else { 
			$this->hide_intro = true;
		}
		
		if ($this->form->x == "") {
			$this->msgs->addError('Nie podano pierwszej liczby');
		}
		if ($this->form->y == "") {
			$this->msgs->addError('Nie podano drugiej liczby');
		}
		
		if (! $this->msgs->isError()) {
			
			if (! is_numeric ( $this->form->x )) {
				$this->msgs->addError('Pierwsza liczba nie jest całkowita');
			}
			
			if (! is_numeric ( $this->form->y )) {
				$this->msgs->addError('Druga liczba nie jest całkowita');
			}
		}
		
		return ! $this->msgs->isError();
	}

	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
			$this->msgs->addInfo('Parametry zostały poprawnie ustawione.');
				
			//wykonanie operacji
			switch ($this->form->operacja) {
				case 'minus' :
					$this->result->result = $this->form->x - $this->form->y;
					
					break;
				case 'razy' :
					$this->result->result = $this->form->x * $this->form->y;
				
					break;
				case 'przez' :
					$this->result->result = $this->form->x / $this->form->y;
					
					break;
				default :
					$this->result->result = $this->form->x + $this->form->y;
					
					break;
			}
			
			$this->msgs->addInfo('Obliczenia zostały wykonane pomyślnie.');
		}
		
		$this->generateView();
	}

	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Obiektowość');
		$smarty->assign('page_description','Kaja Nowicka PAW1');
		
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/CalcView.html');
	}
}
