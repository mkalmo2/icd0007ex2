Kopeerige praktikumi projekti juurkausta (icd0007ex2) sisu oma
projekti (icd0007) kausta "ex2". NB! .git ja .idea kataloogi ärge
kopeerige.

1.  Elementide paigutamine Html-iga

Ülesande eesmärk on harjutada elementide paigutamist veebilehtedel.
Kasutage ainult Html-i vahendeid (Css-ist räägime 4. loengus). Praktikas
tehakse elementide paigutus üldjuhul Css-i abil aga samad põhimõtted
kehtivad ka seal.

Kataloogis layout on fail front.html kuhu peaksite vastava sisu lisama.
Lõpptulemus peaks välja nägema nagu see on kujutatud pildil
layout/img/table_layout_1.png

Seejärel tehke ka teistele piltidele vastavad lehed (Html failid).

Linkide abil peaks saama lehtede vahel liikuda.

Link "Avaleht" viitab failile front.html. Link "Nimekiri" viitab failile
list.html. Lehel list.html olev link "Jaak" viitab failile details.html.
Link "Seaded" ei pea kuhugi viitama (nt. src="").

"Lorem Ipsum" Teksti saate aadressilt https://www.lipsum.com.

Näide sarnase ülesande lahendamisest:
https://www.youtube.com/watch?v=6piWKpjCQPw

2.  Proovige läbi failisüsteemis ja veebis navigeerimine.
    Kataloogistruktuuri leidate kataloogist "nav".

    a)  Harjutage käsureal navigeerimist (Slaidid "Navigeerimine
        (failisüsteem)").

    -   Olles käsureal juurkataloogis (icd0007/ex2/nav) trükkige
        konsooli faili a.txt sisu.
    -   Liikuge kataloogi e.
    -   Trükkige konsooli faili a.txt sisu.
    -   Liikuge kataloogi c.
    -   Trükkige konsooli faili f.txt sisu.
    -   Liikuge juurkataloogi (icd0007/ex2/nav).

    b)  Kirjutage relatiivsed lingid Html failidesse (Slaidid
        "Navigeerimine (veeb)").

    PhpStorm püüab teid aidata pakkudes ise õiget vastust. Ärge sellele
    toetuge ja mõelge lõplik vastus enne välja, kui trükkima hakkate.
    Php rakenduste juures läheb navigeerimine keerulisemaks ja IDE ka
    enam ei aita. Kui juba siin lihtsas osas tööriistade abile loota,
    läheb hiljem raskeks.

    Kirjutage järgmised lingid Html failidesse:

        index.html -> a.html (failis index.html on link, mis viitab failile a.html)
        a.html -> e.html
        e.html -> d.html
        d.html -> b.html

    Failis f.html on img element, millel on src täitmata. Kirjutage
    sinna viide kataloogis d asuvale failile html-logo.png.

    Kirjutage fails f.html olevale lingile nimega "shortest self" lühim
    võimalik link failile f.html.

    Kirjutage fails f.html olevale lingile nimega "shortest
    f/index.html" lühim võimalik link failile "/a/b/c/d/e/f/index.html".

3.  Lõplik eesmärk on teha rakendus, mis võimaldab sisestada, infot
    töötajate ja ülesannete kohta.

    Näide: https://enos.itcollege.ee/~makalm/icd0007/sample/

    Alustuseks teeme valmis staatilised Html lehed, millele hiljem
    vajalikud funktsioonid (nt. salvestamise) juurde paneme.

    Töö pange oma icd0007 repo kausta /ex2/proto.

    Selle korra eesmärk on teha valmis viis Html lehte (dashboard.html,
    employee-list.html, employee-form.html, jne), mida hiljem kasutama
    hakkame.

    Teie lehed võivad olla teistsuguse paigutusega aga peavad sisaldama
    samu elemente.

    Seda, millised elemendid peavad lehtedel olema, vaadake näidisest.

    Kuna kujundusest pole veel loengus räägitud, siis lõpliku välimust
    te veel praegu valmis teha ei saa. Seniste loengute põhjal saate
    lisada vajalikud elemendid (tabelid, sisestuskastid, lipikud jne.)
    ja lingid lehtede vahel liikumiseks (menüü).

    Elementide paigutamiseks kasutage tabeleid. Oluline on, et asjad ei
    oleks pilla-palla laiali vaid leht näeks korrektne välja.

    Peaksite tegema järgmised viis lehte.

    Töötajate nimekirja leht (nt. employee-list.html)

    -   Menüü viie lingiga ("Dashboard", "Employees", "Add Employee",
        "Tasks", "Add Task")
    -   Tabel andmete jaoks. Näitena lisage kaks töötajat.
    -   Jalus

    Töötaja lisamise vormi leht (nt. employee-form.html)

    -   Menüü viie lingiga (sama kõigil lehtedel).
    -   Lehel on samad elemendid, mis näidisel. Positsiooni valikus on
        mõned näidisandmed.
    -   Jalus

    Ülesannete nimekirja leht (nt. task-list.html)

    -   Menüü viie lingiga (sama kõigil lehtedel).
    -   Tabel andmete jaoks. Näitena lisage kaks ülesannet.
    -   Jalus

    Ülesande lisamise vormi leht (task-form.html)

    -   Menüü viie lingiga (sama kõigil lehtedel).
    -   Lehel on samad elemendid, mis näidisel.
    -   Jalus

    Ülevaate leht (dashboard.html)

    -   Menüü viie lingiga (sama kõigil lehtedel).
    -   Lehel on samad elemendid, mis näidisel.
    -   Jalus

    Menüü lingid kõigil lehtedel peaksid viitama vastavale lehele.

    Tehtud tööd kontrollitakse automaatselt ja selleks peavad olema
    täidetud järgmised tingimused.

    a.  Dashboard leht on nimega index.html ja see asub kataloogis
        icd0007/ex2/proto. Teiste failide nimed ja asukoha võite ise
        valida. Mis valikud praegu teete, ei ole kuigi oluline, kuna see
        muutub edaspidi.

    b.  Töötajate nimekirja lehe koodis on body tag-il atribuut id
        väärtusega "employee-list-page". Nt.

        ```{=html}
        <body id="employee-list-page">
        ```
        ...

        Teistel lehtede koodis on body tag-il atribuudid id väärtusega
        "dashboard-page", "employee-form-page", "task-list-page" ja
        "task-form-page".

    c.  Kõikidel lehtedel on menüü viie lingiga lehtede vahel
        liikumiseks (üks linkidest viitab iseendale).

    d.  Töötajate nimekirja lehele viitaval lingil on atribuut id
        väärtusega "employee-list-link". Nt.
        `<a href="..." id="employee-list-link">`{=html}Employees`</a>`{=html}

        Teistel lehtedele viitavatel linkidel on atribuudid id
        väärtusega "dashboard-link", "employee-form-link",
        "task-list-link", "task-form-link".

    Html kood peab olema korrektne ja korrektselt trepitud.

    Seda, kas Html on korrektne, saate kontrollida lehelt:
    https://validator.w3.org/ NB! See validaator ei näita viga, kui teil
    on faili lõpust midagi puudu (nt. Html tag on sulgemata).

