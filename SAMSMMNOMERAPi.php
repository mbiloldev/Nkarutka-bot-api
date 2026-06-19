
$sms_base = "https://samsmm1.uz/api/v2";
$sms_api_key = "f761ffc787174c32d791b473b2ccce71"; // API kalitingizni shu yerga qo'ying

// foyiz miqdori Masalan: 20 qo'yilsa, narxlar 20% qimmatlashadi
$sms_percent = 20; 

// ── Bayroq emojilari ──
function sms_flags() {
    return [
        'AF'=>'🇦🇫','AL'=>'🇦🇱','DZ'=>'🇩🇿','AD'=>'🇦🇩','AO'=>'🇦🇴','AR'=>'🇦🇷','AM'=>'🇦🇲',
        'AU'=>'🇦🇺','AT'=>'🇦🇹','AZ'=>'🇦🇿','BH'=>'🇧🇭','BD'=>'🇧🇩','BY'=>'🇧🇾','BE'=>'🇧🇪',
        'BJ'=>'🇧🇯','BO'=>'🇧🇴','BA'=>'🇧🇦','BW'=>'🇧🇼','BR'=>'🇧🇷','BN'=>'🇧🇳','BG'=>'🇧🇬',
        'BF'=>'🇧🇫','BI'=>'🇧🇮','KH'=>'🇰🇭','CM'=>'🇨🇲','CA'=>'🇨🇦','CF'=>'🇨🇫','TD'=>'🇹🇩',
        'CL'=>'🇨🇱','CN'=>'🇨🇳','CO'=>'🇨🇴','CD'=>'🇨🇩','CG'=>'🇨🇬','CR'=>'🇨🇷','HR'=>'🇭🇷',
        'CU'=>'🇨🇺','CY'=>'🇨🇾','CZ'=>'🇨🇿','DK'=>'🇩🇰','DJ'=>'🇩🇯','DO'=>'🇩🇴','EC'=>'🇪🇨',
        'EG'=>'🇪🇬','SV'=>'🇸𝑽','GQ'=>'🇬🇶','ER'=>'🇪🇷','EE'=>'🇪🇪','ET'=>'🇪🇹','FI'=>'🇫🇮',
        'FR'=>'🇫🇷','GA'=>'🇬🇦','GM'=>'🇬🇲','GE'=>'🇬🇪','DE'=>'🇩🇪','GH'=>'🇬🇭','GR'=>'🇬🇷',
        'GT'=>'🇬🇹','GN'=>'🇬🇳','GW'=>'🇬🇼','HT'=>'🇭🇹','HN'=>'🇭🇳','HK'=>'🇭🇰','HU'=>'🇭🇺',
        'IS'=>'🇮🇸','IN'=>'🇮🇳','ID'=>'🇮🇩','IR'=>'🇮🇷','IQ'=>'🇮🇶','IE'=>'🇮🇪','IL'=>'🇮🇱',
        'IT'=>'🇮🇹','JM'=>'🇯🇲','JP'=>'🇯🇵','JO'=>'🇯🇴','KZ'=>'🇰🇿','KE'=>'🇰🇪','KP'=>'🇰🇵',
        'KR'=>'🇰🇷','KW'=>'🇺🇼','KG'=>'🇰🇬','LA'=>'🇱🇦','LV'=>'🇱🇻','LB'=>'🇱🇧','LR'=>'🇱🇷',
        'LY'=>'🇱🇾','LT'=>'🇱🇹','LU'=>'🇱🇺','MK'=>'🇲🇰','MG'=>'🇲🇬','MW'=>'🇲🇼','MY'=>'🇲🇾',
        'MV'=>'🇲🇻','ML'=>'🇲🇱','MT'=>'🇲🇹','MR'=>'🇲🇷','MX'=>'🇲🇽','MD'=>'🇲🇩','MC'=>'🇲🇨',
        'MN'=>'🇲🇳','ME'=>'🇲🇪','MA'=>'🇲🇦','MZ'=>'🇲🇿','MM'=>'🇲🇲','NA'=>'🇳🇦','NP'=>'🇳🇵',
        'NL'=>'🇳🇱','NZ'=>'🇳🇿','NI'=>'🇳🇮','NE'=>'🇳🇪','NG'=>'🇳🇬','NO'=>'🇳🇴','OM'=>'🇴🇲',
        'PK'=>'🇵🇰','PA'=>'🇵🇦','PG'=>'🇵🇬','PY'=>'🇵🇾','PE'=>'🇵🇪','PH'=>'🇵🇭','PL'=>'🇵🇱',
        'PT'=>'🇵🇹','QA'=>'🇶🇦','RO'=>'🇷🇴','RU'=>'🇷🇺','RW'=>'🇷🇼','SA'=>'🇸🇦','SN'=>'🇸🇳',
        'RS'=>'🇷🇸','SL'=>'🇸🇱','SG'=>'🇸🇬','SK'=>'🇸🇰','SI'=>'🇸🇮','SO'=>'🇸🇴','ZA'=>'🇿🇦',
        'SS'=>'🇸🇸','ES'=>'🇪🇸','LK'=>'🇱🇰','SD'=>'🇸🇩','SE'=>'🇸🇪','CH'=>'🇨🇭','SY'=>'🇸🇾',
        'TW'=>'🇹🇼','TJ'=>'🇹🇯','TZ'=>'🇹🇿','TH'=>'🇹🇭','TG'=>'🇹🇬','TT'=>'🇹🇹','TN'=>'🇹🇳',
        'TR'=>'🇹🇷','TM'=>'🇹🇲','UG'=>'🇺🇬','UA'=>'🇺🇦','AE'=>'🇦🇪','GB'=>'🇬🇧','US'=>'🇺🇸',
        'UY'=>'🇺🇾','UZ'=>'🇺🇿','VE'=>'🇻🇪','VN'=>'🇻🇳','YE'=>'🇾🇪','ZM'=>'🇿🇲','ZW'=>'🇿🇼',
        'PS'=>'🇵🇸','TL'=>'🇹🇱','MU'=>'🇲🇺','SC'=>'🇸🇨','CV'=>'🇨🇻','KM'=>'🇰🇲',
    ];
}

