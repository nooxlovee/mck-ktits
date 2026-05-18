@extends('layouts.app')

@section('content')
    <main class="main">
        <section class="specialties-hero">
            <div class="container">
                <div class="specialties-hero__panel">
                    <div class="specialties-hero__text">
                        <h1 class="specialties-hero__title">Цифры приема</h1>
                        <p class="specialties-hero__lead">
                            Объемы контрольных цифр приема граждан для обучения
                            по образовательным программам среднего профессионального образования
                            на 1 курс 2026/2027 учебного года (очная форма обучения).
                        </p>
                    </div>
                    <div class="specialties-hero__badge" aria-hidden="true">
                        <img src="{{asset('media/images/icons/цифры_приема.svg')}}" alt="" width="180" height="180">
                    </div>
                </div>
        </section>

        <section class="nums-section" aria-label="Контрольные цифры приема">
            <div class="container">

                <ul class="nums-summary" role="list">
                    <li class="nums-summary__item">
                        <span class="nums-summary__label">Всего мест</span>
                        <span class="nums-summary__value">455</span>
                    </li>
                    <li class="nums-summary__item">
                        <span class="nums-summary__label">Бюджет</span>
                        <span class="nums-summary__value">250</span>
                    </li>
                    <li class="nums-summary__item">
                        <span class="nums-summary__label">Коммерция</span>
                        <span class="nums-summary__value">205</span>
                    </li>
                </ul>
                <div class="nums-table-wrap">
                    <table class="nums-table">
                        <thead>
                        <tr>
                            <th scope="col" class="nums-th--n">№</th>
                            <th scope="col">Код</th>
                            <th scope="col">Специальность</th>
                            <th scope="col">Квалификация</th>
                            <th scope="col">Срок обучения</th>
                            <th scope="col" class="nums-th--num">Всего</th>
                            <th scope="col" class="nums-th--num">Бюджет</th>
                            <th scope="col" class="nums-th--num">Коммерция</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="nums-row--link" data-href="specialty.html" tabindex="0" role="link">
                            <td data-label="№">1</td>
                            <td data-label="Код"><span class="nums-code">09.02.01</span></td>
                            <td data-label="Специальность">Компьютерные системы и комплексы</td>
                            <td data-label="Квалификация">Специалист по компьютерным системам</td>
                            <td data-label="Срок обучения">3 года 10 месяцев</td>
                            <td data-label="Всего" class="nums-td--num nums-td--total">55</td>
                            <td data-label="Бюджет" class="nums-td--num">25</td>
                            <td data-label="Коммерция" class="nums-td--num">30</td>
                        </tr>
                        <tr>
                            <td data-label="№">2</td>
                            <td data-label="Код"><span class="nums-code">09.02.06</span></td>
                            <td data-label="Специальность">Сетевое и системное администрирование</td>
                            <td data-label="Квалификация">Системный администратор</td>
                            <td data-label="Срок обучения">3 года 10 месяцев</td>
                            <td data-label="Всего" class="nums-td--num nums-td--total">30</td>
                            <td data-label="Бюджет" class="nums-td--num">25</td>
                            <td data-label="Коммерция" class="nums-td--num">5</td>
                        </tr>
                        <tr>
                            <td data-label="№">3</td>
                            <td data-label="Код"><span class="nums-code">09.02.08</span></td>
                            <td data-label="Специальность">Интеллектуальные интегрированные системы</td>
                            <td data-label="Квалификация">Техник по интеллектуальным интегрированным системам</td>
                            <td data-label="Срок обучения">2 года 10 месяцев</td>
                            <td data-label="Всего" class="nums-td--num nums-td--total">30</td>
                            <td data-label="Бюджет" class="nums-td--num nums-td--zero">0</td>
                            <td data-label="Коммерция" class="nums-td--num">30</td>
                        </tr>
                        <tr>
                            <td data-label="№">4</td>
                            <td data-label="Код"><span class="nums-code">09.02.09</span></td>
                            <td data-label="Специальность">Веб-разработка</td>
                            <td data-label="Квалификация">Разработчик веб-приложений на стороне клиента</td>
                            <td data-label="Срок обучения">2 года 10 месяцев</td>
                            <td data-label="Всего" class="nums-td--num nums-td--total">55</td>
                            <td data-label="Бюджет" class="nums-td--num">25</td>
                            <td data-label="Коммерция" class="nums-td--num">30</td>
                        </tr>
                        <tr>
                            <td data-label="№">4</td>
                            <td data-label="Код"><span class="nums-code">09.02.09</span></td>
                            <td data-label="Специальность">Веб-разработка</td>
                            <td data-label="Квалификация">Разработчик веб-приложений на стороне сервера</td>
                            <td data-label="Срок обучения">2 года 10 месяцев</td>
                            <td data-label="Всего" class="nums-td--num nums-td--total">30</td>
                            <td data-label="Бюджет" class="nums-td--num">25</td>
                            <td data-label="Коммерция" class="nums-td--num">5</td>
                        </tr>
                        <tr>
                            <td data-label="№">5</td>
                            <td data-label="Код"><span class="nums-code">09.02.11</span></td>
                            <td data-label="Специальность">Разработка и управление программным обеспечением</td>
                            <td data-label="Квалификация">Программист: проектирование и разработка информационных систем</td>
                            <td data-label="Срок обучения">3 года 10 месяцев</td>
                            <td data-label="Всего" class="nums-td--num nums-td--total">80</td>
                            <td data-label="Бюджет" class="nums-td--num">50</td>
                            <td data-label="Коммерция" class="nums-td--num">30</td>
                        </tr>
                        <tr>
                            <td data-label="№">5</td>
                            <td data-label="Код"><span class="nums-code">09.02.11</span></td>
                            <td data-label="Специальность">Разработка и управление программным обеспечением</td>
                            <td data-label="Квалификация">Программист: разработка бизнес-приложений</td>
                            <td data-label="Срок обучения">3 года 10 месяцев</td>
                            <td data-label="Всего" class="nums-td--num nums-td--total">55</td>
                            <td data-label="Бюджет" class="nums-td--num">25</td>
                            <td data-label="Коммерция" class="nums-td--num">30</td>
                        </tr>
                        <tr>
                            <td data-label="№">6</td>
                            <td data-label="Код"><span class="nums-code">09.02.13</span></td>
                            <td data-label="Специальность">Интеграция решений с применением технологий искусственного интеллекта
                            </td>
                            <td data-label="Квалификация">Специалист по работе с искусственным интеллектом</td>
                            <td data-label="Срок обучения">3 года 10 месяцев</td>
                            <td data-label="Всего" class="nums-td--num nums-td--total">30</td>
                            <td data-label="Бюджет" class="nums-td--num nums-td--zero">0</td>
                            <td data-label="Коммерция" class="nums-td--num">30</td>
                        </tr>
                        <tr>
                            <td data-label="№">7</td>
                            <td data-label="Код"><span class="nums-code">10.02.05</span></td>
                            <td data-label="Специальность">Обеспечение информационной безопасности автоматизированных систем</td>
                            <td data-label="Квалификация">Техник по защите информации</td>
                            <td data-label="Срок обучения">3 года 10 месяцев</td>
                            <td data-label="Всего" class="nums-td--num nums-td--total">30</td>
                            <td data-label="Бюджет" class="nums-td--num">25</td>
                            <td data-label="Коммерция" class="nums-td--num">5</td>
                        </tr>
                        <tr>
                            <td data-label="№">8</td>
                            <td data-label="Код"><span class="nums-code">11.02.12</span></td>
                            <td data-label="Специальность">Почтовая связь</td>
                            <td data-label="Квалификация">Специалист почтовой связи</td>
                            <td data-label="Срок обучения">2 года 10 месяцев</td>
                            <td data-label="Всего" class="nums-td--num nums-td--total">30</td>
                            <td data-label="Бюджет" class="nums-td--num">25</td>
                            <td data-label="Коммерция" class="nums-td--num">5</td>
                        </tr>
                        <tr>
                            <td data-label="№">9</td>
                            <td data-label="Код"><span class="nums-code">11.02.15</span></td>
                            <td data-label="Специальность">Инфокоммуникационные сети и системы связи</td>
                            <td data-label="Квалификация">Специалист по монтажу и обслуживанию телекоммуникаций</td>
                            <td data-label="Срок обучения">3 года 10 месяцев</td>
                            <td data-label="Всего" class="nums-td--num nums-td--total">30</td>
                            <td data-label="Бюджет" class="nums-td--num">25</td>
                            <td data-label="Коммерция" class="nums-td--num">5</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr class="nums-total">
                            <td colspan="5" class="nums-total__label">Итого</td>
                            <td class="nums-td--num nums-total__value">455</td>
                            <td class="nums-td--num nums-total__value">250</td>
                            <td class="nums-td--num nums-total__value">205</td>
                        </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </section>
    </main>
@endsection
