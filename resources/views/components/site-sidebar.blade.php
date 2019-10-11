<div id="sidebar">
    @foreach ($rootCategories as $rootCategory)
        <section>
            <div>{{ $rootCategory->name }}</div>
            <ul class="nav flex-column">
                @foreach ($rootCategory->categories as $category)
                    <li class="nav-item dropdown dropdown-right">
                        <a href="/products/{{ $category->slug }}" class="nav-link dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">
                            {{ $category->name }}
                        </a>
                        @if (count($category->products) > 0)
                            <div class="dropdown-menu">
                                @foreach ($category->products as $product)
                                    <a href="/products/{{ $product->slug }}" class="dropdown-item">{{ $product->name }}</a>
                                @endforeach
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
        </section>
    @endforeach
</div>
