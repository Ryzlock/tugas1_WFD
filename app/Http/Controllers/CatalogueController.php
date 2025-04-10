<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    private $items = [
        1 => ['name' => 'Copper', 'image' => 'images/copper-removebg-preview.png', 
        'description' => 'Add a touch of warmth to your collection with this copper cube. Its rich, reddish-brown hue and glossy finish make it a standout, while its excellent conductivity and corrosion resistance nod to its practical legacy in wiring and art. Lightweight and malleable, this cube is perfect for enthusiasts and creators alike.'],
        2 => ['name' => 'Tungsten', 'image' => 'images/tungsten-removebg-preview.png',
        'description' => 'Experience unmatched density with our tungsten cube—a hefty, steely-gray marvel that’s nearly twice as dense as lead. With a mirror-like polish and incredible hardness, it boasts one of the highest melting points known (over 3,400°C). Ideal for collectors seeking a premium, indestructible keepsake.'],
        3 => ['name' => 'Iron', 'image' => 'images/iron-removebg-preview.png', 
        'description' => 'Own a piece of history with this iron cube. Its classic silvery-gray sheen and magnetic allure evoke the strength of the industrial age. Moderately heavy and prone to a rustic patina if uncoated, it’s a timeless addition for those who value raw durability and character.'],
        4 => ['name' => 'Aluminum', 'image' => 'images/aluminum-removebg-preview.png', 
        'description' => 'Light yet tough, the aluminum cube shines with a sleek, silvery finish that resists corrosion naturally. Its low density and versatility make it a modern favorite, from aerospace to everyday design. Perfect for buyers who want strength without the weight—a subtle showpiece with practical roots.'],
        5 => ['name' => 'Titanium', 'image' => 'images/titanium-removebg-preview.png', 
        'description' => 'Elevate your collection with the titanium cube—lightweight, silver-gray, and exceptionally strong. Renowned for its corrosion resistance and high strength-to-weight ratio, it’s a premium pick with a brushed, sophisticated look. A must-have for fans of aerospace, tech, or simply standout craftsmanship.'],
        6 => ['name' => 'Molybdenum', 'image' => 'images/molybdenum-removebg-preview.png', 
        'description' => 'Discover the understated power of our molybdenum cube. Its dark, silvery gleam and impressive density pair with a melting point over 2,600°C, making it a hidden gem among metals. Corrosion-resistant and robust, it’s a sleek, durable choice for collectors who appreciate the rare and refined.'],
    ];

    public function index()
    {
        return view('catalogue', ['items' => $this->items]);
    }
    
    public function show($id)
{
    if (!isset($this->items[$id])) {
        abort(404);
    }

    $item = $this->items[$id];

    $ids = array_keys($this->items);
    $currentIndex = array_search($id, $ids);
    
    $prevId = $currentIndex > 0 ? $ids[$currentIndex - 1] : null;
    $nextId = $currentIndex < count($ids) - 1 ? $ids[$currentIndex + 1] : null;

    return view('cube', compact('item', 'prevId', 'nextId'));
}
    
}