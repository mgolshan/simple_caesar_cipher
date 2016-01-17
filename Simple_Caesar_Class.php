<?php
/* Simple_Caesar_Class.php
* Encodes a string into simple Caesar cipher and decodes in the same way
* 
* Author: Mojtaba Golshan
* License: GPL v2
*/

class Simple_Caesar_Class{
	public $shift = 3;
	public $string = '';
	public $cipher = '';

	/**
	* Encodes a string into Caesar cipher
	* @return string
	*/
	public function encode(){
		$cipher = $this->string;
		$length = strlen( $cipher );
	    
	    //Checks if there is no string, does nothing.
	    if( $length>0 ){

	        //Makes sure that shift is an integer
	        $shift = intval( $this->shift );
	        if( empty( $shift ) ){
	            $shift = 0;
	    	}
	            
	        $cipher = substr( $cipher , $shift ) . substr( $cipher , 0 , $shift );
	        
	    }

	    $this->cipher = $cipher;
        return $cipher;
	}


	/**
	* Decodes a Caesar cipher into the original string
	* @return string
	*/
	public function decode(){
		$string = $this->cipher;
		$length = strlen( $string );

	    //Checks if there is no string, does nothing.
	    if( $length>0 ){

	        //Makes sure that shift is an integer
	        $shift = -1 * intval( $this->shift );
	        if( empty( $shift ) ){
	            $shift = 0;
	    	}
	            
	        $string = substr( $string , $shift ) . substr( $string , 0 , $shift );
	        
	    }

	    $this->string = $string;
        return $string;
	}


}

?>