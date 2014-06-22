<?php
class Validate {
	private $_passed = false,
			$_errors = array(),
			$_db	 = null;


public function __construct() {
	$this->_db = DB::getInstance();
}

public function check($source, $items = array()) {
	foreach($items as $item => $rules) {
		foreach($rules as $rule => $rule_value) {

			
			if($source == $_FILES){
				$value = $source[$item]['name'];
			}else {
				$value = $source[$item];
			}
			
			$item = escape($item);

			if($rule == 'required' && empty($value)) {
				$this->addError("{$rules['nama']} is required");
			} else if(!empty($value)) {
				switch ($rule) {
					case 'min':
						if(strlen($value) < $rule_value) {
							$this->addError("{$item} tidak boleh kurang dari {$rule_value} karakter.");
						}
						break;
					case 'max':
						if(strlen($value) > $rule_value) {
							$this->addError("{$item} tidak boleh lebih dari {$rule_value} karakter.");
						}
						break;
					case 'matches':
						if($value != $source[$rule_value]) {
							$this->addError("{$rule_value} tidak cocok");
						}
						break;
					case 'unique':
						$check = $this->_db->get($rule_value, array($item,'=',$value));
						if($check->count()) {
							$this->addError("{$item} sudah ada");
						}
						break;
					case 'preg':
						if(preg_match($rule_value,$value) == false){
						$this->addError("{$item} hanya angka yang di perbolehkan");
						}
						break;
					case 'allowed':
						$file_name = $_FILES[$item]['name'];
						$file_extn = explode('.', $file_name);
						$extn = strtolower(end($file_extn));

						if(in_array($extn, $rule_value) === false){
							$this->addError('Extensi photo harus : ' . implode(' , ', $rule_value) . '.');
						}
						break;
				}
			}
		}
	}

	if(empty($this->_errors)) {
		$this->_passed = true;
	}

	return $this;
}

private function addError($error) {
	$this->_errors[] = $error;
}

public function errors() {
	return $this->_errors;
}

public function passed() {
	return $this->_passed;
}

}