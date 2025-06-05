
        <!-- Products Start -->
        <div class="container-fluid services py-5">
            <div class="container py-5">


         
                <div class="mx-auto text-center mb-5" style="max-width: 1200px;">
                    <p class="fs-4 text-uppercase text-center text-primary">Produkty</p>
                    <h1 class="display-3">O produktach</h1>
                </div>

                <div class="mx-auto text-center mb-5" style="max-width: 1200px;">
                    <p class="fs-4 text-primary reset-text">
                   
                        
                    PRODUKTY EKOLOGICZNE, MEDYCYNA NATURALNA...!

                    </div>
                    
                    <div class="mx-auto text-start mb-5" style="max-width: 1200px;">
                   
                 
                   

NANOPLASTRY, czyli inaczej mówiąc Bio-Elektrody Stymulujące nasze własne Komórki Macierzyste
<br>
<br>

* Zapytaj mnie o produkt,<br>
* Poleć znajomemu,<br>
* Dodaj opinię.<br>
<br>

Plastry są nowoczesną formą FOTOTERAPII.
Zawierają w sobie kryształy organiczne, które pod wpływem ciepła wytwarzanego przez ciało odbijają niewielkie ilości światła w zakresie pasm podczerwieni i światła widzialnego.
Po umieszczeniu na ciele plastry stymulują nerwy i punkty akupunkturowe na powierzchni skóry, co przynosi korzyści zdrowotne nieosiągalne przy użyciu jakiegokolwiek innego produktu dostępnego obecnie na rynku.
FTIR (spektroskopia w podczerwieni z transformacją Fouriera) potwierdza to zjawisko.
Plastry zawierają opatentowaną mieszankę aminokwasów, wody, stabilizowanego tlenu i naturalnych związków organicznych.
Żadna z substancji zawartych w plastrach nie wnika do wnętrza organizmu.

Przyzwyczailiśmy się do myślenia, że aby osiągnąć poprawę naszego zdrowia, musimy wprowadzać coś (na przykład witaminy) do wnętrza organizmu.
Choć odpowiednie odżywianie, nawodnienie i ćwiczenia fizyczne są niezbędnymi elementami zdrowego trybu życia, nasz organizm potrzebuje również ciągłego przepływu energii.
Na przykład, nasz mózg i nerwy przesyłają sygnały elektryczne do mięśni, powodując ich skurcze w wyniku wykorzystania przechowywanej w komórkach energii chemicznej.

Od tysięcy lat wiadomo, że określone częstotliwości światła mogą powodować określone zmiany w organizmie człowieka.
Kiedy wychodzimy na słońce, częstotliwość odbieranego światła powoduje, że w naszym organizmie wytwarzana jest witamina D.
Inna częstotliwość światła (promieniowanie UV) skutkuje wytwarzaniem MELANINY — substancji chemicznej odpowiadającej za opaleniznę.

W plastrach wykorzystano tę wiedzę, aby pobudzić organizm do aktywacji komórek macierzystych, zwiększenia energii, zwalczania bólu, detoksykacji, opóźnienia efektów starzenia, kontroli apetytu, zmniejszenia stresu, zapewnienia lepszej jakości snu, wspierania zdrowego układu sercowo-naczyniowego, poprawy nastroju poprzez stymulację produkcji endorfin, poprawy stanu zdrowia skóry, a nawet w celu bezpiecznego łagodzenia bólu i stanów zapalnych

Już pierwsze niezależne badania pokazały ponad 20% przyspieszenie spalania tłuszczu oraz średni wzrost energii i wydolności organizmu na poziomie 25%!
I wszystko to bez wnikania jakiejkolwiek substancji do organizmu!
Informacja ta błyskawicznie dostała się do świata zawodowych sportowców i wielu z nich zaczęło korzystać z niej regularnie bijąc swoje dotychczasowe rekordy.
Do nich należą takie sławy sportowe, jak m.in. David Beckham, Serena Williams, Ronnie Coleman, złoci medaliści igrzysk olimpijskich.

          
</p>


<p class="fs-4 text-uppercase text-center text-primary">Dostępne produkty, a w tym rodzaje Bio-Elektrod: </p>
                </div>








                <div class="row g-4">





<?php
//var_dump($products);

//print_r(array_keys($products));
$len = count($products);


$i = 0;

foreach ($products as $product)
{

//if (array_keys($products) == 1)


//if ($i==0)

if (array_key_exists($i, $products) && ($i % 2 == 0))
{
?>



                <div class="col-lg-6" id="<?=$product['name'];?>">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3><?=$product['name'];?></h3>
                                        <p><?=$product['description'];?></p>
                                        <a href="<?=$product['shop_link'];?>" target="_blank" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Sprawdź na Lifewave.com</a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="<?=ROOT?>/public/assets/img/<?=$product['image_name'];?>" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



<?php

}

if (array_key_exists($i, $products) && ($i % 2 != 0))

{

?>

                <div class="col-lg-6" id="<?=$product['name'];?>">
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="<?=ROOT?>/public/assets/img/<?=$product['image_name'];?>" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="services-content text-start">
                                        <h3><?=$product['name'];?></h3>
                                        <p>
                                        <?=$product['description'];?>
                                        </p>


<a href="<?=$product['shop_link'];?>" target="_blank" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Sprawdź na Lifewave.com</a>
                                       
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>

<?php
}

$i++;


}
?>










                    <?php

                    /*
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="<?=ROOT?>/public/assets/img/products-1.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="services-content text-start">
                                        <h3>NIRVANA</h3>
                                        <p>Stymuluje produkcję endorfin, by poprawić nastrój
Zapewnia długotrwałe rezultaty
Opatentowana, zastrzeżona forma fototerapii
Bez leków, substancji chemicznych i stymulantów.</p>
                                        <a href="https://lifewave.com/kazan1963" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Sprawdź na Lifewave.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    */

                    ?>


                    <br>


                    <div class="col-12">
                        <div class="services-btn text-center">
                            <a href="https://lifewave.com/kazan1963" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Wejdź do sklepu na Lifewave.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products End -->
