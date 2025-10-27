<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = \App\Models\Project::class;

    public function definition(): array
    {
        $title = fake()->unique()->sentence(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . fake()->unique()->numerify('##'),
            'excerpt' => fake()->paragraph(),
            'body' => collect(fake()->paragraphs(4))->map(fn($p) => "<p>{$p}</p>")->implode("\n"),
            'cover_image' => null,
            'repo_url' => null,
            'live_url' => null,
            'featured' => fake()->boolean(20),
            'published_at' => fake()->dateTimeBetween('-2 years', 'now'),
        ];
    }
}
