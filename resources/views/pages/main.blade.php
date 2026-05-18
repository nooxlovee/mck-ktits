@extends('layouts.app')


@section('content')
    <section class="hero-banner">
        <img src="{{asset('media/images/ktits.jpg')}}" alt="" class="hero-banner__photo">
        <div class="hero-banner__panel"></div>
        <div class="container hero-banner__inner">
            <div class="hero-banner__content">
                <div class="hero-banner__contacts">
                    <a href="tel:+79999999999" class="hero-banner__contact">
                        <img src="{{asset('media/images/icons/phone.svg')}}" alt="" class="hero-banner__contact-icon">
                        +7 (999) 999-99-99
                    </a>
                    <a href="mailto:info@ktits.ru" class="hero-banner__contact">
                        <img src="{{asset('media/images/icons/email.svg')}}" alt="" class="hero-banner__contact-icon">
                        info@ktits.ru
                    </a>
                </div>

                <div class="hero-banner__brand">
                    <img src="{{asset('media/images/logo/white.svg')}}" alt="Логотип МЦК-КТИТС" class="hero-banner__logo">

                    <div class="hero-banner__brand-text">
                        <div class="hero-banner__brand-title">МЦК-КТИТС</div>
                        <div class="hero-banner__brand-subtitle">
                            Казанский техникум информационных технологий и связи
                        </div>
                    </div>
                </div>

                <div class="hero-banner__text">
                    <h1 class="hero-banner__title">Приемная комиссия</h1>
                    <p class="hero-banner__eyebrow">Чемпионами становятся здесь!</p>

                </div>
            </div>
        </div>
    </section>
    <section class="quick-links-section">
        <div class="container">
            <div class="quick-links">
                <div class="quick-links__grid">
                    <a class="quick-link-card" href="{{route('view.specialities')}}">
                        <span class="quick-link-card__text">Специальности</span>
                        <span class="quick-link-card__icon">
                            <img src="{{asset('media/images/icons/иконка%20перехода.svg')}}" alt="" width="20" height="20">
                        </span>
                    </a>
                    <a class="quick-link-card" href="{{route('view.numbers')}}">
                        <span class="quick-link-card__text">Контрольные цифры приема</span>
                        <span class="quick-link-card__icon">
                            <img src="{{asset('media/images/icons/иконка%20перехода.svg')}}" alt="" width="20" height="20">
                        </span>
                    </a>
                    <a class="quick-link-card" href="#podachazayavleni">
                        <span class="quick-link-card__text">Условия подачи заявления</span>
                        <span class="quick-link-card__icon">
                            <img src="{{asset('media/images/icons/иконка%20перехода.svg')}}" alt="" width="20" height="20">
                        </span>
                    </a>
                    <a class="quick-link-card" href="{{route('view.faq')}}">
                        <span class="quick-link-card__text">Часто задаваемые вопросы</span>
                        <span class="quick-link-card__icon">
                            <img src="{{asset('media/images/icons/иконка%20перехода.svg')}}" alt="" width="20" height="20">
                        </span>
                    </a>
                    <a class="quick-link-card" href="{{route('view.documents')}}">
                        <span class="quick-link-card__text">Нормативные документы</span>
                        <span class="quick-link-card__icon">
                            <img src="{{asset('media/images/icons/иконка%20перехода.svg')}}" alt="" width="20" height="20">
                        </span>
                    </a>
                    <a class="quick-link-card" href="{{route('view.contacts')}}">
                        <span class="quick-link-card__text">Контакты приемной комиссии</span>
                        <span class="quick-link-card__icon">
                            <img src="{{asset('media/images/icons/иконка%20перехода.svg')}}" alt="" width="20" height="20">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="admission-steps">
        <div class="container">
            <div class="admission-steps__panel" id="podachazayavleni">
                <div class="admission-steps__head">
                    <h2 class="admission-steps__title">Порядок действий для поступления</h2>
                </div>

                <aside class="admission-notice">
                    <div class="admission-notice__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                             stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3.5" y="5" width="17" height="15" rx="2.5"></rect>
                            <path d="M3.5 9.5h17"></path>
                            <path d="M8 3v4"></path>
                            <path d="M16 3v4"></path>
                        </svg>
                    </div>
                    <div class="admission-notice__body">
                        <h3 class="admission-notice__title">Приёмная комиссия принимает документы</h3>
                        <ul class="admission-notice__dates">
                            <li>
                                <span class="admission-notice__tag">Бюджет</span>
                                <span>16 июня — 15 августа включительно</span>
                            </li>
                            <li>
                                <span class="admission-notice__tag">Внебюджет</span>
                                <span>16 июня — 22 августа включительно</span>
                            </li>
                        </ul>
                    </div>
                </aside>

                <ol class="admission-flow">
                    <li class="admission-flow__item" style="--i:1">
                        <div class="admission-flow__marker" aria-hidden="true">
                            <span class="admission-flow__num">1</span>
                            <span class="admission-flow__ring"></span>
                        </div>
                        <article class="admission-flow__card">
                            <span class="admission-flow__eyebrow">Папка поступающего</span>
                            <h3>Подготовьте документы</h3>
                            <ul class="admission-flow__checklist">
                                <li>Паспорт <em>оригинал + копия</em></li>
                                <li>Документ об образовании <em>оригинал + копия</em></li>
                                <li>ИНН <em>копия</em></li>
                                <li>СНИЛС <em>копия</em></li>
                                <li>Фото 3×4 см <em>4 шт.</em></li>
                                <li>Портфолио за 8–9 классы <em>по желанию</em></li>
                                <li>Характеристика из школы <em>по желанию</em></li>
                                <li>Медсправка 086/У <em>для общежития</em></li>
                            </ul>
                        </article>
                    </li>

                    <li class="admission-flow__item" style="--i:2">
                        <div class="admission-flow__marker" aria-hidden="true">
                            <span class="admission-flow__num">2</span>
                            <span class="admission-flow__ring"></span>
                        </div>
                        <article class="admission-flow__card">
                            <span class="admission-flow__eyebrow">Онлайн-анкета</span>
                            <h3>Заполните электронное заявление в личном кабинете</h3>
                            <p>
                                Чем подробнее анкета — тем короче визит в техникум. Всё заполненное заранее
                                экономит время при регистрации заявления.
                            </p>
                            <div class="admission-flow__actions">
                                <a href="#" class="admission-flow__btn">Личный кабинет →</a>
                                <a href="#" class="admission-flow__btn admission-flow__btn--ghost">Посетить техникум</a>
                            </div>
                        </article>
                    </li>

                    <li class="admission-flow__item" style="--i:3">
                        <div class="admission-flow__marker" aria-hidden="true">
                            <span class="admission-flow__num">3</span>
                            <span class="admission-flow__ring"></span>
                        </div>
                        <article class="admission-flow__card">
                            <span class="admission-flow__eyebrow">Запись на приём</span>
                            <h3>Выберите удобное время визита</h3>
                            <p>
                                Запись — на одно заявление; сопровождающих учитывать не нужно. При желании
                                можно прийти в порядке живой очереди.
                            </p>
                            <aside class="admission-flow__note">
                                Заполните личный кабинет дома, в спокойной обстановке — это повысит точность
                                данных и ускорит визит.
                            </aside>
                        </article>
                    </li>

                    <li class="admission-flow__item admission-flow__item--finish" style="--i:4">
                        <div class="admission-flow__marker admission-flow__marker--finish" aria-hidden="true">
                            <span class="admission-flow__num">4</span>
                            <span class="admission-flow__ring"></span>
                        </div>
                        <article class="admission-flow__card">
                            <span class="admission-flow__eyebrow">Финиш</span>
                            <h3>Приходите в техникум в выбранное время</h3>
                            <p>
                                Опоздали или сложно планировать? Воспользуйтесь электронной очередью
                                прямо на месте — или подайте заявление онлайн.
                            </p>
                            <a href="#" class="admission-flow__btn admission-flow__btn--inline">
                                Подать через Госуслуги →
                            </a>
                        </article>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <button type="button" class="scroll-top" aria-label="Наверх">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 15l6-6 6 6"></path>
        </svg>
    </button>
@endsection
