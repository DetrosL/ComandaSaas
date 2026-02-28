<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Table;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $tenant = app(Tenant::class);

        return response()->json([
            'success' => true,
            'message' => null,
            'data' => Table::where('tenant_id', $tenant->id)->orderBy('id')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $tenant = app(Tenant::class);

        $data = $request->validate([
            'nome' => ['required','string','max:100'],
            'status' => ['nullable','in:livre,ocupada,indisponivel'],
        ]);

        $mesa = Table::create([
            'tenant_id' => $tenant->id,
            'nome' => $data['nome'],
            'status' => $data['status'] ?? 'livre',
        ]);

        return response()->json(['success'=>true,'message'=>null,'data'=>$mesa], 201);
    }

    public function show($id)
    {
        $tenant = app(Tenant::class);
        $mesa = Table::where('tenant_id', $tenant->id)->findOrFail($id);

        return response()->json(['success'=>true,'message'=>null,'data'=>$mesa]);
    }

    public function update(Request $request, $id)
    {
        $tenant = app(Tenant::class);
        $mesa = Table::where('tenant_id', $tenant->id)->findOrFail($id);

        $data = $request->validate([
            'nome' => ['sometimes','string','max:100'],
            'status' => ['sometimes','in:livre,ocupada,indisponivel'],
        ]);

        $mesa->update($data);

        return response()->json(['success'=>true,'message'=>null,'data'=>$mesa]);
    }

    public function destroy($id)
    {
        $tenant = app(Tenant::class);
        $mesa = Table::where('tenant_id', $tenant->id)->findOrFail($id);
        $mesa->delete();

        return response()->json(['success'=>true,'message'=>'Removido.','data'=>null]);
    }
}