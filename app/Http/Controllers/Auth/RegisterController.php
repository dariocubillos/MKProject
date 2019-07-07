<?php

namespace MKProject\Http\Controllers\Auth;

use MKProject\User;
use MKProject\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \MKProject\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
            /*
            ,'nino_adult' => $data['nino_adult'],
            'grado_actual' => $data['grado_actual'],
            'grado_subir' => $data['grado_subir'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'edad' => $data['edad'],
            'direccion' => $data['direccion'],
            'telefono' => $data['telefono'],
            'edo_civil' => $data['edo_civil'],
            'ocupacion_prof' => $data['ocupacion_prof'],
            'fecha_examen_anterior' => $data['fecha_examen_anterior'],
            'fecha_ingreso' => $data['fecha_ingreso'],
            'practicando' => $data['practicando'],
            'doyang_que_pertenece' => $data['doyang_que_pertenece'],
            'nombre_profesor' => $data['nombre_profesor'],
            */

        ]);
    }
}
