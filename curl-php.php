function getHTML($url)
{
    $ch = curl_init();
    curl_setopt($ch , CURLOPT_URL, $url);
    curl_setopt($ch , CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36');
    curl_setopt($ch , CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch , CURLOPT_RETURNTRANSFER, true);
    $html = curl_exec($url);
    return $html;
}
