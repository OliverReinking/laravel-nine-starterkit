<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $last_login_at = null;

        $zufall = random_int(1, 10);
        if ($zufall < 10) {
            $last_login_at = Carbon::now()->addMinutes($this->faker->numberBetween(-1000000,  -1));
        }

        $zufall_admin = random_int(1, 10);
        $is_admin = false;
        if ($zufall_admin > 9) {
            $is_admin = true;
        }

        $zufall_employee = random_int(1, 10);
        $is_employee = false;
        if ($zufall_employee > 8) {
            $is_employee = true;
        }

        $zufall_customer = random_int(1, 10);
        $is_customer = false;
        if ($zufall_customer > 1) {
            $is_customer = true;
        }
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => Carbon::now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            //
            'is_admin' => $is_admin,
            'is_employee' => $is_employee,
            'is_customer' => $is_customer,
            'last_login_at' => $last_login_at
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    public function withPersonalTeam()
    {
        if (!Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(function (array $attributes, User $user) {
                    return ['name' => $user->name . '\'s Team', 'user_id' => $user->id, 'personal_team' => true];
                }),
            'ownedTeams'
        );
    }
}
