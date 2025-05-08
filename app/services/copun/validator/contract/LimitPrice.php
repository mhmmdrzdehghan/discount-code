<?php 

namespace App\services\discount\copun\validator\contract;

use App\Models\Copun;
use App\services\cart\Basket;

class LimitPrice extends AbstractCopunValidator
{

    Private $basket;
    public function __construct(Basket $basket) {
        $this->basket = $basket;
    }

    public function validate(Copun $copun)
    {
        if($this->basket->total_price() < $copun->limit)
        {
            return ['success'=>false , 'message'=>"قیمت سبد خرید حداقل باید {$copun->limit} باشد"];
        }

        return parent::validate($copun);
    }
}