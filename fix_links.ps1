$files = @("index.html", "kiseki.html", "jirei.html", "ofuda.html", "soudan.html")
foreach ($file in $files) {
    (Get-Content $file) -replace '\.php', '.html' | Set-Content $file -Encoding UTF8
}