

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



CREATE TABLE `haberler` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `baslik_tr` varchar(255) DEFAULT NULL,
  `baslik_en` varchar(255) DEFAULT NULL,
  `ozet_tr` text DEFAULT NULL,
  `ozet_en` text DEFAULT NULL,
  `aciklama_tr` longtext DEFAULT NULL,
  `aciklama_en` longtext DEFAULT NULL,
  `kaynak` varchar(255) DEFAULT NULL,
  `yazar` varchar(255) DEFAULT NULL,
  `vitrin` enum('evet','hayır') DEFAULT 'hayır',
  `resim` varchar(255) DEFAULT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  `tarih` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `cat_id`, `baslik_tr`, `baslik_en`, `ozet_tr`, `ozet_en`, `aciklama_tr`, `aciklama_en`, `kaynak`, `yazar`, `vitrin`, `resim`, `likes`, `dislikes`, `tarih`) VALUES
(1, 3, 'Trump Demands That Supreme Court Rescue Him From Conviction\r\n', 'Trump Demands That Supreme Court Rescue Him From Conviction\r\n', 'ABD Yüksek Mahkemesi, muhafazakar çoğunluğun bazı üyelerinin partizan tavırları nedeniyle son zamanlarda biraz güvenilirlik krizi yaşıyor.', 'The U.S. Supreme Court is having a bit of a credibility crisis lately, thanks to the partisan antics of certain members of its conservative majority.', 'ABD Yüksek Mahkemesi, muhafazakar çoğunluğun bazı üyelerinin partizan tavırları nedeniyle son zamanlarda biraz güvenilirlik krizi yaşıyor. Son zamanlarda, Yargıç Samuel Alito\'nun ailesinin isyancı bayrak sallama alışkanlıklarına ilişkin ortaya çıkanlar, Baş Yargıç John Roberts ve diğer Yüksek Mahkeme üyelerinin ömür boyu atanan bu kişilerin apolitik doğası hakkındaki dindar iddialarını baltaladı. En son yaşanan saçmalıklar, Yargıç Clarence Thomas\'ın aşırı sağla derin ve kazançlı bağlarına dair süregelen kanıtlarla bağlantılı sorunları derinleştiriyor ve 2022\'de Roe v. Wade davasının tersine çevrilmesinin ardından Mahkeme muhafazakarlarının yaşadığı ciddi kamu güveni kaybını daha da artırıyor.', 'The U.S. Supreme Court is having a bit of a credibility crisis lately, thanks to the partisan antics of certain members of its conservative majority. Most recently, revelations about the insurrectionary flag-flying habits of Justice Samuel Alito’s household have undermined the pious claims of Chief Justice John Roberts and other Supreme Court members about the apolitical nature of these lifetime appointees. The most recent brouhaha deepens the problems associated with ongoing evidence of Justice Clarence Thomas’s deep and lucrative ties to the far right, and compounds the significant loss of public trust the Court’s conservatives sustained after the reversal of Roe v. Wade in 2022.', 'Intelligencer', 'Mandy Taheri\n', 'evet', 'images/haber1.jpg', 0, 0, '2024-06-04 11:18:33'),
(2, 2, 'Trump, duruşmanın bitiminden sonraki günlerde Barron\'un üniversitesi hakkında güncelleme yaptı', 'Trump gives update on Barron\'s college future days after end of trial\r\n', 'Lara Trump, Cumhuriyetçi başkan adayı ve eski Başkan Donald Trump olarak sahnede, 24 Şubat 2024\'te Columbia, Güney Carolina\'da Eyalet Fuar Alanında düzenlenen seçim gecesi nöbeti partisinde konuşuyor. Cumhuriyetçi senatör adayı Larry Hogan hakkındaki son ', 'Lara Trump on stage as Republican presidential candidate and former President Donald Trump speaks during an election night watch party at the State Fairgrounds on February 24, 2024 in Columbia, South Carolina. Her recent comments about Republican senatori', 'Donald Trump, en küçük oğlunun geçen ay liseden mezun olmasının ardından oğlu Barron\'un gelecek planları hakkında güncel bilgiler verdi. Eski başkan, oğlunun sonbaharda hangi üniversiteye gideceğini açıklamadı ancak ülke çapındaki kampüslerdeki protestoların ardından bunun \'farklı\' olabileceğini öne sürdü.', 'Donald Trump gave an update on his son Barron\'s future plans after his youngest son graduated from high school last month. The ex-president did not reveal where his son would be headed to college in the fall, but he suggested it could be \'different\' after the protests on campuses across the country.', 'Daily Mail', 'Mandy Taheri\n', 'evet', 'images/haber_2.jpg', 28, 19, '2024-06-04 11:18:33'),
(3, 3, 'Louisiana On Emir\'i zorunlu kılan ilk eyalet olacak', 'Louisiana to become 1st state to require Ten Commandments', 'Lara Trump, Cumhuriyetçi başkan adayı ve eski Başkan Donald Trump olarak sahnede, 24 Şubat 2024\'te Columbia, Güney Carolina\'da Eyalet Fuar Alanında düzenlenen seçim gecesi nöbeti partisinde konuşuyor. Cumhuriyetçi senatör adayı Larry Hogan hakkındaki son yorumları kaşlarını kaldırdı.\r\n', 'Lara Trump onstage as Republican presidential candidate and former President Donald Trump speaks at an election night vigil party at the State Fairgrounds on February 24, 2024 in Columbia, South Carolina. His recent comments about Republican senatorial candidate Larry Hogan raised eyebrows.', 'Lara Trump, Cumhuriyetçi başkan adayı ve eski Başkan Donald Trump olarak sahnede, 24 Şubat 2024\'te Columbia, Güney Carolina\'da Eyalet Fuar Alanında düzenlenen seçim gecesi nöbeti partisinde konuşuyor. Cumhuriyetçi senatör adayı Larry Hogan hakkındaki son yorumları kaşlarını kaldırdı.\r\n\r\nEski Başkan Donald Trump\'ın gelini Lara Trump\'ın ABD Senatosu GOP adayı Larry Hogan hakkında yaptığı yorumlar, kendisinin \"kimsenin saygısını hak etmediğini\" söylemesinin ardından sosyal medyada kullanıcılardan eleştiri alıyor.\r\n\r\nPazar sabahı CNN\'in State of the Union programına katılan Cumhuriyetçi Ulusal Komite (RNC) eş başkanı Lara Trump\'a, sunucu Kasie Hunt, Cumhuriyetçi Parti\'nin Hogan\'ın Senato kampanyasını desteklemeye devam edip etmeyeceğini sordu. üst düzey GOP liderlerinin açıklamalarıyla çelişen sosyal medya.\r\n\r\nTemsilciler Meclisi Sözcüsü Mike Johnson ve Temsilci Steve Scalise gibi önde gelen Cumhuriyetçi politika yapıcılar, eski başkanın sessiz para davasının prosedürünü ve motivasyonunu sorgulayarak ABD hukuk sisteminin meşruluğu konusunda şüphe uyandırdı.\r\n\r\nTrump\'ın duruşmasındaki karar Perşembe günü açıklanmadan önce, eski başkana karşı sert eleştirilerde bulunan eski Maryland valisi, eski Twitter hesabı olan X\'te şöyle yazmıştı: \"Sonuç ne olursa olsun, tüm Amerikalıları karara ve hukuki yaptırımlara saygı duymaya çağırıyorum.\" Tarihimizin bu tehlikeli bölünmüş anında, partileri ne olursa olsun tüm liderler, bu ülkeyi büyük yapan şeyin, hukukun üstünlüğü olduğunu yeniden teyit etmeliyiz.\"', 'Lara Trump on stage as Republican presidential candidate and former President Donald Trump speaks during an election night watch party at the State Fairgrounds on February 24, 2024 in Columbia, South Carolina. Her recent comments about Republican senatorial candidate Larry Hogan has raised eyebrows.\r\n\r\nFormer President Donald Trump\'s daughter-in-law Lara Trump\'s comments about U.S. Senate GOP candidate Larry Hogan is drawing criticism from users on social media after she said he \"doesn\'t deserve the respect of anyone.\"\r\n\r\nIn a Sunday morning interview appearance on CNN\'s State of the Union, Lara Trump, the Republican National Committee (RNC) co-chair, was asked by host Kasie Hunt whether the Republican Party would continue to support Hogan\'s Senate campaign after he posted a comment on social media that contradicted statements by top GOP leaders.\r\n\r\nProminent Republican policymakers including House Speaker Mike Johnson and Representative Steve Scalise have questioned the former president\'s criminal hush money trial\'s procedure and motivation, casting doubt on the legitimacy of the U.S. legal system.\r\n\r\nBefore the verdict in Trump\'s trial was announced on Thursday, the former Maryland governor who has been a vocal critic of the former president, wrote on X, formerly Twitter, \"Regardless of the result, I urge all Americans to respect the verdict and the legal process. At this dangerously divided moment in our history, all leaders—regardless of party—must not pour fuel on the fire with more toxic partisanship. We must reaffirm what has made this nation great: the rule of law.\"', 'MarketWatch', 'Mandy Taheri\n', 'hayır', 'images/haber-large.webp', 0, 0, '2024-06-04 11:18:33'),
(4, 2, 'Şevval Sam\'ın oğlu oyuncu Taro Emir Tekin\'den \"dizi\" açıklaması: Annem reddetti', '\"Series\" statement from Şevval Sam\'s son, actor Taro Emir Tekin: My mother rejected', 'Geçtiğimiz akşam bir otelde dergi lansmanı gerçekleşti. Geceye birçok ünlü katılırken, bazı isimler de basın mensupları ile sohbet etti. Taro Emir Tekin ve annesi Şevval Sam\'ın, kariyer konuşmaları gündem oldu.', 'The magazine launch took place in a hotel last evening. While many celebrities attended the night, some names also chatted with members of the press. Career conversations of Taro Emir Tekin and his mother Şevval Sam were on the agenda.', 'Şarkıcı ve oyuncu Şevval Şam ile eski futbolcu Metin Tekin\'in oğlu Tarık (Taro) Emir Tekin, Kanal D ekranında 2020-2022 yılları arasında yayınlanan \'Sadakatsiz\'in \'Selçuk\'u olarak hafızalara kazındı.\r\n\r\nOxford School of Drama tiyatro bölümünde eğitim alan Tarık Emir Tekin, uzun yıllar İngiltere\'de yaşadıktan sonra Türkiye\'ye dönüş yaptı ve Sadakatsiz dizisinde hayat verdiği karakterle tanınmaya başladı.', 'Tarık (Taro) Emir Tekin, the son of singer and actress Şevval Şam and former football player Metin Tekin, became memorable as \'Selçuk\' in the TV series \'Sadakatsiz,\' which aired on Kanal D between 2020 and 2022.\r\n\r\nTarık Emir Tekin, who studied drama at the Oxford School of Drama, lived in England for many years before returning to Turkey and becoming known for his role in \'Sadakatsiz\'.', 'haber.com', 'haber.com editors', 'hayır', 'images/habersam.webp', 0, 0, '2024-06-04 17:32:42'),
(5, 3, 'Hanesbrands, Champion markasını 1,2 milyar dolarlık anlaşmayla Authentic Brands\'a satacak', 'Hanesbrands to sell Champion brand to Authentic Brands in $1.2 billion deal', 'Şirket Çarşamba günü yaptığı duyuruda, Hanesbrands\'ın global Champion işletmesini, koşullu nakit bedeli de dahil olmak üzere 1,2 milyar dolar değerindeki bir işlemle Authentic Brands Group\'a satmayı kabul ettiğini duyurdu.', 'Hanesbrands agreed to sell its global Champion business to Authentic Brands Group in a transaction valued at $1.2 billion, including a contingent cash consideration, the company announced on Wednesday.', 'Şirket Çarşamba günü yaptığı duyuruda, Hanesbrands\'ın global Champion işletmesini, koşullu nakit bedeli de dahil olmak üzere 1,2 milyar dolar değerindeki bir işlemle Authentic Brands Group\'a satmayı kabul ettiğini duyurdu. Hanesbrands\'ın basın açıklamasına göre, performans eşiklerinin karşılanması durumunda anlaşmanın 300 milyon dolara kadar ek nakit koşullu bedelle 1,5 milyar dolara ulaşma potansiyeli var.', 'Hanesbrands agreed to sell its global Champion business to Authentic Brands Group in a transaction valued at $1.2 billion, including a contingent cash consideration, the company announced on Wednesday. The deal has the potential to reach $1.5 billion through an additional cash contingent consideration of up to $300 million if performance thresholds are met, according to a press release from Hanesbrands.', 'CNBC', 'Sean Conlon', 'hayır', 'images/haber6.webp', 0, 0, '2024-06-05 17:15:56'),
(6, 3, 'Riskten korunma fonu yöneticisi Eric Jackson, Nvidia\'nın hala ucuz olduğunu söylüyor ve diğer yapay zeka yararlanıcısını beğeniyor', 'Hedge fund manager Eric Jackson says Nvidia is still cheap, likes this other AI beneficiary', 'Goldman Sachs\'ın Salı günkü notuna göre, Nvidia hisseleri yılbaşından bugüne kadarki %81\'lik ralliden sonra bile hala çok fazla yükselişe sahip.', 'Nvidia stock still has plenty of upside even after its year-to-date rally of 81%, according to a Tuesday note from Goldman Sachs.', 'Banka, Nvidia fiyat hedefini 1.000 dolardan 1.100 dolara yükseltti; bu, mevcut seviyelere göre %22\'lik potansiyel bir artışı temsil ediyor. Goldman\'a göre Nvidia hisseleri, ne kadar hızlı büyüdüğü ve bu büyüme trendlerinin önümüzdeki yıllarda ne kadar dayanıklı görüneceği göz önüne alındığında, benzerleriyle karşılaştırıldığında hala nispeten cazip bir değerlemeyle işlem görüyor.\r\nGoldman Sachs analisti Toshiya Hari, \"Olumlu EPS revizyonlarının hisse senedinde bir basamak daha yükselişe yol açtığını görüyoruz, özellikle de NVDA ticareti 35 kat veya kapsama evrenimize göre yalnızca %36 prim verirken, geçtiğimiz 3 yıllık ortalama prim %160\'tı\" dedi. .', 'The bank raised its Nvidia price target to $1,100 from $1,000, representing potential upside of 22% from current levels. According to Goldman, Nvidia stock still trades at a relatively attractive valuation compared to its peers given how quickly it is growing and how durable those growth trends look in the coming years.\r\n\"We see positive EPS revisions driving another leg up in the stock, especially with NVDA trading at 35x or only a 36% premium to our coverage universe vs. its past 3-year median premium of 160%,\" Goldman Sachs analyst Toshiya Hari said.', 'finance.yahoo', 'Matthew Fox', 'hayır', 'images/haber61.webp', 0, 0, '2024-06-06 16:32:11'),
(7, 2, 'Taylor Swift\'in erkek arkadaşı Travis Kelce nihayet nasıl tanıştıklarını açıkladı: \'Bunu söylediğim için muhtemelen benden nefret edecek\'', 'Taylor Swift\'s boyfriend Travis Kelce finally reveals how they met: \'She\'ll probably hate me for saying this\'', 'Taylor Swift\'in yeni erkek arkadaşı Travis Kelce nihayet dünyaya kızı nasıl elde ettiğini anlatıyor.\r\n\r\nKelce, WSJ\'ye \"Bunların hepsine değinmek isteyip istemediğimi bilmiyorum\" dedi. Magazine, ilişkilerinin ardındaki ayrıntıları açıklamadan önce. Swift ve Kelce sonbahardan bu yana herkesin önünde birlikte vakit geçiriyorlar.', 'Taylor Swift\'s new boyfriend Travis Kelce is finally telling the world how he got the girl.\r\n\r\n\"I don’t know if I want to get into all of it,\" Kelce told WSJ. Magazine, before divulging the details behind their relationship. Swift and Kelce have been publicly spending time together since the fall. ', 'Kansas City Chiefs\'in sıkı tarafı, bunu medyaya tehlikeye atacak hiçbir şey söylemeyerek yaptığını söylüyor. \"Benim için en önemli şey buydu: Taylor\'ı uzaklaştıracak hiçbir şey söylemediğimden emin ol\" dedi.\r\n\r\nKelce, Swift\'in şöhreti hakkında \"Açıkçası bu tür bir auraya sahip hiç kimseyle çıkmadım... Bununla hiç ilgilenmedim\" dedi. \"Ama aynı zamanda bunların hiçbirinden kaçmıyorum... Gördüğü incelemeler, üzerinde ne kadar büyüteç olduğu, her gün evinin önünde paparazziler, gittiği her restoranın önünde. , her uçuştan sonra sadece yaşıyor, hayattan keyif alıyor. Böyle davrandığında tuhaf davranan ben olmasam iyi olur.\"\r\n\r\nAyrıca Swift\'in kendi ailesiyle olan ilişkisi de Kelce\'ninkine benziyor. Bu yüzden uyum sağlıyorlar. \"Herkes benim bir aile babası olduğumu biliyor\" dedi. \"Ekibi onun ailesidir. Ailesi tur, pazarlama, etrafta olma gibi pek çok şey yapıyor, dolayısıyla onun da bu değerlerin çoğuna sahip olduğunu düşünüyorum.', 'The Kansas City Chiefs tight end says he did that by not saying anything jeopardizing to the media. \"That was the biggest thing to me: make sure I don’t say anything that would push Taylor away,\" he shared with the outlet.\r\n\r\n\"Obviously I’ve never dated anyone with that kind of aura about them... I’ve never dealt with it,\" Kelce said of Swift\'s fame. \"But at the same time, I’m not running away from any of it... The scrutiny she gets, how much she has a magnifying glass on her, every single day, paparazzi outside her house, outside every restaurant she goes to, after every flight she gets off, and she’s just living, enjoying life. When she acts like that I better not be the one acting all strange.\"\r\n\r\nAdditionally, Swift\'s relationship with her own family mirrors that of Kelce\'s. It\'s why they align. \"Everybody knows I’m a family guy,\" he said. \"Her team is her family. Her family does a lot of stuff in terms of the tour, the marketing, being around, so I think she has a lot of those values as well,', 'fox13news', 'Caroline Thayer', 'evet', 'images/haber7.webp', 0, 0, '2024-06-06 16:47:14'),
(8, 1, 'Paredes iki kez ikiye katladı, 3 koşuyla Tampa Bay Rays\'in Marlins\'i 5-3 yenmesini sağladı', 'Paredes doubles twice, drives in 3 runs to lead Tampa Bay Rays to 5-3 win over Marlins', 'MIAMI - Isaac Paredes iki katına çıktı ve üç koşuda sürdü ve Tampa Bay Rays Çarşamba gecesi Miami Marlins\'i 5-3 yenerek iki maçlık serisini silip süpürdü.\r\nBrandon Lowe, 2019\'un başından bu yana Miami\'ye karşı 26 maçın 23\'ünü kazanan Rays adına iki vuruş ve bir RBI elde etti.', 'MIAMI - Isaac Paredes doubled twice and drove in three runs and the Tampa Bay Rays beat the Miami Marlins 5-3 on Wednesday night to sweep their two-game series.\r\nBrandon Lowe had two hits and an RBI for the Rays, who have won 23 of 26 against Miami since the start of 2019.', 'Mükemmel bir altıncı atan Richard Lovelady (2-4) dahil beş kurtarıcı Eflin\'i takip etti. Pete Fairbanks sekizinci kurtarışı için dokuzuncuyu attı.\r\nParedes, Miami\'nin ilk beş oyuncusu Braxton Garrett\'a (2-1) karşı iki sayılık bir double yaptı ve Josh Lowe\'un double\'ına gol atarak Tampa Bay\'i ilk turda 3-0 öne geçirdi.\r\nJesús Sánchez\'in RBI ikilisi ve Otto López\'in alt yarıdaki sayı yapan teklisi Miami için aradaki farkı daralttı.\r\nRays, Lowe\'un sayı yapan teklisinde ve Paredes\'in RBI ikilisinde Garrett\'ın gezisini üçüncü sırada sonlandırdı.\r\nJosh Bell, beşinci sıradaki RBI single\'ıyla Marlins\'i 5-3 geride bıraktı.\r\nGarrett 2 2/3 vuruşta beş koşu ve altı vuruştan vazgeçti. İki maçlık sette Rays, Miami\'nin ilk beş oyuncusuna karşı 14 sayı attı ve yedi istekada 15 vuruş yaptı.', 'Five relievers followed Eflin including Richard Lovelady (2-4) who pitched a perfect sixth. Pete Fairbanks pitched the ninth for his eighth save.\r\nParedes hit a two-run double against Miami starter Braxton Garrett (2-1) and scored on Josh Lowe’s double to put Tampa Bay ahead 3-0 in the first.\r\nJesús Sánchez’s RBI double and Otto López’s run-scoring single in the bottom half narrowed the gap for Miami.\r\nThe Rays ended Garrett’s outing in the third on Lowe’s run-scoring single and Paredes’ RBI double.\r\nJosh Bell got the Marlins within 5-3 with an RBI single in the fifth.\r\nGarrett gave up five runs and six hits in 2 2/3 innings. In the two-game set, the Rays scored 14 runs and had 15 hits over seven innings against Miami’s starters.', 'fox13news', 'fox13 editors', 'hayır', 'images/haber8.webp', 0, 0, '2024-06-07 12:45:16'),
(9, 1, 'Bayer Leverkusen 49 maçtır yenilmeden yeni Avrupa rekoru kırarak Avrupa Ligi finaline yükseldi', 'Bayer Leverkusen go 49 matches unbeaten to set new European record and reach Europa League final', 'Bayer Leverkusen, Roma ile 2-2 berabere kaldıktan sonra Dublin\'de Atalanta ile Avrupa Ligi finalini belirledi; UEFA\'ya göre Leverkusen, yenilmezlik serisini 49 maça çıkararak Benfica\'nın, Avrupa turnuvalarının başlangıcından bu yana üst düzey bir takıma karşı yenilgisiz en uzun seri rekorunu kırdı.', 'Bayer Leverkusen set up Europa League final with Atalanta in Dublin after 2-2 draw with Roma; by extending their run to 49 games unbeaten, Leverkusen break Benfica\'s record for the longest run without defeat by a top-flight team since the advent of European competition, according to UEFA', 'Leverkusen daha önce tüm müsabakalarda 48 maçtır yenilmeyen Benfica ile berabere kalmıştı, ancak UEFA\'ya göre şu anda Avrupa turnuvalarının başlangıcından bu yana en iyi rekora sahip. Xabi Alonso\'nun takımı, Roma\'yı 4-2 yendikten sonra Avrupa Ligi finalindeki yerini aldı. Yenilmezlik statüsünü korumak için ikinci maçta Josip Stanisic\'in son dakika golü de dahil.\r\n\r\nRekabetçi üst düzey maçlarda savaş sonrası yenilmezlikler\r\n49: Bayer Leverkusen between 2023 and 2024\r\n\r\n48: Benfica between 1963 and 1965\r\n\r\n45: Dinamo Zagreb between 2014 and 2015\r\n\r\n43: Juventus between 2011 and 2012\r\n\r\n42: Ajax between 1995 and 1996\r\n\r\n42: AC Milan between 1991 and 1992\r\n\r\n40: Nottingham Forest in 1978\r\n\r\n42: Real Madrid between 2016 and 2017', 'Leverkusen were previously tied with Benfica on 48 games unbeaten in all competitions, but now boast the best record outright since the advent of European competition, according to UEFA.Xabi Alonso\'s side booked their place in the Europa League final after beating Roma 4-2 on aggregate, which included a last-minute goal from Josip Stanisic in the second leg to preserve their unbeaten status.\r\n\r\nUnbeaten post-war runs in competitive top-level matches\r\n49: Bayer Leverkusen between 2023 and 2024\r\n\r\n48: Benfica between 1963 and 1965\r\n\r\n45: Dinamo Zagreb between 2014 and 2015\r\n\r\n43: Juventus between 2011 and 2012\r\n\r\n42: Ajax between 1995 and 1996\r\n\r\n42: AC Milan between 1991 and 1992\r\n\r\n40: Nottingham Forest in 1978\r\n\r\n42: Real Madrid between 2016 and 2017', 'skysports', 'skysports editors', 'hayır', 'images/haber9.jpg', 0, 0, '2024-06-07 12:59:55'),
(10, 2, 'Türkiye’de Yaz Tatili Yapılacak 5 Yer', '5 Places to Have a Summer Vacation in Turkey', 'Yoğun ve stresli iş yaşamından bir nebze olsun sıyrılmak adına kurduğunuz tatil hayalleri yine bütün bir sene boyunca en büyük motivasyon kaynağınız oldu değil mi?\r\n\r\nHaydi bakalım, beklediğiniz o özel zaman gelip çattı. Şimdi zihninizi meşgul eden bütün işlere küçük bir mola verip, biraz olsun nefes alma zamanı. Bu zengin coğrafyada pek kolay olmasa da size düşen tek şey, kendiniz ve sevdikleriniz için yaz tatilini bu sene nerede geçireceğinize karar vermek.', 'The holiday dreams you dreamed of to get away from the busy and stressful business life were your biggest source of motivation throughout the year, right?\r\n\r\nCome on, that special time you\'ve been waiting for has arrived. Now it\'s time to take a break from all the work that occupies your mind and breathe a little. Although it is not easy in this rich geography, the only thing left for you is to decide where to spend the summer holiday for yourself and your loved ones this year.', '1) Bodrum, Muğla\r\nbodrum\r\n\r\nTatil yerleri listemizin birinci sırasında elbette Bodrum var. Tatil yapılacak yerlerin en çok tanınanı, en çok bahsedileni de belki de Bodrum. Türkiye’de deniz, kum, güneş sözcüklerini bir araya getirdiğimiz zaman zihnimize düşen ilk yer çoğumuz için Bodrum oluyor.\r\n\r\nDört mevsim hareketli bir ilçe olan Bodrum’u esasen sadece yaz mevsimiyle ilişkilendirmek elbette biraz haksızlık olur. Buna rağmen yaz mevsiminde bölgedeki nüfusun ortalama 10 katına çıkması da yadsınamaz bir gerçek.\r\n\r\nEski adı Halikarnassos olan Bodrum’da, sadece güneşi, pırıl pırıl denizi ya da geniş kumsalları değil, binlerce yıllık tarihin ayak izlerini ve mitolojinin gizemini bulacaksınız. Bir dönem “Yılın En İyi Müzesi” unvanını almaya hak kazanmış olan Bodrum Kalesi ilçenin tam kalbinde yer alıyor.\r\n\r\nDenizden fırsat bulduğunuzda Sualtı Arekoloji Müzesi’ne ve Antik Tiyatro’ya da muhakkak uğrayın. Muğla’nın en büyük ilçelerinden biri olan Bodrum, özellikle turistlerin varlığını iyiden iyiye hissettirdiği gece hayatıyla da dikkat çekiyor.\r\n\r\n2) Ayvalık, Balıkesir\r\nayvalık\r\n\r\nTatil yapılacak yerlerin en güzellerinden birisi olan Ayvalık, Balıkesir’in Ege’ye doğru firar etmiş ilçesi. Buranın zaten bütün kalbiyle, ruhuyla, neşesiyle Ege’ye ait olduğunu gelir gelmez fark edeceksiniz. Hayatınız boyunca Ayvalık’ı sadece tostuyla değil, Cunda Adası’yla, Şeytan Sofrası’yla ya da Sarımsaklı Plajı ile  anımsamak için rotanızı bir an önce bu şirin beldeye çevirin.\r\n\r\nAyvalık’ta Ne Yapılır? \r\nHuzurlu bir atmosferde denizin tadını çıkarmak mı istiyorsunuz? Doğrudan Sarımsaklı Plajı’na…\r\n“Yaz tatili rakı balıksız olmaz” dediğinizi duyar gibiyiz. O halde doğru adrestesiniz. Çünkü “Rakı, Balık, Ayvalık” buralarda hep aynı cümle içinde yer alır.\r\nCunda’ya tatilinizde çok geniş bir yer açın. Zira burası alışverişin, gece hayatının ve tarihin merkezi. İster gece stantlarından, isterseniz de gündüz çarşısından sevdikleriniz için orijinal hediyeler arayın.\r\nCunda’nın meşhur evlerini ve taş sokaklarını dolaşırken bol bol fotoğraf çekin.\r\nTarihi zeytinyağı ve sabun fabrikasını ziyaret edin.                                  \r\n3) Alaçatı, İzmir\r\nalaçatı deniz\r\n\r\nTatil beldeleri arasında “En İyi Çıkış Yapan Yerler” şeklinde bir liste yapsak, şüphesiz ki zirvede Çeşme‘den başka bir yeri göremeyiz.\r\n\r\nÇeşme’nin bu önlenemez yükselişinde Alaçatı’nın payı ise tartışılmaz. Eskiden sadece rüzgar sörfüyle ön planda olan Alaçatı, şimdilerde yaz tatillerinin vazgeçilmez adresi durumunda.\r\n\r\nİzmir’e yaklaşık 90 km olan Alaçatı, sizi yol boyunca buranın simgesi olan rüzgar değirmenleriyle karşılar.\r\n\r\nButik otelleri, son derece şık mekanları, sörf tutkunlarının vazgeçemediği hırçın denizi ve otantik çarşısıyla Alaçatı’da renkli bir yaz tatili sizleri bekliyor.\r\n\r\nAlaçatı’da Ne Yapılır?\r\nAlaçatı’ya kadar gelmişken buranın simgesi olan yel değirmenlerini es geçmeyin. 150 senelik bir tarihi olan yel değirmenleri, turistler tarafından büyük ilgi görüyor.\r\nHer tatil beldesinin küçük ya da büyük bir çarşısı var; ancak Alaçatı’nın çarşısı beklentilerin çok üzerinde. Alışveriş için gözünüz başka bir yeri aramasın, Alaçatı çarşısında aradığınız her şeyi bir arada bulacağınıza emin olabilirsiniz.\r\nRenkli taş evleri evinize döndüğünüzde hatırlamak istiyorsanız burada bol bol fotoğraf çekin.\r\nEğer denk gelirseniz buradaki sörf müsabakalarını yerinde izleyin.\r\nHer sene rekor sayıda katılımın olduğu Alaçatı Ot Festivali’ne katılın.\r\n4) Eski Foça, İzmir\r\neski foça\r\n\r\nEge’nin incisi İzmir ise İzmir’in incisi de şüphesiz Foça. Foça da yıllar boyu çok büyük bir hasara uğramadan kendini koruyabilmiş nadir güzelliklerden biri.\r\n\r\nİsmini zamanında denizinde yaşayan Akdeniz foklarından alan Phokaia, Eski Foça ve Yeni Foça olmak üzere ikiye ayrılıyor. İki yer de turist akınına uğruyor ancak aralarında büyük bir fark var.\r\n\r\nYeni Foça yapılaşmalarla eski görünümünü kaybettiği için Eski Foça daha ön planda, çünkü yıllardır aynı haliyle kalmış. Küçük liman bölgesiyle, sayısız balıkçı teknesiyle, temiz sahil yoluyla, butik otele dönüştürülmüş eski Rum evleriyle ve daracık ara sokaklarıyla insana aradığı huzuru veriyor.\r\nFethiye, Muğla\r\nfethiye sahil\r\n\r\nMuğla Türkiye’nin tatil şehirlerinin başında geliyor. Fethiye ise Muğla’nın diğer bir incisi.\r\n\r\nAntik çağlarda burada zengin bir yaşam kuran Likyalılardan Romalılara, daha sonrasında da günümüze miras kalan Fethiye, gürültüden ve kalabalıktan uzak bir tatil yapmak isteyenlerin her zaman uğrak yeri oluyor.\r\n\r\nFethiye ile özdeşleşmiş olan Ölüdeniz’e gitmek içinse merkezden sadece 10 km uzaklaşmanız yetecektir.', 'Bodrum, Muğla\r\nBodrum\r\nAt the top of our list of holiday destinations is, of course, Bodrum. Perhaps the most well-known and talked-about vacation spot, Bodrum is the first place that comes to mind for many of us when we think of sea, sand, and sun in Turkey.\r\n\r\nBodrum, a lively district all year round, shouldn’t be solely associated with the summer season. However, it’s undeniable that the population in the area increases by about ten times during the summer.\r\n\r\nIn Bodrum, formerly known as Halicarnassus, you will find not only the sun, the sparkling sea, and the wide beaches but also traces of thousands of years of history and the mysteries of mythology. The Bodrum Castle, once awarded the title of \"Museum of the Year,\" is located right in the heart of the district.\r\n\r\nWhen you have time away from the sea, make sure to visit the Underwater Archaeology Museum and the Ancient Theater. Bodrum, one of the largest districts of Muğla, is also notable for its nightlife, where the presence of tourists is strongly felt.\r\n\r\nAyvalık, Balıkesir\r\nAyvalık\r\nOne of the most beautiful places for a holiday, Ayvalık, is Balıkesir\'s district that extends towards the Aegean. You will immediately notice that this place belongs to the Aegean with all its heart, soul, and joy. To remember Ayvalık not just for its toast but also for Cunda Island, Devil’s Feast (Şeytan Sofrası), and Sarımsaklı Beach, you should head to this charming town as soon as possible.\r\n\r\nWhat to Do in Ayvalık?\r\nWant to enjoy the sea in a peaceful atmosphere? Head straight to Sarımsaklı Beach.\r\nWe can almost hear you say, “A summer holiday isn’t complete without rakı and fish.” Well, you’re in the right place. Because \"Rakı, Fish, Ayvalık\" is a phrase that is always mentioned around here.\r\nMake sure to dedicate a significant part of your holiday to Cunda. This is the center of shopping, nightlife, and history. Look for original gifts for your loved ones at the night stands or the daytime market.\r\nTake plenty of photos while strolling through Cunda\'s famous houses and stone streets.\r\nVisit the historic olive oil and soap factory.\r\n\r\nAlaçatı, İzmir\r\nAlaçatı\r\nIf we were to make a list of \"Top Emerging Holiday Destinations,\" we would undoubtedly see Alaçatı from Çeşme at the top.\r\n\r\nAlaçatı\'s role in Çeşme’s unstoppable rise is undeniable. Once known primarily for windsurfing, Alaçatı has now become an indispensable summer destination.\r\n\r\nAlaçatı, about 90 km from İzmir, greets you with windmills, a symbol of the area, along the way.\r\n\r\nWith its boutique hotels, extremely stylish venues, a rough sea that windsurfing enthusiasts cannot resist, and an authentic market, Alaçatı offers you a colorful summer holiday.\r\n\r\nWhat to Do in Alaçatı?\r\nDon’t miss the windmills, a symbol of the area, which have a history of 150 years and attract great interest from tourists.\r\nEvery holiday destination has a small or large market, but Alaçatı’s market exceeds expectations. Don’t look elsewhere for shopping; you’re sure to find everything you need in Alaçatı’s market.\r\nTake plenty of photos if you want to remember the colorful stone houses when you return home.\r\nIf you get the chance, watch the windsurfing competitions held here.\r\nParticipate in the Alaçatı Herb Festival, which sees a record number of participants every year.\r\n\r\nOld Foça, İzmir\r\nOld Foça\r\nIf İzmir is the pearl of the Aegean, then Foça is undoubtedly the pearl of İzmir. Foça is one of the rare beauties that has preserved itself without major damage over the years.\r\n\r\nPhokaia, named after the Mediterranean monk seals that once lived in its waters, is divided into Old Foça and New Foça. Both places attract tourists, but there is a significant difference between them.\r\n\r\nNew Foça has lost its old appearance due to developments, so Old Foça is more prominent because it has remained the same for years. With its small harbor area, numerous fishing boats, clean coastal road, old Greek houses converted into boutique hotels, and narrow alleys, Old Foça provides the tranquility one seeks.\r\n\r\nFethiye, Muğla\r\nFethiye coast\r\n\r\nMuğla is one of the leading holiday cities in Turkey, and Fethiye is another gem of Muğla.\r\n\r\nFrom the Lycians who established a rich life here in ancient times to the Romans, and then to us today, Fethiye has always been a destination for those who want a quiet holiday away from noise and crowds.\r\n\r\nTo visit Ölüdeniz, which is synonymous with Fethiye, you only need to travel 10 km from the center.', 'gezihaber', 'gezihaber editors', 'hayır', 'images/haber10.webp', 0, 0, '2024-06-07 13:56:25'),
(11, 3, 'Ford CEO\'su Jim Farley, Hibrit Araçlarda Patlama Yaşanırken Elektrikli Araç Satışlarının Neden Yavaşladığını Açıklıyor', 'Ford CEO Jim Farley Explains Why EV Sales Are Slowing as Hybrids’ Boom', 'Elektrikli araç büyümesinin azalması, endüstrinin milyarlarca doları akıllıca harcayıp harcamadığını merak etmesine neden oluyor. Politika, araçların karşılanabilirliği ve şarj altyapısının tümü suçlandı.', 'Electric vehicle growth is waning, leaving the wider industry wondering if it’s spending billions of dollars wisely. Politics, vehicle affordability, and charging infrastructure have all been blamed.', 'Bu sorunlar önemli; ancak Ford Motor CEO\'su Jim Farley\'e göre akülü elektrikli araçlar veya BEV\'ler başka rüzgarlarla da karşı karşıya.\r\nFarley, Barron\'s\'a şunları söyledi: \"Yeni müşteriler kazanıyoruz, ana akım müşteriler elektrikli araçlar için prim ödemeye istekli değiller.\" “Şarjı nasıl engelleyeceklerini bilmiyorlar.”\r\nBunlar geçerli, iyi anlaşılmış noktalardır. Tamamen elektrikli otomobil satışları 2023\'te %46 artmasına rağmen, 2024\'ün ilk çeyreğinde satışlar yalnızca %3 arttı.\r\nTamamen elektrikliye geçmek isteyen alıcılar bulmak zorlaşıyor ve fiyatlandırma da yardımcı olmuyor. Veri sağlayıcı Cox Automotive\'e göre, ABD\'deki ortalama yeni otomobilin maliyeti mayıs ayında yaklaşık 48.500 dolar iken, ortalama yeni BEV\'nin maliyeti yaklaşık 55.0000 dolardı.\r\nŞarj konusuna gelince, ABD\'de yaklaşık 176.000 halka açık şarj portu bulunuyor. Çin\'de bu miktarın yaklaşık 15 katı var.\r\nAraba alıcılarını rahatsız eden başka şeyler de var. Farley, elektrikli araçların yeniden satış değeri konusunda iyi bir fikir sahibi olmadıklarını söylüyor ve ekliyor: \"sigorta arttı ve bunu nasıl engelleyeceklerini bilmiyorlar.\"\r\nElektrikli araçların yeniden satış değerleri bir sorundur ve Tesla\'ya atfedilebilir. ABD\'de bir Tesla\'nın ortalama fiyatı, bir önceki yılki 62.000 dolardan %20 düşerek yaklaşık 50.000 dolar oldu. EV şirketi, düşen talebi dengelemek için 2022\'nin sonlarından bu yana defalarca fiyat indirimine gitti. Büyük fiyat indirimleri, mevcut Tesla sahiplerinin araçlarını satabilecekleri değeri etkiliyor.', 'Those issues matter—but according to Ford Motor CEO Jim Farley, battery-electric vehicles, or BEVs, face other headwinds, too.\r\n“We’re entering new customers, the mainstream customers are not willing to pay a premium for EVs,” Farley told Barron’s. “They don’t know how to handicap the charging.”\r\nThose are valid, well-understood points. Though all-electric car sales jumped 46% in 2023, sales grew just 3% in the first quarter of 2024.\r\nIt’s getting harder to find buyers willing to go all-electric—and pricing doesn’t help. The average new car in the U.S. cost about $48,500 in May, while the average new BEV cost roughly $55,0000, according to data provider Cox Automotive.\r\nAs for charging, the U.S. has about 176,000 public charging ports. China has about 15 times that amount.\r\nThere are other things troubling car buyers, too. They don’t have a good feel for EV resale value, says Farley, adding “insurance has gone up and they don’t know how to handicap that.”\r\nEV resale values are a problem—and can be attributed to Tesla. The average price of a Tesla in the U.S. is about $50,000, down 20% from more than $62,000 a year ago. The EV company has cut prices repeatedly since late 2022 to help offset falling demand. Large price cuts impact the value existing Tesla owners can sell their vehicles for.', 'MarketWatch', 'AI root', 'hayır', 'images/haber11.jfif', 0, 0, '2024-06-09 20:30:16'),
(12, 2, 'Taylor Swift\'in Madrid Konserinde İspanyolca Konuşması Viral Oluyor', 'Taylor Swift Speaking Spanish at Madrid Concert Goes Viral', 'Taylor Swift birçok yeteneğe sahip bir kadın. Şarkıcı, bir müzik ikonu olmasının yanı sıra aynı zamanda bir söz yazarı, yapımcı, yönetmen ve iş kadınıdır. Ancak hayranlar Swift\'in dil konusunda bir ustalık sakladığından şüpheleniyor.', 'Taylor Swift is a woman of many talents. In addition to being a music icon, the singer is also a songwriter, producer, director, and businesswoman. However, fans suspect Swift has been hiding a knack for languages.', 'Grammy kazananının Madrid\'deki konserinde İspanyolca konuşmasının görüntüleri TikTok\'ta viral oldu ve Swifties ona \"çok dilli kraliçe\" adını verdi. 34 yaşındaki sanatçı, rekor kıran Eras turnesi kapsamında Çarşamba günü İspanya\'nın başkentinde sahne aldı. Santiago Bernabéu Stadyumu\'ndaki konser sırasında Swift, kalabalığa kabaca \"Hoş Geldiniz\" anlamına gelen \"Bienvenido a la Eras Tour\" dedi. Eras Turuna\" İngilizce.\r\n\r\nO anın bir klibi Çarşamba günü Jessica Golich (@jessicagolich) kullanıcısı tarafından TikTok\'ta paylaşıldı ve 24 saatten kısa bir sürede 654.000\'den fazla görüntüleme aldı.', 'Footage of the Grammy winner speaking Spanish at her concert in Madrid has gone viral on TikTok, with Swifties dubbing her a \"multi-lingual queen.\" The 34-year-old performed in the Spanish capital on Wednesday as part of her record-breaking Eras tour.During the gig at the Santiago Bernabéu Stadium, Swift told the crowd \"Bienvenido a la Eras Tour,\" which roughly translates to \"Welcome to the Eras Tour\" in English.\r\n\r\nA clip of the moment was shared to TikTok on Wednesday by user Jessica Golich (@jessicagolich), where it has received over 654,000 views in less than 24 hours.', 'newsweek.com', 'Sophie Lloyd', 'hayır', 'images/haber12.webp', 0, 0, '2024-06-09 20:48:47');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler_kategori`
--

CREATE TABLE `haberler_kategori` (
  `id` int(11) NOT NULL,
  `baslik_tr` varchar(255) DEFAULT NULL,
  `baslik_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 
