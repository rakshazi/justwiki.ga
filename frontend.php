<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="og:locale" content="ru_RU" />
<meta name="og:type" content="website" />
<meta name="og:title" content="Короче, Википедия" />
<meta name="og:image" content="http://justwiki.ga/logo.png" />
<meta name="keywords" content="just wiki, короче, вики, википедия, юмор" />
<meta name="og:description" content="Коротко о главном." />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@rakshazi" />
<meta name="robots" content="all" />
<meta name="google-site-verification" content="Y0RuHhSexq4ohydvBFlfFi98dazHkgmPutizQjj4MGk" />
<meta name="yandex-verification" content="a34e8014d7fd1005" />
<meta name="og:url" content="http://justwiki.ga" />
<meta name="description" content="Коротко о главном." />
<meta name="twitter:title" content="Короче, Википедия" />
<meta name="twitter:description" content="Коротко о главном" />
<meta name="twitter:url" content="http://justwiki.ga" />
<meta name="twitter:image" content="http://justwiki.ga/logo.png" />
<link rel="icon" type="image/png" href="http://justwiki.ga/logo.png" />
<link rel="apple-touch-icon" href="http://justwiki.ga/logo.png"/>
<title>Короче, Википедия</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5549091042676165",
    enable_page_level_ads: true
  });
</script>
</head>
<body style="background-color: #e1e1e1;">
<div class="offset-md-2 col-md-8 col-sm-12 col-xs-12" style="text-align:center">
    <?php include 'feed.php'; ?>
    <button id='more' data-page='1' type='button' class='btn btn-secondary btn-lg' style='margin-bottom:20px;'>Давай ещё!</button>
</div>

<script>
function loadMore(url, callback){
    var xmlhttp;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            callback(xmlhttp.responseText);
        }
    }
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}
document.getElementById('more').onclick = function(){
    button = document.getElementById('more');
    nextPage = parseInt(button.getAttribute('data-page')) + 1;

    loadMore('/?ajax=' + nextPage, function(html){
        button.setAttribute('data-page', nextPage);
        button.insertAdjacentHTML('beforebegin', html);
    });
}
</script>
</body>
</html>
