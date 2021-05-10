<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ciudad;
use App\Models\Departamento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       return view('admin.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $dep = Departamento::all();
        
        // $ciudad = Ciudad::find(1);

        // dd($ciudad->ciudad);
 
                // dd($dep->ciudades);
        // $dep = Departamento::find(2);
        // foreach ($dep->ciudades as $key => $value) {
        //     echo ($value->ciudad);
        // } 
 
 
        return view('auth.login', [ 'dep' => $dep ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response  StoreUserRequest
     */
    public function store(StoreUserRequest $request)
    {

        // dd($request->ciudad_id);

        $user = User::create([
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'cedula' => $request->cedula,
                'celular' => $request->celular,
                'correo' => $request->correo,
                'habeas_data' => $request->habeas_data,
                'departamento_id' => $request->departamento_id,
                'ciudad_id' => $request->ciudad_id,
        ]);
 
        $user->save();

        return redirect()->back()->with('message', 'sinuser');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        $user = User::get();
 
        return datatables()->of($user)->editColumn('created_at', function ($request) {
                                                    return $request->created_at->isoFormat( 'DD MMMM YYYY, h:mm:ss a' );
                                                    })
                                        ->rawColumns( ['action'] )
                                        ->toJson();
    }

    /**
     * Logic de concurso
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function concurso(User $user)
    {
        $user = User::all();

        if ( count( $user ) >= 5 ) {
            
            $userSelect = rand( 1, count( $user ) );
            $userSelect = $user->find($userSelect);
            return view('admin.concurso')->with('userSelect', $userSelect);
        
        }else {
            return redirect()->back()->with('message', 'sin usuario');
        }

     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
