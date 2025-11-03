<?php

namespace App\Http\Controllers\Api;

use App\Models\VilleFrance;
use App\Http\Resources\VilleFranceResource;
use App\Http\Requests\VilleFranceStoreRequest;
use App\Http\Requests\VilleFranceUpdateRequest;
use Illuminate\Http\Request;

class VilleFranceController extends Controller
{
    /* GET /api/villes
     * filtres query-string : departement, code_postal, nom (like) etc.
     */
    public function index(Request $request)
    {
        $query = VilleFrance::query();

        if ($request->filled('departement')) {
            $query->where('ville_departement', $request->departement);
        }
        if ($request->filled('code_postal')) {
            $query->where('ville_code_postal', 'LIKE', $request->code_postal.'%');
        }
        if ($request->filled('nom')) {
            $query->where('ville_nom', 'LIKE', '%'.$request->nom.'%');
        }
        
        $limit = min($request->get('limit', 50), 200);
        $villes = $query->paginate($limit);

        return VilleFranceResource::collection($villes);
    }

    /* GET /api/villes/{ville} */
    public function show(VilleFrance $ville)
    {
        return new VilleFranceResource($ville);
    }

    /* POST /api/villes */
    public function store(VilleFranceStoreRequest $request)
    {
        $ville = VilleFrance::create($request->validated());
        return new VilleFranceResource($ville);
    }

    /* PUT /api/villes/{ville} */
    public function update(VilleFranceUpdateRequest $request, VilleFrance $ville)
    {
        $ville->update($request->validated());
        return new VilleFranceResource($ville);
    }

    /* DELETE /api/villes/{ville} */
    public function destroy(VilleFrance $ville)
    {
        $ville->delete();
        return response()->json(null, 204);
    }
}