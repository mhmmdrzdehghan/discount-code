<?php 

namespace App\services\discount\copun\validator\contract;

use App\Models\Copun;

abstract class AbstractCopunValidator implements copunvalidatorinterfae
{
    private $nextvalidator;
    public function setnextvalidator(copunvalidatorinterfae $validator)
    {
        $this->nextvalidator = $validator;
    }

    public function validate(Copun $copun)
    {
        if($this->nextvalidator == null)
        {
            return true;
        }

        return $this->nextvalidator->validate($copun);
    }
}