<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $allowTags = '<a><br></br><p><span><h1><h2><h3><h4><h5><ul><li><ol><b><i><strong><em>';
        $isi = strip_tags($this->faker->randomHtml(15, 4), $allowTags);

        return [
            'judul' => $this->faker->text(50),
            'slug' => $this->faker->text(120),
            'foto' => 'sample-image/foto-' . $this->faker->numberBetween('1', '6') . '.jpg',
            'isi' => $isi,
        ];
    }
}
