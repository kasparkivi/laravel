// Updateb libraried ära
sudo apt update
// Upgradeb need libraried uuema peale
sudo apt upgrade
// Installib php, mbstring, xml, bcmath
sudo apt install php7.4 php7.4-zip php7.4-mbstring php7.4-bcmath php-xml
// Installib composeri
sudo apt install composer
// Laraveli install
composer global require laravel/installer
// Laraveli kaust nimega blog
laravel new blog
// Teeb laraveli projekti blog kausta
composer create-project --prefer-dist laravel/laravel blog
// Suunab kausta nimega blog
cd blog
// Jooksutab php serveri localhostis
php artisan serve
