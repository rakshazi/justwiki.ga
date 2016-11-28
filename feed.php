<?php if ($page > 1): ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- [JustWiki] In feed -->
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:100px;text-align:center"
     data-ad-client="ca-pub-5549091042676165"
     data-ad-slot="9450385136"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php endif; ?>
<?php foreach ($items as $item): ?>
    <div class="card">
        <img class="w-100" src="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>"/>
    </div>
<?php endforeach; ?>
