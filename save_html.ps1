$pages = @(
    @{url="http://localhost:3000/index.php"; file="index.html"},
    @{url="http://localhost:3000/kiseki.php"; file="kiseki.html"},
    @{url="http://localhost:3000/jirei.php"; file="jirei.html"},
    @{url="http://localhost:3000/ofuda.php"; file="ofuda.html"},
    @{url="http://localhost:3000/soudan.php"; file="soudan.html"}
)

foreach ($page in $pages) {
    $response = Invoke-WebRequest -Uri $page.url
    $response.Content | Set-Content $page.file -Encoding UTF8
}