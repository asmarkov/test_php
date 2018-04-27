Способ 1:
Запуск из под windows при помощи vagrnat и virtual box.<br>
1)git clone https://github.com/asmarkov/test_php.git<br>
2)cd test_php<br>
3)composer install<br>
4)vendor\bin\homestead make<br>
5)vagrant up<br>
После запуска контейнера подключится по ssh по указаному при старте порту.<br>
user: vagrant<br>
password: vagrant<br>
6)cd /home/vagrant/code<br>
7)php artisan migrate --seed<br>
Теперь таблицы созданы и база заполнена тестовыми данными.<br>
Результат можно увидеть по ip адресу и порту, указаному при запуске контейнера.
