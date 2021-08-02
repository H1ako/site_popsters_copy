@for ($page_number = 1; $page_number <= $pages_amount; $page_number++)
    @if ($page_number == $current_page)
        <div class="page active">{{ $page_number }}</div>
    @else
        <div class="page">{{ $page_number }}</div>
    @endif
@endfor