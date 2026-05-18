@extends('layouts.app')

@section('content')
    <main class="main">
        <section class="specialties-hero">
            <div class="container">
                <div class="specialties-hero__panel">
                    <div class="specialties-hero__text">
                        <h1 class="specialties-hero__title">Специальности</h1>
                        <p class="specialties-hero__lead">
                            Пять направлений подготовки — от веб-разработки до юриспруденции.
                            Выберите своё и узнайте детали поступления.
                        </p>
                    </div>
                    <div class="specialties-hero__badge" aria-hidden="true">
                        <img src="{{asset('media/images/icons/современные_специальности.svg')}}" alt="" width="180" height="180">
                    </div>
                </div>
            </div>
        </section>

        <section class="specialties-section" aria-label="Список специальностей">
            <div class="container">
                <div class="specialties-layout">
                    <aside class="specialties-filter" aria-label="Фильтр специальностей">
                        <div class="filter-block">
                            <p class="filter-block__title">Уровень образования</p>
                            <label class="filter-check">
                                <input type="checkbox" class="filter-check__input">
                                <span class="filter-check__box"></span>
                                <span>11 классов (среднее общее)</span>
                            </label>
                            <label class="filter-check">
                                <input type="checkbox" class="filter-check__input">
                                <span class="filter-check__box"></span>
                                <span>9 классов (основное общее)</span>
                            </label>
                            <label class="filter-check">
                                <input type="checkbox" class="filter-check__input">
                                <span class="filter-check__box"></span>
                                <span>Среднее профессиональное образование</span>
                            </label>
                        </div>
                        <div class="filter-block">
                            <p class="filter-block__title">Форма обучения</p>
                            <label class="filter-check">
                                <input type="checkbox" class="filter-check__input" checked>
                                <span class="filter-check__box"></span>
                                <span>Очная</span>
                            </label>
                            <label class="filter-check">
                                <input type="checkbox" class="filter-check__input">
                                <span class="filter-check__box"></span>
                                <span>Заочная</span>
                            </label>
                        </div>
                    </aside>

                    <div class="specialties-list">
                        <div class="specialties-grid">

                            <article class="spec-card" data-category="it">
                                <span class="spec-card__watermark" aria-hidden="true">09</span>
                                <div class="spec-card__top">
                                    <div class="spec-card__icon" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                                    </div>
                                    <div class="spec-card__codebox">
                                        <span class="spec-card__codelabel">Код специальности</span>
                                        <span class="spec-card__code">09.02.09</span>
                                    </div>
                                </div>
                                <h2 class="spec-card__title">Разработчик веб-приложений на стороне клиента</h2>
                                <ul class="spec-card__meta">
                                    <li class="spec-chip spec-chip--time"><span class="spec-chip__label">Срок</span><span class="spec-chip__value">2 г. 10 мес.</span></li>
                                    <li class="spec-chip spec-chip--level"><span class="spec-chip__label">Уровень</span><span class="spec-chip__value">СПО</span></li>
                                    <li class="spec-chip spec-chip--form"><span class="spec-chip__label">Форма</span><span class="spec-chip__value">Очная</span></li>
                                </ul>
                                <a href="specialty.html" class="spec-card__link">
                                    <span>Подробнее</span>
                                    <span class="spec-card__arrow" aria-hidden="true">→</span>
                                </a>
                            </article>

                            <article class="spec-card" data-category="it">
                                <span class="spec-card__watermark" aria-hidden="true">09</span>
                                <div class="spec-card__top">
                                    <div class="spec-card__icon" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18M8 14h2M8 17h5"/></svg>
                                    </div>
                                    <div class="spec-card__codebox">
                                        <span class="spec-card__codelabel">Код специальности</span>
                                        <span class="spec-card__code">09.02.07</span>
                                    </div>
                                </div>
                                <h2 class="spec-card__title">Разработка и управление ПО</h2>
                                <ul class="spec-card__meta">
                                    <li class="spec-chip spec-chip--time"><span class="spec-chip__label">Срок</span><span class="spec-chip__value">2 г. 10 мес.</span></li>
                                    <li class="spec-chip spec-chip--level"><span class="spec-chip__label">Уровень</span><span class="spec-chip__value">СПО</span></li>
                                    <li class="spec-chip spec-chip--form"><span class="spec-chip__label">Форма</span><span class="spec-chip__value">Очная</span></li>
                                </ul>
                                <a href="#" class="spec-card__link">
                                    <span>Подробнее</span>
                                    <span class="spec-card__arrow" aria-hidden="true">→</span>
                                </a>
                            </article>

                            <article class="spec-card" data-category="law">
                                <span class="spec-card__watermark" aria-hidden="true">40</span>
                                <div class="spec-card__top">
                                    <div class="spec-card__icon" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v18M4 7h16M6 7l-3 7a4 4 0 0 0 6 0L6 7zM18 7l-3 7a4 4 0 0 0 6 0l-3-7z"/></svg>
                                    </div>
                                    <div class="spec-card__codebox">
                                        <span class="spec-card__codelabel">Код специальности</span>
                                        <span class="spec-card__code">40.02.04</span>
                                    </div>
                                </div>
                                <h2 class="spec-card__title">Юриспруденция</h2>
                                <ul class="spec-card__meta">
                                    <li class="spec-chip spec-chip--time"><span class="spec-chip__label">Срок</span><span class="spec-chip__value">2 г. 10 мес.</span></li>
                                    <li class="spec-chip spec-chip--level"><span class="spec-chip__label">Уровень</span><span class="spec-chip__value">СПО</span></li>
                                    <li class="spec-chip spec-chip--form"><span class="spec-chip__label">Форма</span><span class="spec-chip__value">Очная</span></li>
                                </ul>
                                <a href="#" class="spec-card__link">
                                    <span>Подробнее</span>
                                    <span class="spec-card__arrow" aria-hidden="true">→</span>
                                </a>
                            </article>

                            <article class="spec-card" data-category="security">
                                <span class="spec-card__watermark" aria-hidden="true">10</span>
                                <div class="spec-card__top">
                                    <div class="spec-card__icon" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l8 3v6c0 5-3.5 9-8 11-4.5-2-8-6-8-11V5l8-3z"/><path d="M9 12l2 2 4-4"/></svg>
                                    </div>
                                    <div class="spec-card__codebox">
                                        <span class="spec-card__codelabel">Код специальности</span>
                                        <span class="spec-card__code">10.02.04</span>
                                    </div>
                                </div>
                                <h2 class="spec-card__title">Информационная безопасность</h2>
                                <ul class="spec-card__meta">
                                    <li class="spec-chip spec-chip--time"><span class="spec-chip__label">Срок</span><span class="spec-chip__value">2 г. 10 мес.</span></li>
                                    <li class="spec-chip spec-chip--level"><span class="spec-chip__label">Уровень</span><span class="spec-chip__value">СПО</span></li>
                                    <li class="spec-chip spec-chip--form"><span class="spec-chip__label">Форма</span><span class="spec-chip__value">Очная</span></li>
                                </ul>
                                <a href="#" class="spec-card__link">
                                    <span>Подробнее</span>
                                    <span class="spec-card__arrow" aria-hidden="true">→</span>
                                </a>
                            </article>

                            <article class="spec-card" data-category="econ">
                                <span class="spec-card__watermark" aria-hidden="true">38</span>
                                <div class="spec-card__top">
                                    <div class="spec-card__icon" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 20h18M6 20V10M11 20V4M16 20v-7M21 20V8"/></svg>
                                    </div>
                                    <div class="spec-card__codebox">
                                        <span class="spec-card__codelabel">Код специальности</span>
                                        <span class="spec-card__code">38.02.01</span>
                                    </div>
                                </div>
                                <h2 class="spec-card__title">Экономика и бухгалтерский учет</h2>
                                <ul class="spec-card__meta">
                                    <li class="spec-chip spec-chip--time"><span class="spec-chip__label">Срок</span><span class="spec-chip__value">2 г. 10 мес.</span></li>
                                    <li class="spec-chip spec-chip--level"><span class="spec-chip__label">Уровень</span><span class="spec-chip__value">СПО</span></li>
                                    <li class="spec-chip spec-chip--form"><span class="spec-chip__label">Форма</span><span class="spec-chip__value">Очная</span></li>
                                </ul>
                                <a href="#" class="spec-card__link">
                                    <span>Подробнее</span>
                                    <span class="spec-card__arrow" aria-hidden="true">→</span>
                                </a>
                            </article>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