--

INSERT INTO `haberler_kategori` (`id`, `baslik_tr`, `baslik_en`) VALUES
(1, 'Spor', 'Sports'),
(2, 'Eğlence', 'Entertainment'),
(3, 'Finans', 'Money');

-- --------------------------------------------------------

--
-- 
--

CREATE TABLE `user_dislikes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 
--

CREATE TABLE `user_likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 
--

INSERT INTO `user_likes` (`id`, `user_id`, `news_id`) VALUES
(1, 19, 3),
(28, 666023, 0);

-- --------------------------------------------------------

--
-- 
--

CREATE TABLE `uyelik` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `sifre_tekrar` varchar(255) NOT NULL,
  `ulke` varchar(255) NOT NULL,
  `sehir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 
--

INSERT INTO `uyelik` (`id`, `ad`, `soyad`, `email`, `sifre`, `sifre_tekrar`, `ulke`, `sehir`) VALUES
(18, 'gorkem', 'ercan', 'gorkemercan6@gmail.com', '$2y$10$SSgiHanEdjBD61eJoT2rPuheIyGNVuGRFf9ZYHbwN9tVewcsJ.rFy', '', 'Türkiye', 'İzmir'),
(24, 'gorkem', 'ercan', '19070001040@stu.yasar.edu.tr', '$2y$10$YqqJRR9gUzwpWTAL1TFzHuhAW0klLfe8mqBDq/LW3gK7M63CZR6XW', '', 'Turkey', 'İzmir');

--
-- 
--

--
-- 
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes` (`likes`),
  ADD KEY `dislikes` (`dislikes`),
  ADD KEY `cat_id` (`cat_id`);

--
-- 
--
ALTER TABLE `haberler_kategori`
  ADD PRIMARY KEY (`id`);

--
-- 
--
ALTER TABLE `user_dislikes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_news` (`user_id`,`news_id`);

--
-- 
--
ALTER TABLE `user_likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_news` (`user_id`,`news_id`);

--
-- 
--
ALTER TABLE `uyelik`
  ADD PRIMARY KEY (`id`);

--
-- 
--

--
-- 
--
ALTER TABLE `haberler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 
--
ALTER TABLE `haberler_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 
--
ALTER TABLE `user_dislikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- 
--
ALTER TABLE `user_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- 
--
ALTER TABLE `uyelik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
