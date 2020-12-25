// BEGIN INTERCEPTED SOURCE CODE

mt_srand($my_secret_seed);

function createSessionToken() {
    for($i=0; $i < 13; $i++) $key[$i] = mt_rand();
    $salt = mt_rand();
    for($i=0; $i < 226; $i++) $backup[$i] = mt_rand();
    $backup_salt = mt_rand();
    $token = base64_encode(sha1(implode("", $key)) . $salt . "." . $backup_salt . sha1(implode("", $backup)));
    return $token;
}

function generatePasswordResetToken() {
    for($i=0; $i < 5; $i++) {
        $token[$i] = mt_rand();
    }
    $token = base64_encode(implode("-", $token) . "-" . sha1(mt_rand()));
    return $token;
}

echo createSessionToken();
$passwordToken = generatePasswordResetToken();

// END INTERCEPTED SOURCE CODE 