<?php


namespace App\Services;


class Master
{

    public $transform;

    public function __construct( Capitalize $Capitalize,Dash $Dasher)
    {
        if(isset($_POST['submit'])){

            if($_POST['type']== 'Capitalize'){
            //if user wants to capitalize
            return $this->transform = $Capitalize->Transform($_POST['string']);
            }elseif($_POST['type']=='Dasher'){
            //if user wants to dash
            return $this->transform = $Dasher->Transform($_POST['string']);
            }else{
                return $this->transform = 'please chose an option';
            }

        }
    }

}