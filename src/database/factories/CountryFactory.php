<?php

declare(strict_types=1);

namespace Lwwcas\LaravelCountries\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryRegion;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = Country::class;

    public function definition(): array
    {
        return [
            'name' => [
                'en' => fake()->country(),
            ],
            'uuid' => fake()->uuid(),
            'lc_region_id' => CountryRegion::factory(),
            'official_name' => fake()->country(),
            'iso_alpha_2' => fake()->countryCode(),
            'iso_alpha_3' => fake()->countryISOAlpha3(),
            'iso_numeric' => fake()->numberBetween(111, 999),
            'international_phone' => fake()->numberBetween(1, 99),
            'languages' => '["en"]',
            'tld' => '[".uk"]',
            'wmo' => fake()->countryCode(),
            'emoji' => '{"img":"\ud83c\uddec\ud83c\udde7","uCode":"U+1F1EC U+1F1E7"}',
            'color_hex' => '"[\"#ff0000\",\"#ffffff\",\"#0000cc\"]"',
            'color_rgb' => '"[\"255,0,0\",\"255,255,255\",\"0,0,204\"]"',
            'coordinates' => '"{\"latitude\":{\"classic\":\"54 00 N\",\"desc\":\"54.56088638305664\"},\"longitude\":{\"classic\":\"2 00 W\",\"desc\":\"-2.2125117778778076\"}}"',
            'coordinates_limit' => '"{\"latitude\":{\"max\":\"61.5\",\"min\":\"49.866667\"},\"longitude\":{\"max\":\"2.866667\",\"min\":\"-13.65\"}}"',
            'visible' => fake()->boolean(),
        ];
    }
}
