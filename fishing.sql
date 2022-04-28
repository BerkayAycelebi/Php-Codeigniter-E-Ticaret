-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Ara 2016, 23:38:52
-- Sunucu sürümü: 10.1.13-MariaDB
-- PHP Sürümü: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `fishing`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `Id` int(11) NOT NULL,
  `aboutus` text COLLATE utf32_turkish_ci,
  `malzeme_adi` varchar(20) COLLATE utf32_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `smtpserver` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `smtppoint` varchar(11) COLLATE utf32_turkish_ci DEFAULT NULL,
  `smtpmail` varchar(50) COLLATE utf32_turkish_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf32_turkish_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `city` varchar(25) COLLATE utf32_turkish_ci DEFAULT NULL,
  `tel` varchar(25) COLLATE utf32_turkish_ci DEFAULT NULL,
  `fax` varchar(25) COLLATE utf32_turkish_ci DEFAULT NULL,
  `facebook` varchar(25) COLLATE utf32_turkish_ci DEFAULT NULL,
  `communication` text COLLATE utf32_turkish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`Id`, `aboutus`, `malzeme_adi`, `keywords`, `description`, `smtpserver`, `smtppoint`, `smtpmail`, `password`, `address`, `city`, `tel`, `fax`, `facebook`, `communication`) VALUES
