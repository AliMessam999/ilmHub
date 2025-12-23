@echo off
echo Starting image optimization...
php artisan images:optimize --type=offer
echo Image optimization completed!
pause