<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UsuarioCollection;
use App\Http\Resources\UsuarioResource;
use App\Models\PerfilUsuario;
use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::paginate(10);

        return new UsuarioCollection($usuarios);
    }


    public function login(Request $request){


        $request->validate([

            "email" => "email|required",
            "password" => "string|required"

        ]);


        $usuario = Usuario::where('email', $request->email)->where('password', $request->password)->first();


        if($usuario){
            session_start();
            Session::put('nombre', $request->email);
            Session::put('permisos', ['cliente']);

            return response()->json(['success' => true]);

        }else{

            return response()->json(['success' => false]);

        }
    }



    public function logout(){
        session_start();

        unset($_SESSION);
        Session::flush();
        session_destroy();


        setcookie("XSRF-TOKEN", " ", time() - 1000);
        setcookie("laravel_session", " ", time() - 1000);
        setcookie(session_name(), " ", time() - 1000);

        return json_encode(['success' => true]);

    }


    public function registrarse(RegisterRequest $request){

        $datos = $request->validated();

        $usuario = new Usuario();
        $usuario->email = $datos['email'];
        $usuario->password = $datos['password'];
        $usuario->fecha_registro = date('Y-m-d');
        $usuario->tipo_usuario_id = 1;
        $usuario->baneado = false;

        $usuario->save();

        $userid = Usuario::where('email', $datos['email'])->first();

        $perfil = new PerfilUsuario();
        $perfil->id_usuario = $userid->id_usuario;
        $perfil->nombre = $datos['nombre'];
        $perfil->direccion = $datos['direccion'];
        $perfil->telefono = $datos['telefono'];
        $perfil->foto_perfil = "default-image.jpg";

        $perfil->save();


        return response()->json([
            'success' => true
        ]);






    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {
        return new UsuarioResource(Usuario::create($request->all()));

    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return new UsuarioResource($usuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        $usuario->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
    }
}