// ── To'liq davlat nomlari (o'zbekcha) ──
function sms_names() {
    return [
        'AF'=>"Afgʻoniston",'AL'=>"Albaniya",'DZ'=>"Jazoir",'AD'=>"Andorra",
        'AO'=>"Angola",'AR'=>"Argentina",'AM'=>"Armaniston",'AU'=>"Avstraliya",
        'AT'=>"Avstriya",'AZ'=>"Ozarbayjon",'BH'=>"Bahrayn",'BD'=>"Bangladesh",
        'BY'=>"Belarus",'BE'=>"Belgiya",'BJ'=>"Benin",'BO'=>"Boliviya",
        'BA'=>"Bosniya va Gersegovina",'BW'=>"Botsvana",'BR'=>"Braziliya",
        'BN'=>"Bruney",'BG'=>"Bolgariya",'BF'=>"Burkina-Faso",'BI'=>"Burundi",
        'KH'=>"Kambodja",'CM'=>"Kamerun",'CA'=>"Kanada",
        'CF'=>"Markaziy Afrika Respublikasi",'TD'=>"Chad",'CL'=>"Chili",
        'CN'=>"Xitoy",'CO'=>"Kolumbiya",'CD'=>"Kongo (DRK)",
        'CG'=>"Kongo Respublikasi",'CR'=>"Kosta-Rika",'HR'=>"Xorvatiya",
        'CU'=>"Kuba",'CY'=>"Kipr",'CZ'=>"Chexiya",'DK'=>"Daniya",
        'DJ'=>"Jibuti",'DO'=>"Dominikan Respublikasi",'EC'=>"Ekvador",
        'EG'=>"Misr",'SV'=>"Salvador",'GQ'=>"Ekvatorial Gvineya",
        'ER'=>"Eritreya",'EE'=>"Estoniya",'ET'=>"Efiopiya",'FI'=>"Finlandiya",
        'FR'=>"Fransiya",'GA'=>"Gabon",'GM'=>"Gambiya",'GE'=>"Gruziya",
        'DE'=>"Germaniya",'GH'=>"Gana",'GR'=>"Gretsiya",'GT'=>"Gvatemala",
        'GN'=>"Gvineya",'GW'=>"Gvineya-Bisau",'HT'=>"Gaiti",'HN'=>"Gonduras",
        'HK'=>"Gonkong",'HU'=>"Vengriya",'IS'=>"Islandiya",'IN'=>"Hindiston",
        'ID'=>"Indoneziya",'IR'=>"Eron",'IQ'=>"Iroq",'IE'=>"Irlandiya",
        'IL'=>"Isroil",'IT'=>"Italiya",'JM'=>"Yamayka",'JP'=>"Yaponiya",
        'JO'=>"Iordaniya",'KZ'=>"Qozogʻiston",'KE'=>"Keniya",
        'KP'=>"Shimoliy Koreya",'KR'=>"Janubiy Koreya",'KW'=>"Quvayt",
        'KG'=>"Qirgʻiziston",'LA'=>"Laos",'LV'=>"Latviya",'LB'=>"Livan",
        'LR'=>"Liberiya",'LY'=>"Liviya",'LT'=>"Litva",'LU'=>"Lyuksemburg",
        'MK'=>"Shimoliy Makedoniya",'MG'=>"Madagaskar",'MW'=>"Malavi",
        'MY'=>"Malayziya",'MV'=>"Maldiv orollari",'ML'=>"Mali",'MT'=>"Malta",
        'MR'=>"Mavritaniya",'MX'=>"Meksika",'MD'=>"Moldova",'MC'=>"Monako",
        'MN'=>"Mongoliya",'ME'=>"Chernogoriya",'MA'=>"Marokash",
        'MZ'=>"Mozambik",'MM'=>"Myanma",'NA'=>"Namibiya",'NP'=>"Nepal",
        'NL'=>"Niderlandiya",'NZ'=>"Yangi Zelandiya",'NI'=>"Nikaragua",
        'NE'=>"Niger",'NG'=>"Nigeriya",'NO'=>"Norvegiya",'OM'=>"Ummon",
        'PK'=>"Pokiston",'PA'=>"Panama",'PG'=>"Papua Yangi Gvineya",
        'PY'=>"Paragvay",'PE'=>"Peru",'PH'=>"Filippin",'PL'=>"Polsha",
        'PT'=>"Portugaliya",'QA'=>"Qatar",'RO'=>"Ruminiya",'RU'=>"Rossiya",
        'RW'=>"Ruanda",'SA'=>"Saudiya Arabistoni",'SN'=>"Senegal",
        'RS'=>"Serbiya",'SL'=>"Syerra-Leone",'SG'=>"Singapur",
        'SK'=>"Slovakiya",'SI'=>"Sloveniya",'SO'=>"Somali",
        'ZA'=>"Janubiy Afrika",'SS'=>"Janubiy Sudan",'ES'=>"Ispaniya",
        'LK'=>"Shri-Lanka",'SD'=>"Sudan",'SE'=>"Shvetsiya",
        'CH'=>"Shveytsariya",'SY'=>"Suriya",'TW'=>"Tayvan",
        'TJ'=>"Tojikiston",'TZ'=>"Tanzaniya",'TH'=>"Tailand",'TG'=>"Togo",
        'TT'=>"Trinidad va Tobago",'TN'=>"Tunis",'TR'=>"Turkiya",
        'TM'=>"Turkmaniston",'UG'=>"Uganda",'UA'=>"Ukraina",
        'AE'=>"BAA (Dubay)",'GB'=>"Buyuk Britaniya",'US'=>"AQSH",
        'UY'=>"Urugvay",'UZ'=>"O'zbekiston",'VE'=>"Venesuela",
        'VN'=>"Vyetnam",'YE'=>"Yaman",'ZM'=>"Zambiya",'ZW'=>"Zimbabve",
        'PS'=>"Falastin",'TL'=>"Sharqiy Timor",'MU'=>"Mavrikiy",
        'SC'=>"Seyshel orollari",'CV'=>"Kabo-Verde",'KM'=>"Komor orollari",
    ];
}

