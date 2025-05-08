<?php 

namespace App\services\discount\copun\validator;

use App\Models\Copun;
use App\services\discount\copun\validator\contract\AbstractCopunValidator;
use App\services\discount\copun\validator\contract\copunvalidatorinterfae;

class IsExpired extends AbstractCopunValidator
{
    public function validate(Copun $copun)
    {
        if($copun->isexpired())
        {
            return [ 'success'=>false , 'message'=>'زمان اسفقاده شدن از کد تخفیف به پایان رسیده است'];
        }

        return parent::validate($copun);
        
    }

}