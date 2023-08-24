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

class ApiController extends Controller
{
    private function escape_like(string $value, string $char = '\\'): string
    {
        return str_replace(
            [$char, '%', '_'],
            [$char.$char, $char.'%', $char.'_'],
            $value
        );
    }
    
    public function GetRaftarStock()
    {
        $support=DB::table('Raftar_Stock')->get();
        return  response()->json( [
        'support' => $support,
        ]);
    }

    public function GetChatsGroup(Request $request)
    {
        $chats=chat::where('support_id',$request->id)->get();
        return  response()->json( [
        'chats' => $chats,
        ]);
    }
    
}