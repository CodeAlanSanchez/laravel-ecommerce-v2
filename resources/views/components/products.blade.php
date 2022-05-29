<div class="products__section">
    <h4 class="products__title">
        {{ $product_title }}
    </h4>
    <div class="products__list">
        @foreach ($products as $product)
            <a class="product__container" href="{{ $product['link'] }}">
                <img class="product__image" src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                <h6 class="product__name">
                    {{ $product['name'] }}
                </h6>
                <p class="product__description">
                    {{ $product['description'] }}
                </p>
                <hr class="product__divider">
                <p class="product__price">
                    {{ $product['price'] }}
                </p>
            </a>
        @endforeach
    </div>
</div>
