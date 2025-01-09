# 🆔 Kata DNI 
In this project, the objective is to design with [Laravel](https://laravel.com) an application capable of generating via endpoint a letter for an eight-digit numerical string. Emulating the operation of the Spanish identification card (DNI).

## 👀 App operation

![Captura de pantalla 2025-01-09 113330](https://github.com/user-attachments/assets/9eea8e91-94ad-4e74-954b-a63feccd3f91)
*Correct operation, returns the number entered and the assigned letter*

![image](https://github.com/user-attachments/assets/d2d97dd5-53d5-49da-840a-e6fe5f353487)
*Incorrect operation, returns error text*

## 💻 Languages ​​and tools  
![](https://skillicons.dev/icons?i=php,laravel,git,github,vscode,)

## ⚙️ Installation prerequisites
🟢Install [Node.js](https://nodejs.org/en/download/source-code)

🟢Install [Composer](https://getcomposer.org/download/)

## 🛠️ Installation Guide 
0️⃣ Before starting to install the project, you will need to create a database (we have used mysql via xampp) and name it: `katadni` 

1️⃣ Open a terminal in the folder where you want the repository to be cloned and enter this command:

`https://github.com/sr-calcetines/KataDNI.git`

2️⃣ As you clone the repository, it will appear all the elements on it; you need to rename the file ".env.example" to ".env" and fill it with theese values:

![image](https://github.com/user-attachments/assets/0e0bf826-9b0e-4934-b0e3-4db53b9a04cd)

2️⃣ In your preferred environment, open the project you cloned; you will need three consoles for the next step.

▷Console 1:
    `npm install` `npm run dev`
    
▷Console 2:
    `composer install` `php artisan serve`
    
▷Console 3: 
    `php artisan migrat:fresh`
    `php artisan migrat:fresh --seed`
    
3️⃣ In the second console that you have opened, press the ctrl key and click on the link to localhost that it offers you. It should take you to the main view of the project where the offers are located.

⚠️ If you have done the previous steps and the view has not opened correctly, go back to the third command console and enter this:

`php artisan key:generate` `php artisan config:cache` 

## 🌐 Endpoints 
For this project, just one endpoint i needed to do all the functionalities; it's used to introduce the number you want to process; if it's correct it will return your number plus the corresponding letter; if it's not, it will show an error message warning you to introduce a valid number.

### 🔠 Assingn letter (GET)
`http://127.0.0.1:8000/api/offers/id`

*you need to introduce the number where the id goes*

## 🧪 Tests 
All tests passed. Introduce this line on your console to check it:

`./vendor/bin/phpunit tests`

<p align="center">
  <img src="https://github.com/user-attachments/assets/b7dc068b-2746-4738-a0b8-2f9e1c851006" alt="PHP test" width="500"/>
</p>

If you want to launch the tests and view them you can put this command in console 3:

`php artisan test --coverage` 

<p align="center">
  <img src="https://github.com/user-attachments/assets/fedb145f-ac7b-4582-8bc3-0650835ca905" alt="PHP test coverage" width="500"/>
</p>

## 🗂️ Jira Backlog 

![Captura de pantalla 2025-01-09 092149](https://github.com/user-attachments/assets/9341f690-3145-41e9-89cf-af1f00b91ee2)

## 👩‍💻 About me  
DAW graduate, im a developer enhancing my skills through a bootcamp focused on frontend, backend, and AWS.
- [José Ignacio Gavilán Sánchez](https://github.com/sr-calcetines)
