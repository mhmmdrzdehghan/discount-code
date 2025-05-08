<?php 

namespace App\services\discount\copun\validator;

use App\Models\Copun;
use App\services\discount\copun\validator\contract\AbstractCopunValidator;

class CanUseIt extends AbstractCopunValidator
{
    public function validate(Copun $copun)
    {
        // if(!auth()->user()->copuns->contains($copun))
        // {
        //     return['success'=>false , 'message'=>'شما نمیتوانید از این کد تخفیف استفاده کنید'];

        // }

        dd(auth('sanctum')->id());
        return parent::validate($copun);
    }
}