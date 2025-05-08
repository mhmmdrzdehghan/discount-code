<?php 

namespace App\services\discount;

use App\Models\Cart;
use App\Models\Copun;
use App\Models\Category;
use Illuminate\Http\Request;
use App\services\cart\Basket;

class DiscountManager
{
    private $basket;
    private $request;


    public function __construct(Basket $basket , Request $request) {
        $this->basket = $basket;
        $this->request = $request;
    }

    public function calculate($copun)
    {
        return  $this->basket->total_price() * ($copun->percent /100);
    }


    public function calculatecategory($copun)
    {
        $user = auth()->user();
        $items = Cart::with('product')->where('user_id' , $user->id)->get();
        if ($copun->copunable_type === Category::class) {
            foreach ($items as $item) {
                if ($item->category_id == $copun->copunable_id) {
                    $total = $item->price * ($copun->percent /100);
                }
            }
        }

        return $total;
    }
    
}