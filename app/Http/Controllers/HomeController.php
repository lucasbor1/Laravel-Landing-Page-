<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        // Dados mocados de produtos
        $products = [
            [
                'name' => 'White Aesthetic Chair',
                'description' => 'Combination of wood and wool',
                'price' => '$63.47',
                'image' => 'images/1.jpg'
            ],
            [
                'name' => 'Bardono Smart Lamp',
                'description' => 'Easy to use with bluetooth connection',
                'price' => '$62.23',
                'image' => 'images/2.jpg'
            ],
            [
                'name' => 'Sofa Empuk Banget',
                'description' => 'Using kapuk randu material',
                'price' => '$58.39',
                'image' => 'images/3.jpg'
            ]
        ];

        // Dados mocados de depoimentos
        $testimonials = [
            [
                'name' => 'Janne Cooper',
                'comment' => 'Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.',
                'rating' => 4.3,
                'image' => 'images/4.jpg'
            ],
            [
                'name' => 'Cobocannaeru',
                'comment' => 'Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.',
                'rating' => 5.0,
                'image' => 'images/5.jpg'
            ]
        ];

        return view('home', compact('products', 'testimonials'));
    }
}
