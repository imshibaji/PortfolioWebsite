<?php

namespace App\View\Components;

use App\Models\Testimonial;
use Illuminate\View\Component;

class ClientTestimonialSlider extends Component
{
    public $testimonials;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($limit=1)
    {
        // $this->testimonials = Testimonial::published()->inRandomOrder()->limit($limit)->get();
        $this->testimonials = Testimonial::published()->hasMeta(['customer_type' => 'Client'])->inRandomOrder()->limit($limit)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.client-testimonial-slider');
    }
}
