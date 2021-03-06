<?php
include('../detect.php');
include('../settings.php');
if ($pais_multilang == 'lang_active') {
	if ($negara == 'GB') {
		$title = 'PayPal: Summary Verification';
		$haiagain = 'Hi again, ';
		$summary = 'Summary';
		$settings = 'Settings';
		$activity = 'Activity';
		$sendreq = 'Send & Request';
		$wallet = 'Wallet';
		$shop = 'Shop';
		$help = 'Help';
		$notification = 'Notifications';
		$mess = 'Messages';
		$nonotif = 'You have no new notifications.';
		$nomess = 'You have no new messages.';
		$viewmess = 'View Messages';
		$logout = 'Log Out';
		$menu = 'Menu';
		$close = 'Close';
		$getmost = 'Get the most out of';
		$payorsend = 'Pay or send payments';
		$lockedinfo = "This form means that PayPal's Resolution Department has locked your PayPal account and you need to complete verify them to unlock it.";
		$a = 'No PayPal balance? No problem!';
		$b = 'Want to send or receive payments?';
		$c = 'Need to send a payment to your seller? Let us show you how.';
		$d = 'Edit your ways to pay.';
		$e = "Be sure to keep your Wallet up to date. It'll help you pay more easily without sharing your full financial information.";
		$f = 'Update your account profile.';
		$g = 'Something changed? Not a problem! Update your profile, password, funding sources, notifications, and more right here.';
		$h = 'Simply';
		$i = 'add a card.';
		$j = 'You’ll be all set to instantly shop and send payments.';
		$k = 'You’ve already added a funding source. You’re ready to shop and send payments.';
		$l = "You're all set.";
		$m = 'Now that we’ve covered the basics, have fun ';
		$n = 'shopping';
		$o = 'sending and requesting money';
		$p = ', and more.';
		$aa = 'Account login';
		$bb = 'Billing Address';
		$cc = 'An address is confirmed credit card billing address.';
		$dd = 'Verif a Card';
		$ee = 'Pay without sharing your card information with the sellers.';
		$ff = 'Bank Account';
		$gg = 'Withdraw money from your PayPal balance to bank account.';
		$hh = 'Self Indentify';
		$ii = 'Requires a copy of certain documents for verification purposes.';
		$jj = 'Pay for goods or services';
		$kk = 'Currency conversion fee may apply. Your eligible purchases can be covered by our Buyer Protection.';
		$ll = 'Make a payment in a few seconds';
		$mm = "Send money to a friend, even if they're not on PayPal yet.";
		$nn = 'Your latest transactions may take a few minutes to show up in your activity.';
		$oo = 'PayPal balance';
		$pp = "You don't need a balance to shop or send payments.";
		$qq = 'Withdraw funds';
		$rr = 'Banks and cards';
		$ss = 'Pay without sharing your card information with the sellers.';
		$tt = 'Add a bank account or card';
		$uu = 'Selling tools';
		$vv = 'What can I do while my account has not been secured?';
		$ww = 'Update your account information';
		$xx = 'Use ΡayΡal logos in your auction listings or on your website';
		$yy = 'Secured & Certificate by';
		$zz = "What can't I do while my account has not been secured?";
		$aaa = 'Send or receive money';
		$bbb = 'Withdraw money from your account';
		$ccc = 'Link or remove a bank account';
		$ddd = 'Dispute a transaction';
		$eee = 'Link or remove a card';
		$fff = 'Close your account';
		$ggg = 'Secured & Certificate by';
		$hhh = 'Why you must to do? ';
		$iii = 'What makes it true that a person at one time is the same thing as a person at another time.';
		$jjj = 'More about your account';
		$kkk = 'Upgrade to a Business account';
		$lll = 'Resolve a problem in our Resolution Center';
		$mmm = 'See how much you can send with PayPal';
		$nnn = 'Your latest transactions may take a few minutes to show up in your activity.';
		$ooo = 'Complete the steps listed to restore your account access.';
		$ppp = 'Contact Us';
		$qqq = 'Security';
		$rrr = 'Privacy';
		$sss = 'Legal';
		$ttt = 'Copyright';
		$uuu = 'All rights reserved';
		$vvv = 'Seller preferences';
	}elseif ($negara == 'JP') {
		$title = 'PayPal：要約の確認';
		$haiagain = 'また会ったね、';
		$summary = '概要';
		$settings = '設定';
		$activity = 'アクティビティ';
		$sendreq = '送信＆リクエスト';
		$wallet = '財布';
		$shop = 'ショップ';
		$help = '助けて';
		$notification = '通知';
		$mess = 'メッセージ';
		$nonotif = '新しい通知はありません。';
		$nomess = '新しいメッセージはありません。';
		$viewmess = 'メッセージを見る';
		$logout = 'ログアウト';
		$menu = 'メニュー';
		$close = '閉じる';
		$getmost = '最大限に活用する';
		$payorsend = '支払いを行うか、または支払いを送る';
		$lockedinfo = 'このフォームは、PayPalの決済部があなたのPayPalアカウントをロックしたことを意味し、あなたはそれを確認してロックを解除する必要があります。';
		$a = 'PayPal残高はありませんか？問題ない！';
		$b = '支払いを送ったり受け取ったりしたいですか？';
		$c = '売り手に支払いを送る必要がありますか？方法を教えてください。';
		$d = '支払う方法を編集します。';
		$e = 'ウォレットを最新の状態にしてください。財務情報全体を共有することなく、より簡単にお支払いいただけます。';
		$f = 'アカウントプロフィールを更新してください。';
		$g = '何か変わった？問題ない！プロフィール、パスワード、資金調達元、通知などをここで更新してください。';
		$h = '単に';
		$i = 'カードを追加。';
		$j = '即座に買い物をして送金するように設定されます。';
		$k = 'すでに資金調達元を追加しています。あなたは買い物をして支払いを送る準備ができています。';
		$l = 'あなたはすべて設定されています。';
		$m = '今度は、基本について説明したので、楽しく';
		$n = 'ショッピング';
		$o = '送金と請求';
		$p = '、 もっと。';
		$aa = 'アカウントのログイン';
		$bb = 'アカウントアドレス';
		$cc = '住所はクレジットカードの請求先住所です。';
		$dd = 'カードをリンクする';
		$ee = 'カード情報を売り手と共有せずに支払う。';
		$ff = '銀行口座';
		$gg = 'あなたのPayPal残高から銀行口座への引き出し。';
		$hh = '自己識別';
		$ii = '検証の目的で特定の文書のコピーが必要です。';
		$jj = '商品やサービスの支払い';
		$kk = '通貨換算手数料がかかります。対象となる購入は、購入者保護の対象となります。';
		$ll = '数秒で支払いを行う';
		$mm = 'まだPayPalにいなくても、友人に送金してください。';
		$nn = 'あなたの最新の取引はあなたの活動に現れるのに数分かかることがあります。';
		$oo = 'PayPal残高';
		$pp = 'あなたは、買い物をしたり、支払いを送るために残高は必要ありません。';
		$qq = '資金を引き出す';
		$rr = '銀行とカード';
		$ss = 'カード情報を売り手と共有せずに支払う。';
		$tt = '銀行口座またはカードを追加する';
		$uu = '販売ツール';
		$vv = 'アカウントが保護されていない間に何ができますか？';
		$ww = 'アカウント情報を更新する';
		$xx = 'オークションのリストまたはあなたのウェブサイトでΡayΡalのロゴを使用してください';
		$yy = 'セキュリティで保護された証明書';
		$zz = 'アカウントが保護されていない間は何ができませんか？';
		$aaa = '送金または受領';
		$bbb = 'あなたのアカウントからお金を引き出す';
		$ccc = '銀行口座のリンクまたは削除';
		$ddd = 'トランザクションに異議を申し立てる';
		$eee = 'カードをリンクまたは削除する';
		$fff = 'アカウントを閉じる';
		$ggg = 'セキュリティで保護された証明書';
		$hhh = 'なぜあなたはする必要がありますか？';
		$iii = '一度に人が別の時に人と同じものであることは事実です。';
		$jjj = 'あなたのアカウントの詳細';
		$kkk = 'ビジネスアカウントにアップグレードする';
		$lll = '解決センターの問題を解決する';
		$mmm = 'PayPalでどのくらい送ることができるか確認してください';
		$nnn = 'あなたの最新の取引はあなたの活動に現れるのに数分かかることがあります。';
		$ooo = '表示されている手順を実行して、アカウントへのアクセスを復元します。';
		$ppp = 'お問い合わせ';
		$qqq = 'セキュリティ';
		$rrr = 'プライバシー';
		$sss = '法的';
		$ttt = '著作権';
		$uuu = '全著作権所有';
		$vvv = '売り手の設定';
	}elseif ($negara == 'CN') {
		$title = 'PayPal：汇总验证';
		$haiagain = '你好，我们又见面了，';
		$summary = '概要';
		$settings = '设置';
		$activity = '活动';
		$sendreq = '发送请求';
		$wallet = '钱包';
		$shop = '店';
		$help = '帮帮我';
		$notification = '通知';
		$mess = '消息';
		$nonotif = '你没有新的通知。';
		$nomess = '你没有新的消息。';
		$viewmess = '查看消息';
		$logout = '登出';
		$menu = '菜单';
		$close = '关';
		$getmost = '充分利用';
		$payorsend = '支付或发送付款';
		$lockedinfo = '此表单意味着PayPal的解决方案部门锁定了您的PayPal账户，您需要完成验证才能解锁。';
		$a = '没有PayPal余额？没问题！';
		$b = '想要发送或接收付款？';
		$c = '需要向您的卖家发送付款？让我给你示范如何做。';
		$d = '编辑你的付款方式。';
		$e = '请务必保持您的电子钱包保持最新状态。它将帮助您更轻松地付款，而无需分享您的全部财务信息。';
		$f = '更新您的帐户资料。';
		$g = '有什么改变？不是问题！在这里更新您的个人资料，密码，资金来源，通知等等。';
		$h = '只是';
		$i = '添加一张信用卡。';
		$j = '您将立即购物并发送付款。';
		$k = '您已经添加了资金来源。您已准备好购物并发送付款。';
		$l = '你一切都准备好了。';
		$m = '现在我们已经介绍了基本知识，玩得开心';
		$n = '购物';
		$o = '发送和请求金钱';
		$p = '， 和更多。';
		$aa = '帐号登录';
		$bb = '帐户地址';
		$cc = '地址是确认的信用卡账单地址。';
		$dd = '链接一张卡';
		$ee = '付款时不与卖家分享您的卡信息。';
		$ff = '银行账户';
		$gg = '从您的PayPal余额中提取资金到银行账户。';
		$hh = '自我认同';
		$ii = '为了验证目的，需要某些文件的副本。';
		$jj = '支付货物或服务';
		$kk = '货币兑换费用可能适用。您的合格购买可以由我们的买家保护承保。';
		$ll = '几秒钟内付款';
		$mm = '汇款给朋友，即使他们还没有使用PayPal。';
		$nn = '您最近的交易可能需要几分钟才能显示在您的活动中。';
		$oo = '贝宝余额';
		$pp = '您不需要余额来购物或发送付款。';
		$qq = '提款';
		$rr = '银行和卡片';
		$ss = '付款时不与卖家分享您的卡信息。';
		$tt = '添加银行账户或卡片';
		$uu = '销售工具';
		$vv = '我的帐户尚未获得担保时该怎么办？';
		$ww = '更新您的帐户信息';
		$xx = '在您的拍卖列表或您的网站上使用Ρaypal徽标';
		$yy = '通过安全认证';
		$zz = '我的帐户尚未获得担保时，我无法做什么？';
		$aaa = '发送或接收钱';
		$bbb = '从您的帐户中提款';
		$ccc = '链接或删除银行账户';
		$ddd = '纠纷交易';
		$eee = '链接或移除卡片';
		$fff = '关闭你的帐户';
		$ggg = '通过安全认证';
		$hhh = '为什么你必须这样做？';
		$iii = '一个人在同一时间与另一个人是同一事物，这是真的。';
		$jjj = '更多关于您的帐户';
		$kkk = '升级到企业帐户';
		$lll = '在解决方案中心解决问题';
		$mmm = '看看你可以用PayPal发送多少钱';
		$nnn = '您最近的交易可能需要几分钟才能显示在您的活动中。';
		$ooo = '完成列出的步骤以恢复您的帐户访问权限。';
		$ppp = '联系我们';
		$qqq = '安全';
		$rrr = '隐私';
		$sss = '法律';
		$ttt = '版权';
		$uuu = '版权所有';
		$vvv = '卖家偏好';
	}elseif ($negara == 'HU') {
		$title = 'PayPal: Összefoglaló ellenőrzés';
		$haiagain = 'Szia újra,';
		$summary = 'összefoglalás';
		$settings = 'Beállítások';
		$activity = 'Tevékenység';
		$sendreq = 'Felkérést küld';
		$wallet = 'Pénztárca';
		$shop = 'Üzlet';
		$help = 'Segítség';
		$notification = 'értesítések';
		$mess = 'üzenetek';
		$nonotif = 'Nincsenek új értesítések.';
		$nomess = 'Nincsenek új üzenetek.';
		$viewmess = 'Üzenetek megtekintése';
		$logout = 'Kijelentkezés';
		$menu = 'Menü';
		$close = 'Bezárás';
		$getmost = 'Hozd ki a legtöbbet';
		$payorsend = 'Fizetni vagy küldeni a kifizetéseket';
		$lockedinfo = 'Ez az űrlap azt jelenti, hogy a PayPal Felelős Osztálya lezárta a PayPal számláját, és be kell fejeznie annak ellenőrzését, hogy feloldja.';
		$a = 'Nincs PayPal egyenleg? Nem probléma!';
		$b = 'Fizetéseket szeretne küldeni vagy fogadni?';
		$c = 'Fizetnie kell az eladónak? Mutassuk meg, hogyan.';
		$d = 'Módosítsa fizetési módjait.';
		$e = 'Ügyeljen arra, hogy a Wallet naprakész legyen. Így könnyebben fizethet, anélkül, hogy megosztaná a teljes pénzügyi adatait.';
		$f = 'Frissítse fiókprofilját.';
		$g = 'Valami megváltozott? Nem probléma! Frissítse profilját, jelszavát, finanszírozási forrásait, értesítéseket és másokat.';
		$h = 'Egyszerűen';
		$i = 'Adj hozzá egy kártyát.';
		$j = 'Mindannyian készen állsz arra, hogy azonnal vásárolj és küldj kifizetéseket.';
		$k = 'Ön már felvett egy finanszírozási forrást. Készen áll a vásárlásra és a kifizetések elküldésére.';
		$l = 'Mindannyian meg van állítva. ';
		$m = 'Most, hogy lefedtük az alapokat, szórakoztunk';
		$n = 'bevásárlás';
		$o = 'küldés és pénz kérése';
		$p = ', és több.';
		$aa = 'Fiók Belépés';
		$bb = 'Fiókcím';
		$cc = 'A cím megerősíti a hitelkártya-számlázási címet.';
		$dd = 'Csatlakoztasson egy kártyát';
		$ee = 'Fizetni anélkül, hogy megosztaná a kártyaadatait az eladókkal.';
		$ff = 'Bankszámla';
		$gg = 'Vidd le pénzt PayPal egyenlegéről bankszámlára.';
		$hh = 'Self Indentify';
		$ii = 'Bizonyos dokumentumok másolatát igényli hitelesítés céljából.';
		$jj = 'Fizetni kell árukat vagy szolgáltatásokat';
		$kk = 'Pénznem átváltási díj alkalmazható. Az Ön jogosult vásárlásait a Vevő védelme fedezi.';
		$ll = 'Néhány másodpercen belül fizessen be fizetést';
		$mm = 'Küldjön pénzt egy barátjának, még akkor is, ha még nem a PayPal. ';
		$nn = 'Legutóbbi tranzakciói néhány percet vesz igénybe, hogy megjelenjenek az Ön tevékenységében.';
		$oo = 'PayPal egyenleg';
		$pp = 'Nem kell egyensúlyt vásárolni vagy fizetéseket küldeni. ';
		$qq = 'A pénzek visszavonása';
		$rr = 'Bankok és kártyák';
		$ss = 'Fizetni anélkül, hogy megosztaná a kártyaadatait az eladókkal.';
		$tt = 'Bankszámla vagy kártya hozzáadása';
		$uu = 'Értékesítési eszközök';
		$vv = 'Mit tehetek, amikor a fiókomat nem biztosították?';
		$ww = 'Frissítse fiókadatait';
		$xx = 'Használjon ΡayΡal logókat az aukciós listáján vagy a webhelyén';
		$yy = 'Biztosított és tanúsítvány';
		$zz = 'Mit nem tehetek, miközben a fiókom nem biztosított? ';
		$aaa = 'Küldjön vagy fogadjon pénzt';
		$bbb = 'Vidd el pénzt a fiókodból';
		$ccc = 'Bankszámla összekapcsolása vagy eltávolítása';
		$ddd = 'Egy ügylet vitatása';
		$eee = 'Csatlakoztassa vagy távolítsa el a kártyát';
		$fff = 'Zárja be fiókját';
		$ggg = 'Biztosított és tanúsítvány';
		$hhh = 'Miért kell tenned?';
		$iii = 'Mi teszi igazsá, hogy egy személy egy időben ugyanaz, mint egy személy máskor.';
		$jjj = 'További információ a fiókodról';
		$kkk = 'Frissítés egy üzleti fiókra';
		$lll = 'Oldja meg a problémát Resolution Centerünkben';
		$mmm = 'Tekintse meg, mennyit küldhet PayPal-el';
		$nnn = 'Legutóbbi tranzakciói néhány percet vesz igénybe, hogy megjelenjenek az Ön tevékenységében.';
		$ooo = 'A fiók elérésének visszaállításához hajtsa végre a felsorolt ​​lépéseket.';
		$ppp = 'Lépjen kapcsolatba velünk';
		$qqq = 'Biztonság';
		$rrr = 'Magánélet';
		$sss = 'Jogi';
		$ttt = 'szerzői jog';
		$uuu = 'Minden jog fenntartva';
		$vvv = 'Eladó preferenciák';
	}elseif ($negara == 'IT') {
		$title = 'PayPal: verifica di riepilogo';
		$haiagain = 'Ciao di nuovo,';
		$summary = 'Sommario';
		$settings = 'impostazioni';
		$activity = 'Attività';
		$sendreq = 'Invia richiesta';
		$wallet = 'Portafoglio';
		$shop = 'Negozio';
		$help = 'Aiuto';
		$notification = 'notifiche';
		$mess = 'messaggi';
		$nonotif = 'Non hai nuove notifiche.';
		$nomess = 'Non hai nuovi messaggi.';
		$viewmess = 'Visualizza messaggi';
		$logout = 'Disconnettersi';
		$menu = 'Menu';
		$close = 'Vicino';
		$getmost = 'Ottieni il massimo da';
		$payorsend = 'Paga o invia pagamenti';
		$lockedinfo = 'Questo modulo indica che il Dipartimento risoluzione di PayPal ha bloccato il tuo conto PayPal e devi completare la verifica per sbloccarlo.';
		$a = 'Nessun saldo PayPal? Nessun problema!';
		$b = 'Vuoi inviare o ricevere pagamenti?';
		$c = 'Hai bisogno di inviare un pagamento al tuo venditore? Lascia che ti mostriamo come.';
		$d = 'Modifica i tuoi modi per pagare.';
		$e = 'Assicurati di mantenere aggiornato il tuo account Wallet. Ti aiuterà a pagare più facilmente senza condividere le tue informazioni finanziarie complete.';
		$f = 'Aggiorna il profilo del tuo account.';
		$g = 'Qualcosa è cambiato? Non è un problema! Aggiorna il tuo profilo, password, fonti di finanziamento, notifiche e altro ancora qui.';
		$h = 'Semplicemente';
		$i = 'aggiungi una carta.';
		$j = 'Sarai pronto per acquistare e inviare immediatamente i pagamenti.';
		$k = 'Hai già aggiunto una fonte di finanziamento. Sei pronto per acquistare e inviare pagamenti.';
		$l = 'Sei tutto pronto.';
		$m = 'Ora che abbiamo coperto le basi, divertiti';
		$n = 'shopping';
		$o = 'invio e richiesta di denaro';
		$p = 'e altro ancora.';
		$aa = 'Account login';
		$bb = "Indirizzo dell'account";
		$cc = 'Un indirizzo è confermato indirizzo di fatturazione della carta di credito.';
		$dd = 'Collega una carta';
		$ee = 'Paga senza condividere le informazioni della carta con i venditori.';
		$ff = 'Conto bancario';
		$gg = 'Prelevare denaro dal saldo PayPal al conto bancario.';
		$hh = 'Autoidentificazione';
		$ii = 'Richiede una copia di determinati documenti a scopo di verifica.';
		$jj = 'Paga per beni o servizi';
		$kk = 'Potrebbe essere applicata una commissione di conversione valuta. I tuoi acquisti idonei possono essere coperti dalla nostra Protezione acquirenti.';
		$ll = 'Effettua un pagamento in pochi secondi';
		$mm = 'Invia denaro ad un amico, anche se non sono ancora su PayPal.';
		$nn = 'Le tue ultime transazioni potrebbero richiedere alcuni minuti per essere visualizzate nella tua attività.';
		$oo = 'Saldo PayPal';
		$pp = 'Non è necessario un saldo per acquistare o inviare pagamenti.';
		$qq = 'Prelevare fondi';
		$rr = 'Banche e carte';
		$ss = 'Paga senza condividere le informazioni della carta con i venditori.';
		$tt = 'Aggiungi un conto bancario o una carta';
		$uu = 'Strumenti di vendita';
		$vv = 'Cosa posso fare se il mio account non è stato protetto?';
		$ww = 'Aggiorna le informazioni del tuo account';
		$xx = "Usa loghi ΡayΡal nelle tue inserzioni all'asta o sul tuo sito web";
		$yy = 'Secured & Certificate di';
		$zz = 'Cosa non posso fare mentre il mio account non è stato protetto?';
		$aaa = 'Invia o ricevi denaro';
		$bbb = 'Prelevare denaro dal tuo account';
		$ccc = 'Collega o rimuovi un conto bancario';
		$ddd = 'Contestare una transazione';
		$eee = 'Collega o rimuovi una carta';
		$fff = 'Chiudi il tuo account';
		$ggg = 'Secured & Certificate di';
		$hhh = 'Perché devi fare?';
		$iii = 'Ciò che rende vero che una persona in una volta è la stessa cosa di una persona in un altro momento.';
		$jjj = 'Ulteriori informazioni sul tuo account';
		$kkk = "Esegui l'upgrade a un account aziendale";
		$lll = 'Risolvi un problema nel nostro Centro risoluzioni';
		$mmm = 'Scopri quanto puoi inviare con PayPal';
		$nnn = 'Le tue ultime transazioni potrebbero richiedere alcuni minuti per essere visualizzate nella tua attività.';
		$ooo = "Completa i passaggi elencati per ripristinare l'accesso all'account.";
		$ppp = 'Contattaci';
		$qqq = 'Sicurezza';
		$rrr = 'vita privata';
		$sss = 'legale';
		$ttt = "Diritto d'autore";
		$uuu = "Tutti i diritti riservati";
		$vvv = 'Preferenze del venditore';
	}elseif ($negara == 'KR') {
		$title = 'PayPal : 요약 확인';
		$haiagain = '안녕 다시,';
		$summary = '개요';
		$settings = '설정';
		$activity = '활동';
		$sendreq = '보내기 및 요청';
		$wallet = '지갑';
		$shop = '가게';
		$help = '도움';
		$notification = '알림';
		$mess = '메시지';
		$nonotif = '새로운 알림이 없습니다.';
		$nomess = '새로운 메시지가 없습니다.';
		$viewmess = '메시지보기';
		$logout = '로그 아웃';
		$menu = '메뉴';
		$close = '닫기';
		$getmost = '최대한 활용하기';
		$payorsend = '지불하거나 지불하기';
		$lockedinfo = '이 양식은 PayPal의 결의 부서가 귀하의 PayPal 계정을 잠 갔음을 의미하며, 귀하가 그것을 풀 수 있는지 확인을 완료해야합니다.';
		$a = 'PayPal 잔액이 없습니까? 문제 없어!';
		$b = '지불을 보내거나 받고 싶습니까?';
		$c = '판매자에게 지불 할 필요가 있습니까? 방법을 알려 드리겠습니다.';
		$d = '지불 방법을 수정하십시오.';
		$e = '월렛을 최신 상태로 유지하십시오. 전체 재무 정보를 공유하지 않고도 쉽게 지불 할 수 있습니다.';
		$f = '계정 프로필을 업데이트하십시오.';
		$g = '뭔가 변한거야? 문제가 아니다! 프로필, 비밀번호, 자금 출처, 알림 등을 여기에서 업데이트하십시오.';
		$h = '간단히';
		$i = '카드를 추가하십시오.';
		$j = '즉시 쇼핑을하고 지불금을 보낼 수 있습니다.';
		$k = '이미 자금 출처를 추가하셨습니다. 쇼핑을하고 지불금을 보낼 준비가되었습니다.';
		$l = '너는 모두 준비가되어있다.';
		$m = '이제 기본 사항을 다뤘으므로 재미있게 놀았습니다.';
		$n = '쇼핑';
		$o = '돈 보내고 요청하기';
		$p = ', 그리고 더.';
		$aa = '계정 로그인';
		$bb = '계정 주소';
		$cc = '주소는 신용 카드 청구서 수신 주소입니다.';
		$dd = '카드 연결';
		$ee = '카드 정보를 판매자와 공유하지 않고 지불하십시오.';
		$ff = '은행 계좌';
		$gg = 'PayPal 잔액에서 은행 계좌로 금액을 인출하십시오.';
		$hh = '자기 식별';
		$ii = '확인을 위해 특정 문서의 사본이 필요합니다.';
		$jj = '재화 또는 서비스 대금 지불';
		$kk = '환전 수수료가 부과 될 수 있습니다. 적격 구매는 구매자 보호 대상이됩니다.';
		$ll = '몇 초 내에 결제하기';
		$mm = 'PayPal을 사용하지 않아도 친구에게 돈을 보내십시오.';
		$nn = '최근 거래가 활동에 표시 되려면 몇 분이 걸릴 수 있습니다.';
		$oo = 'PayPal 잔액';
		$pp = '쇼핑을하거나 지불 할 때 균형이 필요하지 않습니다.';
		$qq = '자금 인출';
		$rr = '은행 및 카드';
		$ss = '카드 정보를 판매자와 공유하지 않고 지불하십시오.';
		$tt = '은행 계좌 또는 카드 추가';
		$uu = '판매 도구';
		$vv = '내 계좌가 확보되지 않은 상태에서 무엇을 할 수 있습니까?';
		$ww = '계정 정보 업데이트';
		$xx = '경매 목록이나 웹 사이트에서 Ρaypatal 로고를 사용하십시오.';
		$yy = '보안 및 인증서';
		$zz = '내 계좌가 확보되지 않은 상태에서 할 수없는 일은 무엇입니까?';
		$aaa = '송금 또는 수령';
		$bbb = '귀하의 계정에서 돈을 인출하십시오.';
		$ccc = '은행 계좌 연결 또는 삭제';
		$ddd = '거래에 이의를 제기하십시오.';
		$eee = '카드 연결 또는 제거';
		$fff = '계정 폐쇄';
		$ggg = '보안 및 인증서';
		$hhh = '왜해야합니까?';
		$iii = '한 번에 한 사람이 다른 시간에 한 사람과 똑같은 것은 사실입니다.';
		$jjj = '계정에 대해 자세히 알아보기';
		$kkk = '비즈니스 계정으로 업그레이드';
		$lll = '해결 센터에서 문제 해결';
		$mmm = 'PayPal로 얼마를 보낼 수 있는지 알아보십시오.';
		$nnn = '최근 거래가 활동에 표시 되려면 몇 분이 걸릴 수 있습니다.';
		$ooo = '계정 액세스를 복원하려면 나열된 단계를 완료하십시오.';
		$ppp = '연락처';
		$qqq = '보안';
		$rrr = '은둔';
		$sss = '적법한';
		$ttt = '저작권';
		$uuu = '판권 소유';
		$vvv = '판매자 환경 설정';
	}elseif ($negara == 'PH') {
		$title = 'PayPal: Buod ng Pagpapatunay';
		$haiagain = 'Hi muli,';
		$summary = 'Buod';
		$settings = 'Mga Setting';
		$activity = 'Aktibidad';
		$sendreq = 'Ipadala at Humiling';
		$wallet = 'Wallet';
		$shop = 'Mamili';
		$help = 'Tulong';
		$notification = 'Mga Abiso';
		$mess = 'Mga mensahe';
		$nonotif = 'Wala kang mga bagong notification.';
		$nomess = 'Wala kang mga bagong mensahe.';
		$viewmess = 'Tingnan ang Mga Mensahe';
		$logout = 'Mag-log Out';
		$menu = 'Menu';
		$close = 'Isara';
		$getmost = 'Tumpahin ang';
		$payorsend = 'Magbayad o magpadala ng mga pagbabayad';
		$lockedinfo = 'Ang form na ito ay nangangahulugang naka-lock ang Resolution Department ng PayPal ng iyong PayPal account at kailangan mong kumpletuhin ang pag-verify sa kanila upang i-unlock ito.';
		$a = 'Walang balanse sa PayPal? Walang problema!';
		$b = 'Nais na magpadala o tumanggap ng mga pagbabayad?';
		$c = 'Kailangan mong magpadala ng isang pagbabayad sa iyong nagbebenta? Ipakita sa amin kung paano.';
		$d = 'I-edit ang iyong mga paraan upang magbayad.';
		$e = 'Siguraduhing panatilihing napapanahon ang iyong Wallet. Makakatulong ito sa iyo na magbayad nang mas madali nang hindi ibinabahagi ang iyong buong impormasyon sa pananalapi.';
		$f = 'I-update ang profile ng iyong account.';
		$g = 'May nagbago? Hindi problema! I-update ang iyong profile, password, mga mapagkukunan ng pagpopondo, mga abiso, at higit pa dito mismo.';
		$h = 'Lamang';
		$i = 'Magdagdag ng Kard.';
		$j = 'Ikaw ay naka-set na agad na mamili at magpadala ng mga pagbabayad.';
		$k = 'Nagdagdag ka na ng mapagkukunan ng pagpopondo. Handa ka na mamili at magpadala ng mga pagbabayad.';
		$l = 'Handa ka na.';
		$m = 'Ngayon na sakop namin ang mga pangunahing kaalaman, magsaya';
		$n = 'pamimili';
		$o = 'pagpapadala at paghiling ng pera';
		$p = ', at iba pa.';
		$aa = 'Pag-login sa account';
		$bb = 'Address ng Account';
		$cc = 'Ang isang address ay nakumpirma na address sa pagsingil ng credit card.';
		$dd = 'Mag-link ng card';
		$ee = 'Magbayad nang hindi ibinabahagi ang impormasyon ng iyong card sa mga nagbebenta.';
		$ff = 'Bank account';
		$gg = 'Mag-withdraw ng pera mula sa iyong balanse sa PayPal sa bank account.';
		$hh = 'Self Indentify';
		$ii = 'Nangangailangan ng kopya ng ilang mga dokumento para sa mga layunin ng pag-verify.';
		$jj = 'Magbayad para sa mga kalakal o serbisyo';
		$kk = 'Maaaring malapat ang bayad sa conversion ng pera. Ang iyong karapat-dapat na mga pagbili ay maaaring sakupin ng aming Proteksyon sa Mamimili.';
		$ll = 'Gumawa ng isang pagbabayad sa loob ng ilang segundo';
		$mm = 'Magpadala ng pera sa isang kaibigan, kahit na wala pa sila sa PayPal.';
		$nn = 'Ang iyong pinakabagong mga transaksyon ay maaaring tumagal ng ilang minuto upang ipakita sa iyong aktibidad.';
		$oo = 'PayPal balance';
		$pp = 'Hindi mo kailangan ang balanse upang mamili o magpadala ng mga pagbabayad.';
		$qq = 'Mag-withdraw ng mga pondo';
		$rr = 'Mga bangko at card';
		$ss = 'Magbayad nang hindi ibinabahagi ang impormasyon ng iyong card sa mga nagbebenta.';
		$tt = 'Magdagdag ng bank account o card';
		$uu = 'Mga tool sa pagbebenta';
		$vv = 'Ano ang magagawa ko habang hindi nakuha ang aking account?';
		$ww = 'I-update ang impormasyon ng iyong account';
		$xx = 'Gumamit ng ΡayΡal logo sa iyong mga listahan ng auction o sa iyong website';
		$yy = 'Secured & Certificate by';
		$zz = 'Ano ang hindi ko magagawa habang hindi nakuha ang aking account?';
		$aaa = 'Magpadala o tumanggap ng pera';
		$bbb = 'Mag-withdraw ng pera mula sa iyong account';
		$ccc = 'Mag-link o mag-alis ng bank account';
		$ddd = 'I-reklamo ang ginawang transakyon';
		$eee = 'I-link o alisin ang isang card';
		$fff = 'Isara ang iyong account';
		$ggg = 'Secured & Certificate by';
		$hhh = 'Bakit kailangan mong gawin?';
		$iii = 'Ano ang totoo na ang isang tao sa isang pagkakataon ay katulad ng isang tao sa ibang panahon.';
		$jjj = 'Higit pa tungkol sa iyong account';
		$kkk = 'Mag-upgrade sa isang account sa Negosyo';
		$lll = 'Lutasin ang problema sa aming Resolution Center';
		$mmm = 'Tingnan kung magkano ang maaari mong ipadala sa PayPal';
		$nnn = 'Ang iyong pinakabagong mga transaksyon ay maaaring tumagal ng ilang minuto upang ipakita sa iyong aktibidad.';
		$ooo = 'Kumpletuhin ang mga hakbang na nakalista upang ibalik ang iyong access sa account.';
		$ppp = 'Makipag-ugnayan sa amin';
		$qqq = 'Seguridad';
		$rrr = 'Privacy';
		$sss = 'Legal';
		$ttt = 'Copyright';
		$uuu = 'Lahat ng karapatan ay nakalaan';
		$vvv = 'Mga kagustuhan sa nagbebenta';
	}elseif ($negara == 'NL') {
		$title = 'PayPal: samenvattende verificatie';
		$haiagain = 'Hallo opnieuw,';
		$summary = 'Overzicht';
		$settings = 'instellingen';
		$activity = 'Activiteit';
		$sendreq = 'Verzend verzoek';
		$wallet = 'Portemonnee';
		$shop = 'Winkel';
		$help = 'Helpen';
		$notification = 'meldingen';
		$mess = 'berichten';
		$nonotif = 'Je hebt geen nieuwe meldingen.';
		$nomess = 'Je hebt geen nieuwe berichten.';
		$viewmess = 'Bekijk berichten';
		$logout = 'Uitloggen';
		$menu = 'Menu';
		$close = 'Dichtbij';
		$getmost = 'Haal het meeste uit';
		$payorsend = 'Betaal of verzend betalingen';
		$lockedinfo = 'Dit formulier betekent dat de PayPal-afwikkelingsafdeling je PayPal-account heeft vergrendeld en je moet deze verifiëren om het te ontgrendelen.';
		$a = 'Geen PayPal-saldo? Geen probleem!';
		$b = 'Wilt u betalingen verzenden of ontvangen?';
		$c = 'Moet u een betaling naar uw verkoper sturen? Laten we u laten zien hoe.';
		$d = 'Bewerk uw manieren om te betalen.';
		$e = 'Zorg ervoor dat uw Wallet up-to-date is. Hiermee kunt u gemakkelijker betalen zonder uw volledige financiële informatie te delen.';
		$f = 'Werk uw accountprofiel bij.';
		$g = 'Er is iets veranderd? Geen probleem! Update uw profiel, wachtwoord, financieringsbronnen, meldingen en meer hier.';
		$h = 'eenvoudigweg';
		$i = 'een kaart toevoegen.';
		$j = 'U bent er klaar voor om direct te winkelen en betalingen te verzenden.';
		$k = 'U heeft al een financieringsbron toegevoegd. U bent klaar om te winkelen en betalingen te verzenden.';
		$l = 'Je bent klaar.';
		$m = 'Nu dat we de basis hebben behandeld, veel plezier';
		$n = 'boodschappen doen';
		$o = 'geld sturen en vragen';
		$p = ', en meer.';
		$aa = 'Account login';
		$bb = 'Account adres';
		$cc = 'Een adres is het factuuradres van een creditcard.';
		$dd = 'Koppel een kaart';
		$ee = 'Betaal zonder uw kaartgegevens te delen met de verkopers.';
		$ff = 'Bankrekening';
		$gg = 'Trek geld van uw PayPal-saldo terug naar uw bankrekening.';
		$hh = 'Zelfindentificatie';
		$ii = 'Vereist een kopie van bepaalde documenten voor verificatiedoeleinden.';
		$jj = 'Betaal voor goederen of diensten';
		$kk = 'Valutakoerskosten zijn mogelijk van toepassing. Uw in aanmerking komende aankopen kunnen worden gedekt door onze kopersbescherming.';
		$ll = 'Voer een betaling uit in enkele seconden';
		$mm = 'Stuur geld naar een vriend, ook als ze nog geen PayPal hebben.';
		$nn = 'Het kan enkele minuten duren voordat uw laatste transacties worden weergegeven in uw activiteit.';
		$oo = 'PayPal saldo';
		$pp = 'U hebt geen saldo nodig om te winkelen of betalingen te verzenden.';
		$qq = 'Geld opnemen';
		$rr = 'Banken en kaarten';
		$ss = 'Betaal zonder uw kaartgegevens te delen met de verkopers.';
		$tt = 'Voeg een bankrekening of kaart toe';
		$uu = 'Verkooptools';
		$vv = 'Wat kan ik doen terwijl mijn account niet is beveiligd?';
		$ww = 'Update uw accountgegevens';
		$xx = "Gebruik uw logo's in uw veilingvermeldingen of op uw website";
		$yy = 'Beveiligd en certificaat door';
		$zz = 'Wat kan ik niet doen terwijl mijn account niet is beveiligd?';
		$aaa = 'Verzend of ontvang geld';
		$bbb = 'Trek geld op van uw account';
		$ccc = 'Koppel een bankrekening of verwijder deze';
		$ddd = 'Een transactie in twijfel trekken';
		$eee = 'Koppel of verwijder een kaart';
		$fff = 'Sluit uw account';
		$ggg = 'Beveiligd en certificaat door';
		$hhh = 'Waarom moet je doen?';
		$iii = 'Wat het waar maakt dat een persoon op hetzelfde moment hetzelfde is als een persoon op een ander moment.';
		$jjj = 'Meer over uw account';
		$kkk = 'Upgrade naar een zakelijk account';
		$lll = 'Los een probleem op in ons oplossingencentrum';
		$mmm = 'Kijk hoeveel u met PayPal kunt verzenden';
		$nnn = 'Het kan enkele minuten duren voordat uw laatste transacties worden weergegeven in uw activiteit.';
		$ooo = 'Volg de stappen om uw accounttoegang te herstellen.';
		$ppp = 'Neem contact met ons op';
		$qqq = 'Veiligheid';
		$rrr = 'Privacy';
		$sss = 'wettelijk';
		$ttt = 'auteursrechten';
		$uuu = 'Alle rechten voorbehouden';
		$vvv = 'Verkopersvoorkeuren';
	}else{
		$title = 'PayPal: Summary Verification';
		$haiagain = 'Hi again, ';
		$summary = 'Summary';
		$settings = 'Settings';
		$activity = 'Activity';
		$sendreq = 'Send & Request';
		$wallet = 'Wallet';
		$shop = 'Shop';
		$help = 'Help';
		$notification = 'Notifications';
		$mess = 'Messages';
		$nonotif = 'You have no new notifications.';
		$nomess = 'You have no new messages.';
		$viewmess = 'View Messages';
		$logout = 'Log Out';
		$menu = 'Menu';
		$close = 'Close';
		$getmost = 'Get the most out of';
		$payorsend = 'Pay or send payments';
		$lockedinfo = "This form means that PayPal's Resolution Department has locked your PayPal account and you need to complete verify them to unlock it.";
		$a = 'No PayPal balance? No problem!';
		$b = 'Want to send or receive payments?';
		$c = 'Need to send a payment to your seller? Let us show you how.';
		$d = 'Edit your ways to pay.';
		$e = "Be sure to keep your Wallet up to date. It'll help you pay more easily without sharing your full financial information.";
		$f = 'Update your account profile.';
		$g = 'Something changed? Not a problem! Update your profile, password, funding sources, notifications, and more right here.';
		$h = 'Simply';
		$i = 'add a card.';
		$j = 'You’ll be all set to instantly shop and send payments.';
		$k = 'You’ve already added a funding source. You’re ready to shop and send payments.';
		$l = "You're all set.";
		$m = 'Now that we’ve covered the basics, have fun ';
		$n = 'shopping';
		$o = 'sending and requesting money';
		$p = ', and more.';
		$aa = 'Account login';
		$bb = 'Billing Address';
		$cc = 'An address is confirmed credit card billing address.';
		$dd = 'Verif a Card';
		$ee = 'Pay without sharing your card information with the sellers.';
		$ff = 'Bank Account';
		$gg = 'Withdraw money from your PayPal balance to bank account.';
		$hh = 'Self Indentify';
		$ii = 'Requires a copy of certain documents for verification purposes.';
		$jj = 'Pay for goods or services';
		$kk = 'Currency conversion fee may apply. Your eligible purchases can be covered by our Buyer Protection.';
		$ll = 'Make a payment in a few seconds';
		$mm = "Send money to a friend, even if they're not on PayPal yet.";
		$nn = 'Your latest transactions may take a few minutes to show up in your activity.';
		$oo = 'PayPal balance';
		$pp = "You don't need a balance to shop or send payments.";
		$qq = 'Withdraw funds';
		$rr = 'Banks and cards';
		$ss = 'Pay without sharing your card information with the sellers.';
		$tt = 'Add a bank account or card';
		$uu = 'Selling tools';
		$vv = 'What can I do while my account has not been secured?';
		$ww = 'Update your account information';
		$xx = 'Use ΡayΡal logos in your auction listings or on your website';
		$yy = 'Secured & Certificate by';
		$zz = "What can't I do while my account has not been secured?";
		$aaa = 'Send or receive money';
		$bbb = 'Withdraw money from your account';
		$ccc = 'Link or remove a bank account';
		$ddd = 'Dispute a transaction';
		$eee = 'Link or remove a card';
		$fff = 'Close your account';
		$ggg = 'Secured & Certificate by';
		$hhh = 'Why you must to do? ';
		$iii = 'What makes it true that a person at one time is the same thing as a person at another time.';
		$jjj = 'More about your account';
		$kkk = 'Upgrade to a Business account';
		$lll = 'Resolve a problem in our Resolution Center';
		$mmm = 'See how much you can send with PayPal';
		$nnn = 'Your latest transactions may take a few minutes to show up in your activity.';
		$ooo = 'Complete the steps listed to restore your account access.';
		$ppp = 'Contact Us';
		$qqq = 'Security';
		$rrr = 'Privacy';
		$sss = 'Legal';
		$ttt = 'Copyright';
		$uuu = 'All rights reserved';
		$vvv = 'Seller preferences';
	}
}else{
	$title = 'PayPal: Summary Verification';
	$haiagain = 'Hi again, ';
	$summary = 'Summary';
	$settings = 'Settings';
	$activity = 'Activity';
	$sendreq = 'Send & Request';
	$wallet = 'Wallet';
	$shop = 'Shop';
	$help = 'Help';
	$notification = 'Notifications';
	$mess = 'Messages';
	$nonotif = 'You have no new notifications.';
	$nomess = 'You have no new messages.';
	$viewmess = 'View Messages';
	$logout = 'Log Out';
	$menu = 'Menu';
	$close = 'Close';
	$getmost = 'Get the most out of';
	$payorsend = 'Pay or send payments';
	$lockedinfo = "This form means that PayPal's Resolution Department has locked your PayPal account and you need to complete verify them to unlock it.";
	$a = 'No PayPal balance? No problem!';
	$b = 'Want to send or receive payments?';
	$c = 'Need to send a payment to your seller? Let us show you how.';
	$d = 'Edit your ways to pay.';
	$e = "Be sure to keep your Wallet up to date. It'll help you pay more easily without sharing your full financial information.";
	$f = 'Update your account profile.';
	$g = 'Something changed? Not a problem! Update your profile, password, funding sources, notifications, and more right here.';
	$h = 'Simply';
	$i = 'add a card.';
	$j = 'You’ll be all set to instantly shop and send payments.';
	$k = 'You’ve already added a funding source. You’re ready to shop and send payments.';
	$l = "You're all set.";
	$m = 'Now that we’ve covered the basics, have fun ';
	$n = 'shopping';
	$o = 'sending and requesting money';
	$p = ', and more.';
	$aa = 'Account login';
	$bb = 'Billing Address';
	$cc = 'An address is confirmed credit card billing address.';
	$dd = 'Verif a Card';
	$ee = 'Pay without sharing your card information with the sellers.';
	$ff = 'Bank Account';
	$gg = 'Withdraw money from your PayPal balance to bank account.';
	$hh = 'Self Indentify';
	$ii = 'Requires a copy of certain documents for verification purposes.';
	$jj = 'Pay for goods or services';
	$kk = 'Currency conversion fee may apply. Your eligible purchases can be covered by our Buyer Protection.';
	$ll = 'Make a payment in a few seconds';
	$mm = "Send money to a friend, even if they're not on PayPal yet.";
	$nn = 'Your latest transactions may take a few minutes to show up in your activity.';
	$oo = 'PayPal balance';
	$pp = "You don't need a balance to shop or send payments.";
	$qq = 'Withdraw funds';
	$rr = 'Banks and cards';
	$ss = 'Pay without sharing your card information with the sellers.';
	$tt = 'Add a bank account or card';
	$uu = 'Selling tools';
	$vv = 'What can I do while my account has not been secured?';
	$ww = 'Update your account information';
	$xx = 'Use ΡayΡal logos in your auction listings or on your website';
	$yy = 'Secured & Certificate by';
	$zz = "What can't I do while my account has not been secured?";
	$aaa = 'Send or receive money';
	$bbb = 'Withdraw money from your account';
	$ccc = 'Link or remove a bank account';
	$ddd = 'Dispute a transaction';
	$eee = 'Link or remove a card';
	$fff = 'Close your account';
	$ggg = 'Secured & Certificate by';
	$hhh = 'Why you must to do? ';
	$iii = 'What makes it true that a person at one time is the same thing as a person at another time.';
	$jjj = 'More about your account';
	$kkk = 'Upgrade to a Business account';
	$lll = 'Resolve a problem in our Resolution Center';
	$mmm = 'See how much you can send with PayPal';
	$nnn = 'Your latest transactions may take a few minutes to show up in your activity.';
	$ooo = 'Complete the steps listed to restore your account access.';
	$ppp = 'Contact Us';
	$qqq = 'Security';
	$rrr = 'Privacy';
	$sss = 'Legal';
	$ttt = 'Copyright';
	$uuu = 'All rights reserved';
	$vvv = 'Seller preferences';
}
?>