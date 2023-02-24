<?php

declare(strict_types=1);

namespace Lwwcas\LaravelCountries\Database\Factories;

use App\Modules\ExactOnline\Database\Models\ItemGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
        $attributes = [
            'uuid' => fake()->uuid(),
        ];

        foreach (config('translatable.locales') as $locale) {
            $name = fake($locale)->word();

            $attributes = array_merge($attributes, [
                'name:'.$locale => $name,
                'slug:'.$locale => Str::slug($name),
            ]);
        }

        return $attributes;
    }
}
