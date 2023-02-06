<?php
    class Reponse{
        private $_data;
        private $_exception;

        public function getData(){
            return $this->_data;
        }
        public function isDataFound(){
            return ($this->_data!=false);
        }
        public function isSuccessfull(){
            return($this->_exception==null);
        }
        public function getException(){
            return $this->_exception;
        }
        public function __construct($pData=false,$pException=NULL){
            $this->_data=$pData;
            $this->_exception=$pException;
        }
    }
?>