(3, '<p><code><strong>Faaliyete ge&ccedil;miş olduğumuz 2007 yılından itibaren&nbsp;</strong></code><code><strong>m&uuml;şterilerine kaliteli hizmeti en uygun fiyatlar ile</strong></code></p>\r\n\r\n<p><code><strong>sunmayı s&uuml;rd&uuml;ren balikmarketim.com 2016 yılında&nbsp;Hemen Av Denizcilik Malzemeleri San. ve Ltd. Şti. </strong></code></p>\r\n\r\n<p><code><strong>tarafından satın alınmış olup hizmet kalitesini arttırarak değerli m&uuml;şterilerimize hizmet vermeyi </strong></code></p>\r\n\r\n<p><code><strong>s&uuml;rd&uuml;rmektedir.</strong></code></p>\r\n\r\n<p>Hemen Av Denizcilik Malzemeleri San. ve Ltd. Şti.</p>\r\n\r\n<p>Mahmutbey Mah. İsto&ccedil; Toptancılar Sitesi 2. Ada No:56 Bağcılar / İSTANBUL</p>\r\n\r\n<p>Tel :&nbsp;0850 441 10 15 &nbsp;- &nbsp;Gsm :&nbsp;0544&nbsp;441 10 15</p>\r\n\r\n<p>E-posta :&nbsp;<a href="mailto:info@balikmarketim.com">info@balikmarketim.com</a></p>\r\n\r\n<p>Facebook :&nbsp;facebook.com/balikmarketimcom</p>\r\n\r\n<p>Twitter :&nbsp;twitter.com/Balikmarketimm</p>\r\n\r\n<p>Blog :&nbsp;blog.balikmarketim.com</p>\r\n\r\n<p>İnternet Satış Ofis &Ccedil;alışma Saatleri:</p>\r\n\r\n<p>Pazartesi, Salı, &Ccedil;arşamba, Perşembe, Cuma:&nbsp;08:00 - 19:00</p>\r\n\r\n<p>Cumartesi:&nbsp;09:00 - 14:30</p>\r\n\r\n<p>* Satışlarımız internet sitemiz &uuml;zerinden olup perakende satışımız&nbsp;bulunmamaktadır.</p>\r\n', 'Balık Avı Malzemeler', 'Balık,Av,Olta,lüfer,sahte yem', 'Balık avı malzemeleri', 'ssl://smtp.gmail.com', '465', 'riza.berkay.aycelebi@gmail.com', 'seyyah67', 'Zonguldak/Çaycumaxx', 'Zonguldakxxx', '3', '*090*xxx', 'jklnk4xxx', '<table border="0" cellpadding="10" cellspacing="0" style="height:300px; width:726px">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>İletişim Bilgileri</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>ADRES :&nbsp;Mahmutbey Mah. İsto&ccedil; Toptancılar Sitesi 2. Ada No:56 Bağcılar / İSTANBUL</strong><br />\r\n			&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Firma &Uuml;nvanı</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Hemen Av Denizcilik Malz. San. ve Tic. Ltd. Şti.</strong></p>\r\n\r\n			<p><strong>Mahmutbey Mah. İsto&ccedil; Toptancılar Sitesi 2. Ada No:56 Bağcılar / İSTANBUL<br />\r\n			<br />\r\n			G&uuml;neşli V.D.:&nbsp;461 042 1087</strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Satışlarımız Yalnızca İnternet &Uuml;zerinden Olup, Mağazamızda Perakende SatışımızBulunmamaktadır.</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `basket`
--

CREATE TABLE `basket` (
  `Id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `piece` int(11) DEFAULT NULL,
  `history` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `cost` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `total` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `products_name` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `malzemeler`
--

CREATE TABLE `malzemeler` (
  `Id` int(11) NOT NULL,
  `malzeme_adi` varchar(50) COLLATE utf32_turkish_ci DEFAULT NULL,
  `malzeme_turu` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `malzeme_fiyati` varchar(10) COLLATE utf32_turkish_ci DEFAULT NULL,
  `malzeme_miktari` varchar(10) COLLATE utf32_turkish_ci DEFAULT NULL,
  `malzeme_resmi` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `malzeme_aciklamasi` text COLLATE utf32_turkish_ci,
  `keywords` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `kateg_id` int(11) DEFAULT NULL,
  `malzeme_kisaaciklama` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf32_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `malzemeler`
--

INSERT INTO `malzemeler` (`Id`, `malzeme_adi`, `malzeme_turu`, `malzeme_fiyati`, `malzeme_miktari`, `malzeme_resmi`, `malzeme_aciklamasi`, `keywords`, `description`, `kateg_id`, `malzeme_kisaaciklama`, `status`) VALUES
(1, 'Michigan Powerade', 'Surf Kamış', '60 ', '20', 'powerade-360-mavi.png', '<p>Tuzlu su ve tatlı su balık&ccedil;ılık y&ouml;ntemlerinin bir &ccedil;oğu ile uyumlu genek kullanıma uygun &uuml;retilen&nbsp;Michigan Powerade&nbsp;kamış,&nbsp;fiber elyaf&nbsp;g&ouml;vde yapısına sahip ve parlak metalik renklerdedir. Paslanmaz, Non-Magnetic(manyetik olmayan) misina kılavuz halkaları kamışın uzun &ouml;m&uuml;rl&uuml; olmasını sağlar. Ergonomik tasarlanmıştır.&nbsp;Koltuk altına rahat&ccedil;a alınabilen sap uzunluğu&nbsp;sayesinde av sırasında daha az yorulursunuz.&nbsp;Michigan Powerade&nbsp;kamışlar fiber kamışlar i&ccedil;inde&nbsp;şık tasarımı&nbsp;ve&nbsp;fiyatına g&ouml;re y&uuml;ksek performansı&nbsp;ile en &ccedil;ok tercih edilen kamışlardandır.</p>\r\n\r\n<p>Bu kamışı nerede ve hangi balık avlarında kullanabilirsiniz.</p>\r\n\r\n<ul>\r\n	<li>Boğaz avcılığındaki gibi kıyıdan &ccedil;ok uzağa atma ihtiyacı olmayan &uuml;lkemizin t&uuml;m deniz kıyılarında,</li>\r\n	<li>K&ouml;pr&uuml;, iskele gibi yerlerden dikey olarak balık avı yapmak i&ccedil;in.</li>\r\n	<li>Tatlı suda sazan, alabalık, tatlı su levreği, turna gibi balıkların avında</li>\r\n</ul>\r\n\r\n<p><strong>Not:&nbsp;Fiber kamışlar uygun fiyatlıdır, pek &ccedil;ok balık avını her daim bu kamışlar ile yapabileceğiniz gibi, ileride ustalaştık&ccedil;a ihtiya&ccedil;larınıza g&ouml;re daha pahalı karbon kamışlara ge&ccedil;iş yapabilirsiniz.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Michigan Powerade,Olta Kamışı', 'Fiber Kamış', NULL, 'Genel balık avına uygun, şık tasarımlı özelliklerine göre oldukça ucuz bir fiber kamış! ', 'Stokta Var'),
(2, 'Lineaeffe Gladstone ', 'Surf Kamış', '600', '10', 'pr_01_120598.jpg', '<pre>\r\n<strong>İtalya&#39; nın en b&uuml;y&uuml;k surf kamışları &uuml;reticisi Lineaeffe&#39; den m&uuml;kemmel bir 3 par&ccedil;a surf kamış. &Ccedil;ok y&uuml;ksek ağırlıklarlada ideal atışlar yapabileceğiniz % 100 carbon malzemeden &uuml;retilmiş Gladstone, 1.par&ccedil;anın u&ccedil; b&ouml;l&uuml;m&uuml;ne ilave edilmiş sık halkalı,ince yapılı dolgu carbon yapı sayesinde son derece avcı bir kamıştır.Metal makine yatağı,fast aksiyon ve g&uuml;&ccedil;l&uuml; yapısına rağmen hasasiyeti ile piyasadaki en iyi 3 par&ccedil;a modellerden biridir.</strong></pre>\r\n', 'Parçalı Surf Kamış', '3 parçalı surf kamış', NULL, 'Lineaeffe Gladstone Hydbird 4.20mt 300gr Surf Kamış', 'Stokta Var'),
(3, 'Okuma Salina III', 'Spin Kamış', '414', '50', 'pr_01_1915424.png', '<h3>&Uuml;r&uuml;n &Ouml;zellikleri:</h3>\r\n\r\n<ul>\r\n	<li>Uzunluk: 170cm</li>\r\n	<li>Ağırlık: 400gr</li>\r\n	<li>Aksiyon: 250-400gr</li>\r\n	<li>Par&ccedil;a Sayısı:2</li>\r\n	<li>Porselenler: Fuji</li>\r\n	<li>&Ccedil;ekeri: 30-37kg dik &ccedil;eker</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td>Kamış Uzunluğu (cm)</td>\r\n			<td>:</td>\r\n			<td>151 cm -180 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Minimum Atar Aralığı (gram)</td>\r\n			<td>:</td>\r\n			<td>201 g - 250 g</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Maksimum Atar Aralığı (gram)</td>\r\n			<td>:</td>\r\n			<td>301 g - 400 g</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kamış Ağırlığı (gram)</td>\r\n			<td>:</td>\r\n			<td>351 g - 400 g</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Par&ccedil;a Sayısı</td>\r\n			<td>:</td>\r\n			<td>2 Par&ccedil;a</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ek &Ouml;zellikler</td>\r\n			<td>:</td>\r\n			<td>Belirtilmemiş</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kapalı Kamış Boyu (cm)</td>\r\n			<td>:</td>\r\n			<td>Belirtilmemiş</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'spin kamış,lüfer,turna', 'Turna ve Lüfer balığı avları için uygun bir spin kamış', NULL, 'Salina III 170cm 250-400gr Jigging Olta Kamışı', 'Stokta Var'),
(4, 'Prologic C1 XG ', 'Sazan Kamışı', '389', '50', 'untitled-12.jpg', '<p>Kompakt, kolay taşınabilir yapıda tasarlanan C1 XG serisi, 3 par&ccedil;alı 20T karbon g&ouml;vdesi ile g&ouml;ller, kanallar ve akarsular i&ccedil;in m&uuml;kemmel.&nbsp;</p>\r\n\r\n<ul>\r\n	<li>20T Y&uuml;ksek mod&uuml;l karbon g&ouml;vde</li>\r\n	<li>İnce ve hafif yapı</li>\r\n	<li>Premium kalite SIC halkalar</li>\r\n	<li>DPS makine yuvası</li>\r\n	<li>Fast aksiyon</li>\r\n	<li>127cm kapalı boy</li>\r\n	<li>356gr ağırlık</li>\r\n</ul>\r\n', 'Sazan Kamışı,Sazan avları için özel bir kamış,carp', 'Sazan avı kamışı', NULL, 'Prologic C1 XG 3.60mt 3.5lbs 3 Parça Sazan Kamışı ', 'Stokta Var'),
(5, 'Daiwa AQL', 'Göl Kamışı', '300', '10', 'pr_01_1837395.jpg', '<table border="1" cellpadding="0" cellspacing="0" style="width:631px">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h2 style="font-style:italic;"><em><strong>Model</strong></em></h2>\r\n			</td>\r\n			<td>\r\n			<h2 style="font-style:italic;"><em><strong>Boy (cm)</strong></em></h2>\r\n			</td>\r\n			<td>\r\n			<h2 style="font-style:italic;"><em><strong>Kapalı Boy (cm)</strong></em></h2>\r\n			</td>\r\n			<td>\r\n			<h2 style="font-style:italic;"><em><strong>Par&ccedil;a Sayısı</strong></em></h2>\r\n			</td>\r\n			<td>\r\n			<h2 style="font-style:italic;"><em><strong>Ağırlık (gr)</strong></em></h2>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<h2 style="font-style:italic;"><em><strong>AQLSW40AF</strong></em></h2>\r\n			</td>\r\n			<td>\r\n			<h2 style="font-style:italic;"><em><strong>400</strong></em></h2>\r\n			</td>\r\n			<td>\r\n			<h2 style="font-style:italic;"><em><strong>45</strong></em></h2>\r\n			</td>\r\n			<td>\r\n			<h2 style="font-style:italic;"><em><strong>11</strong></em></h2>\r\n			</td>\r\n			<td>\r\n			<h2 style="font-style:italic;"><em><strong>125</strong></em></h2>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Göl Kamışı,Göl,Sazan Avı', 'Gölde balık avları için', NULL, 'Daiwa AQL Short Whip 400cm Olta Kamışı', 'Stokta Var'),
(6, 'Daiwa Certate', 'Jigging Makina', '1200', '5', 'pr_01_1915048.png', '<p><strong>-Nasa tarafından geliştirilen ve gemilerde kullanılan &ouml;zel yağlama sisteminin olta makinesine uyarlanmış hali olan Certate Daiwa&#39;nın yeni amiral gemisidir.</strong></p>\r\n\r\n<p><strong>-Pek &ccedil;ok olta makinesinin zayıf, Daiwa olta makinelerinin &nbsp;ise en kuvvetli noktası olan ve balık avı esnasında avcı balıkları tasmalamak i&ccedil;in kullanılan kolun geri d&ouml;nmesini engelleyen İnfinite Anti-Reverse sistemde yanlızca y&uuml;ksek kaliteli &ccedil;elik malzemeler kullanılır.</strong></p>\r\n\r\n<p><strong>-Surf ve spin tarzı avlarda balık yeminizi fırlatırken olta misinasının kafadan boşalırken boşluksuz bir şekilde boşalmasını sağlayan Abs Anti-Backlash II sistem aynı zamanda suni yemlerinizin daha uzun mesafelere ulaşmasını sağlar. Olta misinanın olta makinesinden boşalması genellikle b&uuml;y&uuml;k sipiraller şeklindedir. Misinanın kıvrılmasını &ouml;nlemenin en iyi yolu makarayı olabildiğince b&uuml;y&uuml;k yapmaktır. İşte Daiwa makinelerde bulunan uca doğru genişleyen b&uuml;y&uuml;k makara misinanın makaradan d&uuml;zenli boşalmasını sağlar ve misinanın kıvrılmasını &ouml;nler. Bu sayede daha uzun mesafelere atış yapabilme imkanı sağlanmış olur.</strong></p>\r\n\r\n<p><strong>-Daiwa tarafından geliştirilen olta misinasının kıvrılmasını &ouml;nleyen bu &nbsp;patentli teknoloji sayesinde atış esnasında ,ister ip misina kullanın ister flourocarbon misina, misina olta makinenizden kıvrılmadan boşalır. Twist&nbsp;Buster 2 misinanın kıvrılmasını engellemenin yanı sıra misina yatağı ve misina arasındaki s&uuml;rt&uuml;nmenin de azalmasını sağlar.</strong></p>\r\n\r\n<p><strong>-Dijital tasarımın &uuml;r&uuml;n&uuml; olan &ouml;zel dişli yapısı, Digigear teknolojisi ile &uuml;retilmiştir.</strong></p>\r\n\r\n<p><strong>-Al&uuml;minyum kafa ve paslanmaz &ccedil;elik vidaları sayesinde uzun &ouml;m&uuml;rl&uuml; bir makaradır.</strong></p>\r\n\r\n<p><strong>-Ultimate Turnuva Drag sistemi ile sessiz salınımı sağlar.</strong></p>\r\n\r\n<p><strong>-Tuzlu suya dayanıklı &ouml;zel CRBB bilya kullanılmıştır.</strong></p>\r\n\r\n<p><strong>-Hem tuzlu hem tatlı su kullanımına uygundur.</strong></p>\r\n\r\n<p><strong>-Gyro Spin teknolojisi sayesinde kafa spinlerini d&uuml;zenler, gereksiz ip kopmalarını engeller.</strong></p>\r\n\r\n<p><strong>-Makineyi tuzlu su ve kum korozyonundan koruyan Magsealed teknolojisi ile &uuml;retilmiştir.</strong></p>\r\n\r\n<p><strong>-Y&uuml;ksek performanslı teflon kaplama ve paslanmaz &ccedil;elikten &uuml;retilmiş &ouml;zel pullara sahiptir.</strong></p>\r\n\r\n<p><strong>-&Ouml;zel bariyer sistemi sayesinde rotor i&ccedil;ine su ge&ccedil;irmez.</strong></p>\r\n\r\n<p><strong>-Oil Seal teknolojisi sayesinde g&ouml;vde dış etkenlere karşı koruma altındadır.</strong></p>\r\n\r\n<p><strong>-Kafa &uuml;zerinde bulunan hava kanalları tur hızını ve sarım kolaylığını arttırmaktadır.</strong></p>\r\n\r\n<p><strong>-Hedef:Derin deniz ve jig avları i&ccedil;in ideal bir &uuml;r&uuml;nd&uuml;r.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0" style="width:619px">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Model</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Rulman</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Kalama</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Devir</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Kapasite (mm/m)</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Ağırlık (g)</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>13CERTATEG3012H</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>10+1</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>&Ouml;nden</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>5,6:1</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>0.28/150</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>275</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Jigging makine', 'denizde balık avlarıiçin jigging makine', NULL, 'Daiwa Certate 2013 G 3012 H Olta Makinesi', 'Stokta Var'),
(7, 'Apia Ventura 3012', 'Spin Makina', '4200', '2', 'lunker-custom.jpg', '<p><strong>En iyiyi &uuml;retmek i&ccedil;in bir araya gelen Apia ve Daiwa m&uuml;hendislerinin Japon spin ustalarının &ouml;nerileri doğrultusunda ortak geliştirdiği&nbsp;Ventura&nbsp;modeli, Duraluminum g&ouml;vde, 5.6:1 ve 4.8:1 iki farklı dişli devir hızı, P&uuml;r&uuml;zs&uuml;z ve son derece sessiz &ccedil;alışan su ge&ccedil;irmez ultra y&uuml;ksek hassas makine kesim teknolojili DIGIGEAR d&ouml;vme dişli sistemi, &Ccedil;ift MAG ferromanyetik bilyeli şaft, MAG ferromanyetik bilyeli misina silindiri, Titreşimsiz Duraluminum hafif rotor, Ergonomik T şekilli 55mm SLP kulp ve ATD otomotik drag sistemi gibi teknik detaylar ile bir başyapıt.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Teknik Detaylar...</strong></em></p>\r\n\r\n<ul>\r\n	<li><em><strong>4.8:1 Dişli Devri</strong></em></li>\r\n	<li><em><strong>11+1 Mag ferromanyetik bilye</strong></em></li>\r\n	<li><em><strong>270gr Ağırlık</strong></em></li>\r\n	<li><em><strong>Soğuk D&ouml;vme Aluminyum Makara</strong></em></li>\r\n	<li><em><strong>&Ccedil;ekiş G&uuml;c&uuml;: 7kg Maksimum</strong></em></li>\r\n	<li><em><strong>Duraluminum Katlanır Kol</strong></em></li>\r\n	<li><em><strong>DIGIGEAR d&ouml;vme dişli sistemi</strong></em></li>\r\n	<li><em><strong>Bir Turda Misina Sarımı: 81cm</strong></em></li>\r\n	<li><em><strong>Misina Sarım Kapasitesi(mm/mt): 0.30-150</strong></em></li>\r\n</ul>\r\n', 'Spin Makine,Deniz balık avları ', 'Deniz avları için spin makine', NULL, 'Apia Ventura 3012 Lunker Custom 11+1BB Spin Makine', 'Stokta Var'),
(8, 'Lineaeffe Kgn ', 'Çıkrık Makina', '3700', '5', '01.jpg', '<h1><strong>LINEAEFFE&nbsp;Kgn 2bb Digital 1000 &Ccedil;ıkrık Makinesi</strong></h1>\r\n\r\n<ul>\r\n	<li><strong>2.8:1 devir oranı</strong></li>\r\n	<li><strong>1620gr ağırlık</strong></li>\r\n	<li><strong>Al&uuml;minyum s&uuml;rg&uuml;</strong></li>\r\n	<li><strong>paslanmaz &ccedil;elik bilyalı rulmanlar</strong></li>\r\n	<li><strong>Hız kontrol&uuml;</strong></li>\r\n	<li><strong>Dijital derinlik ayarlayıcı</strong></li>\r\n	<li><strong>Dijital sayacı (mt)</strong></li>\r\n	<li><strong>88 kg sarma g&uuml;c&uuml;</strong></li>\r\n	<li><strong>Kapasite:Braid(Dyneema)=60lbs/1000mt - 80lbs/800mt</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Devir (Tur) Oranı</strong></td>\r\n			<td><strong>:</strong></td>\r\n			<td><strong>1.0 - 3.9 arası</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Kalama (Debriyaj) Tipi</strong></td>\r\n			<td><strong>:</strong></td>\r\n			<td><strong>Lever (Levyeli) Kalama</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Max. Drag G&uuml;c&uuml;</strong></td>\r\n			<td><strong>:</strong></td>\r\n			<td><strong>20 kg ve &uuml;zeri</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Ek &Ouml;zellikler</strong></td>\r\n			<td><strong>:</strong></td>\r\n			<td><strong>Metal Makaralı</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Makine Ağırlığı</strong></td>\r\n			<td><strong>:</strong></td>\r\n			<td><strong>600 g &uuml;zeri</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Makara B&uuml;y&uuml;kl&uuml;ğ&uuml;</strong></td>\r\n			<td><strong>:</strong></td>\r\n			<td><strong>85-100</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Rulman(Bilye) Sayısı</strong></td>\r\n			<td><strong>:</strong></td>\r\n			<td><strong>0-1 arası</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Deniz avları,Çıkrık makina,Kılıç Balığı Avı', 'Denizde büyük balık avları için uygundur', NULL, 'Lineaeffe Kgn 2BB Digital 1000 Çıkrık Makinesi', 'Stokta Var'),
(9, 'D.A.M Quick FSI', 'Sazan Makinası', '614', '50', 'pr_01_1134911.jpg', '<h2><strong>Dam&nbsp;Quick&nbsp;FSI 7500FS Baitrunner Makine</strong></h2>\r\n\r\n<p><strong>Realtree AP Kamuflaj kaplama renkli&nbsp;Dam&nbsp;Quick&nbsp;FSI 7500FS Baitrunner&nbsp;Makine, Y&uuml;ksek misina sarım kapasiteli Baitrunner tipi d&uuml;ş&uuml;k hızlı Solucan mil salınım sistemi ile entegre edilmiş aluminyum makara, Mikro ayarlı serbest arka ve mikro ayaralı &ouml;n &ccedil;ift kalama sistemi ve Y&uuml;ksek performanslı 6+1 bilye sistemi ile uzun atış mesafeli sazan avları i&ccedil;in tasarlandı.&nbsp;&nbsp;</strong></p>\r\n\r\n<p><strong>Dam&nbsp;Quick&nbsp;FSI 7500FS Baitrunner Makine,&nbsp;Teknik Detaylar&hellip;</strong></p>\r\n\r\n<ol>\r\n	<li><strong>&bull;&nbsp;4.3:1 Dişli Devri</strong></li>\r\n	<li><strong>&bull;&nbsp;6+1 BB</strong></li>\r\n	<li><strong>&bull;&nbsp;749gr Ağırlık</strong></li>\r\n	<li><strong>&bull;&nbsp;Kamuflaj kaplama ABS Grafit g&ouml;vde</strong></li>\r\n	<li><strong>&bull;&nbsp;Mikro ayarlı, Serbest tip arka kalama sistemi</strong></li>\r\n	<li><strong>&bull;&nbsp;Mikro ayarlı, &Ouml;n kalama sistemi</strong></li>\r\n	<li><strong>&bull;&nbsp;Prin&ccedil; solucan dişli sistemi</strong></li>\r\n	<li><strong>&bull;&nbsp;Paslanmaz &ccedil;elik g&ouml;vde vidaları</strong></li>\r\n	<li><strong>&bull;&nbsp;Ekstra kalın misina kılavuz teli</strong></li>\r\n	<li><strong>&bull;&nbsp;Ergonomik, lastik kol topuzu</strong></li>\r\n	<li><strong>&bull;&nbsp;Yedek, kamuflaj desenli grafit makara</strong></li>\r\n	<li><strong>&bull;&nbsp;B&uuml;y&uuml;k boyutlu Anti-Twist misina bilyesi</strong></li>\r\n	<li><strong>&bull;&nbsp;Bir Turda Misina Sarımı: 99.9cm</strong></li>\r\n	<li><strong>&bull;&nbsp;Misina Sarım Kapasitesi(mm/mt): 0.45-350</strong></li>\r\n</ol>\r\n', 'Sazan balığı avları,Sazan oltası', 'Here türlü sazan balığı avı için uygun bir makine', NULL, 'Uzun ömürlü kullanışlı ve güçlü atışlar ve sarmalar için harika', 'Stokta Var'),
(10, ' Erpa Kaşık ', 'Lüfer Ve Turna Kaşıkları', '7', '100', 'lk2-cinekop-lufer-tatli-su-levregi-perch-kasigi.jpg', '<p><em><strong>Denizde &ccedil;inekop l&uuml;fere&#39;e, tatlı suda tatlı su levreğine atmak i&ccedil;in olta kaşığı!</strong></em></p>\r\n\r\n<p><em><strong>&Uuml;lkemizde &uuml;retilen ve Spot Balık m&uuml;şterilerine &ouml;zel bir &uuml;r&uuml;nd&uuml;r. Renkleri, kromajı ve kullanılan hologramıyla &uuml;r&uuml;n&uuml;n şekillenmesinde m&uuml;şterilemizin talep ve deneyimleri bulunmaktadır. Boyuna g&ouml;re ağır gramajı ile atması kolaydır, r&uuml;zgardan az etkilenir ve suda y&uuml;zerken &ccedil;ok hareketlidir. Denizde &ccedil;inekop ve l&uuml;fer, tatlı suda ise tatlı su levreğinin bulunduğu yere kolayca atabilirsiniz. Yerli &uuml;retim olması sebebiyle ucuz bir olta kaşığıdır.&nbsp;&Ccedil;antanızda her renginden mutlaka olsun, hem denizde hem tatlı suda balıklar sizin oltanıza vursun!</strong></em></p>\r\n\r\n<p><em><strong>Boyu : 8cm</strong></em></p>\r\n\r\n<p><em><strong>Ağırlık : 18g</strong></em></p>\r\n\r\n<p><em><strong>&Uuml;zerinde &ccedil;arpma iğnesi vardır.</strong></em></p>\r\n\r\n<p><em><strong>Renk se&ccedil;imi&nbsp;: G&uuml;neşli havalarda t&uuml;m renkler tercih edilebilir. Kapalı havalarda &uuml;zerinde a&ccedil;ık renk bulunan olta kaşıklarından tercih edebilirsiniz.</strong></em></p>\r\n\r\n<p><em><strong>Pratik Bilgi :&nbsp;Bu kaşıkların istediğiniz kısımlarını oje ile boyayabilir, kuruyunca av yapabilirsiniz. Gece &ccedil;ok avlanıyorsanız beyaz oje ile bir kısmını boyamayı deneyebilirsiniz.</strong></em></p>\r\n', 'Lüfer,Turna,Çinekop kaşığı,kaşıklar,deniz kaşıkları', 'Lüfer çinekop sarıkanat turna balığı avları için uygundur', NULL, 'SpotBalık Çinekop, Lüfer, Tatlı Su Levreği Kaşığı 18 gr', 'Stokta Var'),
(11, 'Savage Gear', 'Döner Kaşıklar', '21', '200', 'untitled-3.jpg', '<h1>Savage Gear&nbsp;Caviar 14gr 4 no Olta Kaşığı</h1>\r\n\r\n<p><strong>Caviar Spinner &#39;Mepps (D&ouml;ner Kaşık) olta kaşığı &ouml;zellikle Alabalık ve tatlı su Kefali balık avında olduk&ccedil;a etkilidir. Dere ve g&ouml;llerde kullanım i&ccedil;in idealdir. Havanın durumu ve b&ouml;lgeye g&ouml;re tercih edebileceğiniz olta kaşıkları Turna, Somon ve bir&ccedil;ok avcı balık avında etkili sonu&ccedil;lar almanızı sağlayacaktır.</strong></p>\r\n\r\n<h3><strong>SavaGear Caviar Spinnner D&ouml;ner Kaşık &Ouml;zellikleri:</strong></h3>\r\n\r\n<ol>\r\n	<li><strong>Ağırlık: 14gr</strong></li>\r\n	<li><strong>Igne No: #4</strong></li>\r\n	<li><strong>Etkili Hedef Balık: Alabalık, Tatlı Su Kefali</strong></li>\r\n	<li><strong>Uzun D&ouml;k&uuml;m Tungsten Dayanıklı V&uuml;cut Yapı</strong></li>\r\n	<li><strong>D&ouml;vme Paslanmaz &Ccedil;elik B&ouml;l&uuml;nm&uuml;ş Halkalar</strong></li>\r\n	<li><strong>&Ouml;zelleştirilmiş Japon Tiz Kancalar</strong></li>\r\n</ol>\r\n', 'Alabalık avları,Döner kaşık,Meps', 'alabalık avı için döner kaşık', NULL, 'Savage Gear Caviar 14gr 4 no Olta Kaşığı', 'Stokta Var'),
(12, 'Smith Haluca 125F ', 'Rapala', '79', '70', 'haluca-125f.jpg', '<h2><strong>Smith Haluca 125F 12.5cm 13.9gr Maket Balık</strong></h2>\r\n\r\n<p><strong>Sahte yem tasarım m&uuml;hendisliğinin baş yapıtı&nbsp;Haluca&nbsp;serisi, Geniş holografik renk yelpazesi, Farklı boy ve aksiyon se&ccedil;enekleri, ince kalem tip Aerodinamik g&ouml;vde tasarımı, Merkezde iki tungsten bilye, kuyruk&#39;da daha hafif prin&ccedil; bilyeli d&uuml;ş&uuml;k ağırlık merkezli denge mekanizması ile m&uuml;kemmel uzun atış performansı gibi benzersiz yem teknolojileri ile donatıldı. Levrek, L&uuml;fer, Barak&uuml;da, Turna gibi tatlı ve tuzlu su et&ccedil;il balıkların avları i&ccedil;in tasarlanan&nbsp;Haluca&nbsp;t&uuml;m d&uuml;nyada haklı bir &uuml;ne sahip. &nbsp;&nbsp;</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&Ouml;zellikler:</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Ağırlık: 13.9gr</strong></li>\r\n	<li><strong>Boy: 12.5cm</strong></li>\r\n	<li><strong>İğne:Owner Cultiva ST-46 #6</strong></li>\r\n	<li><strong>Tip: Floating</strong></li>\r\n</ol>\r\n', 'Rapala,Sahte Balık,Lüfer ve Levrek avı', 'Lüfer ve Levrek avlarında kullanımında uygundur', NULL, 'Smith Haluca 125F 12.5cm 13.9gr Maket Balık', 'Stokta Var'),
(13, 'Armut Kurşun', 'Kurşunlar', '5', '200', 'armut-kursun.png', '<h2><strong>Armut Tipi Olta Kurşunu</strong></h2>\r\n\r\n<p><strong>Olta takımınızda misinaya bağlanarak kullanılır. Ağırlığı sayesinde oltanızın suya batmasını sağlar.&nbsp;Kullanacağınız kurşun gramajını kamışınızın &uuml;st&uuml;nde yazan atar değerleri, avlanacağınız yer ve akıntının g&uuml;c&uuml; gibi etkenlere bağlı olarak değişecektir.</strong></p>\r\n\r\n<h3><strong>&Ouml;NEMLİ :&nbsp;Olta kurşununun&nbsp;kilogram fiyatı 11.8 TL&#39;ye gelmektedir.&nbsp;</strong></h3>\r\n\r\n<p><strong>İstediğiniz kurşunu sepete atmak i&ccedil;in se&ccedil;eneklerden se&ccedil;im yapmayı unutmayınız.&nbsp;</strong></p>\r\n\r\n<ol>\r\n	<li><strong>&Ouml;rnek 1: &nbsp;5x100gr se&ccedil;tiğinizde 5 adet 100 gramlık kurşunu sepetinize eklemiş olursunuz.</strong></li>\r\n	<li><strong>&Ouml;rnek 2: 3x170gr se&ccedil;tiğinizde 3 adet 170 gramlık kurşunu sepetinize eklemiş olursunuz.</strong></li>\r\n	<li><strong>&Ouml;rnek 3: 30x10gr aldığınızda, 10 gramlık kurşunlardan toplam 300 gram tartılarak size g&ouml;nderilecektir.&nbsp;</strong></li>\r\n	<li><strong>&Ouml;NEMLİ : Kurşunların ağırlıkları, kurşun yoğunlukları ve kalıplarına bağlı olarak &ccedil;ok k&uuml;&ccedil;&uuml;k farklılıklar g&ouml;sterebilir. &Ouml;rneğin 120gr olan bir kurşun bazen 115gr gelebilmektedir.&nbsp;Bu sebeple 1000gr ve &uuml;zeri gibi fazla alımlarınızda kurşunları tek tek sayarak g&ouml;ndermek yerine istediğiniz gramajda tartarak g&ouml;nderiyoruz.&nbsp;Yani hem biz tek tek sayma ile uğraşmıyoruz hem de siz paranızın tam karşılığını almış oluyorsunuz.</strong></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&Ouml;nemli Sağlık Uyarısı&nbsp;:&nbsp;Kurşun kullanırken dikkatli ve titiz davranmaya &ouml;zen g&ouml;steriniz. Kurşun kullanırken ister istemez ellerimiz kurşunla temas etmektedir. Ellerimizi yıkamadan yiyeceklerimize dokunmamaya ve yiyip i&ccedil;memeye &ouml;zen g&ouml;sterelim.</strong></p>\r\n', 'Deniz kurşunu,Armut kurşun', 'Deniz avlarında çapari kurşunu', NULL, 'Armut Kurşun 10g-250g Arası Olta Kurşunu - 3x140gr', 'Stokta Var'),
(14, 'BKK İzumezina CB İğne', 'İğneler', '10', '400', 'izumezina.jpg', '<p><strong>Teknik Detaylar...</strong></p>\r\n\r\n<ol>\r\n	<li><strong>High karbon &ccedil;elik materyal</strong></li>\r\n	<li><strong>Siyah nikel kaplama</strong></li>\r\n	<li><strong>Y&uuml;ksek korozyon direnci</strong></li>\r\n	<li><strong>12 Adetlik paket</strong></li>\r\n</ol>\r\n', 'Tatlı su balığı avları,Sazan avı', 'Tatlı su balığı avları için uygundur', NULL, 'Tatlı su sazan ve sudak avlarının yanı sıra tuzlu Çipura, Karagöz ve Eşkina avlarında kullanılabilir karbon çelik iğne.', 'Stokta Var'),
(15, 'EVOSTAR 8 Kat Örgü PE İp Misina', 'Misinalar', '95', '45', '8-kat-orgu-misina-200-metre.jpg', '<h2><strong>EVOSTAR 8x P.E Braid 200m&nbsp;8 Kat &Ouml;rg&uuml; İp Misina</strong></h2>\r\n\r\n<p><strong>Evostar&nbsp;8 kat &ouml;rg&uuml; ip misina&nbsp;ile sıfıra yakın esneme ile balıkla sizin aranızda katı bir bağ oluşturur. Balığın, oltanıza dokunduğu andan itibaren başlayarak m&uuml;cadele sırasındaki en k&uuml;&ccedil;&uuml;k titreşimleri bile oltanızda hissedersiniz. Hem tuzlu su hem de tatlı su avlarınızda EVOSTAR misina size yeter. Spin, Surf, LRF ve diğer balık avı disiplinlerinde &ouml;rg&uuml; ip misina tercih ederek, monofilament misinalara g&ouml;re daha az kalınlıktan daha fazla &ccedil;eker g&uuml;c&uuml; elde etmiş olursunuz.&nbsp;8 kat g&uuml;&ccedil;, 8 kat fazla dayanım!</strong></p>\r\n\r\n<p><strong>&Ouml;rg&uuml; ip misinaların bakımı ve uzun &ouml;m&uuml;rl&uuml; kullanım :&nbsp;Yoğun ge&ccedil;en avlardan sonra, bulanık sularda kirlenen misinanızı tatlı sudan ge&ccedil;irmek &ouml;mr&uuml;n&uuml; uzatır ve &uuml;st&uuml;nde kalıntı birikmesini &ouml;nler.</strong></p>\r\n\r\n<h3><strong>Evostar&nbsp;8 Kat &Ouml;rg&uuml; Misina&nbsp;Kalınlıkları ve &Ccedil;eker Değeri</strong></h3>\r\n\r\n<ol>\r\n	<li><strong>0.23mm&nbsp; = 13,60kg</strong></li>\r\n	<li><strong>0.25mm&nbsp; = 15,10kg</strong></li>\r\n	<li><strong>0.28mm&nbsp; = 17,10kg</strong></li>\r\n</ol>\r\n', 'İp misina,Sazan lfüer turna avları', 'Tatlı su ve tuzlu su avları içindir', NULL, 'EVOSTAR 8x P.E Braid 200m 8 Kat Örgü İp Misina', 'Stokta Var');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `malzeme_resimleri`
--

CREATE TABLE `malzeme_resimleri` (
  `Id` int(11) NOT NULL,
  `malzeme_id` int(11) DEFAULT NULL,
  `picture` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `malzeme_resimleri`
--

INSERT INTO `malzeme_resimleri` (`Id`, `malzeme_id`, `picture`) VALUES
(7, 17, 'daiwa-2016-tournament-surf45-5pe-olta-makaras-rmx16ts4505pe-500x515.jpg'),
(8, 17, 'agirlik1.png'),
(10, 20, '13063149_705670866239177_6113121363219178412_o3.jpg'),
(11, 1, 'powarede-renk-canta.jpg'),
(12, 1, 'powerade-360-mavi1.png'),
(13, 2, '01_(1).jpg'),
(14, 4, 'pr-22161-g-251119-g.jpg'),
(15, 4, 'untitled-9.jpg'),
(18, 5, 'pr_01_18373951.jpg'),
(19, 6, 'daiwa-certate.jpg'),
(20, 7, '288674a7a9.jpg'),
(21, 7, 'imgrc0070249600.jpg'),
(22, 7, 'imgrc0070249602.jpg'),
(23, 8, 'omdm-057.jpg'),
(24, 9, 'pr_02_1134911.jpg'),
(25, 9, 'pr_03_1134911.jpg'),
(26, 10, 'lk2-erpa-kasigi-hb.jpg'),
(27, 12, 'haluca-125f-colors.jpg'),
(28, 13, 'pr-03-22505.jpg'),
(29, 14, 'izumezina1.jpg'),
(30, 15, '8-kat-orgu-misina-200-metre1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `massage`
--

CREATE TABLE `massage` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf32_turkish_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf32_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf32_turkish_ci DEFAULT NULL,
  `history` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(6) COLLATE utf32_turkish_ci DEFAULT 'yeni',
  `massage` text COLLATE utf32_turkish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `massage`
--

INSERT INTO `massage` (`Id`, `name`, `phone`, `email`, `history`, `status`, `massage`) VALUES
(19, 'Rıza Berkay', 'sss', 'ahmedugur@outlook.com', '2016-12-19 20:07:19', 'okundu', 'sss'),
(20, 'Rıza Berkay', 'sss', 'ahmedugur@outlook.com', '2016-12-19 20:08:52', 'okundu', 'sss');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `order`
--

CREATE TABLE `order` (
  `Id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `history` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `IP` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `total` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `pay_type` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `pay_status` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `order_status` varchar(15) COLLATE utf8_turkish_ci DEFAULT 'Beklemede',
  `address` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `city` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `district` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `name` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `surname` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `products_name` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `piece` varchar(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `cost` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `order`
--

INSERT INTO `order` (`Id`, `customer_id`, `history`, `IP`, `total`, `pay_type`, `pay_status`, `order_status`, `address`, `city`, `district`, `phone`, `email`, `name`, `surname`, `products_name`, `piece`, `cost`) VALUES
(1, 1, '2016-12-22 20:58:02', NULL, ' 60.TL', NULL, NULL, 'yeni', 'Zonguldak/Çaycumaxx', 'Zonguldak', 'çaycuma', 'ds', 'riza@gmail.com', 'Rıza', 'AYÇELEBİ', NULL, NULL, NULL),
(2, 1, '2016-12-22 21:07:52', NULL, ' 600.TL', NULL, NULL, 'Beklemede', '', '', '', 'ds', 'riza@gmail.com', 'Rıza', 'AYÇELEBİ', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `order_products`
--

CREATE TABLE `order_products` (
  `Id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `products_id` int(10) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `piece` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `history` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `order_products`
--

INSERT INTO `order_products` (`Id`, `customer_id`, `products_id`, `order_id`, `piece`, `history`, `name`, `total`) VALUES
(1, 1, 1, 1, '1', '2016-12-22 20:58:02', 'Rıza', 60),
(2, 1, 2, 1, '1', '2016-12-22 21:07:52', 'Rıza', 600);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf32_turkish_ci DEFAULT NULL,
  `surname` varchar(25) COLLATE utf32_turkish_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf32_turkish_ci DEFAULT NULL,
  `password` varchar(25) COLLATE utf32_turkish_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf32_turkish_ci DEFAULT NULL,
  `explanation` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `authority` varchar(20) COLLATE utf32_turkish_ci DEFAULT NULL,
  `phone` varchar(25) COLLATE utf32_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`Id`, `name`, `surname`, `email`, `password`, `status`, `explanation`, `authority`, `phone`) VALUES
(1, 'Rıza', 'AYÇELEBİ', 'riza@gmail.com', '12345', 'onaylı', NULL, 'admin', 'ds'),
(9, 'Huseyin Ceyhun', 'Özdemir', 'ceyhun@gmail.com', '123456', 'onaylı', NULL, 'editör', '4555'),
(12, 'Merve', 'Sakarya', 'merve@gmail.com', '1234567', 'onaylı', NULL, 'editör', NULL),
(13, 'Ahmed', 'Uğur', 'ahmed@gmail.com', 'ahmed2636', 'onaylı', NULL, 'admin', NULL),
(18, 'Ahmed', 'Uğur', 'riza@gmail.com', '2233455', NULL, NULL, NULL, '33425'),
(21, 'Ahmed', 'Uğur', 'riza@gmail.com', 'qew234t', NULL, NULL, NULL, '33425');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `malzemeler`
--
ALTER TABLE `malzemeler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `malzeme_resimleri`
--
ALTER TABLE `malzeme_resimleri`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `massage`
--
ALTER TABLE `massage`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `basket`
--
ALTER TABLE `basket`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Tablo için AUTO_INCREMENT değeri `malzemeler`
--
ALTER TABLE `malzemeler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Tablo için AUTO_INCREMENT değeri `malzeme_resimleri`
--
ALTER TABLE `malzeme_resimleri`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Tablo için AUTO_INCREMENT değeri `massage`
--
ALTER TABLE `massage`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Tablo için AUTO_INCREMENT değeri `order`
--
ALTER TABLE `order`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `order_products`
--
ALTER TABLE `order_products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
