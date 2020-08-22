<?php

namespace App\Http\Controllers;
use App; 

use App\Estudiantes;
use App\Exports\EstudiantesExport;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }

    public function table()
    {
        $student = Estudiantes::all();
        $user = User::all();
        // $chart = Estudiantes::select('zonas.zona '->count('as Cantidad'),'estudiantes')->join('zonas','zonas.id','=','estudiantes.idZona')->groupBy('estudiantes.idZona')->get();
        // $chart = DB::table('zonas as a')
        //     ->join('estudiantes as b', 'b.id', '=', 'a.id')
        //     ->where('b.idZona', 'a.zona')
        //     ->select(DB::raw('count(*) as user_count1'))
        //     ->first();

        return view('admin', compact('student','user'));
    }


    //archvio de excel
    public function exportExcel()
    {
        return Excel::download(new EstudiantesExport, 'Estudiantes-list.xlsx');
    }


    //archvio de PDF
    public function exportPdf()
    {
        $students = Estudiantes::get();
        $pdf      = PDF::loadView('pdf.estudiantes', compact('students'));

        return $pdf->download('Estudiantes.pdf');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name'       => 'required', 
            'email'      => 'required|string|email|max:255|unique:users',
            'password'   => 'required|string|min:8|confirmed', 
        ]);

        $newAdmin = new App\User;

        $newAdmin->name=$request->name;
        $newAdmin->email=$request->email;
        $newAdmin->password=Hash::make($request['password']);

        $newAdmin->save();

        return redirect()->route('table')->with('status','El nuevo Funcionario a sido registrado correctamente.');
    }


    public function destroy(User $dato)
    {
        $dato->delete();

        return redirect()->route('table')->with('status','El funcionario fue eliminado correctamente.');
    }

     public function destroyStudents(Estudiantes $dato)
    {
        $dato->delete();

        return redirect()->route('table')->with('status','El estudiante fue eliminado correctamente.');
    }

}
