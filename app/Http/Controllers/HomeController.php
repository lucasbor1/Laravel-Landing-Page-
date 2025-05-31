<?php

namespace App\Http\Controllers;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Dados mocados de produtos
        $products = [
            [
                'category' => 'Bookshelf',
                'name' => 'Wooden Bookshelf',
                'description' => 'Made of wood and wool',
                'price' => 80.47,
                'image' => 'images/bookshelf.jpg'
            ],
            [
                'category' => 'Chair',
                'name' => 'White Aesthetic Chair',
                'description' => 'Combination of wood and wool',
                'price' => 63.47,
                'image' => 'images/chair.jpg'
            ],
            [
                'category' => 'Lamp',
                'name' => 'Bardono Smart Lamp',
                'description' => 'Easy to use with bluetooth connection',
                'price' => 62.23,
                'image' => 'images/lamp.jpg'
            ],
            [
                'category' => 'Sofa',
                'name' => 'Sofa Empuk Banget',
                'description' => 'Using kapuk randu material',
                'price' => 58.39,
                'image' => 'images/sofa.jpg'
            ],
            [
                'category' => 'Decor',
                'name' => 'Framed Plant Print',
                'description' => 'Minimalist botanical print with natural wood frame.',
                'price' => 49.99,
                'image' => 'images/decor.jpg'
            ],
            [
                'category' => 'Furniture',
                'name' => 'Modern White Cabinet',
                'description' => 'Elegant storage cabinet with wooden top finish.',
                'price' => 189.90,
                'image' => 'images/furniture.jpg'
            ],
            [
                'category' => 'Workspace',
                'name' => 'Compact Desk Setup',
                'description' => 'Perfect desk combo for productivity and comfort.',
                'price' => 149.00,
                'image' => 'images/workspace.jpg'
            ],
            [
                'category' => 'Desk',
                'name' => 'Minimalist Vase Decor',
                'description' => 'Slim white vase with artificial flower for elegance.',
                'price' => 29.90,
                'image' => 'images/desk.jpg'
            ],
            [
                'category' => 'Living Room',
                'name' => 'Woven Wood Cabinet',
                'description' => 'Stylish cabinet with natural textures and cozy tone.',
                'price' => 239.90,
                'image' => 'images/living-room.jpg'
            ]
        ];

        // Dados mocados de depoimentos
        $faker = Faker::create();
        
        // Gerar 10 depoimentos com Lorem Ipsum
        $testimonials = [];
        for ($i = 0; $i < 10; $i++) {
            $testimonials[] = [
                'name' => $faker->name,
                'comment' => $faker->paragraph(2),
                'rating' => $faker->randomFloat(1, 3.0, 5.0),
                'image' => 'https://ui-avatars.com/api/?name=' . urlencode($faker->name) . '&background=random&color=fff&size=60',
            ];
        }

        // Dados dos artigos com estrutura para o carrossel
        $articleImages = [
            'desk.jpg',
            'workspace.jpg',
            'furniture.jpg',
            'decor.jpg'
        ];
        
        $articles = [];
        $titles = [
            'Create Cozy Dining Room Vibes',
            '6 ways to give your home minimalistic vibes',
            'How to make your interiors cooler and more stylish',
            'Elements to add character to your space'
        ];
        
        for ($i = 0; $i < 4; $i++) {
            $authorName = $faker->name;
            $articles[] = [
                'category' => $faker->randomElement(['Tips and Trick', 'Design Inspiration']),
                'title' => $titles[$i],
                'description' => $faker->paragraph(1),
                'image' => 'images/' . $articleImages[$i],
                'author' => [
                    'name' => $authorName,
                    'avatar' => 'https://ui-avatars.com/api/?name=' . urlencode($authorName) . '&background=random&color=fff&size=60',
                    'date' => $faker->date('l, j F Y'),
                ],
                'featured' => $i === 0, // O primeiro artigo começa como featured
                'active' => $i === 0,   // O primeiro artigo começa como ativo
                'order' => $i           // Ordem inicial dos artigos
            ];
        }

        return view('home', compact('products', 'testimonials', 'articles'));
    }
}
