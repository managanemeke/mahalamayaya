<?php

/* @var $this yii\web\View */

$this->title = 'MealMa(ster)';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Поприветствуем!</h1>

        <p class="lead">
            Задание хоть как-то выполнено.
            Это backend и кабинет повелителя еды (MealMa(ster)).
            Есть frontend и кабинет работника
            (<a href="#">здесь</a>).
            Ниже само задание.
        </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
            <p>
            Требуется разработать приложение для заказа
            корпоративной еды. Каждый день
            сотрудники компании выбирают, что изволят
            откушать завтра. Сейчас мы используем
            Яндекс.Формы. Дешево и сердито. Это не может
            продолжаться бесконечно.
            Продемонстрируйте свои способности,
            сделайте этот процесс более удобным!
            </p>
            <p>
            У нас есть несколько поставщиков еды с
            доставкой. В каждый отдельно взятый период
            используется только один поставщик.
            Меняем активного поставщика, когда
            приедается и хочется чего-то нового.
            </p>
            <p>
            Код будет использован в реальной
            деятельности только в случае успешной
            сдачи тестового задания и выходе вас на
            работу в компанию.
            </p>
            <p>
            Результат выполнения тестового задания
            ожидаем в виде двух ссылок:
            <ol>
            <li>Ссылка на работающий код задания,
                размещенной на хостинге.</li>
            <li>Ссылка на репозиторий с исходным
                кодом (github/gitlab).</li>
            </ol>
            </p>
            <p>
            При сложностях с размещением на хостинге
            и/или наличии опасений про
            потенциально бесплатную работу на
            тестовом задании допустимо
            продемонстрировать работу кода и
            исходники на своем компьютере в процессе
            zoom-сессии собеседования.
            </p>
            <p>
            Срок выполнения тестового задания для
            опытного разработчика - одна календарная
            неделя с момента получения ссылки на
            документ, для начинающего разработчика -
            две календарных недели.
            </p>
            </div>
            <div class="col-lg-4">
            <h2>Соль</h2>
            <p>
            <ul>
                <li>
                    Обязательно:
                    <ul>
                        <li>Yii2 на бэке.</li>
                        <li>
                            Справочники:
                            <ul>
                                <li>
                                    Сотрудники:
                                    <ul>
                                        <li>Имя</li>
                                    </ul>
                                </li>
                                <li>
                                    Поставщики:
                                    <ul>
                                        <li>Название, Активный</li>
                                    </ul>
                                </li>
                                <li>
                                    РазделМеню:
                                    <ul>
                                        <li>Поставщик, Название</li>
                                    </ul>
                                </li>
                                <li>
                                    Блюдо:
                                    <ul>
                                        <li>РазделМеню, Название, Состав (строка), Цена</li>
                                    </ul>
                                </li>
                                <li>
                                    Заказ:
                                    <ul>
                                        <li>Дата, Сотрудник, Блюдо</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Интерфейс повелителя еды:
                            <ul>
                                <li>
                                    Редактирование всех справочников.
                                </li>
                                <li>
                                    Формирование отчета “Заказ поставщику на дату”:
                                    <ul>
                                        <li>
                                            Блюдо, Количество, Цена, Стоимость
                                        </li>
                                        <li>
                                            Общая стоимость по отчету
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Формирование отчета “Заказ сотрудников на дату”:
                                    <ul>
                                        <li>
                                            Сотрудник
                                        </li>
                                        <li>
                                            Перечень заказанных блюд с количеством,
                                            ценой и общей
                                            стоимостью
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Формирование отчета “Заказы сотрудников за месяц”:
                                    <ul>
                                        <li>
                                            Сотрудник, Сумма заказов за календарный месяц
                                        </li>
                                        <li>
                                            Сумма всех заказов всех сотрудников
                                            за календарный
                                            месяц
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Интерфейс сотрудника:
                            <ul>
                                <li>
                                    Выбор себя из списка сотрудников.
                                </li>
                                <li>
                                    Выбор даты, на которую заказывается
                                    еда. По-умолчанию -
                                    следующий рабочий день.
                                </li>
                                <li>
                                    Меню, разбитое на разделы. В разделах -
                                    блюда с составом и
                                    ценой.
                                </li>
                                <li>
                                    Возможность заказа произвольного
                                    любого блюда в произвольном
                                    количестве.
                                </li>
                                <li>
                                    Кнопка “Отправить заказ”,
                                    нажимаемая по завершении
                                    формирования заказа.
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    Опционально:
                    <ul>
                        <li>
                            VueJS на фронте.
                        </li>
                        <li>
                            Удобно использовать на мобильных устройствах.
                        </li>
                        <li>
                            Интерфейс не провоцирующий отрицательные
                            эмоции пользователя.
                        </li>
                        <li>
                            Повелитель еды может менять заказ
                            любого сотрудника вручную.
                        </li>
                        <li>
                            Некоторые блюда могут быть временно
                            недоступными для заказа.
                        </li>
                        <li>
                            Сотрудник может сохранять свои
                            предпочтения в еде и ограничивать ими
                            возможный выбор.
                        </li>
                        <li>
                            "Мне повезет" – автозаказ еды на дату,
                            учитывая предпочтения и
                            предыдущие заказы на этой неделе.
                        </li>
                        <li>
                            Сотрудник может смотреть, что было
                            им заказано на выбранную дату.
                        </li>
                        <li>
                            Контроль времени заказа – заказ на
                            завтра можно оформить до 12:30
                            сегодня.
                        </li>
                        <li>
                            Уведомления – напоминания сотруднику,
                            что нужно сделать заказ на
                            завтра, если он еще не сделан.
                        </li>
                    </ul>
                </li>
            </ul>
            </p>

            </div>
        </div>

    </div>
</div>
