<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>CloudBadak</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@500;700;800&family=Public+Sans:wght@400;500;600&display=swap">
<style>
:root{
  box-sizing:border-box;
  padding-top:env(safe-area-inset-top,0px);
  padding-bottom:env(safe-area-inset-bottom,0px);
  --bg:#E8ECF0; --surface:#F6F8FA; --ink:#17202B; --muted:#56626F; --line:#C5CDD6;
  --accent:#1E5BFF; --accent-ink:#fff; --code-bg:#17202B; --code-ink:#DCE6F2;
}
@media (prefers-color-scheme:dark){
  :root:not([data-theme="light"]){
    --bg:#10161D; --surface:#18212B; --ink:#E8EEF4; --muted:#93A0AD; --line:#2B3744;
    --accent:#5B8CFF; --accent-ink:#0B1220; --code-bg:#0A0F15; --code-ink:#DCE6F2;
  }
}
:root[data-theme="dark"]{
  --bg:#10161D; --surface:#18212B; --ink:#E8EEF4; --muted:#93A0AD; --line:#2B3744;
  --accent:#5B8CFF; --accent-ink:#0B1220; --code-bg:#0A0F15; --code-ink:#DCE6F2;
}
html{scroll-padding-top:env(safe-area-inset-top,0px)}
*,*::before,*::after{box-sizing:border-box}
body{margin:0;background:var(--bg);color:var(--ink);font:400 1.0625rem/1.65 "Public Sans",system-ui,sans-serif}
h1,h2,h3{font-family:"Bricolage Grotesque","Public Sans",system-ui,sans-serif;line-height:1.1;margin:0}
.wrap{max-width:62rem;margin:0 auto;padding:0 1.25rem}
header.hero{padding:4rem 0 3rem;border-bottom:1px solid var(--line)}
.brand{display:flex;align-items:center;gap:.6rem;font:700 1.15rem "Bricolage Grotesque",sans-serif;margin-bottom:3.5rem}
.brand svg{width:2rem;height:2rem}
h1{font-size:clamp(3.2rem,12vw,8rem);font-weight:800;letter-spacing:-.035em}
.lead{max-width:34rem;margin:1.5rem 0 2rem;color:var(--muted);font-size:1.2rem}
.btn{display:inline-block;background:var(--accent);color:var(--accent-ink);font-weight:600;padding:.8rem 1.4rem;border-radius:.5rem;text-decoration:none}
.btn:focus-visible,.tab:focus-visible{outline:3px solid var(--ink);outline-offset:3px}
section{padding:3rem 0;border-bottom:1px solid var(--line)}
h2{font-size:clamp(1.7rem,4vw,2.4rem);letter-spacing:-.02em;margin-bottom:.6rem}
.sub{color:var(--muted);max-width:40rem;margin:0 0 1.75rem}
.prep{display:grid;gap:.75rem;grid-template-columns:repeat(auto-fit,minmax(14rem,1fr));padding:0;margin:0;list-style:none}
.prep li{background:var(--surface);border:1px solid var(--line);border-radius:.5rem;padding:1rem 1.1rem}
.prep b{display:block;font-family:"Bricolage Grotesque",sans-serif;font-size:1.05rem}
.prep span{color:var(--muted);font-size:.95rem}
.tabs{display:flex;gap:.4rem;flex-wrap:wrap;margin-bottom:1rem}
.tab{font:600 .95rem "Public Sans",sans-serif;color:var(--ink);background:transparent;border:1px solid var(--line);border-radius:.5rem;padding:.55rem 1rem;cursor:pointer}
.tab[aria-selected="true"]{background:var(--ink);color:var(--bg);border-color:var(--ink)}
.panel[hidden]{display:none}
ol.steps{list-style:none;counter-reset:s;margin:0;padding:0;max-width:44rem}
ol.steps>li{counter-increment:s;position:relative;padding:0 0 1.4rem 3rem;border-left:2px solid var(--line);margin-left:1rem}
ol.steps>li:last-child{border-left-color:transparent;padding-bottom:0}
ol.steps>li::before{content:counter(s);position:absolute;left:-1.05rem;top:-.1rem;width:2rem;height:2rem;border-radius:50%;background:var(--accent);color:var(--accent-ink);font:700 .95rem/2rem "Bricolage Grotesque",sans-serif;text-align:center}
ol.steps h3{font-size:1.15rem;margin-bottom:.25rem}
ol.steps p{margin:0;color:var(--muted)}
pre{background:var(--code-bg);color:var(--code-ink);border-radius:.5rem;padding:1rem 1.1rem;overflow-x:auto;margin:.75rem 0 0;font:.9rem/1.6 ui-monospace,Menlo,Consolas,monospace}
code{font-family:ui-monospace,Menlo,Consolas,monospace;font-size:.92em;background:var(--surface);border:1px solid var(--line);padding:.05em .35em;border-radius:.3rem}
pre code{background:none;border:0;padding:0}
.tablewrap{overflow-x:auto}
table{border-collapse:collapse;width:100%;min-width:34rem;background:var(--surface);border:1px solid var(--line)}
th,td{text-align:left;padding:.75rem 1rem;border-bottom:1px solid var(--line);vertical-align:top;font-size:.98rem}
th{font-family:"Bricolage Grotesque",sans-serif;font-weight:700}
.check{display:grid;gap:.5rem;padding:0;margin:0;list-style:none;max-width:40rem}
.check li{padding-left:1.75rem;position:relative}
.check li::before{content:"";position:absolute;left:.15rem;top:.55rem;width:.6rem;height:.35rem;border-left:2px solid var(--accent);border-bottom:2px solid var(--accent);transform:rotate(-45deg)}
footer{padding:2rem 0 3rem;color:var(--muted);font-size:.95rem}
</style>
</head>
<body>
<header class="hero">
  <div class="wrap">
    <div class="brand">
      CloudBadak
    </div>
    <h1>Selamat Datang</h1>
    <p class="lead">Hosting Anda sudah aktif. Ikuti langkah di bawah untuk menayangkan project Anda sekarang.</p>
  </div>
</header>

<main>

<footer>
  <div class="wrap">Butuh bantuan? Hubungi tim support CloudBadak lewat kontak di email aktivasi Anda.</div>
</footer>

<script>
(function(){
  var tabs=[].slice.call(document.querySelectorAll('.tab'));
  function show(t){
    tabs.forEach(function(x){
      var on=x===t;
      x.setAttribute('aria-selected',on);
      x.tabIndex=on?0:-1;
      document.getElementById(x.getAttribute('aria-controls')).hidden=!on;
    });
  }
  tabs.forEach(function(t,i){
    t.addEventListener('click',function(){show(t)});
    t.addEventListener('keydown',function(e){
      var n=e.key==='ArrowRight'?i+1:e.key==='ArrowLeft'?i-1:null;
      if(n===null)return;
      n=(n+tabs.length)%tabs.length;
      show(tabs[n]);tabs[n].focus();
    });
  });
})();
</script>
</body>
</html>
