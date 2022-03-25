<?php
      class Recusive {
        private $data;
        private $recusion = '';
        public function __construct($data){ 
            $this->data = $data;
        }
        
        public function categories($prend_id,$id=0,$text='-'){
            foreach($this->data as $value){
                if ($value['parent_id']==$id) {
                    if ( !empty($prend_id) && $prend_id == $value['id']) {
                        $this->recusion .= "<option selected value='" .$value['id']. "'>".$text.$value['name']."</option >";   
                    }else{
                        $this->recusion .= "<option value='" .$value['id']. "'>".$text.$value['name']."</option >";   
                    }
                    $this->categories($prend_id,$value['id'],$text.'-');
                }
            }
            return $this->recusion;
        }
    }