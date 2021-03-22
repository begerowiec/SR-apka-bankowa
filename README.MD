Projekt aplikacji Bankowej na przedmiot Systemy rozproszone.

Aplikacja podzielona na Terminal Klienta(tk) i Terminal Bankowy (tb)

Klienci za pomocą TK mogą wykonać jedną z następujących operacji:
-przelać pieniądze na inne konto (jeśli ma środki i nr konta docelowego istnieje), 
-wypłacić środki (jeśli są dostępne), 
-dokonać wpłaty (po prostu zwiększa saldo),
-sprawdzić historię transakcji.

Za pomocą Terminalu Bankowego można:
-dodać nowego klienta (imię, nazwisko, PESEL(prosta walidacja długości), Numer konta- generuje się automatycznie i jest unikatowy),
-edytować dane klienta (imię, nazwisko, PESEL).

Dane kliektów przychowywane są w bazie danych, z którą sieciowo komunikuje się aplikacja. Na bazę danych składają się dwie tabele:
-clients (posiada informacje o klientach [id, imię, nazwisko, PESEL, numer konta, stan konta]),
-tranhistory (posiada informacje o transakcjach).

