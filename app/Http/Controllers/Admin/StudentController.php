<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Course;
use App\Models\User;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use PDF; 

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate(10);
        return view ('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        $users = User::all();
        return view('admin.students.create', compact('users'), compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validar los datos del formulario
         $request->validate([
            'nombre' => 'required|string|min:5|max:255',
            'apellido' => 'required|string|min:5|max:255',
            'foto' => 'nullable',
            'edad' => 'nullable|integer',
            'nro_de_lista' => 'nullable',
            'nombre_padre' => 'nullable|string|max:255',
            'trabajo_padre' => 'nullable|string|max:255',
            'celular_padre' => 'nullable|integer',
            'nombre_madre' => 'nullable|string|max:255',
            'trabajo_madre' => 'nullable|string|max:255',
            'celular_madre' => 'nullable|integer',
            'nro_total_hermanos' => 'nullable|integer',
            'lugar_que_ocupa' => 'nullable|string',
            'hermanos_en_colegio' => 'nullable|integer',
            'direccion_actual' => 'nullable|string|max:255',
            'telefono_casa' => 'nullable|integer',
            'celular_estudiante' => 'nullable|integer',
            'trabaja' => 'nullable|in:Si,No',
            'lugar_trabajo' => 'nullable|string|max:255',
            'nro_dosis_covid' => 'nullable|integer',
            'vive_con' => 'nullable|in:Padres,Abuelos,Tios,Hermanos,Otros',
            'religion' => 'nullable|in:Catolica,Evangelica,Otra',
            'user_id' => 'required|exists:users,id',
            'course_id' => 'required|exists:courses,id',
        ]);

         // Crear un nuevo estudiante usando el método `create` del modelo
        Student::create($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::with('courses')->findOrFail($id);
        return view('admin.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::all();
        $users = User::all();
        $students = Student::findOrFail($id);
        return view('admin.students.edit', compact('students', 'users', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|min:5|max:255',
            'apellido' => 'required|string|min:5|max:255',
            'foto' => 'nullable',
            'edad' => 'required|integer|min:1',
            'nro_de_lista' => 'nullable',
            'nombre_padre' => 'nullable|string|max:255',
            'trabajo_padre' => 'nullable|string|max:255',
            'celular_padre' => 'nullable|integer',
            'nombre_madre' => 'nullable|string|max:255',
            'trabajo_madre' => 'nullable|string|max:255',
            'celular_madre' => 'nullable|integer',
            'nro_total_hermanos' => 'nullable|integer',
            'lugar_que_ocupa' => 'nullable|string',
            'hermanos_en_colegio' => 'nullable|integer',
            'direccion_actual' => 'nullable|string|max:255',
            'telefono_casa' => 'nullable|integer',
            'celular_estudiante' => 'nullable|integer',
            'trabaja' => 'nullable|in:Si,No',
            'lugar_trabajo' => 'nullable|string|max:255',
            'nro_dosis_covid' => 'nullable|integer',
            'vive_con' => 'nullable|in:Padres,Abuelos,Tios,Hermanos,Otros',
            'religion' => 'nullable|in:Catolica,Evangelica,Otra',
            'course_id' => 'required|exists:courses,id',
        ]);

        // Buscar el estudiante por su ID
        $students = Student::findOrFail($id);

        // Actualizar los datos del estudiante
        $students->update($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Student::findOrFail($id);

        $students->delete();

        return redirect()->route('students.index');
    }

    public function showReports($id, Request $request)
    {
        // Encontrar al estudiante por ID
        $student = Student::findOrFail($id);

        // Inicializa la consulta base
        $query = Report::where('student_id', $id);

        // Filtrar por fecha
        if ($request->filled('fecha')) {
            $query->where('fecha', $request->fecha);
        }

        // Filtrar por trimestre (si aplica)
        if ($request->filled('trimestre')) {
            $query->where('trimestre', $request->trimestre);
        }

        // Filtrar por área (si aplica)
        if ($request->filled('area')) {
            $query->where('area', $request->area);
        }

        // Obtener las áreas únicas de la base de datos
        $areas = Report::select('area')->distinct()->pluck('area');

        // Ordenar por la fecha más reciente
        $query->orderBy('fecha', 'desc');

        // Obtener los reportes con los filtros aplicados y paginar
        $reports = $query->paginate(10);

        // Retornar la vista con el estudiante, reportes filtrados y las áreas disponibles
        return view('admin.students.reports', compact('student', 'reports', 'areas'));
}

public function exportReportsCsv($id, Request $request)
{
    // Obtener los reportes asociados al estudiante con filtros
    $query = Report::where('student_id', $id);

    // Aplicar filtros si existen
    if ($request->has('fecha') && $request->input('fecha') != '') {
        $query->whereDate('fecha', $request->input('fecha'));
    }

    if ($request->has('trimestre') && $request->input('trimestre') != '') {
        $query->where('trimestre', $request->input('trimestre'));
    }

    if ($request->has('area') && $request->input('area') != '') {
        $query->where('area', $request->input('area'));
    }

    $reports = $query->get();

    // Crear el archivo CSV
    $csvData = "ID,Nombre,Fecha,Ítem,Área,Trimestre,Detalle/Observaciones,Profesor ID,Estudiante ID,Curso ID\n";

    foreach ($reports as $report) {
        $csvData .= $report->id . ','
                    . $report->nombre . ','
                    . $report->fecha->format('Y-m-d') . ','
                    . $report->item . ','
                    . $report->area . ','
                    . $report->trimestre . ','
                    . $report->detalle_observaciones . ','
                    . $report->teacher_id . ','
                    . $report->student_id . ','
                    . $report->course_id . "\n";
    }

    // Descargar el archivo CSV
    $response = Response::make(rtrim($csvData, "\n"), 200, [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="reports.csv"',
    ]);

    return $response;
}
public function exportReportsPdf($id, Request $request)
{
    // Obtener los reportes asociados al estudiante con filtros
    $query = Report::where('student_id', $id);

    // Aplicar filtros si existen
    if ($request->has('fecha') && $request->input('fecha') != '') {
        $query->whereDate('fecha', $request->input('fecha'));
    }

    if ($request->has('trimestre') && $request->input('trimestre') != '') {
        $query->where('trimestre', $request->input('trimestre'));
    }

    if ($request->has('area') && $request->input('area') != '') {
        $query->where('area', $request->input('area'));
    }

    $reports = $query->get();

    // Obtener el estudiante
    $student = Student::findOrFail($id);

   // Obtener los reportes asociados al estudiante con la relación del profesor
   $student = Student::findOrFail($id);
   $reports = Report::with('teacher')->where('student_id', $id)->get(); // Cargar la relación

   

    // Generar el PDF
    $pdf = PDF::loadView('reports_pdf', compact('student', 'reports'));

    // Configuración de Dompdf para permitir imágenes remotas
    $pdf->setOptions(['isRemoteEnabled' => true]);


    // Descargar el PDF con un nombre específico
    return $pdf->download('reports_' . $student->nombre . '.pdf');
}
}