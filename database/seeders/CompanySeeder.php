<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::factory()->create([
            'company_name' => 'Organize',
            'cpf_cnpj' => '000.000.000-00',
            'responsible_name' => 'Wilderlane',
            'phone' => '0',
            'cellphone' => '99 98467-6420',
            'email' => 'organize@organize.com',
            'plan_id' => '0',
        ]);
    }
}
