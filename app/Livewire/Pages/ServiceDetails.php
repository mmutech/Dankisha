<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ServiceDetails extends Component
{
    public $service, $slug;

    protected $allServices = [
        'training' => [
            'title' => 'Training',
            'icon' => 'people',
            'img' => 'training.jpg',
            'slug' => 'training',
            'motto' => 'Empowering People. Elevating Performance. Reflects the goal of building capacity to drive better results.',
            'description' => 'Our training programs are designed to build capacity and improve individual and team performance through leadership development, digital skills, and hands-on vocational sessions.',
            'text1' => 'At Dankisha & Associates Ltd, our training programs are designed to transform individuals and organizations through capacity building and professional development. We believe that learning is a continuous journey, and our approach emphasizes practical application, innovation, and real-world relevance.',
            'text2' => 'Our training modules are tailored to meet the specific needs of clients across various sectors, ensuring that each program delivers measurable outcomes. We use a blended learning approach that combines interactive workshops, case studies, simulations, and e-learning to maximize engagement and knowledge retention.',
            'text3' => 'Our trainers are experts in their fields, bringing a wealth of knowledge and experience to every session. Whether you are an individual looking to upskill, a company seeking to improve workforce competence, or a public institution building capacity, we offer scalable, impact-driven training solutions.',
            'imgs' => [
                't1.jpg',
                't2.jpg',
                't3.jpg'
            ]
        ],
        'research' => [
            'title' => 'Research',
            'icon' => 'list',
            'img' => 'research.jpg',
            'slug' => 'research',
            'motto' => 'Insight That Drives Impact. Emphasizes how your research leads to informed, actionable decisions.',
            'description' => 'We carry out evidence-based research that drives strategic decisions, supports policy formulation, and improves organizational outcomes.',
            'text1' => 'At Dankisha & Associates Ltd, we understand that sound decisions are grounded in solid evidence. Our research services are designed to uncover insights, identify trends, evaluate impact, and inform strategy. We conduct rigorous, data-driven studies to help clients solve problems, innovate, and achieve their objectives.',
            'text2' => 'We leverage modern research tools, and digital data collection platforms to ensure accuracy and efficiency. Ethical considerations, confidentiality, and methodological integrity are central to our practice.',
            'text3' => 'What sets us apart is our strong commitment to research ethics, accuracy, and impact. We follow global best practices in study design, sampling, and data collection. Whether we’re conducting in-depth interviews in rural communities or deploying digital surveys to a global audience, our team ensures data integrity and cultural sensitivity at every stage.',
            'imgs' => [
                'r1.jpg',
                'r2.jpg',
                'r3.jpg'
            ]
        ],
        'consultancy' => [
            'title' => 'Consultancy',
            'icon' => 'chat-text',
            'img' => 'consultancy.jpg',
            'slug' => 'consultancy',
            'motto' => 'Solutions that Improve. Strategies that Deliver. Highlights your hands-on approach to improving organizational performance.',
            'description' => 'Our consulting services focus on diagnosing performance gaps and implementing practical strategies that lead to measurable improvements in efficiency and outcomes.',
            'text1' => 'Our consultancy services provide organizations with the guidance, tools, and strategies they need to overcome challenges, maximize opportunities, and achieve long-term goals. At Dankisha & Associates Ltd, we offer more than advice—we deliver results.',
            'text2' => 'We work closely with clients to understand their context, co-create solutions, and support implementation. Our consultants are not only subject matter experts but also skilled facilitators of change who bring industry insights and a hands-on approach to every engagement.',
            'text3' => 'We pride ourselves on building long-term partnerships with our clients, offering support that is strategic, innovative, and practical. Whether you need a one-off advisory or full-scale transformation, we are your trusted partner in success.',
            'imgs' => [
                'con1.jpg',
                'con2.jpg',
                'con3.jpg'
            ]
        ],
    ];

    public function mount($slug)
    {
        $this->slug = $slug;

        if (isset($this->allServices[$slug])) {
            $this->service = $this->allServices[$slug];
        } else {
            abort(404); // Not found
        }
    }

    public function render()
    {
        return view('livewire.pages.service-details');
    }
}
