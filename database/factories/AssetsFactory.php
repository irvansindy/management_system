<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Assets;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assets>
 */
class AssetsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Assets::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => fake()->uuid(),
            'assetNumber' => fake()->randomNumber(5, true),
            'assetName' => fake()->word(2, true),
            'assetSlug' => Str::slug(fake()->word(2, true)),
            'assetDescription' => fake()->sentences(),
            'assetCategoryId' => fake()->randomDigit(),
            'assetSubCategoryId' => fake()->randomDigit(),
            'assetLocationId' => fake()->randomDigit(),
            'assetDate' => fake()->dateTime(),
            'assetUserId' => fake()->randomDigit(),
            'assetStatus' => fake()->randomDigit(),
            'assetImageUrl' => fake()->imageUrl($width = 640, $height = 480),
        ];
    }
}
