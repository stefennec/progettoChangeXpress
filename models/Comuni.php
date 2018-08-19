<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comuni".
 *
 * @property int $id
 * @property string $comune
 * @property string $istat
 * @property string $provincia
 * @property string $prov
 * @property string $regione
 * @property string $area_geo
 * @property int $pop_residente
 * @property int $pop_straniera
 * @property int $densita_demogr
 * @property int $superficie_kmq
 * @property int $altezza_min
 * @property int $altezza_max
 * @property int $altezza_centro
 * @property int $zona_altimetrica
 * @property int $tipo_comune
 * @property string $grado_urbaniz
 * @property string $indice_montanita
 * @property string $zona_climatica
 * @property string $zona_sismica
 * @property string $classe_comune1
 * @property string $classe_comune2
 * @property string $classe_comune_descr1
 * @property int $latitudine_g1
 * @property int $latitudine_g2
 * @property int $longitudine_g1
 * @property int $longitudine_g2
 */
class Comuni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comuni';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pop_residente', 'pop_straniera', 'densita_demogr', 'superficie_kmq', 'altezza_min', 'altezza_max', 'altezza_centro', 'zona_altimetrica', 'tipo_comune', 'latitudine_g1', 'latitudine_g2', 'longitudine_g1', 'longitudine_g2'], 'integer'],
            [['comune'], 'string', 'max' => 60],
            [['istat'], 'string', 'max' => 7],
            [['provincia', 'regione', 'area_geo', 'grado_urbaniz', 'zona_sismica'], 'string', 'max' => 25],
            [['prov', 'classe_comune1', 'classe_comune2'], 'string', 'max' => 2],
            [['indice_montanita', 'zona_climatica'], 'string', 'max' => 40],
            [['classe_comune_descr1'], 'string', 'max' => 35],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'comune' => 'Comune',
            'istat' => 'Istat',
            'provincia' => 'Provincia',
            'prov' => 'Prov',
            'regione' => 'Regione',
            'area_geo' => 'Area Geo',
            'pop_residente' => 'Pop Residente',
            'pop_straniera' => 'Pop Straniera',
            'densita_demogr' => 'Densita Demogr',
            'superficie_kmq' => 'Superficie Kmq',
            'altezza_min' => 'Altezza Min',
            'altezza_max' => 'Altezza Max',
            'altezza_centro' => 'Altezza Centro',
            'zona_altimetrica' => 'Zona Altimetrica',
            'tipo_comune' => 'Tipo Comune',
            'grado_urbaniz' => 'Grado Urbaniz',
            'indice_montanita' => 'Indice Montanita',
            'zona_climatica' => 'Zona Climatica',
            'zona_sismica' => 'Zona Sismica',
            'classe_comune1' => 'Classe Comune1',
            'classe_comune2' => 'Classe Comune2',
            'classe_comune_descr1' => 'Classe Comune Descr1',
            'latitudine_g1' => 'Latitudine G1',
            'latitudine_g2' => 'Latitudine G2',
            'longitudine_g1' => 'Longitudine G1',
            'longitudine_g2' => 'Longitudine G2',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ComuniQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ComuniQuery(get_called_class());
    }
}