4.  Kirjutage Php programm, mis väljastab Html lehe koodi
    korrutustabeliga.

    Lehel peaks olema 10 lahtrit (cell).

    (1. lahtri algus) 0 x 0 = 0 0 x 1 = 0 ... (2. lahtri algus) 1 x 0 =
    0 1 x 1 = 1 ... (10. lahtri algus) 9 x 0 = 0 9 x 1 = 9 ...

    Lahtrid võiks paikenda kahes reas ja viies tulbas.

    Kataloogis "multiplication" on lehe staatilised osad ja need saate
    enda programmis kätte funktsiooniga file_get_contents().

    Korrutustabeli sisu on väga kordav info ja selle võiks genereerida
    programmi abil. Tööga on alustatud failis multiplication.php.

    Programmi väljundi saate faili kirjutada alloleva käsuga, kui olete
    käsureal samas kataloogis, kus asub multiplication.php ("\>" märk
    tähendab siin väljundi faili suunamist).

    php multiplication.php \> multiplication-table.html

    (loob faili multiplication-table.html)

5.  Kirjutage käsurea programm, millelt saab küsida infot varasemate
    aastate temperatuuride kohta.

    Varasemas harjutustunnis kirjutasite funktsioonid
    getDaysUnderTemp(), getDaysUnderTempDictionary() ja dictToString().
    Nüüd peaksite need üheks programmiks kokku panema.

    All on mõned programmi kasutamise näided (rea alguses olev "\>" märk
    tähistab seda, et järgnev tuleks kirjutada käsureale).

    > php temps.php --command days-under-temp --year 2021 --temp -5

    väljastab funktsiooni getDaysUnderTemp() tulemuse argumentidega 2021
    ja -5.

    > php temps.php --command days-under-temp-dict --temp -5

    väljastab funktsiooni getDaysUnderTempDictionary() tulemuse
    argumentiga -5.

    > php temps.php --command avg-winter-temp --year 2021/2022

    väljastab argumendiga määratud aasta talve keskmise temperatuuri.
    Talve keskmise temperatuuri all on mõeldud 2021 detsembri, 2022
    jaanuari ja 2022 veebruari keskmist temperatuuri.

    Varasemate harjutustundide koodi ei tohi duplitseerida. Koodile
    viitamiseks on konstruktsioon require_once('../ex1/ex7.php').

    Varasemas harjutustunnis viitasite andmete failile relatiivselt ja
    kuna nüüd käivitate koodi teisest kohast, siis see viide pole enam
    õige.

    Php-s on konstant **DIR**, mis viitab sellele kataloogile, kus asub
    php fail, milles seda konstanti kasutatakse. Seega peaksite
    varasemas koodis data/temperatures.csv asemele kirjutama **DIR** .
    '/data/temperatures.csv', et mõlemast kohast koodi käivitamisel
    leitaks õige fail üles.

    Lahenduse kontrollimiseks on testid failist ex2c.php (repo
    icd0007tests).

6.  Commit-ige muudatused ja push-ige need Bitbucket-isse.

    Lisage commit-ile tag ex2.

    Veenduge tulemuste lehelt, et kõik õnnestus.

Seletused ja lahendused: https://youtu.be/H0A6EXpCZD8
