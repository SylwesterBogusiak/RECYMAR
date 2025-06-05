<?php
namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');


/**
* ContactForm class
**/

class ProductsModel


{


	use Model;

	//protected $table = 'contact';
	
        
        /*
	protected $allowedColumns = [
	
	'email',
	'password',
	
	];
        */

public function get_products_details()
	
{

	$products_arr = array
	(
		0 => array
		(
		"name" => "Plastry X39® firmy LifeWave",
		"description" => "Aktywacja Komórek Macierzystych.
Opatentowana metoda fototerapii została stworzona, aby zwiększać aktywności komórek macierzystych
Plaster przynosi wiele różnych korzyści, w tym wsparcie przy gojeniu się ran, szybką ulgę od bólu, więcej energii oraz lepszy sen.",
		"image_name" => "product-1.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/39000.009.009",
		),
		1 => array
		(
		"name" => "Plastry LifeWave X49™",
		"description" => "Aktywujące nasze własne Komórki Macierzyste.
To innowacyjna technologia aktywująca komórki macierzyste i pozwalająca na utrzymanie kondycji fizycznej w każdym wieku.
Kolejny krok na drodze do powstrzymywania i odwracania efektów procesu starzenia się.

Plaster ten prowadzi do formowania się nowych komórek i może reperować uszkodzone komórki. 
To doskonały sposób na budowanie czystej tkanki mięśniowej, pozbawionej tłuszczu.
Zwiększa siłę mięśni, także u osób po 70 roku życia.
Zauważalnie zwiększa wytrzymałość mięśni.

Oba te efekty są odczuwalne już w pierwszych 48 godzinach stosowania plastra.
Peptyd AHK przyczynia się do naprawy komórek po wysiłku.",
		"image_name" => "product-2.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/49000.009.001",
		),
		2 => array
		(
		"name" => "Pakiet wydajnościowy X39® i X49™",
		"description" => "Poznaj niezwykłe korzyści X39 — uzyskuj korzyści jak po akupunkturze i akupresurze, ale bez używania igieł. Zwiększ przepływ energii wewnętrznej w organizmie, co będzie sprzyjało dobremu samopoczuciu i aktywnemu stylowi życia. Powitaj żywotność i dobre samopoczucie dzięki X39! Poznaj przełomowe korzyści X49, który poprawia wydajność, przyspiesza regenerację i wspomaga odpoczynek. Pora wykorzystać cały swój potencjał!",
		"image_name" => "product-3.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/111121-EU-CP",
		),
		3 => array
		(
		"name" => "Krem pod oczy Alavida Revive",
		"description" => "Doświadcz niesamowitych korzyści ze stosowania kremu pod oczy Alavida Revive, który został starannie opracowany, aby wspomagać Twoją skórę.

Ten krem pod oczy z peptydem miedzi wykorzystuje mieszankę silnych składników, zapewniając niezrównane korzyści: rozjaśnia cerę, poprawia wygląd, wyrównuje koloryt i ujędrnia skórę.",
		"image_name" => "product-4.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/ALV-ECR-EUR",
		),
		4 => array
		(
		"name" => "Plastry Y-Age® Aeon",
		"description" => "Wspomaga regulację autonomicznego układu nerwowego, znacznie obniża poziom kortyzolu (hormon stresu), redukuje stan zapalny oraz napięcie w mięśniach.",
		"image_name" => "product-5.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/36552.009.001",
		),
		5 => array
		(
		"name" => "Plastry Y-Age Glutathione",
		"description" => "To odtruwanie ciała z toksyn i metali ciężkich.
Sygnał zawarty w NANOPLASTRACH wspomaga naturalną produkcję GLUTATIONU w naszym ciele – najsilniejszej substancji odtruwającej z toksyn i metali ciężkich, od której zależy również w dużym stopniu siła układu immunologicznego do zwalczania KOMÓREK przedrakowych, poziom naszej energii i wytrzymałości oraz szybkość gojenia się ran i szybkość z jaką starzejemy się na poziomie komórkowym.",
		"image_name" => "product-6.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/36001.009.001",
		),

		6 => array
		(
		"name" => "Plastry Y-Age® Carnosine",
		"description" => "To spowalnianie procesów starzenia.
KARNOZYNA przez naukowców nazywana jest „ELIKSIREM MŁODOŚCI” – regeneruje KOMÓRKI na poziomie DNA, przyspiesza proces gojenia się ran, wspomaga regulację pracy układu nerwowego.",
		"image_name" => "product-7.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/36551.009.001",
		),
		7 => array
		(
		"name" => "Zestaw systemu Y-Age LifeWave",
		"description" => "Zadbaj o swoje samopoczucie dzięki prostocie i skuteczności produktów Y-Age Aeon®, Y-Age® Carnosine i Y-Age® Glutathione. To połączenie produktów gwarantuje synergię i odżywia ciało. Dzięki temu przeżyjesz każdy dzień w poczuciu odzyskanej witalności.",
		"image_name" => "product-8.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/36553.009.001",
		),
		8 => array
		(
		"name" => "Plastry IceWave®",
		"description" => "Wspomaga ciało w redukcji nawet najsilniejszego bólu, ale również usuwa stany zapalne. Likwiduje ból pleców, kręgosłupa, kolan, barków, ramion, bóle migrenowe, bóle reumatyczne, bóle pooperacyjne czy kontuzje i wiele innych.",
		"image_name" => "product-9.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/34001.009.001",
		),
		9 => array
		(
		"name" => "Plastry LifeWave Energy Enhancer",
		"description" => "To NANO Bio-Elektrody w formie plastrów będące ekologicznym, wysoce skutecznym środkiem aktywującym rezerwy energii w twoim ciele! Pamiętaj, żadna substancja z nanoplastrów nie przedostaje się do twojego ciała! Stosowanie plastrów przez sportowców nie jest dopingiem co potwierdza pozytywna opinia Światowej Organizacji Antydopingowej (WADA). Komplet plastrów – biały i brązowy o dodatnim i ujemnym potencjale stosuje się na określone miejsca w celu delikatnego stymulowania ich i zwiększenia energetyki ciała.",
		"image_name" => "product-10.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/31001.009.001",
		),
		10 => array
		(
		"name" => "Plastry Silent Nights",
		"description" => "Produkt rozwiązujący problem bezsenności.
Poprawia jakość śnienia.
Sprawia, że sen jest głęboki i regenerujący.
Silent Night pomaga też w takich problemach, jak nadaktywność umysłowa, nerwowość i niepokój.",
		"image_name" => "product-11.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/32050.009.001",
		),
		11 => array
		(
		"name" => "Plastry LifeWave Alavida",
		"description" => "To wyjątkowa metoda FOTOTERAPII: plastry nie zawierają żadnych leków, ani substancji chemicznych podobnych do TWARDEJ FARMAKOLOGII.
Zamiast tego wykorzystują one światło do stymulacji punktów na skórze.
Tych bezpiecznych i skutecznych plastrów można używać również na noc; łagodzą one stres oksydacyjny i pomagają zatrzymać antyoksydanty. Sprzyja to regeneracji blasku Twojej skóry.",
		"image_name" => "product-12.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/ALV-PATCH-EUR",
		),

		12 => array
		(
		"name" => "Krem do twarzy LifeWave Alavida Nightly Restore Facial Creme",
		"description" => "Alavida Nightly Restore Facial Crème chroni skórę w nocy. Ogranicza pojawianie się drobnych linii i zmarszczek oraz rozjaśnia i wyrównuje cerę.
Stosuj wraz z systemem regenerującym Alavida, aby osiągnąć najlepsze rezultaty.
Sposób użycia: Stosuj na czystą skórę twarzy i szyi.",
		"image_name" => "product-13.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/ALV-CR-EUR",
		),
		13 => array
		(
		"name" => "LifeWave Alavida Facial Nectar",
		"description" => "Nektar Alavida Daily Refresh Nectar wspomaga ochronę skóry, jednocześnie poprawiając jej blask i wygląd przy codziennym stosowaniu.",
		"image_name" => "product-14.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/ALV-NEC-EUR",
		),
		14 => array
		(
		"name" => "LifeWave Alavida Regenerating Trio",
		"description" => "System regenerujący Alavida to owoc naszego wielokierunkowego podejścia do troski o zdrowie skóry, czyli łączenia osiągnięć naukowych z bogactwem tego, co daje natura, aby osiągnąć jak najlepsze rezultaty.",
		"image_name" => "product-15.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/ALV-TRIO-EUR",
		),
		15 => array
		(
		"name" => "Plastry SP6 Complete LifeWave",
		"description" => "To nowa technologia odchudzania bez efektu jojo. Sygnał zawarty w nanoplastrze wspomaga ciało w naturalnej redukcji apetytu i łaknienia na słodycze. Dzięki temu szybciej czujemy sytość podczas posiłków, oraz zmniejsza się nasz apetyt na rzeczy, które są niezdrowe.",
		"image_name" => "product-16.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/38001.009.001",
		),
		16 => array
		(
		"name" => "Plastry LifeWave AcuLife",
		"description" => "To nietransdermalne nanoplastry.
Zadziwiająca swoim działaniem, nowa technologia, opracowana - jako naturalny sposób łagodzenia bólu i dobrostanu koni.
Plastry wykorzystują wyjątkową technologię do delikatnej stymulacji punktów uciskowych na skórze w celu poprawy przepływu energii w organizmie, co umożliwia naturalne łagodzenie lżejszych dolegliwości bólowych i bólu.
W technologii tej nie są stosowane i nie przedostają się do organizmu żadne leki, substancje stymulujące, nie są używane magnesy czy igły.",
		"image_name" => "product-17.avif",
		"shop_link" => "https://lifewave.com/kazan1963/store/product/30001.009.001",
		),
		

	);





return $products_arr;

}




public function send_data($data)
	
{

	if ($this->validate($data))

	{


	if (isset($data['task'], $data['email'], $data['name'], $data['subject'], $data['message']) && ($data['task'] == 'send_message') && (isset($_POST['numbers'])) && (isset($_POST['number_1'])) && (isset($_POST['number_2']))) 

	{
	if (($_POST['number_1'] + $_POST['number_2']) == $_POST['numbers'])
	
	{
	
	$your_email_address = $data['email'];
	$your_name = $data['name'];
	$entry_subject = $data['subject'];
	$entry_message = $data['message'];

        $filename_zip = "";
        $uploadOk = 0;

   
  
             $email = $your_email_address;
			 

 if (($email) && ($uploadOk == 0)) {
		
	 
		$reply_to = $email;

		
		//$to ='info@bogusiak.pl'; // nie działa z tego samego na ten sam
		$to = 'info@marte.best';
		
	
		
		
		///$to = $email;
		
		$now_time = date("Y-m-d H:i:s");
		
		
		
		
		$email_from = 'info@bogusiak.pl'; 
		$full_name = 'BOGUSIAK.PL';
		$from = $full_name.'<'.$email_from.'>';
		
		$reply_to = $your_name.'<'.$email.'>';
		
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		
		
		
		$headers .= "From: $from\r\nReply-to: $reply_to";
		
	
		
		
		$subject = "=?UTF-8?B?" . base64_encode("Wiadomość ze strony BOGUSIAK.PL") . "?=";
		
		
			
		$txt = '<html>
					<head>
					<title>Wiadomość ze strony BOGUSIAK.PL</title>
					</head>
					<body>';
        $txt .=  "<h3>";
		
	    
		
		
		$txt .= " Witaj !";
		
		
		
		
		
		$txt .=  "</h3>";
		$txt .=  '<hr>';
		
	
		
		$txt .=  "<p>";
		
		$txt .= 'Jestem '. $your_name . '. ';
		
		
		$txt .= ' Wysyłam tę wiadomość przez formularz kontaktowy na stronie. ';
		
		
		$txt .= ' <br>';
		
	 	if ($entry_subject != "")
			
		{
			$txt .= 'Temat: ' . $entry_subject . '<br> ';
			
		}
		
		
		if ($entry_message != "")
		{
		$txt .= 'Wiadomość: ' . $entry_message. '<br> ';
		}
		
		
		$txt .=  "</p>";
		$txt .=  "<p>";
		
		if ($filename_zip != "")
		{
		
		$link_to_zip = 'https://bogusiak.pl/upload/' . $string .'/'. $today.'-BOGUSIAK.PL-zalacznik.zip';
		$txt .= 'Link do pobrania załącznika ZIP: <a href="' . $link_to_zip. '"> Tutaj. </a> <br> ';
		}
		
		
		$txt .=  "</p>";
		
			$txt .=  "<p>";
		
		
		$txt .=  "</p>";
		
		
		$txt .=  "<hr>";
		$txt .=  "<p>";
		
		
		$txt .= ' Odwiedź BOGUSIAK.PL: <a href="https://www.bogusiak.pl"> TUTAJ </a>.';
		$txt .=  "</p>";

	

		
		$txt .= ' BOGUSIAK.PL, ' . "$now_time";
		$txt .=  "</p>";
		
		
		$txt .=  "<p>";
		
		$txt .=  '<img src="https://www.bogusiak.pl/public/assets/images/sybo.avif" style="width:364px;height:45px;">';
	
		
		$txt .=  "</p>";

         $txt .="</body></html>";


			
		
		

		$body = $txt;
		
		
		
		$sent = mail($to,$subject,$body,$headers);

			}
			

		
		
	if (($sent) && ($uploadOk == 0)) 
	{ 

                
		   ?>
		   <div class="popup_window" style="width:750px, height:1000px;">


			<h2><?php echo gettext('Thank you.'); ?> <span class="modal_x" onclick="close_popup_window();">X</span></h2>
			
			<p><?php echo gettext('Message was sent.'); ?> </p>
			   
			</div>
		   
		   <?php
		   
	} 
	
		else 
		 
	{ 
		
	?>
		<div class="popup_window">

		<h2><?php echo gettext('Failure.'); ?><span class="modal_x" onclick="close_popup_window();">X</span></h2>
		
		<p><?php echo gettext('The message has not been sent.'); ?></p>
		<p><?php echo gettext('Please try again later.'); ?> </p>	
		</div>
		   
		<?php
		 
	}
	
            



	}

		
		
			else



	{

	?>

		<div class="popup_window">

			<h2><?php echo gettext('Failure.'); ?> <span class="modal_x" onclick="close_popup_window();">X</span></h2>
		
			<p><?php echo gettext('Wrong sum.'); ?></p>
			<p><?php echo gettext('Please try again later.'); ?></p>	
		</div>




	<?php




	}	
		
		
		
		
		
	}
		
	else



	{

	?>

		<div class="popup_window">

			<h2><?php echo gettext('Failure.'); ?> <span class="modal_x" onclick="close_popup_window();">X</span></h2>
		
			<p><?php echo gettext('Incomplete form.'); ?></p>
			<p><?php echo gettext('Please try again later.'); ?></p>	
		</div>




	<?php




	}	


	}

}

}

