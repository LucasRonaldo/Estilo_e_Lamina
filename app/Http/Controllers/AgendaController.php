<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgendaFormRequest;
use App\Http\Requests\AgendaUpdateFormRequest;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function cadastroAgenda(AgendaFormRequest $request)
    {

        $agenda = Agenda::create([


            'profissional_id' => $request->profissional_id,
            
            'data_hora' => $request->data_hora,
            



        ]);
        return response()->json([
            "status" => true,
            "message" => "Agenda Cadastrada com sucesso",
            "data" => $agenda

        ], 200);
    }


    public function pesquisarPorData(Request $request)
    {


        $agenda = Agenda::where('data_hora', 'like','%'. $request->data_hora. '%')->get();


        if (count($agenda) > 0) {
            return response()->json([
                'status' => true,
                'data' => $agenda
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => "Data não encontada"
        ]);
    }



    public function pesquisarAgendaPorIdProfissional(Request $request)
    {
        $agenda = Agenda::where('profissional_id', 'like', '%' . $request->profissional_id . '%')->get();

        if (count($agenda) > 0) {
            return response()->json([
                'status' => true,
                'data' => $agenda
            ]);
        }




        return response()->json([
            'status' => false,
            'data' => 'Profissional não disponivel'
        ]);
    }







    public function retornarTodosAgenda()
    {
        $agenda = Agenda::all();
        return response()->json([
            'status' => true,
            'data' => $agenda
        ]);
    }


    public function excluirAgenda($id)
    {
        $agenda = Agenda::find($id);

        if (!isset($agenda)) {
            return response()->json([
                'status' => false,
                'message' => "Agenda não encontrada"
            ]);
        }

        $agenda->delete();
        return response()->json([
            'status' => true,
            'message' => "Agenda excluido com sucessa"
        ]);
    }

    public function editarAgenda(AgendaUpdateFormRequest $request) 
    {
        $agenda = Agenda::find($request->id);
        if (!isset($agenda)) {
            return response()->json([
                'status' => false,
                'message' => "Agenda não encontrado"
            ]);
        }

        if (isset($request->profissional_id)) {
            $agenda->profissional_id = $request->profissional_id;
        }
        if (isset($request->data_hora)) {
            $agenda->data_hora = $request->data_hora;
        }
/*
        if (isset($request->cliente_id)) {
            $agenda->cliente_id = $request->cliente_id;
        }
        if (isset($request->pagamento)) {
            $agenda->pagamento = $request->pagamento;
        }
        if (isset($request->valor)) {
            $agenda->valor = $request->valor;
        }*/

        $agenda->update();

        return response()->json([
            'status' => true,
            'message' => 'Agenda atualizada.'
        ]);
    }

    public function pesquisarPorId($id)
    {
        $agenda = Agenda::find($id);

        if (!isset($agenda)) {  
            return response()->json([
                'status' => false,
                'message' => "Agenda não cadastrado"
            ]);
        }
        return response()->json([
            'status' => true,
            'data' => $agenda
        ]);
    }
}  

//Pronto
