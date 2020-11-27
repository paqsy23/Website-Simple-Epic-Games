## Setelah clone :
1. composer install
2. php artisan serve

## Untuk cek versi laravel :
1. php artisan --version

## STEP PUSH KE GITHUB :
1. cek branch mana -> git branch 
2. commit + stage kasih message yang sesuai dengan yang dikerjakan
3. pull dan merge + fix error kalau ada
4. push :D

kalau ada error atau apa yang ga jelas / tidak bisa diatasi sendiri ditulis di note errorForum.md

setiap halaman dikasi penjelasan di bagian App Structure agar lebih jelas dan tidak berantakan

## Environment
* laravel 7.27.0

## Game Status Info
* -1 = banned
*  0 = inactive
*  1 = active


## App Structure
contoh structure 

* `\login`, halaman utama aplikasi. Ada pilihan untuk melakakan register, login dengan social media (facebook/twitter) dan login lainnya.
  * `\register`, halaman register.
  * `\login-misc`, halaman login dengan username, email atau nomor HP.