// ──────────────────────────────────
//  ☎️ Nomer Olish — boshlash
// ──────────────────────────────────
if ($text == "☎️ Nomer Olish" and joinchat($cid) == 1 and phone($cid) == 1) {

    $user_bal = mysqli_fetch_assoc(mysqli_query($connect, "SELECT balance FROM users WHERE id = $cid"))['balance'];

    bot('sendMessage', [
        'chat_id'      => $cid,
        'text'         =>
            "☎️ <b>Virtual nomer olish</b>\n\n" .
            "💰 Balansingiz: <b>" . number_format($user_bal, 0, '.', ' ') . " so'm</b>\n\n" .
            "📋 <b>Qanday ishlaydi?</b>\n" .
            "1️⃣ Davlat tanlaysiz\n" .
            "2️⃣ Nomer ajratiladi\n" .
            "3️⃣ SMS kod kutiladi\n\n" .
            "👇 Davom etish uchun tugmani bosing:",
        'parse_mode'   => 'HTML',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "🌍 Davlatlarni ko'rish", 'callback_data' => "sms_countries=1"]],
                [['text' => "⬅️ Orqaga", 'callback_data' => "menu"]],
            ]
        ])
    ]);
    exit;
}

// ──────────────────────────────────
//  Davlatlar ro'yxati (sahifalash)
// ──────────────────────────────────
if (mb_stripos($data, "sms_countries=") !== false) {

    $page = (int)explode("=", $data)[1];
    if ($page < 1) $page = 1;

    accl($qid, "⏳ Davlatlar yuklanmoqda...");

    $res = json_decode(file_get_contents(
        "$sms_base?action=available_countries&key=$sms_api_key"
    ), true);

    if (empty($res) || !is_array($res)) {
        bot('answerCallbackQuery', [
            'callback_query_id' => $qid,
            'text'              => "❌ Server javob bermadi. Qayta urining.",
            'show_alert'        => true,
        ]);
        exit;
    }

    // Har bir davlat narxiga foiz hisoblab qo'shish
    foreach ($res as $key => $c) {
        $original_price = (int)$c['price'];
        $extra = ($original_price * $sms_percent) / 100;
        $res[$key]['price'] = ceil($original_price + $extra); // Yaxlitlab saqlaymiz
    }

    // Narx bo'yicha o'sish tartibida saralash
    usort($res, function($a, $b) {
        return $a['price'] - $b['price'];
    });

    $total       = count($res);
    $per_page    = 10;
    $total_pages = max(1, ceil($total / $per_page));
    if ($page > $total_pages) $page = $total_pages;

    $start = ($page - 1) * $per_page;
    $slice = array_slice($res, $start, $per_page);

    $flags = sms_flags();
    $names = sms_names();

    $keyboard = [];
    foreach ($slice as $c) {
        $code      = $c['country'];
        $price     = (int)$c['price'];
        $flag      = $flags[$code] ?? '🏳️';
        $full_name = $names[$code] ?? $code;
        $fmt       = number_format($price, 0, '.', ' ');
        $keyboard[] = [[
            'text'          => "$flag $full_name — $fmt so'm",
            'callback_data' => "sms_buy_confirm=$code=$price"
        ]];
    }

    // Sahifalash tugmalari
    $nav = [];
    if ($page > 1)            $nav[] = ['text' => "⬅️ Oldingi", 'callback_data' => "sms_countries=" . ($page - 1)];
    $nav[] = ['text' => "$page / $total_pages", 'callback_data' => "sms_null"];
    if ($page < $total_pages) $nav[] = ['text' => "Keyingi ➡️", 'callback_data' => "sms_countries=" . ($page + 1)];
    $keyboard[] = $nav;
    $keyboard[] = [['text' => "⬅️ Orqaga", 'callback_data' => "menu"]];

    bot('editMessageText', [
        'chat_id'      => $chat_id,
        'message_id'   => $message_id,
        'text'         =>
            "🌍 <b>Davlatni tanlang</b>\n\n" .
            "📦 Jami: <b>$total ta</b> davlat mavjud\n" .
            "💡 Narxlar arzondan qimmatga saralangan\n\n" .
            "👇 Kerakli davlatni tanlang:",
        'parse_mode'   => 'HTML',
        'reply_markup' => json_encode(['inline_keyboard' => $keyboard]),
    ]);
    exit;
}

