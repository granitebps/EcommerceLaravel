## EcommerceLaravel

Ini project pribadi tentang sebuah ecommerce sederhana dengan tema Book Ecommerce. Project ini didapat dengan menggunakan project dari video Udemy dengan beberapa modifikasi. Template yang digunakan juga menggunakan template dari pembuat video Udemy. Ecommerce ini dibangun menggunakan Framework PHP yaitu [Laravel](https://laravel.com). 

Beberapa fitur yang terdapat pada Ecommerce ini antara lain : 
- CRUD Product.
- Sistem Login/Register.
- Sistem Cart dengan [LaravelShoppingCart](https://github.com/Crinsane/LaravelShoppingcart).
- Sistem Payment dengan [Stripe](https://stripe.com/).
- Notifikasi dengan [Toastr](https://github.com/CodeSeven/toastr).
- Mengirim email setelah melakukan pembayaran dengan LaravelMail dengan bantuk [MailTrap](https://mailtrap.io/).

Untuk menggunakannya silahkan clone atau fork repository ini, lalu jalankan perintah dibawah pada terminal kalian :
```
php artisan migrate
php artisan db:seed
```
Untuk login menggunakan :
Email : admin@gmail.com
Password : 123456

Lalu akan terdapat 30 data dummy untuk product. Semoga Bermanfaat!

Terima kasih yang sebesar-besarnya untuk Kati Frantz dari Udemy.