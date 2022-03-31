<h1 align="center">GrowUp - I/O Technology Innovation 2022</h1>
<h3 align="center">Made by Ayang BNCC Team</h3>

<br>

## A. SCREENSHOTS
<img src="https://i.ibb.co/ckns9NR/beranda.png" width="100%"> <br>
<img src="https://i.ibb.co/4pGnJ0h/eksplor-kelas.png" width="100%"> <br>
<img src="https://i.ibb.co/fxj6F4N/detail-kelas.png" width="100%">

<br>

## B. LIVE DEMO
<b>Untuk demo aplikasi dapat diakses pada link berikut</b> <br>
<span>https://growup.ndaruhes.com/</span> <br>

<br>
<b>RuApps Assets Credits. Thanks to them 😊</b> <br>
<span>https://undraw.co/ (Illustration)</span> <br>
<span>https://iconscout.com/ (Icons)</span> <br>


<br>

## C. USER ROLES
<p>Credentials user dapat dilihat di initial data & semua passwordnya adalah <i>12345678</i></p>
<b>1. Mentor</b>

```
email: ndaru@gmail.com
password: 12345678
```

<br>

<b>2. Mentee</b> <br>

```
email: albert@gmail.com
password: 12345678
```

<br>

## D. SETUP PROJECT
<b>1. Clone Repository</b>

```
git clone https://github.com/ndaruhes/GrowUp.git
cd GrowUp
```
<br>

<b>2. Setup Project</b>
<p>Ubah credentials database didalam file .env</p>
<ul>
    <li>DB_DATABASE</li>
    <li>DB_USERNAME</li>
    <li>DB_PASSWORD</li>
</ul>

```
composer install                    // menginstall package laravel (vendor)
npm install                         // menginstall package (node_modules)
php artisan migrate:fresh --seed    // menjalankan migrasi dan initial data ke database
php artisan serve                   // menjalankan server (Link: http://127.0.0.1:8000/)
```