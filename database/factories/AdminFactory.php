<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid'=>$this->faker->uuid(),
            'full_name'=>'Salihu Ismail Jibril',
            'email'=>'7.fadil01@gmail.com',
            'phone_number'=>'08118870934',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender'=>'Male',
            'marital_status'=>'Single',
            'date_of_birth'=>$this->faker->date(),
            'address'=>'Bolari East'
        ];
    }
}