// ──────────────────────────────────
//  Tasdiqlash sahifasi
// ──────────────────────────────────
if (mb_stripos($data, "sms_buy_confirm=") !== false) {

    $parts   = explode("=", $data);
    $country = $parts[1];
    $price   = (int)$parts[2]; // Bu yerga foizli narx inline tugmadan o'tib keladi

    $flags     = sms_flags();
    $names     = sms_names();
    $flag      = $flags[$country] ?? '🏳️';
    $full_name = $names[$country] ?? $country;

    $fmt_price = number_format($price, 0, '.', ' ');
    $user_bal  = mysqli_fetch_assoc(mysqli_query($connect, "SELECT balance FROM users WHERE id = $chat_id"))['balance'];
    $fmt_bal   = number_format($user_bal, 0, '.', ' ');

    if ($user_bal < $price) {
        $yetmaydi = number_format($price - $user_bal, 0, '.', ' ');
        bot('editMessageText', [
            'chat_id'      => $chat_id,
            'message_id'   => $message_id,
            'text'         =>
                "❌ <b>Yetarli balans yo'q!</b>\n\n" .
                "$flag Davlat: <b>$full_name</b>\n" .
                "💰 Kerak: <b>$fmt_price so'm</b>\n" .
                "💳 Balansingiz: <b>$fmt_bal so'm</b>\n" .
                "❗ Yetmayapti: <b>$yetmaydi so'm</b>",
            'parse_mode'   => 'HTML',
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => "💵 Hisob to'ldirish", 'callback_data' => "menu=tolov"]],
                    [['text' => "⬅️ Orqaga",           'callback_data' => "sms_countries=1"]],
                ]
            ]),
        ]);
        exit;
    }

    bot('editMessageText', [
        'chat_id'      => $chat_id,
        'message_id'   => $message_id,
        'text'         =>
            "📋 <b>Buyurtmani tasdiqlang</b>\n\n" .
            "$flag Davlat: <b>$full_name</b>\n" .
            "💰 Narxi: <b>$fmt_price so'm</b>\n" .
            "💳 Balansingiz: <b>$fmt_bal so'm</b>\n\n" .
            "⚠️ Hisobingizdan <b>$fmt_price so'm</b> yechiladi!",
        'parse_mode'   => 'HTML',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "✅ Tasdiqlash", 'callback_data' => "sms_do_buy=$country=$price"]],
                [['text' => "⬅️ Orqaga",    'callback_data' => "sms_countries=1"]],
            ]
        ]),
    ]);
    exit;
}

