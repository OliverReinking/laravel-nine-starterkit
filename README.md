# Laravel Nine Starterkit

Das **Laravel Nine Starterkit** besteht aus:
- Laravel 9
- Vue 3
- inertia
- Jetstream
- tailwindcss
- Webseite
- Anwendung für Administratoren
- Anwendung für Mitarbeiter
- Anwendung für Kunden
    

## Branches

Damit du die Möglichkeit hast, die Entwicklung der Anwendung Newspilot nachzuvollziehen, habe ich unterschiedliche Entwicklungszustände in sogenannten Branches dokumentiert.

### Installation
Die im Kapitel "Implementierung" beschriebenen Codeänderungen findest du im Branch "Installation".  

### Anwendung Homepage
Die im Kapitel "Anwendung Homepage" beschriebenen Codeänderungen findest du im Branch "Homepage".  

### Anwendung Administrator
Die im Kapitel "Anwendung Administrator" beschriebenen Codeänderungen findest du im Branch "Administrator".  

### Anwendung Redakteur
Die im Kapitel "Anwendung Redakteur" beschriebenen Codeänderungen findest du im Branch "Redakteur".  

### Anwendung Leser
Die im Kapitel "Anwendung Leser" beschriebenen Codeänderungen findest du im Branch "Leser".  

## Installation

### 1. Laravel Nine Starterkit clonen

```md
git clone https://github.com/OliverReinking/laravel-nine-starterkit.git newspilot
cd newspilot
code .
```

### 2. Datenbank

Datei .env.example umbenennen in .env.  
Datenbank erstellen und in Datei .env "verknüpfen".

### 3. Valet

Passe .env ein:
```php
    APP_URL=http://newspilot.test
```

Führe folgenden Befehl aus, um die neue Anwendung mit Valet zu verlinken:
```md
    valet link newspilot
```

### 4. composer
```md
composer install
```

### 5. npm

```md
npm install
php artisan key:generate
php artisan migrate
php artisan db:seed
```

### Anwendung aufrufen
Damit ist die Anwendung **Laravel Nine Starterkit** installiert.

```md
npm run watch
```

Anwendung im Browser aufrufen mit **newspilot.test**


## Buch **Laravel 9**

In meinen Buch **Laravel 9** habe ich die Implementierung der obigen Anwendung **Newspilot** im Detail beschrieben.  

![Laravel 9](https://github.com/OliverReinking/laravel-nine-starterkit/blob/master/public/images/Vorderseite_Blau_4.png)

## Anwendungsbeschreibung

### newspilot.php
Im Verzeichnis config habe ich die neue Datei newspilot.php erstellt. 
Hier sind anwendungsspezifische Informationen hinterlegt.

### web.php
Hier sind alle Routen der "Anwendungen" mit ihren "Routen" hinterlegt:
- Homepage (offene Webseite)
- Administrator (Intranet)
- Mitarbeiter (Intranet)
- Kunde (Extranet)

### resources/js/Pages/Application
Ich habe im Verzeichnis resources/js/Pages das neue Unterverzeichnis Application angelegt.  
Darunter habe ich folgende Unterverzeichnisse angelegt:
- Homepage
- Admin
- Employee
- Customer

#### Homepage (resources/js/Pages/Application)
Das Verzeichnis Homepage enthält die Webseiten:
- Home.vue (die Startseite der Homepage)
- Imprint.vue
- JobApplication.vue (Bewerbungsformular)- 
- Mission.vue
- NoApplicationFound.vue
- NoPageFound.vue
- Privacy.vue
- UserIsNoAdmin.vue
- UserIsNoEmployee.vue
- UserIsNoCustomer.vue

### HandleInertiaRequest.php
Hier habe ich die Funktion share angepasst. 

### RouteServiceProvicer
Hier habe ich die Konstante Home angepasst. 


## License

The Package **Laravel Nine Starterkit** is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
