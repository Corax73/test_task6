## Работа с API

Установить последнюю версию Laravel (или одну из последних https://laravel.com/docs/9.x/installation)

Создать контроллер с методом который будет выдавать результат в формате JSON по следующему алгоритму:

● Получение данных внешнего апи https://u0362146.plsk.regruhosting.ru/api (апи в случайном порядке выдает статус 429 (api-new) too many requests)

● Подсчет данных 

● Сумма значение по колонке Price

● Массив уникальных значений warehouseName

● Вывод результата в формате json

{
        “summPrice”: 23243232423,
        “uniqueWarehouse”: [“Самара”, ‘Владивосток“, и т.д.]
}



Результатом выполнения задания должен стать архив с кодом включая сам фреймворк + результирующий JSON. 

Проверяющий должен распаковать его себе на компьютер, 

получить пакеты composer и запустить сервер на адресе 127.0.0.1:8000*, 

далее вести в браузере адрес http://127.0.0.1:8000/result-api  для получения результатирующих данных 


{
        “summPrice”: 23243232423,
        “uniqueWarehouse”: [“Самара”, ‘Владивосток“, и т.д.]
}



* - номер порта указан для примера

