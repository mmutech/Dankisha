<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ServicesPage extends Component
{
    public $services;

    public function mount()
    {
        $this->services = [
            'training' => [
                'title' => 'Training',
                'icon' => 'people',
                'img' => 'training.jpg',
                'slug' => 'training',
                'description' => 'Our training programs are designed to build capacity and improve individual and team performance through leadership development, digital skills, and hands-on vocational sessions.',
                'types' => [
                    'Leadership Development',
                    'Digital Skills Training',
                    'Vocational Training'
                ]
            ],
            'research' => [
                'title' => 'Research',
                'icon' => 'search',
                'img' => 'research.jpg',
                'slug' => 'research',
                'description' => 'We carry out evidence-based research that drives strategic decisions, supports policy formulation, and improves organizational outcomes.',
                'types' => [
                    'Market Research',
                    'Policy Analysis',
                    'Impact Assessments'
                ]
            ],
            'consultancy' => [
                'title' => 'Consultancy',
                'icon' => 'chat-text',
                'img' => 'consultancy.jpg',
                'slug' => 'consultancy',
                'description' => 'Our consulting services focus on diagnosing performance gaps and implementing practical strategies that lead to measurable improvements in efficiency and outcomes.',
                'types' => [
                    'Business Strategy',
                    'Organizational Development',
                    'Change Management'
                ]
            ],
        ];


    }
    public function render()
    {
        return view('livewire.pages.services-page');
    }
}
