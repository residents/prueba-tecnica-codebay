<?php

namespace App\Http\Livewire;

use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;

use App\Models\User;

class Register extends Component
{

	public $data = [];

	public $rules = [
        'data.name' => 'required|string|max:100',
        'data.lastname' => 'required|string|max:100',
        'data.second_lastname' => 'required|string|max:100',
        'data.birthday' => 'required|date_format:Y-m-d',
        'data.telephone' => 'required|digits:10',
        'data.email' => 'required|email|unique:users,email|max:150',
        'data.password' => 'required|string|max:30|confirmed',
        'data.password_confirmation' => 'required|string|max:30',
    ];

    public $messagesErrors = [
	    'required' => 'El :attribute es requerido.',
	    'string' => 'El :attribute debe ser una cadena de texto.',
	    'max' => 'El :attribute no debe superar los :max caracteres.',
	    'digits' => 'El :attribute debe ser númerico de 10 dígitos.',
	    'unique' => 'El :attribute ya ha sido utilizado',
	    'date_format' => 'El :attribute debe ser en formato: YYYY-mm-dd',
	    'email' => 'El :attribute debe ser una dirección valida.',
	    'confirmed' => 'Las contraseñas no coinciden.',
	];
	public $fieldValues = [
		'data.name' => 'nombre',
		'data.lastname' => 'apellido paterno',
		'data.second_lastname' => 'apellido materno',
		'data.birthday' => 'fecha de nacimiento',
		'data.telephone' => 'campo teléfono',
		'data.email' => 'correo electrónico',
		'data.password' => 'campo contraseña',
		'data.password_confirmation' => 'campo confirmar contraseña',
		
	];

    public function render()
    {
        return view('livewire.register');
    }

    public function updatedData($data, $key){
    	$rules = [
    		"data.$key" => $this->rules["data.$key"]
    	];
    	if($key == 'password_confirmation'){
    		$rules["data.password"] = $this->rules["data.password"];
    	}
    	$this->validateForm($rules);
    }

    public function save(){
    	$this->validateForm();
    	$data = $this->data;
    	$data['password'] = Hash::make($data['password']);
    	$user = User::create($data);
    	Auth::login($user, $remember = true);
    	return redirect()->to('/dashboard');
    }

    private function validateForm($rules = false){
        $rules = $rules ? $rules : $this->rules;
        $validator = Validator::make(['data' => $this->data], $rules, $this->messagesErrors, $this->fieldValues);
        if ($validator->fails()) {
            $validator->validate();
        }else{
            $this->resetValidation($rules);
            $this->resetErrorBag($rules);
        }
        return $validator;
    }

}
