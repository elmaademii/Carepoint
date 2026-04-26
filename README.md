# CarePoint – Web 2

CarePoint është një projekt grupor akademik në lëndën **Web 2**, i ndërtuar mbi projektin ekzistues të **Web 1 (frontend)**.
Ky version përfshin implementimin e backend-it në PHP sipas kërkesave: strukturë reale aplikacioni, autentikim me role, OOP, validim server-side, sessions dhe cookies.

---

## Project Overview

CarePoint është një web aplikacion për një institucion shëndetësor që ofron:

* Autentikim me role (`admin`, `patient`) pa databazë (hardcoded users)
* Panel të mbrojtur për admin
* Validim server-side të formës së kontaktit (Regex)
* Personalizim me cookies (consent + preferences)
* Organizim modular me `includes`, `classes`, `actions`

---

## Tech Stack

* PHP
* HTML5
* CSS3
* JavaScript
* XAMPP (Apache)
* Git & GitHub

---

## Main Features

* Faqe funksionale:

  * Ballina
  * Rreth CarePoint
  * Shërbimet
  * Stafi
  * Kontakt
  * Login / Logout
  * Dashboard (vetëm për admin)
  * Cookies (consent, preferences, user rights)

* OOP (Object-Oriented Programming):

  * `User`
  * `Doctor extends User`

* Funksionalitete:

  * Sortim dinamik i stafit (`usort`)
  * Validim server-side me Regex
  * Session-based authentication
  * Cookie consent & preferences

---

## Project Structure

```
Carepoint/
│
├── actions/
│   └── validate_contact.php
│
├── Ballina/
│   ├── ballina.php
│   └── ballina.css
│
├── classes/
│   ├── User.php
│   └── Doctor.php
│
├── Cookies/
│   ├── cookies_consent.php
│   ├── preferences.php
│   └── te_drejtat_tuaya.php
│
├── Dashboard/
│   └── dashboard.php
│
├── includes/
│   ├── auth.php
│   ├── header.php
│   ├── navbar.php
│   └── footer.php
│
├── Kontakt/
├── Login-Logout/
├── Rreth-CarePoint/
├── Sherbimet/
├── Stafi/
├── img/
├── style.css
└── README.md
```

---

## Requirements

* XAMPP (Apache i aktivizuar)
* Browser modern (Chrome, Edge, Firefox)
* Git (opsionale)

---

## Setup & Run (XAMPP)

### 1. Vendos projektin në `htdocs`

```bash
cd C:\xampp\htdocs
git clone https://github.com/elmaademii/Carepoint.git
```

ose manualisht:

```
C:\xampp\htdocs\Carepoint
```

---

### 2. Starto Apache

* Hap XAMPP Control Panel
* Kliko **Start** te Apache

---

### 3. Hape në browser

```
http://localhost/Carepoint/Ballina/ballina.php
```

ose nëse përdor port 8080:

```
http://localhost:8080/Carepoint/Ballina/ballina.php
```

---

## Alternative: PHP Built-in Server

```bash
cd C:\path\to\Carepoint
php -S localhost:8000
```

Pastaj:

```
http://localhost:8000/Ballina/ballina.php
```

---

## Useful Routes

* Ballina → `/Ballina/ballina.php`
* Login → `/Login-Logout/login.php`
* Dashboard → `/Dashboard/dashboard.php`
* Kontakt → `/Kontakt/kontakt.php`
* Cookies → `/Cookies/`

---

## Demo Login Credentials

**Admin**

* Username: `admin.carepoint`
* Password: `AdminCare2026`

**Patient**

* Username: `patient.demo`
* Password: `PatientCare2026`

---

## Work Distribution

* **Elma Ademi** – Struktura dhe organizimi i projektit
* **Elisa Hadergjonaj** – Login, sessions, role management
* **Elsa Shaqiri** – Cookies dhe personalizimi
* **Blediona Aliu** – OOP (User, Doctor)
* **Diona Gerxhaliu** – Validim Regex & arrays

---

## License

MIT License