// ──────────────────────────────────
//  Nomer sotib olish
// ──────────────────────────────────
if (mb_stripos($data, "sms_do_buy=") !== false) {

    $parts   = explode("=", $data);
    $country = $parts[1];
    $price   = (int)$parts[2]; // Bu foydalanuvchidan yechiladigan foizli narx

    $flags     = sms_flags();
    $names     = sms_names();
    $flag      = $flags[$country] ?? '🏳️';
    $full_name = $names[$country] ?? $country;

    $user_bal = mysqli_fetch_assoc(mysqli_query($connect, "SELECT balance FROM users WHERE id = $chat_id"))['balance'];

    if ($user_bal < $price) {
        accl($qid, "❌ Yetarli balans yo'q!", true);
        exit;
    }

    accl($qid, "⏳ Nomer ajratilmoqda...");

    // API so'rovi asl narxda yuboriladi, biz faqat foydalanuvchi hisobidan foizlisi bilan yechamiz
    $res = json_decode(file_get_contents(
        "$sms_base?action=get_number&key=$sms_api_key&country=$country"
    ), true);

    if (empty($res['number'])) {
        $err = $res['message'] ?? ($res['error'] ?? 'Server xatosi');
        bot('editMessageText', [
            'chat_id'      => $chat_id,
            'message_id'   => $message_id,
            'text'         => "❌ <b>Xatolik yuz berdi:</b>\n<i>$err</i>\n\nQayta urining.",
            'parse_mode'   => 'HTML',
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => "🔄 Qayta urinish", 'callback_data' => "sms_buy_confirm=$country=$price"]],
                    [['text' => "⬅️ Orqaga",         'callback_data' => "sms_countries=1"]],
                ]
            ]),
        ]);
        exit;
    }

    // Foiz qo'shilgan narx foydalanuvchi balansidan yechiladi
    $new_bal = $user_bal - $price;
    mysqli_query($connect, "UPDATE users SET balance=$new_bal WHERE id=$chat_id");

    $number    = mysqli_real_escape_string($connect, $res['number']);
    $hash_code = mysqli_real_escape_string($connect, $res['hash_code']);
    $fmt_price = number_format($price, 0, '.', ' ');
    $fmt_bal   = number_format($new_bal, 0, '.', ' ');
    $c_safe    = mysqli_real_escape_string($connect, $country);

    // Eski kutayotgan buyurtmani o'chirish
    mysqli_query($connect, "DELETE FROM sms_orders WHERE user_id=$chat_id AND status='waiting'");

    // Bazaga foizli (sotilgan) narx saqlanadi
    mysqli_query($connect,
        "INSERT INTO sms_orders (user_id, number, hash_code, country, price, status)
         VALUES ($chat_id, '$number', '$hash_code', '$c_safe', $price, 'waiting')"
    );

    bot('editMessageText', [
        'chat_id'      => $chat_id,
        'message_id'   => $message_id,
        'text'         =>
            "✅ <b>Nomer muvaffaqiyatli ajratildi!</b>\n\n" .
            "$flag Davlat: <b>$full_name</b>\n" .
            "📞 Raqam: <code>$number</code>\n" .
            "💰 To'landi: <b>$fmt_price so'm</b>\n" .
            "💳 Qolgan balans: <b>$fmt_bal so'm</b>\n\n" .
            "⏳ Ushbu raqamga SMS yuborilishini kuting, so'ng «📨 SMS kodni olish» tugmasini bosing.",
        'parse_mode'   => 'HTML',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "📨 SMS kodni olish", 'callback_data' => "sms_get_code=$chat_id"]],
                [['text' => "⬅️ Bosh sahifa",     'callback_data' => "menu"]],
            ]
        ]),
    ]);

    // Admin xabari
    bot('sendMessage', [
        'chat_id'    => $buyurtma,
        'text'       =>
            "📞 <b>🆕 Yangi nomer buyurtmasi ( @$bot )</b>\n\n" .
            "👤 <a href='tg://user?id=$chat_id'>$chat_id</a>\n" .
            "$flag Davlat: $full_name\n" .
            "📱 Nomer: <code>$number</code>\n" .
            "💰 Sotilgan Narx: $fmt_price so'm",
        'parse_mode' => 'HTML',
    ]);

    exit;
}

