<?php

namespace App\Http\Controllers;

use App\Models\Competicion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompeticionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tipo_competicion_id' => 'required|in:aficionado,profesional',
            'deporte_id' => 'required|in:futbol,futbol7,futsal,futbito,futbol8',
            'genero_id' => 'required|in:general,varones,mujeres',
            'urlName' => 'required|string|unique:competicions,url_name|max:255',
        ]);

        // Generar el slug y concatenar la URL base
        $fullUrl = 'fullsportplay.com/' . Str::slug($validated['urlName']);

        $competicion = Competicion::create([
            'nombre' => $validated['nombre'],
            'descripcion' => $validated['descripcion'],
            'tipo_competicion_id' => $validated['tipo_competicion_id'],
            'deporte_id' => $validated['deporte_id'],
            'genero_id' => $validated['genero_id'],
            'url_name' => $fullUrl, // Guardar la URL completa en `url_name`
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Competición creada exitosamente.',
            'competition' => $competicion
        ]);
    }

    public function verifyUrl(Request $request)
    {
        $request->validate([
            'urlName' => 'required|string|max:255',
        ]);

        // Verificar existencia solo con el slug (sin el prefijo "fullsportplay.com/")
        $urlName = Str::slug($request->urlName);
        $exists = Competicion::where('url_name', 'fullsportplay.com/' . $urlName)->exists();

        return response()->json(['available' => !$exists]);
    }
}
