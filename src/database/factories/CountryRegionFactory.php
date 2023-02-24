<?php

declare(strict_types=1);

namespace Lwwcas\LaravelCountries\Database\Factories;

use App\Modules\ExactOnline\Database\Models\ItemGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Lwwcas\LaravelCountries\Models\CountryRegion;

class CountryRegionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = CountryRegion::class;

    public function definition(): array
    {
        return [
            'name' => [
                'en' => 'Europe',
            ],
            'uuid' => fake()->uuid(),
        ];
    }
}
