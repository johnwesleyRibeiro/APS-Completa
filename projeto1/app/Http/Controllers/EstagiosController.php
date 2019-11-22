<?php
 
 namespace Unesc\Http\Controllers;
 use Illuminate\Http\Request;
 use Unesc\Estagio;
 use Unesc\Empresa;
 use Unesc\Professor;
 use Unesc\Estagiario;
 
class EstagiosController extends Controller
{
    public function index() {

        $title = 'estagios';
        $estagios = Estagio::all();
        $empresas = Empresa::all();
        $professores = Professor::all();
        $estagiarios = Estagiario::all();

        return view('estagios.index', ["title" => $title, "estagios" => $estagios,"empresas" => $empresas,"professores" => $professores, "estagiarios" => $estagiarios]);
    }

    public function create() {

        $title = "Novo Estagio";
        $empresas = Empresa::all();
        $professores = Professor::all();
        $estagiarios = Estagiario::all();
        return view('estagios.create', ["title" => $title, "empresas" => $empresas,"professores" => $professores, "estagiarios" => $estagiarios]);
    }

    public function store(Request $request) {
        $formData = $request->all();

        Estagio::create($formData);

        return redirect('/estagios');
    }

    public function edit($id) {
        
        $title = "Editar Estagio";
        $empresas = Empresa::all();
        $professores = Professor::all();
        $estagiarios = Estagiario::all();
        $estagio = Estagio::find($id);

        return view('estagios.edit', ["title" => $title, "estagio" => $estagio, "empresas" => $empresas,"professores" => $professores, "estagiarios" => $estagiarios]);
    }
    
    public function verestagio($id) {
        
        $title = "Editar Estagio";
        $empresas = Empresa::all();
        $professores = Professor::all();
        $estagiarios = Estagiario::all();
        $estagio = Estagio::find($id);

        return view('estagios.verestagio', ["title" => $title, "estagio" => $estagio, "empresas" => $empresas,"professores" => $professores, "estagiarios" => $estagiarios
        ]);
    }
    

    public function update(Request $request, $id) {
        $formData = $request->all();

        $estagio = Estagio::find($id);
        
        $estagio->update($formData);

        return redirect('/estagios');
    }

    public function destroy($id) {
        $estagio = Estagio::find($id);
        
        $estagio->delete();

        return redirect('/estagios');
    }
}
