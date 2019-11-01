{{--
<div id="sidebar" class="list-group">
@foreach ($rootCategories as $rootCategory)
    <section class="border rounded">
        <h4 class="list-group-item font-weight-bold text-center border border-right">{{ $rootCategory->name }}</h4>
        <ul class="nav flex-column">
        @foreach ($rootCategory->categories as $category)
            <li class="nav-item dropdown dropdown-right">
                <div>
                    <a href="/products/{{ $category->slug }}" title="{{ $category->name }}" class="nav-link dropdown-toggle border"  role="button" aria-haspopup="true" aria-expanded="false">
                        {{ $category->name }}
                    </a>
                </div>
            @if (count($category->products) > 0)
                <div class="dropdown-menu">
                    @foreach ($category->products as $product)
                    <a href="../products/{{ $category->slug }}#{{ $product->slug }}" class="dropdown-item" title="{{ $product->name }}">{{ $product->name }}</a>
                    @endforeach
                </div>
            @endif
            </li>
        @endforeach
        </ul>
    </section>
@endforeach
</div>
--}}
