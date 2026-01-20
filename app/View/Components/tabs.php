<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tabs extends Component
{
    public array $tabs;      // The tab titles (formatted nicely)
    public array $disabled;  // Disabled tabs (1-based positions)
    public int $active;      // Active tab index (0-based for Alpine)

    public function __construct(array $tabs = [], array $disabled = [], $active = 1)
    {
        // Convert tab keys like "register-patient" => "Register patient"
        $this->tabs = array_map(function ($tab) {
            return ucfirst(str_replace('-', ' ', strtolower($tab)));
        }, $tabs);

        $this->disabled = $disabled;

        // Convert active from 1-based to 0-based
        $activeIndex = ((int) $active) - 1;

        // Prevent negative values
        if ($activeIndex < 0) {
            $activeIndex = 0;
        }

        // Prevent values bigger than the last tab index
        $maxIndex = max(count($tabs) - 1, 0);
        if ($activeIndex > $maxIndex) {
            $activeIndex = 0;
        }

        // If the selected active tab is disabled, choose the first enabled tab
        if (in_array($activeIndex + 1, $disabled)) {
            $activeIndex = 0;

            for ($i = 0; $i <= $maxIndex; $i++) {
                if (!in_array($i + 1, $disabled)) {
                    $activeIndex = $i;
                    break;
                }
            }
        }

        $this->active = $activeIndex;
    }

    public function render()
    {
        return view('components.tabs');
    }
}
