<?php
 
 namespace Unesc\Http\Controllers;
 use Illuminate\Http\Request;
 use Unesc\Professor;
 
class ProfessoresController extends Controller
{
    public function index() {

        $title = 'professores';
        $professores = Professor::all();

        return view('professores.index', ["title" => $title, "professores" => $professores]);
    }

    public function create() {

        $title = "Novo Professor";

        return view('professores.create', ["title" => $title]);
    }

    public function store(Request $request) {
        $formData = $request->all();

        Professor::create($formData);

        return redirect('/professores');
    }

    public function edit($id) {
        
        $title = "Editar Professor";
        
        $professor = Professor::find($id);

        return view('professores.edit', ["title" => $title, "professor" => $professor]);
    }
    public function verprofessor($id) {
        
        $title = "Professor";
        
        $professor = Professor::find($id);

        return view('professores.verprofessor', ["title" => $title, "professor" => $professor]);
    }

    public function update(Request $request, $id) {
        $formData = $request->all();

        $professor = Professor::find($id);
        
        $professor->update($formData);

        return redirect('/professores');
    }

    public function destroy($id) {
        $professor = Professor::find($id);
        
        $professor->delete();

        return redirect('/professores');
    }
}
