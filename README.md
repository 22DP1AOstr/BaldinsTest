
Teorija Jautajumi

Aleksandrs Ostrovskis DP3-1

1. Kas Ir API?
   
Tas ir veids, kā dažādiem datorprogrammu komponentiem jāsadarbojas un jāsaistās viens ar otru. API nodrošina noteiktu funkcionalitāti vai pakalpojumu izmantošanai citās programmās, ļaujot tām izmantot funkcijas vai dati, kas tiek piedāvāti šajā interfeisā.

2. Kā deklarēt mainīgo PHP valodā?
Lai deklarētu mainīgo, jums vienkārši jānorāda mainīgā nosaukums, pēc tam jānorāda vienāds zīme (=) un beidzot jānorāda vērtība, kuru vēlaties piešķirt mainīgajam. Piemēram:

$mainigais = "vērtība";

3. Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
Laravel izmanto MVC (Model-View-Controller) arhitektūras modeli. Šis modelis nodrošina struktūru un organizāciju web lietojumprogrammu izstrādē, sadalot aplikāciju trīs pamata komponentos:

4. Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
ORM (Object-Relational Mapping) ir tehnoloģija, kas ļauj attēlot relāciju datubāzes datus objektu orientētā programmēšanas valodā, piemēram, PHP, Java vai Python. Šī tehnoloģija ļauj izveidot abstrakcijas slāni starp datubāzes tabulām un programmēšanas valodu objektiem

5. Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus
lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:

$users = User::where('rating', '>', 4)->get();

