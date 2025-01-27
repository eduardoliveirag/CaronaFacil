<?php

namespace App\Http\Controllers\Auth;

use App\Models\Passageiro;
use App\Models\Reserva;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PassageiroAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('passageiros.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:passageiros',
            'password' => 'required|string|min:8|confirmed',
            'telefone' => 'required|string|max:15',
        ]);

        $passageiro = Passageiro::create([
            'nome' => $validatedData['nome'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'telefone' => $validatedData['telefone'],
        ]);

        Auth::guard('passageiro')->login($passageiro);

        return redirect()->route('passageiro.login')->with('success', 'Passageiro cadastrado com sucesso!');
    }

    public function showLoginForm()
    {
        return view('passageiros.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('passageiro')->attempt($credentials)) {
            return redirect()->route('reservas.index');
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não coincidem com nossos registros.',
        ]);
    }

    public function logout()
    {
        Auth::guard('passageiro')->logout();

        return redirect('/passageiro/login');
    }

    public function showUpdateForm($id)
    {
        $passageiro = Passageiro::findOrFail($id); // Busca o passageiro pelo ID
        return view('passageiros.edit', compact('passageiro')); // Retorna a view de edição
    }

    public function update(Request $request, $id)
    {
        $passageiro = Passageiro::findOrFail($id);

        $validatedData = $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'email' => "sometimes|required|string|email|max:255|unique:passageiros,email,{$id}",
            'password' => 'nullable|string|min:8|confirmed',
            'telefone' => 'sometimes|required|string|max:15',
        ]);

        $passageiro->nome = $validatedData['nome'] ?? $passageiro->nome;
        $passageiro->email = $validatedData['email'] ?? $passageiro->email;
        $passageiro->telefone = $validatedData['telefone'] ?? $passageiro->telefone;

        if (!empty($validatedData['password'])) {
            $passageiro->password = Hash::make($validatedData['password']);
        }

        $passageiro->save();

        return redirect()->route('reservas.index')->with('success', 'Perfil atualizado com sucesso!');


    }

    public function destroy($id)
    {
        try {
            $passageiro = Passageiro::findOrFail($id);
    
            // Verifica se o passageiro possui reservas de carona
            $reservas = Reserva::where('passageiro_id', $passageiro->id)->exists();
    
            if ($reservas) {
                return redirect()->back()->with('error', 'Não é possível excluir a conta enquanto houver reservas pendentes ou associadas.');
            }
    
            // Exclui o passageiro
            $passageiro->delete();
    
            // Faz logout do passageiro
            Auth::guard('passageiro')->logout();
    
            return redirect('/passageiro/login')->with('success', 'Conta excluída com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao excluir a conta. Tente novamente. / Erro: ' . $e->getMessage());
        }
    }
    
}
