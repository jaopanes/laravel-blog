<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view("site.contact.index");
    }

    public function form(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'message' => 'required'
        ], [
            'name.required' => 'O campo nome é obrigatório!',
            'email.required' => 'O campo e-mail é obrigatório!',
            'message.required' => 'O campo mensagem é obrigatório!',
            'email' => 'Insira um e-mail válido!'
        ]);

        $errors = $validator->errors();

        if($errors) {
            foreach ($errors->all() as $message) {
                return response()->json([
                    "type" => "error",
                    "message" => $message
                ]);
            }
        }

        Contact::create($request->all());

        return response()->json([
            "type" => "success",
            "message" => "Formulário enviado com sucesso!"
        ]);
    }
}
