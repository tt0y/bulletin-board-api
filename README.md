## Создать JSON API для сайта объявлений

Необходимо создать сервис для хранения и подачи объявлений. Объявления
должны храниться в базе данных. Сервис должен предоставлять API,
работающее поверх HTTP в формате JSON. 

## Требования

- 3 метода: получение списка объявлений, получение одного объявления,
создание объявления
- Валидация полей (не менее 1 ссылки и не более 3 ссылок на фото,
описание не более 1000 символов, название не больше 200 символов)
- Выводить объявления на сайте (простая верстка, js не нужен)
- Создать команду вывода объявлений/объявления в консоле 

## Метод получения списка объявлений 

- нужна пагинация, на одной странице должно присутствовать 10
объявлений
- нужна возможность сортировки: по цене (возрастание/убывание) и по
дате создания (возрастание/убывание)
- поля в ответе: название объявления, ссылка на главное фото (первое в
списке), цена 

## Метод получения конкретного объявления 

- обязательные поля в ответе: название объявления, цена, ссылка на
главное фото (первое фото) 

## Метод создания объявления: 

- принимает все вышеперечисленные поля: название, описание, несколько
ссылок на фотографии (фото это ссылки на изображения в интернете,
должны загружаться на сервер отдельной задачей(job)), цена
- возвращает ID созданного объявления и код результата (ошибка или
успех) 

## Плюс

- Возможность упаковать приложение в docker (скрипт который собирает
образ + запуск образа)
- Документация API в swagger 

## Структура объявления: 

- Имя - строка
- Описание - строка
- Цена - число
- Изображения - массив строк 
