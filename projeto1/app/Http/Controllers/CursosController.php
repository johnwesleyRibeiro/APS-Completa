<?php
 
namespace Unesc\Http\Controllers;
use Illuminate\Http\Request;
use Unesc\Professor;
use Unesc\Curso;

class CursosController extends Controller
{ 
    public function index() {

        $title = 'cursos';
        $cursos = Curso::all();
        $professores = Professor::all();

        return view('cursos.index', ["title" => $title, "cursos" => $cursos,"professores" => $professores]);
    }

    public function create() {

        $title = "Novo Curso";
        $professores = Professor::all();
        return view('cursos.create', ["title" => $title,"professores" => $professores]);
    }

    public function store(Request $request) {
        $formData = $request->all();

        Curso::create($formData);

        return redirect('/cursos');
    }
    public function vercurso($id) {
        
        $title = "Curso";
        $professores = Professor::all();
        $curso = Curso::find($id); 

        return view('cursos.vercurso', ["title" => $title, "curso" => $curso,"professores" => $professores]);
    }

    public function edit($id) {
        
        $title = "Editar Curso";
        $professores = Professor::all();
        $curso = Curso::find($id); 

        return view('cursos.edit', ["title" => $title, "curso" => $curso,"professores" => $professores]);
    }
 
    public function update(Request $request, $id) {
        $formData = $request->all();

        $curso = Curso::find($id);
        
        $curso->update($formData);

        return redirect('/cursos');
    }

    public function destroy($id) {
        $curso = Curso::find($id);
        
        $curso->delete(); 

        return redirect('/cursos');
    }
}
