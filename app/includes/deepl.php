<?php
require_once 'database.php';

function translateText($text, $targetLang) {
    global $pdo;

    // Vérifier si la traduction existe déjà
    $stmt = $pdo->prepare("SELECT text_translated FROM translations WHERE text_source = ? AND lang_source = 'fr' AND lang_target = ?");
    $stmt->execute([$text, $targetLang]);
    $row = $stmt->fetch();

    if ($row) {
        return $row['text_translated']; // Retourne la traduction en cache
    }

    // Sinon, appeler l'API DeepL
    $apiKey = DEEPL_API_KEY;
    $url = "https://api-free.deepl.com/v2/translate";
    $data = http_build_query([
        'auth_key' => $apiKey,
        'text' => $text,
        'target_lang' => strtoupper($targetLang)
    ]);

    $options = [
        'http' => [
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => $data,
        ],
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result, true);

    if (isset($response['translations'][0]['text'])) {
        $translatedText = $response['translations'][0]['text'];

        // Enregistrer en base de données
        $stmt = $pdo->prepare("INSERT INTO translations (text_source, lang_source, text_translated, lang_target) VALUES (?, 'fr', ?, ?)");
        $stmt->execute([$text, $translatedText, $targetLang]);

        return $translatedText;
    }

    return $text; // Si erreur, on retourne le texte original
}
?>
