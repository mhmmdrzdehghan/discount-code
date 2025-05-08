<?php 

namespace App\services\discount\copun\validator\contract;

use App\Models\Copun;

interface copunvalidatorinterfae
{
    public function setnextvalidator(copunvalidatorinterfae $validator);
    public function validate(Copun $copun);    
}