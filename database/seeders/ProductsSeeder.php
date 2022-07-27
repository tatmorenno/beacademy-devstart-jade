<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory()->create([
            'name' => 'Samsung Galaxy S20 FE',
            'description' => 'Este é o smartphone para pessoas que querem tudo. Ouvimos vocês, os fãs, e agora não precisam mais ficar em dúvida sobre o que escolher. Este é o smartphone feito sob medida para fãs de todos os tipos. Então, se você é fã de fotografia, jogos ou adora deixar seu feed repleto de tudo que o inspira, nós reunimos a combinação definitiva de inovação S20. Este é o smartphone que oferece o que você deseja, para você fazer mais daquilo que ama.',
            'cost_price' => '2450.90',
            'sale_price' => '2199.00',
            'image' => 'https://images.kabum.com.br/produtos/fotos/155473/smartphone-samsung-galaxy-s20-fe-128gb-6gb-ram-octa-core-camera-tripla-carregamento-super-rapido-cloud-navy-sm-g780gzbrzto_1620393794_gg.jpg',
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Smartphone Motorola Moto Edge 20',
            'description' => 'O Primeiro 5G com Design Ultrafino do Brasil
            Com uma estrutura única em liga de alumínio, o motorola edge 20 é ultraleve, mas super-resistente. Ele cabe fácil no bolso ou na bolsa. Com apenas 6,99 mm, é um dos aparelhos mais finos no mercado e o smartphone 5G mais fino que já produzimos.',
            'cost_price' => '2300.00',
            'sale_price' => '3200.90',
            'image' => 'https://images.kabum.com.br/produtos/fotos/219451/smartphone-motorola-xt2143-1-moto-edge-20-128gb-108mp-6-7-capa-protetora-preto-par00031br_1631969943_gg.jpg',
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Smartphone Samsung Galaxy M12',
            'description' => 'Galaxy M12 mais display significa mais espaço para jogar
            Expanda sua visão com o Infinity-V Display de 6.5 polegadas do Galaxy M12 e veja o que você estava perdendo. Com tecnologia HD+, seu conteúdo diário fica nítido e claro.',
            'cost_price' => '620.95',
            'sale_price' => '1200.00',
            'image' => 'https://images.kabum.com.br/produtos/fotos/155488/smartphone-samsung-galaxy-m12-64gb-4gb-ram-octa-core-camera-quadrupla-5000mah-verde-sm-m127fzgszto_1622118423_gg.jpg',
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Smartphone Xiaomi Redmi Note 11',
            'description' => 'A série Redmi Note 11 chega com desempenho de campeão e pronto para qualquer desafio. O processador Qualcomm Snapdragon® 680 Octa-core com tecnologia de 6nm é rápido, poderoso e gerencia a eficiência energética para aprimorar a vida útil da bateria de 5000mAh. O carregamento ultrarrápido de 33W além de otimizar o seu tempo permite que você volte a usar o smartphone com carga total e máximo desempenho.',
            'cost_price' => '930.00',
            'sale_price' => '1590.99',
            'image' => 'https://images.kabum.com.br/produtos/fotos/316473/smartphone-xiaomi-redmi-note-11-4gb-ram-128gb-octa-core-camera-quadrupla-50mp-tela-de-6-43-azul-escuro-cx332aze_1647522267_gg.jpg',
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'iPhone 11',
            'description' => 'Novo sistema de câmera dupla. Bateria que dura o dia todo. O vidro mais resistente em um smartphone. E o chip mais rápido da Apple. Grave vídeos 4K, faça belos retratos e capture paisagens inteiras com o novo sistema de câmera dupla. Deixe seu dia mais bonito.',
            'cost_price' => '2700.00',
            'sale_price' => '3420.99',
            'image' => 'https://images.kabum.com.br/produtos/fotos/131015/iphone-11-preto-64gb-mhda3br-a_1605027866_gg.jpg',
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'iPhone 13 Pro',
            'description' => 'Novo sistema de câmera dupla. Bateria que dura o dia todo. O vidro mais resistente em um smartphone. E o chip mais rápido da Apple. Grave vídeos 4K, faça belos retratos e capture paisagens inteiras com o novo sistema de câmera dupla. Deixe seu dia mais bonito.',
            'cost_price' => '5450.00',
            'sale_price' => '6999.00',
            'image' => 'https://images.kabum.com.br/produtos/fotos/239739/iphone-13-pro-128gb-dourado-5g-tela-de-6-1-camera-tripla-12mp-mlvc3bz-a_1634140850_gg.jpg',
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Smartphone Xiaomi 12',
            'description' => 'O Xiaomi 12 é um smartphone Android de bom nível, ótimo para fotos, que pode satisfazer até o mais exigente dos usuários. Tem uma enorme tela Touchscreen de 6.28 polegadas com uma resolução de 2400x1080 pixel. Sobre as características deste Xiaomi 12 na verdade não falta nada.',
            'cost_price' => '4300.00',
            'sale_price' => '5770.89',
            'image' => 'https://images.kabum.com.br/produtos/fotos/sync_mirakl/354964/Smartphone-Xiaomi-12-5g-Dual-Sim-128gb-8gb-Ram-Cor-cinza_1654264650_gg.jpg',
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Smartphone LG K61',
            'description' => 'Para você que busca um Smartphone novo para você ou para presentear alguém que ama, opte pelo LG K61 na cor branca.
            Ele tem câmera traseira quádrupla de 48MP + 8MP + 5MP + 2MP com Zoom digital de 4x e Selfie de 16MP com Flash LED, detector de faces e foco automático, tudo para você tirar fotos com alta qualidade.',
            'cost_price' => '970.00',
            'sale_price' => '1580.95',
            'image' => 'https://images.kabum.com.br/produtos/fotos/sync_mirakl/133496/Smartphone-LG-K61-128GB-48MP-Tela-6-5-Branco_1655993148_gg.jpg',
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Smartphone LG K71',
            'description' => 'Surpreenda-se com este smartphone da LG! O K71 entrega fotos de nível profissional, pois conta com um conjunto de 03 câmeras na parte de trás do aparelho, permitindo que você capte as melhores fotografias em qualquer situação de luz. Faça fotos criativas e compartilhe nas redes sociais com a câmera frontal de 32MP. Sua tela de 6,8´´ U-Notch FHD+ com proporção de 20.5:9 oferecem a melhor experiência para você ver seus conteúdos de maneira mais imersiva e com visual impressionante.',
            'cost_price' => '1400.30',
            'sale_price' => '2199.00',
            'image' => 'https://images.kabum.com.br/produtos/fotos/sync_mirakl/134319/Smartphone-LG-K71-tela-6-8-128GB-C-mera-Tripla-de-18MP-5MP-5MP-Branco_1655994389_gg.jpg',
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Smartphone Motorola Moto G20',
            'description' => 'Dê vida a jogos, filmes e videochamadas com a tela Max Vision HD+ de 6,5 polegadas. E com uma taxa de 90 Hz no Smartphone Moto G20, o lag dá lugar a uma visualização mais fluida e um desempenho muito mais suave.',
            'cost_price' => '640.89',
            'sale_price' => '1129.00',
            'image' => 'https://images.kabum.com.br/produtos/fotos/274005/smartphone-motorola-moto-g20-128gb-4gb-ram-octa-core-camera-tripla-verde-capa-protetora-pang0056br_1637688569_gg.jpg',
        ]);




        // \App\Models\Product::factory(10)->create();
    }
}
