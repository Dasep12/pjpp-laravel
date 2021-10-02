<?php

namespace Database\Factories;

use App\Models\Utility;
use Illuminate\Database\Eloquent\Factories\Factory;

class UtilityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Utility::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'kode_dc'    => "G001",
            'unit'       => "Handheld",
            'kode_unit'  => "H001235",
            'tipe_unit'  => "Utility"
        ];
    }
}
