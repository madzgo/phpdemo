# PHP demonstracija

Ovaj projekat je demonstracija osnovne funkcionalnosti PHP skripting jezika.

Svaka linija koda je objasnjena unutar fajlova, ovaj Readme fajl je pregled projekta.

Projekat prati sledece standarde za imenovanje fajlova, funkcija i promjenljivih:
- PSR-1: http://www.php-fig.org/psr/psr-1/
- PSR-2: http://www.php-fig.org/psr/psr-2/

Struktura fajlova je pojednostavljena verzija MVC paterna.

### Funkcionalnost

Index.php odgovara na zahtjev korisnika i sastavlja HTML stranice. (U MVC-u taj dio se naziva kontroler)
Koristi pomocne funkcije iz lib/util.php fajla.

Na osnovu parametara u zahtjevu korisnika, index.php odredjuje vrijednosti promjenljivih (u ovom slucaju, 'backgroundColor' i 'textColor')

Zatim se ucitava templejt index.tpl.php koji ispisuje HTML.
Fajl template/index.tpl.php ocekuje da budu definisane promjenljive 'color', 'backgroundColor' i 'textColor'. 

Templejti se na ovaj nacin odvajaju od logike. 
Ukoliko jos jedan kontroler zeli da koristi isti index.tpl.php, dovoljno je da definise potrebne promjenljive i pozove templejt.