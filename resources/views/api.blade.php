@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Краткая справка по api</h2>
                    <p>
                        Все параметры в примерах обозначены как {} (фигурными скобками). Их стоит заменить вместе с скобками.
                    </p>
                    <p>
                        Для проверки и тестов удобно использовать <a href="https://www.postman.com/downloads/">postman</a>.
                    </p>
                </div>
                <div class="col-12">
                    <h3>Категории (categories)</h3>
                    <ul>
                        <li>
                            <h4>Список категорий (index).</h4>
                            <ul class="list-unstyled">
                                <li>Тип запроса: GET</li>
                            </ul>
                            <pre>/api/category</pre>
                        </li>
                        <li>
                            <h4>Создать категорию (create)</h4>
                            <ul class="list-unstyled">
                                <li>Тип запроса: POST</li>
                                <li>{name} = имя категории.</li>
                            </ul>
                            <pre>/api/category?name={name}</pre>
                        </li>
                        <li>
                            <h4>Конкретная категория (read)</h4>
                            <ul class="list-unstyled">
                                <li>Тип запроса: GET</li>
                                <li>{id_category} = ид нужной категории</li>
                            </ul>
                            <pre>/api/category/{id_category}</pre>
                        </li>
                        <li>
                            <h4>Редактирование категории (update)</h4>
                            <ul class="list-unstyled">
                                <li>Тип запроса: PATCH</li>
                                <li>{id_category} = ид нужной категории</li>
                                <li>{name} = имя категории.</li>
                            </ul>
                            <pre>/api/category/{id_category}?name={name}</pre>
                        </li>
                        <li>
                            <h4>Удаление категории (delete)</h4>
                            <ul class="list-unstyled">
                                <li>Тип запроса: DEL</li>
                                <li>{id_category} = ид нужной категории</li>
                            </ul>
                            <pre>/api/category/{id_category}</pre>
                        </li>
                        <li>
                            <h4>Все товары в конкретной категории</h4>
                            <ul class="list-unstyled">
                                <li>Тип запроса: GET</li>
                                <li>{id_category} = ид нужной категории</li>
                            </ul>
                            <pre>/api/category/{id_category}/products</pre>
                        </li>
                    </ul>
                </div>
                <div class="col-12">
                    <h3>Товары (products)</h3>
                    <ul>
                        <li>
                            <h4>Список товаров (index).</h4>
                            <ul class="list-unstyled">
                                <li>Тип запроса: GET</li>
                            </ul>
                            <pre>/api/product</pre>
                        </li>
                        <li>
                            <h4>Создать продукт (create)</h4>
                            <ul class="list-unstyled">
                                <li>Тип запроса: POST</li>
                                <li>{name} = имя продукта.</li>
                            </ul>
                            <pre>/api/product?name={name}</pre>
                        </li>
                        <li>
                            <h4>Конкретный продукт (read)</h4>
                            <ul class="list-unstyled">
                                <li>Тип запроса: GET</li>
                                <li>{id_product} = ид нужного продукта</li>
                            </ul>
                            <pre>/api/product/{id_product}</pre>
                        </li>
                        <li>
                            <h4>Редактирование продукта (update)</h4>
                            <ul class="list-unstyled">
                                <li>Тип запроса: PATCH</li>
                                <li>{id_product} = ид нужного продукта</li>
                                <li>{name} = имя продукта.</li>
                            </ul>
                            <pre>/api/category/{id_product}?name={name}</pre>
                        </li>
                        <li>
                            <h4>Удаление категории (delete)</h4>
                            <ul class="list-unstyled">
                                <li>Тип запроса: DEL</li>
                                <li>{id_product} = ид нужного продукта</li>
                            </ul>
                            <pre>/api/category/{id_product}</pre>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection