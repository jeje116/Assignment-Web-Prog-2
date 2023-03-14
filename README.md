Page Screenshots
--------------------------------------

### Home
<img src="https://github.com/jeje116/Assignment-Web-Prog-2/blob/main/ssPage/homepng.png" alt="" style="width: 500px">
 
--------------------------------------

### About Me
<img src="https://github.com/jeje116/Assignment-Web-Prog-2/blob/main/ssPage/about_me.png" alt="" style="width: 500px">
 
--------------------------------------

### Personal Info
<img src="https://github.com/jeje116/Assignment-Web-Prog-2/blob/main/ssPage/personal_info.png" alt="" style="width: 500px">
 
--------------------------------------

### Education
<img src="https://github.com/jeje116/Assignment-Web-Prog-2/blob/main/ssPage/education.png" alt="" style="width: 500px">
 
--------------------------------------

Frameworks Used
--------------------------------------
- Laravel
- Tailwind

Description
--------------------------------------
Profile dibuat dengan menggunakan CSS framework Tailwind. Di dalamnya sudah terdapat media query yang dibuat sendiri dan juga dari framework tailwind tersebut. 

Installation
--------------------------------------
1. Pastikan node.js dan laravel sudah tersedia

2. Pastikan vite sudah terinstall dan sudah dijalankan\
    Untuk menginstall vite
    ```
    vite install
    ```

    Untuk menjalankan vite
    ```
    npm run dev
    ```

3. Menjalankan laravel
    ```
    php artisan serve
    ```
    
    - Jika terdapat error saat menjalankan kode, berikut penyelesaian dari error tersebut:
      ```
      composer install
      ```
    
    - jika terdapat error "key not generated" atau "500|server error" pada web
      ```
      php artisan key:generate
      ```
    
    - Jika pada saat menjalankan syntax ini terdapat error tidak dapat menemukan file .env, maka rename dahulu file .env.example menjadi .env kemudian jalankan kembali syntax tersebut
    
    - Jika terdapat error "vite manifest not found" pada web, lakukan:
       ```
       npm install --save-dev vite laravel-vite-plugin
       ```
    
    - Menjalankan laravel
      ```
      php artisan serve
      ```
