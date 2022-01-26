@extends('layouts.main-layout')

@section('title', 'Fitness - никогда не был ещё таким приятным!')

@section('content')
    <section class="hero hero--video" id="hero">
        <div class="hero-video">
            <video class="video hero__video" autoplay loop>
                <source type="video/mp4" src="{{ asset('video/background_video.mp4') }}"/>
            </video>
        </div>

        <div class="hero__wrapper">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero__title">Первоклассный спортивный зал</h1>
                    <p class="hero__text">
                        Подберём программу для твоего тела бесплатно
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="collection section" id="collection">
        <div class="container">
            <header class="section-header">
                <h2 class="section-header__title">Абонементы</h2>
            </header>

            <div class="section-content">
                <ul class="cards collection-items">
                    <!-- Start -->

                    @foreach($subscriptions as $subscription)
                        <li class="card collection-item">
                            <div class="box-image">
                                <img
                                    src="{{ asset('img/'. $subscription['image']) }}"
                                    alt="{{ $subscription['name'] }}"
                                    class="card__image"
                                />
                            </div>

                            <h3 class="card__title">{{ $subscription['name'] }}</h3>
                            <p class="card__text">
                                {{ $subscription['content'] }}
                            </p>

                            <button
                                data-id="{{ $subscription['id'] }}"
                                class="button button--outline button--large card__button w100 js-popup"
                            >
                                Забронировать за {{$subscription['price']}} рублей
                            </button>
                        </li>
                @endforeach
                <!-- End -->
                </ul>
            </div>
        </div>
    </section>

    <section class="reviews section" id="reviews">
        <div class="container">
            <header class="section-header">
                <h2 class="section-header__title">Отзывы</h2>
            </header>
            <div class="section-content">
                <div class="swiper reviews-list js-slider">
                    <div class="swiper-wrapper">
                        <!-- Start -->
                        <!-- group -->
                        <div class="swiper-slide review">
                            <div class="box-image">
                                <img src="{{ asset('img/review.jpg') }}" alt="Алан Богов - отзыв"/>
                            </div>

                            <h3 class="review__title">Алан Богов</h3>
                            <p class="text review__text">
                                Прекрасное место для хороших тренировок. Абонемент
                                "Экспертный" точно стоит своих денег.
                            </p>
                        </div>

                        <div class="swiper-slide review">
                            <div class="box-image">
                                <img
                                    src="{{ asset('img/placeholder_6.jpg') }}"
                                    alt="Исхаков Марс - отзыв"
                                />
                            </div>

                            <h3 class="review__title">Исхаков Марс</h3>
                            <p class="text review__text">
                                Приобрёл абонемент "Стандарт". Для человека с многолетним
                                опытом - его хвататет.
                            </p>
                        </div>

                        <div class="swiper-slide review">
                            <div class="box-image">
                                <img
                                    src="{{ asset('img/placeholder_5.jpg') }}"
                                    alt="Виолетта Чернышёва - отзыв"
                                />
                            </div>

                            <h3 class="review__title">Виолетта Чернышёва</h3>
                            <p class="text review__text">
                                Занимаюсь по абонементу "Продвинутый", выбрала направление
                                "йога". Очень довольна груповыми тренировками.
                            </p>
                        </div>

                        <div class="swiper-slide review">
                            <div class="box-image">
                                <img
                                    src="{{ asset('img/placeholder_4.jpg') }}"
                                    alt="Василий Рогов - отзыв"
                                />
                            </div>

                            <h3 class="review__title">Василий Рогов</h3>
                            <p class="text review__text">
                                Я как человек без опыта, но с диким желанием заняться своим
                                телом выбрал абонемент "Экспертный". Тренировки с тренером -
                                огонь!
                            </p>
                        </div>
                        <!-- /group -->
                        <!-- End -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="complex section" id="complex">
        <div class="container">
            <header class="section-header">
                <h2 class="section-header__title">Спортивный зал</h2>
            </header>
        </div>

        <div class="section-content">
            <div class="swiper gallery" id="gallery">
                <div class="swiper-wrapper">
                    <!-- Start -->
                    <div class="swiper-slide">
                        <div class="box-image">
                            <img src="{{ asset('img/gym_1.jpg') }}" alt="Наш зал"/>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="box-image">
                            <img src="{{ asset('img/gym_2.jpg') }}" alt="Наш зал"/>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="box-image">
                            <img src="{{ asset('img/gym_3.jpg') }}" alt="Наш зал"/>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="box-image">
                            <img src="{{ asset('img/gym_4.jpg') }}" alt="Наш зал"/>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="box-image">
                            <img src="{{ asset('img/gym_5.jpg') }}" alt="Наш зал"/>
                        </div>
                    </div>
                    <!-- End -->
                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination container"></div>
            </div>
        </div>
    </section>
@endsection
