<?php

namespace App\Http\Controllers;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Session\Store;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests\SearchRequest;
use Illuminate\Auth\Access\Gate; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Crypt;

class FrontController extends Controller
{
    private function escape_like(string $value, string $char = '\\'): string
    {
        return str_replace(
            [$char, '%', '_'],
            [$char.$char, $char.'%', $char.'_'],
            $value
        );
    }

    public function welcome()
    {
        $Darsadi_SudGir=DB::table('Darsadi_SudGir')->get();
        return view('welcome',[
            'Darsadi_SudGir' => $Darsadi_SudGir,     
        ]);
    }
    
    public function GetRaftarStock()
    {
        $Raftar_Stock=DB::table('Raftar_Stock')->get();
        $Smart_Darsadi=DB::table('Smart_Darsadi')->get();
        $Raftar_Darsadi_Tajmiei=DB::table('Raftar_Darsadi_Tajmiei')->get();
        
        //$show_tajmiei = new show_tajmiei();
        //foreach( $Raftar_Darsadi_Tajmiei as $post){
        //  $show_tajmiei['stock_name']= $post['stock_name'];
          //  $show_tajmiei['first_shamsi']= $post['first_shamsi'];
            //$show_tajmiei['last_shamsi']= $post['last_shamsi'];
            //foreach( $Raftar_Darsadi_Tajmiei->where('code',$post['code']) as $item) {
              //  $show_tajmiei['15daysChangePrice']=$show_tajmiei['15daysChangePrice']+ $item['stock_name'];
            //}
        //}
        return view('raftarstock',[
            'Raftar_Stock' => $Raftar_Stock,
            'Smart_Darsadi' => $Smart_Darsadi,
            'Raftar_Darsadi_Tajmiei' => $Raftar_Darsadi_Tajmiei,
        ]);
    }

    public function percentage()
    {
        $Raftar_Stock=DB::table('Raftar_Stock')->get();
        $Smart_Darsadi=DB::table('Smart_Darsadi')->get();
        $Raftar_Darsadi_Tajmiei=DB::table('Raftar_Darsadi_Tajmiei')->get();
        return view('percentage',[
            'Raftar_Stock' => $Raftar_Stock,
            'Smart_Darsadi' => $Smart_Darsadi,
            'Raftar_Darsadi_Tajmiei' => $Raftar_Darsadi_Tajmiei,
        ]);
    }



}