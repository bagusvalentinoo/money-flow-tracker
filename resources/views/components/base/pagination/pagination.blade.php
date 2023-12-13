@props([
    'className' => '',
])

<nav {{ $attributes->merge(['class' => $className]) }} aria-label="Page navigation">
    <ul class="pagination pagination-primary">
        <li class="page-item"><a class="page-link" href="#">
                <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
            </a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">
                <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
            </a></li>
    </ul>
</nav>
