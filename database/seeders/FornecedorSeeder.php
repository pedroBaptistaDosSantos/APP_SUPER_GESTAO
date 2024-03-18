<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fornecedor = new Fornecedor();        
        
        $fornecedor->nome =  'Fornecedor 100';
        $fornecedor->site =  'Fornecedor100.com.br';
        $fornecedor->uf =  'CE';
        $fornecedor->email =  'contato@fornecedor100.com.br';
        $fornecedor->save();
    }
}
