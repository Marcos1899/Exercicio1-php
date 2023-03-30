<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlimentacaoController extends Controller
{
    public function listarAlimentacao(){

        $lancheManha = ['Ovos mexidos','Vitamina de Banana e Aveia','Pão Integral c/ requeijão cremoso' ];

        $almoco = ['300g de arroz','200g feijão', '250g de peixe', 'Brocolis','Tomate', 'Beterraba'];

        $lancheTarde = ['Ovos mexidos', 'Vitamina c/ Whey Protein', 'Maça ou Melão'];

        $janta = ['300g macarrão','200g frango','100g batata doce'];

        $lancheNoturno = ['Melancia','Laranja', 'Creatina'];



       return view('Alimentacao', compact('lancheManha', 'almoco', 'lancheTarde', 'janta', 'lancheNoturno'));
    }
}
