<?php

namespace App\Http\Controllers;

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
        $testimonials = [
            [
                'name' => 'Janne Cooper',
                'comment' => 'Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.',
                'rating' => 4.3,
                'image' => 'images/4.jpg',
            ],
            [
                'name' => 'Cobocannaeru',
                'comment' => 'Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.',
                'rating' => 5.0,
                'image' => 'images/5.jpg',
            ],
        ];

        return view('home', compact('products', 'testimonials'));
    }
}
