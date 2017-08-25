# Alaus-magnatas

Trumpa testine programėle. Programėles idėja yra rasti geriausia kelia iki 
artimiausiu alaus gamyklu.

## Getting Started

Trumpas aprašas kaip naudotis turima programėle.

### Irasyti Composeri

Projekto kataloge įvykdom pateikta komanda

```
composer install
```

### Sukurti Duomenų baze

Tam kad galėtume saugoti visus duomenys reikia sukurt duomenų baze.

```
mysql -u root -p
```

Įveskite savo duomenų bazes slaptažodi.

Dabar sukuriam duomenų baze:

```
create databese {Duomenu bazes pavadinimas}
```
```
exit
```
Dabar projekte atidarius parameters.yml failą app/config/parameters.yml

Suvedame Sukurtos Duomenų bazes duomenys:

    database_host: 127.0.0.1
    database_port: null
    database_name: {Sukurtos Duomenu bazes pavadinimas}
    database_user: root
    database_password: {Jusu prisijungimas prie duomenu bazes}

Ir paskutine ką reikia atlikt tai sukurt lenteles bei ryšius tarp jų:
```
php bin/console doctrine:schema:update --force
```
### Kaip paleist projektą

Terminale iejus i projekto katalogą paleidžiame sekančia komanda:

```
bin/console server:start
```
### Kaip pradėti naudotis projektu

Užeinam i "http://localhost:8000/application" arba "http://127.0.0.1:8000/application" 
puslapi. Matom automatiškai uždeda markeri Kaune. Žemėlapių galima pilnai naudotis 
kaip google map's. Street view irgi veikia. Norint rast kelia iki artimiausiu alaus 
gamyklų reikia įvest Platuma(Latitude) ir Ilguma(Longitude) savo pozicijos ir paspaust 
Rasti(Search) mygtuką. Griežtai i laukelius vest tik skaičius.