// ──────────────────────────────────
//  SMS kodni olish
// ──────────────────────────────────
if (mb_stripos($data, "sms_get_code=") !== false) {

    $uid = (int)explode("=", $data)[1];

    accl($qid, "⏳ SMS tekshirilmoqda...");

    $row = mysqli_fetch_assoc(mysqli_query($connect,
        "SELECT * FROM sms_orders WHERE user_id=$uid AND status='waiting' ORDER BY id DESC LIMIT 1"
    ));

    if (!$row) {
        bot('answerCallbackQuery', [
            'callback_query_id' => $qid,
            'text'              => "⚠️ Faol buyurtma topilmadi!",
            'show_alert'        => true,
        ]);
        exit;
    }

    $hash_code = $row['hash_code'];
    $number    = $row['number'];
    $c_code    = $row['country'];

    $names     = sms_names();
    $flags     = sms_flags();
    $full_name = $names[$c_code] ?? $c_code;
    $flag      = $flags[$c_code] ?? '🏳️';

    $res = json_decode(file_get_contents(
        "$sms_base?action=get_sms&key=$sms_api_key&hash_code=" . urlencode($hash_code)
    ), true);

    if (!empty($res['status']) && $res['status'] === 'ready') {

        $code = $res['code'];
        $pass = $res['password'] ?? '';

        $code_safe = mysqli_real_escape_string($connect, $code);
        $pass_safe = mysqli_real_escape_string($connect, $pass);
        mysqli_query($connect,
            "UPDATE sms_orders SET status='done', sms_code='$code_safe', pass='$pass_safe' WHERE id={$row['id']}"
        );

        $pass_line = $pass ? "\n🔑 Password: <code>$pass</code>" : "";

        bot('editMessageText', [
            'chat_id'      => $chat_id,
            'message_id'   => $message_id,
            'text'         =>
                "✅ <b>SMS kod olindi!</b>\n\n" .
                "$flag Davlat: <b>$full_name</b>\n" .
                "📞 Raqam: <code>$number</code>\n" .
                "🔢 Kod: <code>$code</code>" .
                $pass_line . "\n\n" .
                "🛍️ Haridingiz uchun RAHMAT!",
            'parse_mode'   => 'HTML',
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => "☎️ Yangi nomer olish", 'callback_data' => "sms_countries=1"]],
                    [['text' => "⬅️ Bosh sahifa",       'callback_data' => "menu"]],
                ]
            ]),
        ]);

    } else {
        bot('editMessageText', [
            'chat_id'      => $chat_id,
            'message_id'   => $message_id,
            'text'         =>
                "⏳ <b>SMS hali kelmadi</b>\n\n" .
                "$flag Davlat: <b>$full_name</b>\n" .
                "📞 Raqam: <code>$number</code>\n\n" .
                "🔄 Bir oz kutib qayta bosing.",
            'parse_mode'   => 'HTML',
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => "🔄 Qayta tekshirish", 'callback_data' => "sms_get_code=$uid"]],
                    [['text' => "⬅️ Bosh sahifa",      'callback_data' => "menu"]],
                ]
            ]),
        ]);
    }
    exit;
}

if ($data === "sms_null") {
    bot('answerCallbackQuery', ['callback_query_id' => $qid]);
    exit;
}