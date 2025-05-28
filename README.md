# AJAX ID Kereső Projekt

Ez a projekt egy egyszerű PHP + JavaScript alkalmazás,
amely ID alapján személyeket keres szerveroldali adatból.

## Fájlstruktúra

- `index1.php`: Alap JSON válasz tömbből
- `index2.php`: Formos lekérdezés újratöltéssel
- `index.php`: AJAX-os keresés
- `keres.php`: AJAX kérés szerver oldali feldolgozása
- `styles.css`: Stílus fájl
- `ajax.js`: JavaScript eseménykezelő
- `README.md`: A rövid dokumentáció


## Git-es dokumentáció

1. XAMPP, Apache elindítása
2. A mappa létrehozása a xampp/htdocs/ -ban,
hiszen innen tudjuk feltölteni GitHub-ra a fájlokat
3. Fájlok létrehozása, tanultak implementálása
4. Git-es parancsok sorban felsorolása,
hogy a jövőben is emlékezzünk rá,
ha esetleg egy ideig nem használnánk Git-et

### Git-es parancsok

1. git init
2. git add .
3. git commit -m "Adott tevékenység üzenetben dokumentálása."
4. git remote add origin https://github.com/felhasználónév/projektNeve.git
5. git push -u origin master


### Git-es parancsok magyarázata

1. Inicializálja (megjelöli) a Git-et a projekt mappájában.
   Ezzel létrejön egy .git mappa, amiben a Git tárolja a verzióköveteléshez szükséges adatokat.

2. Hozzáadja az összes változtatott vagy új fáljt a következő commithoz.
   A ' . ' - azt jelenti, hogy minden fájlt a mappában.

3. A hozzáadott fájlokat véglegesíti a Git történetében egy új "pillanatképként".
   Az idézőjelben az adott üzenet, "mini dokumentáció-t" érdemes írni.

4. Összekapcsolja a helyi projektet egy távoli GitHub repository-val

5. Feltölti a commitolt fájlokat a GitHub-ra az "origin" nevű távoli "master" ágába.


Készítette: Brückner Gábor

Steyer Zalán Tanár úr, és 
Fábián Zoltán Igazgató úr 
tanításai, és feladata alapján.