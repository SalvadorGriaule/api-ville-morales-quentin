<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\VilleFrance
 *
 * @property int $ville_id
 * @property string|null $ville_departement
 * @property string|null $ville_slug
 * @property string|null $ville_nom
 * @property string|null $ville_nom_simple
 * @property string|null $ville_nom_reel
 * @property string|null $ville_nom_soundex
 * @property string|null $ville_nom_metaphone
 * @property string|null $ville_code_postal
 * @property string|null $ville_commune
 * @property string $ville_code_commune
 * @property int|null $ville_arrondissement
 * @property string|null $ville_canton
 * @property int|null $ville_amdi
 * @property int|null $ville_population_2010
 * @property int|null $ville_population_1999
 * @property int|null $ville_population_2012
 * @property int|null $ville_densite_2010
 * @property float|null $ville_surface
 * @property float|null $ville_longitude_deg
 * @property float|null $ville_latitude_deg
 * @property string|null $ville_longitude_grd
 * @property string|null $ville_latitude_grd
 * @property string|null $ville_longitude_dms
 * @property string|null $ville_latitude_dms
 * @property int|null $ville_zmin
 * @property int|null $ville_zmax
 */

class VilleFrance extends Model
{
    use HasFactory;

    /** @var string */
    protected $table = 'villes_france_free';

    /** @var string */
    protected $primaryKey = 'ville_id';

    /** @var bool */
    public $incrementing = true;

    /** @var string */
    protected $keyType = 'int';

    /** @var bool */
    public $timestamps = false;

    /** @var array<string> */
    protected $fillable = [
        'ville_departement',
        'ville_slug',
        'ville_nom',
        'ville_nom_simple',
        'ville_nom_reel',
        'ville_nom_soundex',
        'ville_nom_metaphone',
        'ville_code_postal',
        'ville_commune',
        'ville_code_commune',
        'ville_arrondissement',
        'ville_canton',
        'ville_amdi',
        'ville_population_2010',
        'ville_population_1999',
        'ville_population_2012',
        'ville_densite_2010',
        'ville_surface',
        'ville_longitude_deg',
        'ville_latitude_deg',
        'ville_longitude_grd',
        'ville_latitude_grd',
        'ville_longitude_dms',
        'ville_latitude_dms',
        'ville_zmin',
        'ville_zmax',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'ville_arrondissement' => 'integer',
        'ville_amdi'           => 'integer',
        'ville_population_2010'=> 'integer',
        'ville_population_1999'=> 'integer',
        'ville_population_2012'=> 'integer',
        'ville_densite_2010'   => 'integer',
        'ville_surface'        => 'float',
        'ville_longitude_deg'  => 'float',
        'ville_latitude_deg'   => 'float',
        'ville_zmin'           => 'integer',
        'ville_zmax'           => 'integer',
    ];
}