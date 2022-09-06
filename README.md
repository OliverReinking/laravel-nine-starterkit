# Laravel Nine Starterkit

Das **Laravel Nine Starterkit** besteht aus:
- Laravel 9
- Vue.js 3
- Inertia
- Jetstream
- Tailwind CSS 3
- Homepage
- Anwendung für "Administratoren"
- Anwendung für "Mitarbeiter"
- Anwendung für "Kunden"
    
## Branches

Damit du die Möglichkeit hast, die Entwicklung der Anwendungsplattform Newspilot nachzuvollziehen, habe ich unterschiedliche Entwicklungszustände in Branches dokumentiert.

### Installation
Die im Kapitel "Implementierung" beschriebenen Codeänderungen findest du im Branch "installation".  

### Anwendung Homepage
Die im Kapitel Anwendung "Homepage" beschriebenen Codeänderungen findest du im Branch "homepage".  
Hier gibt es zusätzlich noch die Brances formular-01 und formular-02.  

### Anwendung Administrator
Die im Kapitel Anwendung "Administrator" beschriebenen Codeänderungen findest du im Branch "administrator".  

### Anwendung Mitarbeiter
Die im Kapitel Anwendung "Mitarbeiter" beschriebenen Codeänderungen findest du im Branch "employee".  

### Anwendung Kunde
Die im Kapitel Anwendung "Kunde" beschriebenen Codeänderungen findest du im Branch "customer".  

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


## Buch **Die ersten Schritte in Laravel 9**

In meinen Buch **Die ersten Schritte in Laravel 9** habe ich die Implementierung der obigen Anwendungsplattform **Newspilot** im Detail beschrieben.  

![Die ersten Schritte in Laravel 9](https://github.com/OliverReinking/laravel-nine-starterkit/blob/master/public/images/Vorderseite_Dunkel.png)

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
- About.vue
- Contact.vue
- Home.vue (die Startseite der Homepage)
- Imprint.vue
- JobApplication.vue (Bewerbungsformular)
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

## Funktionsumfang "Newspilot"
In diesem Abschnitt möchte ich den Funktionsumfang der Anwendungsplattform "Newspilot" zusammenfassen:  
- Registrierungsformular
- Login-Formular
- Kennwort-Vergessen-Formular
- Formular zur Änderung der persönlichen Daten
    - Änderung des Namens und der Mailadresse
    - Hochladen eines "Anwenderbildes"
    - Aktivierung einer Zwei-Faktor-Authentifizierung
    - Löschen des Accounts
- Homepage
    - mit Formular (in unserem Beispiel ein Bewerbungsformular)
        - Versand der im Formular eingegebenen Daten per Mail
    - Impressum und Datenschutzerklärung
        - Basis sind jeweils Markdown-Dateien
    - Nacht-Modus
        - der Anwender hat die Möglichkeit, einen Nach-Modus einzuschalten
- Anwendung für "Administratoren"
    - Startseite (Dashboard) mit Statistikwerten
    - Liste aller Anwender inklusive Anwendersuche
    - Anzeige aller Daten eines Anwenders
    - Formular zum Abändern von Anwenderdaten
    - Löschen eines Anwenders
    - Seite mit allen verwendeten Child-Komponenten (Documentation.vue)
- Anwendung für "Mitarbeiter"
    - Startseite (Dashboard)
- Anwendung für "Kunde"
    - Startseite (Dashboard)
- die Anwendungen "Administrator", "Mitarbeiter" und "Kunde"
    - besitzen einen Header und einer Sidebar
    - besitzen eine "Brotkrümel-Navigation" (Child-Komponente Breadcrumb.vue)
    - besitzen einen "Anwendungswechsler"
    - besitzen einen "Nacht-Modus"

## Screenshots der Anwendungsplattform "Newspilot"

### Anwendung Homepage - Startseite
![Anwendung Homepage - Startseite](https://github.com/OliverReinking/laravel-nine-starterkit/blob/master/public/images/Newspilot_001.png)

### Anwendung Homepage - Bewerbungsformular
![Anwendung Homepage - Bewerbungsformular](https://github.com/OliverReinking/laravel-nine-starterkit/blob/master/public/images/Newspilot_002.png)

### Anwendung Homepage - Bewerbungsformular im Nachtmodus
![Anwendung Homepage - Bewerbungsformular im Nachtmodus](https://github.com/OliverReinking/laravel-nine-starterkit/blob/master/public/images/Newspilot_003.png)

### Login
![Login](https://github.com/OliverReinking/laravel-nine-starterkit/blob/master/public/images/Newspilot_004.png)

### Anwendung Administrator - Startseite
![Anwendung Administrator - Startseite](https://github.com/OliverReinking/laravel-nine-starterkit/blob/master/public/images/Newspilot_005.png)

### Anwendung Administrator - Liste der Anwender
![Anwendung Administrator - Liste der Anwender](https://github.com/OliverReinking/laravel-nine-starterkit/blob/master/public/images/Newspilot_006.png)

### Anwendung Administrator - Aktualisierung der Anwenderdaten
![Anwendung Administrator - Aktualisierung der Anwenderdaten](https://github.com/OliverReinking/laravel-nine-starterkit/blob/master/public/images/Newspilot_007.png)

### Anwendung Administrator - Aktualisierung der Anwenderdaten im Smartphone
![Anwendung Administrator - Aktualisierung der Anwenderdaten im Smartphone](https://github.com/OliverReinking/laravel-nine-starterkit/blob/master/public/images/Newspilot_008.png)

### Anwendung Mitarbeiter - Startseite
![Anwendung Mitarbeiter - Startseite](https://github.com/OliverReinking/laravel-nine-starterkit/blob/master/public/images/Newspilot_009.png)

### Anwendung Kunde - Startseite
![Anwendung Kunde - Startseite](https://github.com/OliverReinking/laravel-nine-starterkit/blob/master/public/images/Newspilot_010.png)


## License

The Package **Laravel Nine Starterkit** is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
