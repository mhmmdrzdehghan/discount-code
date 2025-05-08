<?php

namespace App\Http\Controllers;

use App\Models\Copun;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\services\discount\DiscountManager;
use App\services\discount\copun\CopunValidator;

class DiscountController extends Controller
{

    private $request;
    private $copunValidator;
    private $discountManager;

    public function __construct(Request $request ,CopunValidator $copunValidator , DiscountManager $discountManager) {
        $this->request = $request;
        $this->copunValidator = $copunValidator;
        $this->discountManager = $discountManager;



    }

    public function checkcopun()
    {

        if($this->validation()->fails())
        {
            return['success'=>false , 'message'=>$this->validation()->errors()];
        }

        $copun  = Copun::where('copun' , $this->request->copun)->first();
        $result =  $this->copunValidator->isvalid($copun);
        return response()->json($result);
    }

    public function validation()
    {
        $validation = Validator::make($this->request->all() , ['copun'=>'exists:copuns,copun']);
        return $validation;
    }

    public function docalculateuser()
    {
        $copun  = Copun::where('copun' , $this->request->copun)->first();
        return response()->json(['total' => $this->discountManager->calculate($copun)]);
    }

    public function docalculatcategory()
    {
        $copun  = Copun::where('copun' , $this->request->copun)->first();
        return response()->json(['total' => $this->discountManager->calculatecategory($copun)]);
        
    }



}
