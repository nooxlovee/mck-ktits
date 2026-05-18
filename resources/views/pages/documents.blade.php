@extends('layouts.app')

@section('content')
    <main class="main">
        <section class="specialties-hero">
            <div class="container">
                <div class="specialties-hero__panel">
                    <div class="specialties-hero__text">
                        <h1 class="specialties-hero__title">Нормативные документы</h1>
                        <p class="specialties-hero__lead">
                            Официальные документы приёмной комиссии МЦК-КТИТС:
                            правила приёма, положения, выписки из реестров и договоры
                            на оказание образовательных услуг.
                        </p>
                    </div>
                    <div class="specialties-hero__badge" aria-hidden="true">
                        <img src="{{asset('media/images/icons/документы.svg')}}" alt="" width="180" height="180">
                    </div>
                </div>
            </div>
        </section>

        <section class="docs-section" aria-label="Список нормативных документов">
            <div class="container">
                <ul class="docs-grid" role="list">
                    <li class="doc-card">
                        <div class="doc-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" fill="currentColor"
                                      opacity=".12" />
                                <path d="M30 4v10a4 4 0 0 0 4 4h8" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" stroke="currentColor"
                                      stroke-width="2" stroke-linejoin="round" />
                                <text x="24" y="36" text-anchor="middle" font-family="Arial, sans-serif" font-size="10"
                                      font-weight="800" fill="currentColor">PDF</text>
                            </svg>
                        </div>
                        <h3 class="doc-card__title">Выписка из реестра государственной аккредитации на 09.06.2025</h3>
                        <a href="Выписка_из_реестра_гос_аккредитаций-на-09.06.2025.pdf" class="doc-card__btn" target="_blank"
                           rel="noopener">
                            <span>Посмотреть документ</span>
                            <span class="doc-card__btn-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>

                    <li class="doc-card">
                        <div class="doc-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" fill="currentColor"
                                      opacity=".12" />
                                <path d="M30 4v10a4 4 0 0 0 4 4h8" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" stroke="currentColor"
                                      stroke-width="2" stroke-linejoin="round" />
                                <text x="24" y="36" text-anchor="middle" font-family="Arial, sans-serif" font-size="10"
                                      font-weight="800" fill="currentColor">PDF</text>
                            </svg>
                        </div>
                        <h3 class="doc-card__title">Договор об оказании платных образовательных услуг, 4-сторонний</h3>
                        <a href="Выписка_из_реестра_гос_аккредитаций-на-09.06.2025.pdf" class="doc-card__btn" target="_blank"
                           rel="noopener">
                            <span>Посмотреть документ</span>
                            <span class="doc-card__btn-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>

                    <li class="doc-card">
                        <div class="doc-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" fill="currentColor"
                                      opacity=".12" />
                                <path d="M30 4v10a4 4 0 0 0 4 4h8" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" stroke="currentColor"
                                      stroke-width="2" stroke-linejoin="round" />
                                <text x="24" y="36" text-anchor="middle" font-family="Arial, sans-serif" font-size="10"
                                      font-weight="800" fill="currentColor">PDF</text>
                            </svg>
                        </div>
                        <h3 class="doc-card__title">Договор об оказании платных образовательных услуг, 3-сторонний</h3>
                        <a href="Выписка_из_реестра_гос_аккредитаций-на-09.06.2025.pdf" class="doc-card__btn" target="_blank"
                           rel="noopener">
                            <span>Посмотреть документ</span>
                            <span class="doc-card__btn-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>

                    <li class="doc-card">
                        <div class="doc-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" fill="currentColor"
                                      opacity=".12" />
                                <path d="M30 4v10a4 4 0 0 0 4 4h8" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" stroke="currentColor"
                                      stroke-width="2" stroke-linejoin="round" />
                                <text x="24" y="36" text-anchor="middle" font-family="Arial, sans-serif" font-size="10"
                                      font-weight="800" fill="currentColor">PDF</text>
                            </svg>
                        </div>
                        <h3 class="doc-card__title">Выписка из реестра лицензий № Л035-01272-16/00254439</h3>
                        <a href="Выписка_из_реестра_гос_аккредитаций-на-09.06.2025.pdf" class="doc-card__btn" target="_blank"
                           rel="noopener">
                            <span>Посмотреть документ</span>
                            <span class="doc-card__btn-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>

                    <li class="doc-card">
                        <div class="doc-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" fill="currentColor"
                                      opacity=".12" />
                                <path d="M30 4v10a4 4 0 0 0 4 4h8" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" stroke="currentColor"
                                      stroke-width="2" stroke-linejoin="round" />
                                <text x="24" y="36" text-anchor="middle" font-family="Arial, sans-serif" font-size="10"
                                      font-weight="800" fill="currentColor">PDF</text>
                            </svg>
                        </div>
                        <h3 class="doc-card__title">Лист записи в государственный реестр от 07.10.2024</h3>
                        <a href="Выписка_из_реестра_гос_аккредитаций-на-09.06.2025.pdf" class="doc-card__btn" target="_blank"
                           rel="noopener">
                            <span>Посмотреть документ</span>
                            <span class="doc-card__btn-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>

                    <li class="doc-card">
                        <div class="doc-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" fill="currentColor"
                                      opacity=".12" />
                                <path d="M30 4v10a4 4 0 0 0 4 4h8" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" stroke="currentColor"
                                      stroke-width="2" stroke-linejoin="round" />
                                <text x="24" y="36" text-anchor="middle" font-family="Arial, sans-serif" font-size="10"
                                      font-weight="800" fill="currentColor">PDF</text>
                            </svg>
                        </div>
                        <h3 class="doc-card__title">Устав</h3>
                        <a href="Выписка_из_реестра_гос_аккредитаций-на-09.06.2025.pdf" class="doc-card__btn" target="_blank"
                           rel="noopener">
                            <span>Посмотреть документ</span>
                            <span class="doc-card__btn-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>

                    <li class="doc-card">
                        <div class="doc-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" fill="currentColor"
                                      opacity=".12" />
                                <path d="M30 4v10a4 4 0 0 0 4 4h8" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" stroke="currentColor"
                                      stroke-width="2" stroke-linejoin="round" />
                                <text x="24" y="36" text-anchor="middle" font-family="Arial, sans-serif" font-size="10"
                                      font-weight="800" fill="currentColor">PDF</text>
                            </svg>
                        </div>
                        <h3 class="doc-card__title">Приказ о внесении дополнения в правила приема по УКЭП</h3>
                        <a href="Выписка_из_реестра_гос_аккредитаций-на-09.06.2025.pdf" class="doc-card__btn" target="_blank"
                           rel="noopener">
                            <span>Посмотреть документ</span>
                            <span class="doc-card__btn-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>

                    <li class="doc-card">
                        <div class="doc-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" fill="currentColor"
                                      opacity=".12" />
                                <path d="M30 4v10a4 4 0 0 0 4 4h8" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" stroke="currentColor"
                                      stroke-width="2" stroke-linejoin="round" />
                                <text x="24" y="36" text-anchor="middle" font-family="Arial, sans-serif" font-size="10"
                                      font-weight="800" fill="currentColor">PDF</text>
                            </svg>
                        </div>
                        <h3 class="doc-card__title">Положение о приёмной комиссии 2026–2027</h3>
                        <a href="Выписка_из_реестра_гос_аккредитаций-на-09.06.2025.pdf" class="doc-card__btn" target="_blank"
                           rel="noopener">
                            <span>Посмотреть документ</span>
                            <span class="doc-card__btn-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>

                    <li class="doc-card">
                        <div class="doc-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" fill="currentColor"
                                      opacity=".12" />
                                <path d="M30 4v10a4 4 0 0 0 4 4h8" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" stroke="currentColor"
                                      stroke-width="2" stroke-linejoin="round" />
                                <text x="24" y="36" text-anchor="middle" font-family="Arial, sans-serif" font-size="10"
                                      font-weight="800" fill="currentColor">PDF</text>
                            </svg>
                        </div>
                        <h3 class="doc-card__title">Положение об апелляционной комиссии 2026–2027</h3>
                        <a href="Выписка_из_реестра_гос_аккредитаций-на-09.06.2025.pdf" class="doc-card__btn" target="_blank"
                           rel="noopener">
                            <span>Посмотреть документ</span>
                            <span class="doc-card__btn-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>

                    <li class="doc-card">
                        <div class="doc-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" fill="currentColor"
                                      opacity=".12" />
                                <path d="M30 4v10a4 4 0 0 0 4 4h8" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" stroke="currentColor"
                                      stroke-width="2" stroke-linejoin="round" />
                                <text x="24" y="36" text-anchor="middle" font-family="Arial, sans-serif" font-size="10"
                                      font-weight="800" fill="currentColor">PDF</text>
                            </svg>
                        </div>
                        <h3 class="doc-card__title">Правила приема на обучение 2026–2027</h3>
                        <a href="Выписка_из_реестра_гос_аккредитаций-на-09.06.2025.pdf" class="doc-card__btn" target="_blank"
                           rel="noopener">
                            <span>Посмотреть документ</span>
                            <span class="doc-card__btn-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>

                    <li class="doc-card">
                        <div class="doc-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" fill="currentColor"
                                      opacity=".12" />
                                <path d="M30 4v10a4 4 0 0 0 4 4h8" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                <path d="M10 4h20l12 12v24a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4Z" stroke="currentColor"
                                      stroke-width="2" stroke-linejoin="round" />
                                <text x="24" y="36" text-anchor="middle" font-family="Arial, sans-serif" font-size="10"
                                      font-weight="800" fill="currentColor">PDF</text>
                            </svg>
                        </div>
                        <h3 class="doc-card__title">Условия приема по договорам 2026–2027</h3>
                        <a href="Выписка_из_реестра_гос_аккредитаций-на-09.06.2025.pdf" class="doc-card__btn" target="_blank"
                           rel="noopener">
                            <span>Посмотреть документ</span>
                            <span class="doc-card__btn-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection
