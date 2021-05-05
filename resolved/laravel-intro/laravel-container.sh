docker run --name it-academy-project -d \
    -p 88:80 \
    -p 8822:22 \
    --restart unless-stopped \
    --volume /home/valentin/Internship_Development-Aid/Lesson-20-Laravel/Projects/laravel-intro:/var/www/html \
    --network=laravel_intro_network \
    amoraresco/it-academy-project:latest \
