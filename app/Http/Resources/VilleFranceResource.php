<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VilleFranceResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'               => $this->ville_id,
            'departement'      => $this->ville_departement,
            'slug'             => $this->ville_slug,
            'nom'              => $this->ville_nom,
            'nom_simple'       => $this->ville_nom_simple,
            'nom_reel'         => $this->ville_nom_reel,
            'code_postal'      => $this->ville_code_postal,
            'code_commune'     => $this->ville_code_commune,
            'arrondissement'   => $this->ville_arrondissement,
            'canton'           => $this->ville_canton,
            'population_2010'  => $this->ville_population_2010,
            'population_1999'  => $this->ville_population_1999,
            'population_2012'  => $this->ville_population_2012,
            'densite_2010'     => $this->ville_densite_2010,
            'surface'          => $this->ville_surface,
            'longitude_deg'    => $this->ville_longitude_deg,
            'latitude_deg'     => $this->ville_latitude_deg,
            'longitude_grd'    => $this->ville_longitude_grd,
            'latitude_grd'     => $this->ville_latitude_grd,
            'longitude_dms'    => $this->ville_longitude_dms,
            'latitude_dms'     => $this->ville_latitude_dms,
            'zmin'             => $this->ville_zmin,
            'zmax'             => $this->ville_zmax,
        ];
    }
}