<?php
 
 namespace Unesc\Http\Controllers;
 use Illuminate\Http\Request;
 use Unesc\Estagiario; 
 use Unesc\Curso;
 
class EstagiariosController extends Controller
{
    public function index() {

        $title = 'estagiarios';
        $estagiarios = Estagiario::all();
        $cursos = Curso::all();

        return view('estagiarios.index', ["title" => $title, "estagiarios" => $estagiarios, "cursos" => $cursos]);
    }

    public function create() {

        $title = "Novo Estagiario";
        $cursos = Curso::all();
        return view('estagiarios.create', ["title" => $title, "cursos" => $cursos]);
    }

    public function store(Request $request) {
        $formData = $request->all();

        Estagiario::create($formData);

        return redirect('/estagiarios');
    }
    

    public function edit($id) {
        
        $title = "Editar Estagiario";
        $cursos = Curso::all();
        $estagiario = Estagiario::find($id);

        return view('estagiarios.edit', ["title" => $title, "estagiario" => $estagiario, "cursos" => $cursos]);
    }
    public function verestagiario($id) {
        
        $title = "Editar Estagiario";
        $cursos = Curso::all();
        $estagiario = Estagiario::find($id);

        return view('estagiarios.verestagiario', ["title" => $title, "estagiario" => $estagiario, "cursos" => $cursos]);
    }

    public function update(Request $request, $id) {
        $formData = $request->all();

        $estagiario = Estagiario::find($id);
        
        $estagiario->update($formData);

        return redirect('/estagiarios');
    }

    public function destroy($id) {
        $estagiario = Estagiario::find($id);
        
        $estagiario->delete();

        return redirect('/estagiarios');
    }
}
