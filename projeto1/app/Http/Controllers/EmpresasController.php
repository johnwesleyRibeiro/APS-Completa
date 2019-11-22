<?php
 
 namespace Unesc\Http\Controllers;
 use Illuminate\Http\Request;
 use Unesc\Empresa;
 
class EmpresasController extends Controller
{
    public function index() {

        $title = 'empresas';
        $empresas = Empresa::all();

        return view('empresas.index', ["title" => $title, "empresas" => $empresas]);
    }

    public function create() {

        $title = "Novo Empresa";

        return view('empresas.create', ["title" => $title]);
    }

    public function store(Request $request) {
        $formData = $request->all();

        Empresa::create($formData);

        return redirect('/empresas');
    }

    public function edit($id) {
        
        $title = "Editar Empresa";
        
        $empresa = Empresa::find($id);

        return view('empresas.edit', ["title" => $title, "empresa" => $empresa]);
    }
    public function verempresa($id) {
        
        $title = "Empresa";
        
        $empresa = Empresa::find($id);

        return view('empresas.verempresa', ["title" => $title, "empresa" => $empresa]);
    }

    public function update(Request $request, $id) {
        $formData = $request->all();

        $empresa = Empresa::find($id);
        
        $empresa->update($formData);

        return redirect('/empresas');
    }

    public function destroy($id) {
        $empresa = Empresa::find($id);
        
        $empresa->delete();

        return redirect('/empresas');
    }
}
