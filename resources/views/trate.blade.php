@extends('layouts.master')

@section('title', 'Trate')
@section('content')

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">

            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="Borský Mikuláš trať" class="absolute inset-0 w-full h-full object-cover object-center" src="https://www.smf.sk/medias/Borsky_Mikulas_trat-1024x576.jpg">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Rallycross a Motocross club Borský Mikuláš</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Miesto: Borský Mikuláš</h1>
                            <p class="leading-relaxed">Informácia o možnosti trénovania (dni, časy a i.):
                                Tréningové dni sú: pondelok, piatok a sobota od 9:00 do 19:00. Deti po dohode môžu trénovať aj mimo tréningové dni. Vždy je nutné sa náhlásiť pred alebo po príchode na trať.

                                Bližšie informácie o trati: (bližšie špecifiká, opis trate,…):
                                Naša dráha, či motokosová alebo endurová je prevažne pieskového charakteru, preto nám umožňuje prevádzkovať hlavne v jesenných a zimných mesiacoch. Toto vítajú hlavne jazdci, ktorí nechcú podceniť zimnú prípravu. Dĺžka motokrosovej dráhy je 1870m a stále sa predlžuje.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4 ">
                    <div class="flex relative h-full">
                        <img alt="Veľké Uherce trať" class="absolute inset-0 w-full h-full object-cover object-center" src="https://mxopen.sk/media/article/240892003_10219860935260382_1520260413205768623_n.jpg">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">MX Vinohrad – Veľké Uherce</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Miesto:	Veľké Uherce</h1>
                            <p class="leading-relaxed">Popis:
                                Motokrosová trať s dlhou históriou, ktorá prešla v roku 2018 kompletnou rekonštrukciou a prerábkou pod vedením svetoznámeho staviteľa tratí Grega Atkinsa. Spĺňa všetky kritéria podľa predpisov FIM.

                                Možnosti trénovania:
                                Každú stredu od 14:00 do 19:00
                                Poplatok za tréning: 10 € – dospelí, 5 € – deti a ženy </p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative h-full">
                        <img alt="Gabčíkovo trať" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.ytimg.com/vi/upMyo9ihmEA/maxresdefault.jpg">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">MX – OFFROAD Gabčíkovo</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Miesto:	Gabčíkovo</h1>
                            <p class="leading-relaxed">Popis:	Dĺžka trate: 3,6 km
                                Šírka trate: 8 – 12 m
                                Časť trate MX, lesík, štrková zóna
                                Možnosti trénovania:  	Je potrebný kontakt prostredníctvom FB</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative h-full">
                        <img alt="SVEREPEC trať" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.ytimg.com/vi/c7sZtuo8Bbk/maxresdefault.jpg">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Motokrosový areál NKC Sverepec</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Miesto:	SVEREPEC</h1>
                            <p class="leading-relaxed">Popis: Známa trať vo Sverepci
                                Možnosti trénovania:
                                Tréningy je potrebné dohodnúť telefonicky vopred.
                                Tréningy a jazdy v priestoroch NKC, sú spoplatnené:- ohlásený tréning 10€ / jazdci s lic.SMF 7€
                                – neohlásený tréning 15€ / jazdci s lic. SMF 10€</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative h-full">
                        <img alt="Slovenské Pravno trať" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.ytimg.com/vi/oQlHIkO0SCk/maxresdefault.jpg">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Motokrosový areál ZE-TEC Slovenské Pravno</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Miesto:	Slovenské Pravno</h1>
                            <p class="leading-relaxed">    Do motokrosového areálu sa vstupuje po kontaktovaní správcu a jeho súhlase
                                Jazdenie je po súhlase správcu možné od 7 hod. do 20 hod.
                                V prípade svojvoľného vstupu do areálu sa bude skutok považovať za neoprávnený vstup na cudzí pozemok
                                Pri vstupe do areálu za účelom tréningu si musí jazdec zabezpečiť osobu, ktorá mu v prípade úrazu poskytne prvú pomoc
                                Jazdec musí mat na sebe všetky bezpečnostné prvky podľa platných predpisov SMF
                                Prísny zákaz jazdiť v protismere!!!! Smer jazdy je v protismere hodinových ručičiek.
                                Odpadky je potrebné zanechávať len na vopred vyhradenom mieste k tomuto účelu</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative h-full">
                        <img alt="Gbely trať" class="absolute inset-0 w-full h-full object-cover object-center" src="https://www.smf.sk/medias/trat_MX_Gbely_1.jpg">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Motokrosová trať Gbely</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Miesto:	GBELY</h1>
                            <p class="leading-relaxed">Tréningy sú na pláne v:
                                utorok – 13:00-20:00
                                štvrtok – 12:00-20:00
                                sobotu a nedeľu – 10:00-18:00

                                NOVÁ CENA: 8 Eur/250 Kč</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative h-full">
                        <img alt="Kechnec trať" class="absolute inset-0 w-full h-full object-cover object-center" src="https://www.smf.sk/materials/supervisor/motokros/2016/trat_kechnec/e650d595-9832-40c0-ab73-0a34d685fe9f_lavice_p_strana.jpg">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Motokrosová trať Kechnec</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Miesto:	KECHNEC</h1>
                            <p class="leading-relaxed">Popis: bývalá štrkovňa, podklad: štrk, hlina; dĺžka trate: 1975m, šírka: minimálne 8m, 12 lavíc, prevýšenie trate: 14m; v roku 2015 táto trať bola súčasťou ISDE 2015, na ktorej sa konal záverečný motokros</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative h-full">
                        <img alt="Ješková Ves Brody trať" class="absolute inset-0 w-full h-full object-cover object-center" src="https://lh3.googleusercontent.com/proxy/YA5_DURXC1ZykvXQxUx3uJzeJlzBS2Hn_crknK0ksgQfyY8QI9iactfCXiVbrt6t2vY0xaS_WGhD3XM7VXK-siLu1clx2KG1s7cCbw">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Motokrosová trať Ješková Ves Brody</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Miesto:	JEŠKOVÁ VES</h1>
                            <p class="leading-relaxed">Popis:	Denný poplatok za tréning je 5€ a permanentka na celý rok 30€
                                Možnosti trénovania:  	* Streda  14:00 – 20:00 hod.
                                * Piatok  14:00 – 20:00 hod.
                                * Sobota 10:00 – 19:30 hod.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative h-full">
                        <img alt="Spišské Vlachy trať" class="absolute inset-0 w-full h-full object-cover object-center" src="https://www.smf.sk/medias/60639152_1057048861172799_1625475431673102336_n.jpg">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Motokrosová trať Turlíky Spišské Vlachy</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Miesto:	SPIŠKÉ VLACHY</h1>
                            <p class="leading-relaxed">Popis: 	Trať je prírodná so 4 lavicami, povrch hlinitý, dĺžka trate 1600m
                                Možnosti trénovania:	Pondelok – piatok: 15:00 – 18:00 hod.
                                Sobota a nedeľa: 10:00 – 18:00 hod.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop




