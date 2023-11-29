<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Produto;
use DB;

class DashboardController extends Controller
{

    public function index() {

        $usuarios = User::all()->count();

        $usersData = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total')
        ])
        ->groupBy('ano')
        ->orderBy('ano', 'asc')
        ->get();

        foreach($usersData as $user){
            $ano[] =  $user->ano;
            $total[] = $user->total;
        }

        $userLabel = "'Comparativo de cadastros de usuários'";
        $userAno = implode(',', $ano);
        $userTotal = implode(',', $total);

        $produtos = Produto::all()->count();
        $produtosData = Produto::select([
            DB::raw('MONTH(created_at) as mes'),
            DB::raw('COUNT(*) as total')
        ])
        ->groupBy('mes')
        ->orderBy('mes', 'asc')
        ->get();

        foreach($produtosData as $produto){
            $mes[] = $produto->mes;
            $total[] = $produto->total;
        }

        $produtoLabel= "'Produtos cadastrados por mês'";
        $produtoMes = implode(',', $mes);
        $produtoTotal = implode(',', $total);




        return view('admin.dashboard', compact('usuarios', 'userLabel', 'userAno', 'userTotal', 'produtoLabel', 'produtoMes', 'produtoTotal' ));

    }
}
