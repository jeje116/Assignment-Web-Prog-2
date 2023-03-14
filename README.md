Page Screenshots
--------------------------------------

### Jasons
<img src="https://github.com/jeje116/Web-Programming-Prototype/blob/main/ssPage/pageJasons.png" alt="License" style="width: 500px">
 
--------------------------------------

### Matthew
<img src="https://github.com/jeje116/Web-Programming-Prototype/blob/main/ssPage/pageMatthew.png" alt="License" style="width: 500px">
 
--------------------------------------

### Vika
<img src="https://github.com/jeje116/Web-Programming-Prototype/blob/main/ssPage/pageVika.png" alt="License" style="width: 500px">
 
--------------------------------------

### Vieren
<img src="https://github.com/jeje116/Web-Programming-Prototype/blob/main/ssPage/pageVieren.png" alt="License" style="width: 500px">
 
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
      1. ```
         npm install --save-dev vite laravel-vite-plugin
         ```
      2. Lalu update package.json file "scripts": { "dev": "vite", "build": "vite build" }
      3. ```
         npm run build
         ```
    
    - Menjalankan laravel
      ```
      php artisan serve
      ```
      
Contributors
--------------------------------------
Profile prototype ini dibuat oleh:
1. Matthew Christian Hadiprasetya (2440005252)
2. Jasons Januard Bongtari (2440062123)
3. Vika Valencia Susanto (2440079162)
4. Vieren Cristian (2440102202)
