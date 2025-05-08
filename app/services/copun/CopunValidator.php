<?php 

namespace App\services\discount\copun;

use App\Models\Copun;
use App\services\discount\copun\validator\CanUseIt;
use App\services\discount\copun\validator\contract\LimitPrice;
use App\services\discount\copun\validator\IsExpired;

class CopunValidator
{
    public function isvalid(Copun $copun)
    {
        $isexpired = resolve(IsExpired::class);
        $canuseit = resolve(CanUseIt::class);
        $limitprice = resolve(LimitPrice::class);
        $isexpired->setnextvalidator($canuseit);
        $canuseit->setnextvalidator($limitprice);
        return $isexpired->validate($copun);

    }
}