$pages = @(
    @{url="http://localhost/index.php"; file="index.html"},
    @{url="http://localhost/kiseki.php"; file="kiseki.html"},
    @{url="http://localhost/jirei.php"; file="jirei.html"},
    @{url="http://localhost/ofuda.php"; file="ofuda.html"},
    @{url="http://localhost/soudan.php"; file="soudan.html"}
)

foreach ($page in $pages) {
    $response = Invoke-WebRequest -Uri $page.url
    $response.Content | Set-Content $page.file -Encoding UTF8
}