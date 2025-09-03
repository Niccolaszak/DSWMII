<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Acesso;

class AcessoModelTest extends TestCase
{
    /* 
    @test
    */
    
    public function deve_verificar_campos(): void
    {
        $acesso = new Acesso();
        $this->assertEquals([
            'url',
            'metodo',
            'ip_cliente',
            'status_code',
        ],$acesso->getFillable());
    }
}
