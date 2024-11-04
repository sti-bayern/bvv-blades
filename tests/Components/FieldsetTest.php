<?php

namespace Sti\BvvBlades\Tests\Components;

use Sti\BvvBlades\Tests\TestCase;


// use Tests\TestCase;

class FieldsetTest extends TestCase
{
    /** @test */
    public function it_renders_the_fieldset_component_without_legend()
    {
        $view = $this->blade(
            '<x-bvvblades-forms-fieldset />',
            ['title' => 'The card title']
        );

        $view->assertSeeInOrder(['<fieldset']);
        $view->assertDontSee('<legend');
    }

    /** @test */
    public function it_renders_the_fieldset_component_with_legend()
    {
        $legend = 'The fieldset legend';
        $view = $this->blade(
            '<x-bvvblades-forms-fieldset :legend="$legend" />',
            ['legend' => $legend]
        );

        $view->assertSeeInOrder(['<fieldset', '<legend', $legend]);
        $view->assertDontSee('<legend');
    }

    /** @test */
    public function it_renders_the_fieldset_component_with_span()
    {
        $view = $this->blade(
            '<x-bvvblades-forms-fieldset span="2" />'
        );

        $view->assertSeeInOrder(['<fieldset', 'col-span-2']);
    }
}
