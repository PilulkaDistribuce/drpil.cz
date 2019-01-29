# Specifikace projektu

Apliakce bude jednoduchy firemni zkracovac URL adres prevazne pouzivany pro marketingove ucely.

## Popis sekci

### Hlavni stranka

Route: `/`

* formular pro vlozeni url adresy

### Detail vytvorene URL adresy

Route: `/u/{id}`

* informace o vytvorene URL
* adresa pro zkopirovani

### Presmerovani

Route: `/{id}`

* URL adresa na ktere se bude provadet presmerovani (TODO: 301, 302)

