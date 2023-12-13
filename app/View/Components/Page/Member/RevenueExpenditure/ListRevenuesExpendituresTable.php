<?php

namespace App\View\Components\Page\Member\RevenueExpenditure;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListRevenuesExpendituresTable extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.page.member.revenue-expenditure.list-revenues-expenditures-table');
    }
}
