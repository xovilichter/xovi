# Xovilichter Xovi Scraper 1.1

Ebenso wie der [Xovilichter Dynapso Scraper](https://github.com/xovilichter/dynapso) fragt die Xovi Version die aktuellen Rankings über die Xovi Website ab. Die Liste umfasst im Gegensatz zu Dynapso jedoch nur die ersten 25 Ergebnisse und enthält auch keine Universal Search Ergebnisse.

## Test

Zum Testen der Funktion kann die test.php Datei aufgerufen werden

```no-highlight
php test.php > test_array.txt
```

## Benutzung

Zur Benutzung kann die Funktion in ein vorhandenes Script geladen und über den Funktionsnamen xovilichter_xovi_scraper() aufgerufen werden.

```php
<?php 

include('xovilichter_xovi_scraper.php');
$search_results = xovilichter_xovi_scraper();
print_r($search_results);
```

## Array Ausgabe

```no-highlight
Array
(
    [last_update] => 2014-05-21 18:21
    [search_results] => Array
        (
            [0] => Array
                (
                    [position] => 1
                    [url] => http://www.xovi.de/xovilichter/
                )

            [1] => Array
                (
                    [position] => 2
                    [url] => http://www.habbo.cx/xovilichter
                )

            [2] => Array
                (
                    [position] => 3
                    [url] => http://www.dynapso.de/xovilichter/
                )

            [3] => Array
                (
                    [position] => 4
                    [url] => http://ronny-marx.de/xovilichter/
                )

            [4] => Array
                (
                    [position] => 5
                    [url] => http://www.xovilichter-smx.de/
                )

            [5] => Array
                (
                    [position] => 6
                    [url] => http://aus.gerech.net/xovilichter/
                )
                
            ...

        )

)
```