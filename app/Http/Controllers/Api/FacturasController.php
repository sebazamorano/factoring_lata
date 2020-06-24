<?php

namespace App\Http\Controllers\Api;

use App\Comuna;
use App\DetalleFactura;
use App\Factura;
use App\Http\Controllers\Controller;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use sasco\LibreDTE\Sii\Dte;
use sasco\LibreDTE\Sii\EnvioDte;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $facturas = Factura::query()
            ->with(['emisor', 'receptor'])
            ->where('usuario_id', Auth::user()->id)
            ->get();

        return response()->json($facturas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facturas = json_decode(file_get_contents($request->file('facturas')));

        foreach ($facturas as $factura) {
            $factura->usuario_id = Auth::user()->id;
            Factura::create((array)$factura);
        }

        if ($request->hasFile('documento')) {
            $files = $request->file('documento');
            $dte = new EnvioDte();
            $dte->loadXML(file_get_contents($files));

            foreach ($dte->getDocumentos() as $doc) {
                $datos = new Collection($doc->getDatos());

                $comuna = Comuna::query()
                    ->where('comuna', $datos['Encabezado']['Emisor']['CmnaOrigen'])->first();
                $emisor = Usuario::firstOrCreate([
                    'rut' => $datos['Encabezado']['Emisor']['RUTEmisor']
                ], [
                    'nombre' => $datos['Encabezado']['Emisor']['GiroEmis'],
                    'razon_social' => $datos['Encabezado']['Emisor']['RznSoc'],
                    'rut' => $datos['Encabezado']['Emisor']['RUTEmisor'],
                    'direccion' => $datos['Encabezado']['Emisor']['DirOrigen'],
                    'ciudad_id' => $comuna->id ?? null
                ]);
                $emisor->assign('empresa');

                $comuna = Comuna::query()
                    ->where('comuna', $datos['Encabezado']['Receptor']['CmnaRecep'])->first();
                $receptor = Usuario::firstOrCreate([
                    'rut' => $datos['Encabezado']['Receptor']['RUTRecep']
                ], [
                    'nombre' => $datos['Encabezado']['Receptor']['GiroRecep'],
                    'razon_social' => $datos['Encabezado']['Receptor']['RznSocRecep'],
                    'rut' => $datos['Encabezado']['Receptor']['RUTRecep'],
                    'direccion' => $datos['Encabezado']['Receptor']['DirRecep'],
                    'ciudad_id' => $comuna->id ?? null
                ]);
                $receptor->assign('empresa');

                $factura = new Factura();
                $factura->usuario_id = Auth::user()->id;
                $factura->tipo_dte = $datos['Encabezado']['IdDoc']['TipoDTE'];
                $factura->folio = $datos['Encabezado']['IdDoc']['Folio'];
                $factura->fecha_emision = $datos['Encabezado']['IdDoc']['FchEmis'];
                $factura->fecha_vencimiento = $datos['Encabezado']['IdDoc']['FchVenc'];
                $factura->monto_neto = $datos['Encabezado']['Totales']['MntNeto'];
                $factura->monto_excento = $datos['Encabezado']['Totales']['MntExe'];
                $factura->tasa_iva = $datos['Encabezado']['Totales']['TasaIVA'];
                $factura->iva = $datos['Encabezado']['Totales']['IVA'];
                $factura->monto_total = $datos['Encabezado']['Totales']['MntTotal'];
                $factura->empresa_emisora_id = $emisor->id;
                $factura->empresa_receptora_id = $receptor->id;
                $factura->save();
                
                foreach ($datos['Detalle'] as $detalle) {
                    $factura->detalles()->create([
                        'num_lista'=> $detalle['NroLinDet'],
                        'nombre_item'=> $detalle['NmbItem'],
                        'descripcion_item'=> $detalle['DscItem'],
                        'cantidad_item'=> $detalle['QtyItem'],
                        'precio_item'=> $detalle['PrcItem'],
                        'monto_item'=> $detalle['MontoItem']
                    ]);
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
