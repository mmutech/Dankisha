<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class AboutPage extends Component
{
    public $about, $vision, $mission;

    public function mount()
    {
        $this->about = [
            'p1' => 'Dankisha & Associates Ltd, is a dynamic Training, Research, and Consultancy firm with specialized expertise in performance improvement, production optimization, revenue generation, leadership, entrepreneurship, and strategic innovation.',
            'p2' => 'We partner with organizations—public and private—to drive transformation through strategic training, ethical leadership development, and tailored consultancy solutions. Our work is rooted in helping institutions enhance their service delivery, strengthen governance structures, optimize operational costs, and develop resilient strategies for long-term success.',
            'p3' => 'Our team consists of industry experts, thought leaders, and experienced facilitators dedicated to delivering measurable results and sustainable value.',
            'wcu' => 'At Dankisha & Associates Ltd, we combine deep industry expertise with a results-driven approach to deliver training, research, and consultancy solutions that create real impact. Our services are tailored to your unique needs, backed by research, and delivered with excellence and integrity. We are committed to helping organizations improve performance, drive innovation, and achieve sustainable growth—ethically and efficiently.'
        ];

        $this->vision = [
            'p1' => 'To be a leading force in shaping high-performing organizations through transformative training, innovative research, and strategic consultancy.'
        ];

        $this->mission = [
            'p1' => 'To empower individuals and organizations by providing tailored solutions that foster ethical leadership, strategic growth, operational efficiency, and sustainable development.'
        ];

    }

    public function render()
    {
        return view('livewire.pages.about-page');
    }
}
