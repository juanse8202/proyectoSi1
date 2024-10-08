<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Rol;
use App\Models\UsuarioRol;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Empleado;
use App\Models\Horario;

class ControllerUsuario extends Controller
{

    public function inicio(){
        return view('usuario.inicio');
    }

    // Método de autenticación
    public function store(Request $request)
    {
        // Lógica de autenticación (probablemente ya esté implementada)
        
        // Obtener el rol del usuario autenticado
        $userId = Auth::user()->id;

        $usuarioRol = UsuarioRol::where('user_id', $userId)->first();
        if ($usuarioRol) {
            $rolId = $usuarioRol->rol_id;

            // Verificar rol del usuario y redirigir a la vista correspondiente
            if ($rolId == 1) {
                return redirect()->route('admin.dashboard'); // Redirigir a vista admin
            } elseif ($rolId == 2) {
                return redirect()->route('empleado.dashboard'); // Redirigir a vista empleado
            } elseif ($rolId == 3) {
                return redirect()->route('cliente.dashboard'); // Redirigir a vista cliente
            }
        }

        // En caso de que no se encuentre el rol, redirige a un lugar por defecto
        return redirect()->route('dashboard');
    }

    // Mostrar la vista para crear un nuevo horario
    public function ver_horario()
    {
        $horarios = Horario::all(); // Obtener todos los horarios para listarlos
        return view('usuario.admin', compact('horarios')); // Mostrar vista de horarios
    }

    // Mostrar la vista para crear un nuevo empleado
    /*public function crear_empleado()
    {
        $horarios = Horario::all(); // Obtener los horarios para que el empleado pueda seleccionar uno
        $empleados = Empleado::all(); // Obtener todos los empleados
        return view('empleados.index', compact('empleados', 'horarios')); // Mostrar vista de empleados
    }*/

    public function ver_empleado()
    {
        // Obtener todos los horarios
        $horarios = Horario::all(); // Asegúrate de tener el modelo Horario creado
        $empleados = Empleado::all();
        // Pasar los horarios a la vista
        return view('usuario.admin', compact('horarios, empleados'));
    }

    // Guardar un nuevo horario
    public function crear_nuevo_horario(Request $request)
    {
        $request->validate([
            'horainicio' => 'required',
            'horafinal' => 'required',
            'dias' => 'required',
        ]);

        Horario::create($request->all()); // Crear un nuevo horario en la base de datos

        return redirect('/ver_horario')->with('success', 'Horario creado exitosamente.');
    }

    // Guardar un nuevo empleado
    public function crear_nuevo_empleado(Request $request)
    {
        $request->validate([
            'ci' => 'required|integer',
            'nombre' => 'required|string|max:60',
            'sexo' => 'required|in:M,F',
            'telefono' => 'required|integer',
            'direccion' => 'required|string|max:60',
            'fechacontratacion' => 'required|date',
            'cargo' => 'required|string|max:40',
            'idhorario' => 'required|exists:horarios,id',
        ]);

        Empleado::create($request->all()); // Crear un nuevo empleado en la base de datos

        return redirect('/ver_empleado')->with('success', 'Empleado creado exitosamente.');
    }

    // Editar un horario existente
    public function editar_horario(Request $request, $id)
    {
        $horario = Horario::findOrFail($id); // Buscar el horario por ID
        $request->validate([
            'horainicio' => 'required',
            'horafinal' => 'required',
            'dias' => 'required',
        ]);

        $horario->update($request->all()); // Actualizar el horario con los datos nuevos

        return redirect('/ver_horario')->with('success', 'Horario actualizado exitosamente.');
    }

    // Editar un empleado existente
    public function editar_empleado(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id); // Buscar el empleado por ID
        $request->validate([
            'ci' => 'required|integer',
            'nombre' => 'required|string|max:60',
            'sexo' => 'required|in:M,F',
            'telefono' => 'required|integer',
            'direccion' => 'required|string|max:60',
            'fechacontratacion' => 'required|date',
            'cargo' => 'required|string|max:40',
            'idhorario' => 'required|exists:horarios,id',
        ]);

        $empleado->update($request->all()); // Actualizar el empleado con los datos nuevos

        return redirect('/ver_empleado')->with('success', 'Empleado actualizado exitosamente.');
    }

    public function editar_empleado_view($id)
    {
        $empleado = Empleado::findOrFail($id);
        $horarios = Horario::all(); // Obtener horarios para la selección

        return view('empleados.edit', compact('empleado', 'horarios'));
    }


    // Eliminar un horario
    public function borrar_horario($id)
    {
        Horario::findOrFail($id)->delete(); // Eliminar el horario por ID

        return redirect('/ver_horario')->with('success', 'Horario eliminado exitosamente.');
    }

    // Eliminar un empleado
    public function borrar_empleado($id)
    {
        Empleado::findOrFail($id)->delete(); // Eliminar el empleado por ID

        return redirect('/ver_empleado')->with('success', 'Empleado eliminado exitosamente.');
    }

    
}
