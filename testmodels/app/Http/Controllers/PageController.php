<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home(): View
    {
        $features = [
            [
                'icon' => '☕',
                'title' => 'Café de Especialidad',
                'description' => 'Seleccionamos granos de las mejores fincas de Colombia, Etiopía y Guatemala, cosechados a mano en su punto óptimo de madurez.',
            ],
            [
                'icon' => '🌿',
                'title' => 'Ingredientes Orgánicos',
                'description' => 'Todos nuestros productos son 100% orgánicos y libres de pesticidas. Cuidamos la tierra para que tú cuides tu salud.',
            ],
            [
                'icon' => '🤝',
                'title' => 'Comercio Justo',
                'description' => 'Trabajamos directamente con los productores, garantizando precios justos y condiciones dignas para las familias cafeteras.',
            ],
        ];

        return view('home', compact('features'));
    }

    /**
     * Display the menu page.
     */
    public function menu(): View
    {
        $menuCategories = [
            [
                'name' => 'Espresso y Derivados',
                'items' => [
                    ['name' => 'Espresso Solo', 'price' => '2.50', 'description' => 'Concentrado puro de 30 ml, intenso y aromático con crema natural.'],
                    ['name' => 'Cortado', 'price' => '2.80', 'description' => 'Espresso con un toque de leche vaporizada para suavizar la acidez.'],
                    ['name' => 'Cappuccino', 'price' => '3.50', 'description' => 'Espresso doble con leche vaporizada y espuma cremosa en proporción perfecta.'],
                    ['name' => 'Latte Art', 'price' => '4.00', 'description' => 'Espresso con leche vaporizada sedosa y arte latte dibujado a mano.'],
                ],
            ],
            [
                'name' => 'Cold & Frío',
                'items' => [
                    ['name' => 'Cold Brew 12h', 'price' => '4.50', 'description' => 'Infusión lenta en frío durante 12 horas. Suave, con notas de chocolate oscuro.'],
                    ['name' => 'Nitro Cold Brew', 'price' => '5.00', 'description' => 'Cold brew cargado con nitrógeno para una textura aterciopelada y espumosa.'],
                    ['name' => 'Espresso Tónico', 'price' => '4.20', 'description' => 'Espresso sobre agua tónica con hielo, una combinación refrescante y vibrante.'],
                ],
            ],
            [
                'name' => 'Pasteles y Repostería',
                'items' => [
                    ['name' => 'Croissant de Mantequilla', 'price' => '3.00', 'description' => 'Horneado cada mañana, crujiente por fuera y tierno por dentro.'],
                    ['name' => 'Bizcocho de Avena y Arándanos', 'price' => '3.50', 'description' => 'Hecho con avena integral y arándanos frescos, sin azúcar refinada.'],
                    ['name' => 'Tarta de Queso y Maracuyá', 'price' => '4.20', 'description' => 'Nuestra especialidad de la casa: cremosa, ácida y deliciosamente equilibrada.'],
                ],
            ],
        ];

        return view('menu', compact('menuCategories'));
    }

    /**
     * Display the about page.
     */
    public function about(): View
    {
        $milestones = [
            ['year' => '2015', 'title' => 'El Comienzo', 'description' => 'Ana y Marco abren Café Raíces en un pequeño local de 30 m² en el barrio de Lavapiés, con una cafetera y mucha ilusión.'],
            ['year' => '2018', 'title' => 'Primer Reconocimiento', 'description' => 'Ganamos el premio «Mejor Café de Especialidad de Madrid» otorgado por la Asociación Española de Catadores.'],
            ['year' => '2021', 'title' => 'Expansión Responsable', 'description' => 'Abrimos nuestra segunda ubicación en el barrio de Malasaña, manteniendo nuestros estándares artesanales.'],
            ['year' => '2024', 'title' => 'Hoy', 'description' => 'Más de 200 familias cafeteras nos confían sus cosechas. Seguimos creciendo sin perder nuestra esencia.'],
        ];

        $values = [
            ['title' => 'Autenticidad', 'description' => 'Cada taza refleja el trabajo honesto del productor y del barista. Sin atajos, sin compromisos.'],
            ['title' => 'Sostenibilidad', 'description' => 'Vasos compostables, café en grano sin envases plásticos y residuos de café que donamos como abono.'],
            ['title' => 'Comunidad', 'description' => 'Organizamos catas, talleres y eventos para conectar a las personas a través del café.'],
        ];

        return view('about', compact('milestones', 'values'));
    }
}
