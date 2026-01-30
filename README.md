## Wymagania

- PHP >= 8.0
- Composer
- MySQL
- Serwer WWW lub wbudowany serwer PHP

---

## Instalacja

### 1. Klonowanie repozytorium

```bash
git clone https://github.com/Toneq/e-instytucja-rekrutacja.git
cd e-instytucja-rekrutacja
```

---

### 2. Instalacja zależności PHP

```bash
composer install
```

---

## Konfiguracja bazy danych

### 1. Utworzenie bazy danych MySQL

Zaloguj się do MySQL i utwórz bazę danych:

```sql
CREATE DATABASE books CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

---

### 2. Konfiguracja połączenia z bazą danych

Otwórz plik:

```
config/db.php
```

I uzupełnij dane dostępowe do MySQL:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=TWÓJ_HOST;dbname=NAZWA_BAZY',
    'username' => 'TWÓJ_USER_MYSQL',
    'password' => 'TWOJE_HASŁO_MYSQL',
    'charset' => 'utf8mb4',
];
```

`NAZWA_BAZY` powinna być taka sama jak baza utworzona w poprzednim kroku.

---

## Migracje bazy danych

Aby utworzyć wymagane tabele w bazie danych, uruchom:

```bash
php yii migrate
```

---

## Uruchomienie aplikacji

Uruchom wbudowany serwer PHP:

```bash
php yii serve
```

Aplikacja będzie dostępna pod adresem:

```
http://localhost:8080
```

---

## Endpointy API

- **GET** `/api/books`  
  Zwraca listę książek w formacie JSON

- **POST** `/api/books`  
  Dodaje nową książkę  

Struktura danych:

```json
{
  "author": "",
  "country": "",
  "imageLink": "",
  "language": "",
  "link": "",
  "pages": 0,
  "title": "",
  "year": 0
}
```

---

## Technologie

- Yii2 (PHP 8)
- MySQL
- AngularJS 1.8.3
- Bootstrap 5