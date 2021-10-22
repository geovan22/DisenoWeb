<?php
	class user
    {
        private $estado;
        private $u;
        
        public function __construct()
        {
            $this->estado=0;
            
            $this->u=array(
                ["User"=>"Ana","Pass"=>123],
                ["User"=>"Pilar","Pass"=>321],
                ["User"=>"Andrea","Pass"=>654],
                ["User"=>"Renato","Pass"=>456],
                ["User"=>"Pilar","Pass"=>321]
            );
        }
        
        
        
        
        public function BuscarUsuario($u, $p)
        {
            
            foreach($this->u as $user)
            {
                if($user['User']==$u && $user['Pass']==$p)
                {
                    $this->estado++;
                }
            }
            
            return $this->estado;
        }
    }
?>