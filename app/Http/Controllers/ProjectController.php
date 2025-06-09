<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create()
    {
        return view('projetos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
            'funcionario_id' => 'required|integer|exists:employee,id',
            'status' => 'required|string',
            'estapa_atual' => 'required|string',
            'etapa_anterior' => 'nullable|string',
            'etapa_posterior' => 'nullable|string',
            'tempo_final_etapa' => 'required|integer',
        ]);

        $data['atualizacao'] = now();

        $projeto = Projeto::create($data);

        return redirect()->route('projetos.show', $projeto->id);
    }

    public function show($id)
    {
        $projeto = Projeto::findOrFail($id);
        return view('projetos.show', compact('projeto'));
    }
}
