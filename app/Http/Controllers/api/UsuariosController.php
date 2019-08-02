<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    //
    public function pegarTodos(Request $request){

        $todosUsuarios = User::all();
            //responde=resposta
        return response()->json($todosUsuarios, 200);
    }
    public function pegarUm(Request $request, $id){

        $pegarUm = User::find($id);

        return response()->json($pegarUm, 200);
    }
    public function criarUm(Request $request){

        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->nivel_user = 1;
        $usuario->img = null;

        $usuario->save();

        return response()->json(['usuario'=> true]);

    }
    public function deletarUm(Request $request, $id){

        $usuario = User::find($id);
        $resultado = $usuario->delete();

        return response()->json(['usuario' => "Usuario deletado com Sucesso!"]);
    }
    public function alterarUm(Request $request, $id){
        $usuario = User::find();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->nivel_user = 1;
        $usuario->img = null;

        $usuario->save();

        return response()->json(['usuario'=> true]);
    }
}
