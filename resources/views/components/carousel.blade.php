<div class="carousel">
    <button class="carousel__button carousel__button-left">
        <i class="fa-solid fa-chevron-left"></i>
    </button>

    <div class="carousel__track-container">
        <ul class="carousel__track">
            @foreach ($slides as $slide)
                <li class="carousel__slide">
                    <img class="carousel__image" src="{{ $slide['image_url'] }}" alt="{{ $slide['image_name'] }}">
                </li>
            @endforeach
        </ul>
    </div>
    <button class="carousel__button carousel__button-right">
        <i class="fa-solid fa-chevron-right"></i>
    </button>
    <div class="carousel__nav">
    </div>
</div>
