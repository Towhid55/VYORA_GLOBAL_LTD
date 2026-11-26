<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VYORA GLOBAL LTD – Apparel Buying House</title>
<meta name="description" content="VYORA GLOBAL LTD connects global brands with trusted garment factories. Sourcing, quality control and on-time shipment.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@500;700;800&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
<style>
:root{--ink:#14213D;--denim:#2F5D8C;--thread:#F2A900;--chalk:#EEF2F6;--muted:#5B6578;--r:18px}
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'DM Sans',system-ui,sans-serif;color:var(--ink);line-height:1.65;overflow-x:hidden}
h1,h2,h3{font-family:'Bricolage Grotesque',sans-serif;line-height:1.08;letter-spacing:-.02em}
a{color:inherit;text-decoration:none}
:focus-visible{outline:3px solid var(--thread);outline-offset:3px}
.wrap{max-width:1160px;margin:0 auto;padding:0 24px}
section{padding:96px 0}
h2{font-size:clamp(2rem,4.5vw,3.2rem);font-weight:800;max-width:18ch}
.lead{color:var(--muted);max-width:56ch;margin-top:16px;font-size:1.08rem}
.btn{display:inline-block;padding:14px 28px;border-radius:999px;font-weight:700;transition:transform .2s;border:0;cursor:pointer;font:inherit;font-weight:700}
.btn:hover{transform:translateY(-3px)}
.btn-gold{background:var(--thread);color:var(--ink)}
.btn-line{border:2px solid rgba(255,255,255,.5);color:#fff}

/* fabric visuals (swap with real photos: background-image:url('{{ asset("images/x.jpg") }}')) */
.g1{background:repeating-linear-gradient(45deg,#2F5D8C 0 3px,#3b6fa3 3px 6px)}
.g2{background:repeating-linear-gradient(90deg,#f6f6f6 0 14px,#C8402F 14px 22px)}
.g3{background:linear-gradient(90deg,transparent 48%,rgba(255,255,255,.35) 48% 52%,transparent 52%),linear-gradient(0deg,transparent 48%,rgba(255,255,255,.35) 48% 52%,transparent 52%),#2E7D6B;background-size:40px 40px}
.g4{background:radial-gradient(circle,rgba(255,255,255,.22) 3px,transparent 4px) 0 0/16px 16px,#7A4E9A}
.g5{background:repeating-linear-gradient(-45deg,#F2A900 0 4px,#d68f00 4px 9px)}
.g6{background:repeating-linear-gradient(0deg,#14213D 0 10px,#22345c 10px 20px)}

/* nav */
nav{position:fixed;inset:0 0 auto 0;z-index:20;padding:16px 0;transition:background .3s}
nav.solid{background:rgba(20,33,61,.92);backdrop-filter:blur(8px)}
nav .wrap{display:flex;justify-content:space-between;align-items:center}
.logo{font-family:'Bricolage Grotesque';font-weight:800;font-size:1.25rem;color:#fff;display:flex;align-items:center;gap:10px}
.logo i{width:34px;height:34px;border-radius:9px;background:var(--thread);display:grid;place-items:center;color:var(--ink);font-style:normal}
.links{display:flex;gap:28px;color:#dbe4f0;font-weight:500}
.links a:hover{color:var(--thread)}

/* hero + typing + parallax */
.hero{background:var(--ink);color:#fff;padding:180px 0 130px;position:relative;overflow:hidden}
.hero::before{content:"";position:absolute;inset:-20% 0;background:radial-gradient(circle at 80% 25%,rgba(47,93,140,.7),transparent 45%),repeating-linear-gradient(45deg,rgba(255,255,255,.03) 0 2px,transparent 2px 6px);transform:translateY(var(--py,0))}
.hero .wrap{display:grid;grid-template-columns:1.1fr .9fr;gap:50px;align-items:center;position:relative}
.hero h1{font-size:clamp(2.5rem,6vw,4.6rem);font-weight:800}
.type{color:var(--thread);border-right:4px solid var(--thread);padding-right:6px;animation:blink .8s steps(1) infinite}
@keyframes blink{50%{border-color:transparent}}
.hero p{margin:24px 0 34px;max-width:46ch;color:#c5d2e4;font-size:1.15rem}
.hero .btn+.btn{margin-left:12px}
.swatches{position:relative;height:420px}
.sw{position:absolute;width:200px;height:260px;border-radius:14px;box-shadow:0 24px 50px rgba(0,0,0,.4);border:6px solid #fff;will-change:transform}
.sw{transition:rotate .35s,scale .35s,box-shadow .35s;cursor:pointer}
.sw:hover{z-index:10;rotate:0deg;scale:1.1;box-shadow:0 34px 70px rgba(0,0,0,.55)}
.s1{left:0;top:50px;rotate:-9deg}.s2{left:120px;top:0;rotate:4deg}.s3{left:50px;top:170px;rotate:-3deg}.s4{left:200px;top:150px;rotate:10deg}

/* marquee */
.marquee{background:var(--thread);color:var(--ink);overflow:hidden;padding:20px 0;white-space:nowrap}
.marquee div{display:inline-flex;gap:50px;animation:scroll 28s linear infinite;font-family:'Bricolage Grotesque';font-weight:800;font-size:1.5rem}
.marquee:hover div{animation-play-state:paused}
@keyframes scroll{to{transform:translateX(-50%)}}

/* about + counters */
.about{background:var(--chalk)}
.about .grid{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center}
.stats{display:grid;grid-template-columns:1fr 1fr;gap:18px}
.stat{background:#fff;border-radius:var(--r);padding:26px;border-left:6px solid var(--thread)}
.stat b{font-family:'Bricolage Grotesque';font-size:2.6rem;display:block;color:var(--denim)}
.stat small{color:var(--muted)}

/* carousel + tilt */
.car-head{display:flex;justify-content:space-between;align-items:end;gap:20px;flex-wrap:wrap}
.arrows button{width:50px;height:50px;border-radius:50%;border:2px solid var(--ink);background:none;font-size:1.2rem;cursor:pointer;margin-left:8px;transition:.2s}
.arrows button:hover{background:var(--ink);color:#fff}
.track{display:flex;gap:22px;overflow-x:auto;scroll-snap-type:x mandatory;padding:40px 24px 30px;scrollbar-width:none;perspective:1000px}
.track::-webkit-scrollbar{display:none}
.card{flex:0 0 280px;height:350px;border-radius:var(--r);scroll-snap-align:start;position:relative;overflow:hidden;color:#fff;
  box-shadow:0 18px 40px rgba(20,33,61,.25);transition:transform .15s;transform-style:preserve-3d}
.card::after{content:"";position:absolute;inset:0;background:linear-gradient(transparent 45%,rgba(20,33,61,.92))}
.card div{position:absolute;z-index:2;left:22px;bottom:22px;right:22px;transform:translateZ(40px)}
.card h3{font-size:1.4rem}.card p{font-size:.9rem;opacity:.85}

/* horizontal gallery */
.hgal{height:300vh;position:relative;background:var(--ink);padding:0}
.pin{position:sticky;top:0;height:100vh;overflow:hidden;display:flex;flex-direction:column;justify-content:center;color:#fff}
.pin h2{padding:0 24px;max-width:none;margin:0 auto 34px;width:100%;max-width:1160px}
.strip{display:flex;gap:24px;padding:0 24px;will-change:transform}
.shot{flex:0 0 min(70vw,380px);height:52vh;min-height:300px;border-radius:var(--r);position:relative;overflow:hidden}
.shot span{position:absolute;left:18px;bottom:16px;background:rgba(20,33,61,.9);padding:6px 14px;border-radius:8px;font-weight:700}

/* accordion */
.acc{display:flex;gap:12px;height:440px;margin-top:44px}
.panel{flex:1;border-radius:var(--r);position:relative;overflow:hidden;cursor:pointer;transition:flex .6s cubic-bezier(.2,.8,.2,1);color:#fff;border:0;text-align:left;font:inherit}
.panel.on{flex:4}
.panel::after{content:"";position:absolute;inset:0;background:linear-gradient(transparent 30%,rgba(20,33,61,.9))}
.panel h3{position:absolute;z-index:2;left:22px;bottom:22px;font-size:1.3rem;white-space:nowrap}
.panel p{position:absolute;z-index:2;left:22px;bottom:60px;right:22px;font-size:.95rem;opacity:0;transform:translateY(12px);transition:.4s .2s}
.panel.on p{opacity:1;transform:none}
.panel:not(.on) h3{writing-mode:vertical-rl;rotate:180deg;left:auto;right:22px;bottom:22px}

/* parallax band */
.band{height:380px;display:grid;place-items:center;text-align:center;color:#fff;position:relative;overflow:hidden;padding:0}
.band::before{content:"";position:absolute;inset:-30% 0;background:repeating-linear-gradient(45deg,#2F5D8C 0 3px,#244a72 3px 7px);transform:translateY(var(--py,0))}
.band h2{position:relative;max-width:22ch;margin:0 auto;padding:0 24px}

/* video section */
.vid{position:relative;min-height:80vh;display:grid;place-items:center;color:#fff;overflow:hidden;padding:0;background:repeating-linear-gradient(45deg,#2F5D8C 0 3px,#244a72 3px 7px)}
.vid video{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
.vid::after{content:"";position:absolute;inset:0;background:linear-gradient(120deg,rgba(20,33,61,.85),rgba(20,33,61,.35))}
.vid .txt{position:relative;z-index:2;max-width:720px;padding:80px 24px;margin-right:auto;margin-left:max(24px,calc((100vw - 1160px)/2 + 24px))}
.vid h2{max-width:14ch;text-shadow:0 4px 24px rgba(0,0,0,.4)}
.vid p{margin:20px 0 30px;font-size:1.15rem;color:#e3ebf6;max-width:46ch}
.vid .mute{position:absolute;z-index:3;right:24px;bottom:24px;width:48px;height:48px;border-radius:50%;border:2px solid rgba(255,255,255,.7);background:rgba(20,33,61,.6);color:#fff;font-size:1.2rem;cursor:pointer}

/* contact */
.contact{background:linear-gradient(135deg,var(--denim),var(--ink));color:#fff}
.contact .box{display:grid;grid-template-columns:1.2fr .8fr;gap:50px;align-items:center}
.contact .lead{color:#cdd9ea}
.info{background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.2);border-radius:var(--r);padding:30px}
.info p{margin-bottom:14px}.info b{color:var(--thread);display:block;font-size:.85rem}
footer{background:#0c1528;color:#8e9bb3;padding:26px 0;font-size:.9rem}
footer .wrap{display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px}

/* scroll reveal */
.reveal{opacity:0;transform:translateY(40px);transition:opacity .8s,transform .8s}
.reveal.in{opacity:1;transform:none}

@media(max-width:900px){
  .links{display:none}
  .hero .wrap,.about .grid,.contact .box{grid-template-columns:1fr}
  .swatches{height:360px;transform:scale(.8);transform-origin:left top}
  .acc{flex-direction:column;height:520px}
  .panel:not(.on) h3{writing-mode:horizontal-tb;rotate:0deg;left:22px;right:auto}
  section{padding:70px 0}
}
@media(prefers-reduced-motion:reduce){.reveal{opacity:1;transform:none}*{animation:none!important;transition:none!important}}
</style>
</head>
<body>

<nav id="nav"><div class="wrap">
  <a href="#" class="logo"><i>V</i> VYORA GLOBAL LTD</a>
  <div class="links"><a href="#about">About</a><a href="#products">Products</a><a href="#gallery">Gallery</a><a href="#services">Services</a><a href="#contact">Contact</a></div>
  <a href="#contact" class="btn btn-gold">Get a quote</a>
</div></nav>

<!-- Hero: typing text + parallax -->
<header class="hero" data-parallax="0.25">
  <div class="wrap">
    <div>
      <h1>We source <span class="type" id="type"></span><br>for global brands.</h1>
      <p>VYORA GLOBAL LTD links fashion brands with audited garment factories in Bangladesh and manages every order until it ships.</p>
      <a href="#contact" class="btn btn-gold">Request a quote</a>
      <a href="#products" class="btn btn-line">See what we source</a>
    </div>
    <div class="swatches" aria-hidden="true">
      <div class="sw s1 g1" data-img="hero-1.jpg" data-speed="-0.06"></div>
      <div class="sw s2 g2" data-img="hero-2.jpg" data-speed="0.08"></div>
      <div class="sw s3 g3" data-img="hero-3.jpg" data-speed="-0.12"></div>
      <div class="sw s4 g4" data-img="hero-4.jpg" data-speed="0.14"></div>
    </div>
  </div>
</header>

<!-- Infinite marquee -->
<div class="marquee" aria-label="Product categories"><div id="mq">
  <span>Denim</span><span>✦</span><span>Woven</span><span>✦</span><span>Knitwear</span><span>✦</span><span>Activewear</span><span>✦</span><span>Outerwear</span><span>✦</span><span>Kidswear</span><span>✦</span>
</div></div>

<!-- About + animated counters -->
<section class="about" id="about"><div class="wrap grid">
  <div class="reveal">
    <h2>One partner between your brand and the factory floor.</h2>
    <p class="lead">VYORA GLOBAL LTD finds the right factory for each style, negotiates price and lead time, checks quality at every stage, and keeps you informed until delivery.</p>
  </div>
  <div class="stats reveal">
    <div class="stat"><b data-count="15" data-suffix="+">0</b><small>Years in apparel sourcing</small></div>
    <div class="stat"><b data-count="120">0</b><small>Audited partner factories</small></div>
    <div class="stat"><b data-count="40" data-suffix="M">0</b><small>Pieces shipped every year</small></div>
    <div class="stat"><b data-count="98" data-suffix="%">0</b><small>Orders shipped on time</small></div>
  </div>
</div></section>

<!-- Card carousel + 3D tilt -->
<section id="products"><div class="wrap car-head reveal">
  <div><h2>Everything your collection needs.</h2><p class="lead">Drag, swipe or use the arrows. Hover a card to tilt it.</p></div>
  <div class="arrows"><button id="prev" aria-label="Previous">←</button><button id="next" aria-label="Next">→</button></div>
</div>
<div class="wrap" style="padding:0"><div class="track" id="track">
  <div class="card g1" data-img="denim.jpg"><div><h3>Denim</h3><p>Jeans, jackets, shorts and washes</p></div></div>
  <div class="card g2" data-img="woven.jpg"><div><h3>Woven</h3><p>Shirts, trousers and outerwear</p></div></div>
  <div class="card g3" data-img="knitwear.jpg"><div><h3>Knitwear</h3><p>T-shirts, polos, hoodies, sweaters</p></div></div>
  <div class="card g4" data-img="activewear.jpg"><div><h3>Activewear</h3><p>Leggings, tracksuits and sportswear</p></div></div>
  <div class="card g5" data-img="kidswear.jpg"><div><h3>Kidswear</h3><p>Soft, safe, certified fabrics</p></div></div>
  <div class="card g6" data-img="outerwear.jpg"><div><h3>Outerwear</h3><p>Padded jackets, coats and vests</p></div></div>
</div></div></section>

<!-- Video section with text overlay -->
<section class="vid" id="video">
  <video id="vv" muted loop playsinline preload="metadata" poster="{{ asset('videos/vyora-poster.jpg') }}">
    <source src="{{ asset('videos/vyora.mp4') }}" type="video/mp4">
  </video>
  <div class="txt reveal">
    <h2>See how your order comes to life.</h2>
    <p>From the first fabric cut to the final carton, a short look at how VYORA GLOBAL LTD manages production.</p>
    <a href="#contact" class="btn btn-gold">Start your order</a>
  </div>
  <button class="mute" id="mute" aria-label="Turn sound on">🔇</button>
</section>

<!-- Parallax band -->
<section class="band" data-parallax="0.3"><h2>Quality checked at every stitch.</h2></section>

<!-- Horizontal scroll gallery -->
<section class="hgal" id="gallery"><div class="pin">
  <h2>Inside our partner factories.</h2>
  <div class="strip" id="strip">
    <div class="shot g1" data-img="cutting.jpg"><span>Cutting</span></div>
    <div class="shot g2" data-img="sewing.jpg"><span>Sewing</span></div>
    <div class="shot g3" data-img="washing.jpg"><span>Washing</span></div>
    <div class="shot g4" data-img="finishing.jpg"><span>Finishing</span></div>
    <div class="shot g5" data-img="quality.jpg"><span>Quality control</span></div>
    <div class="shot g6" data-img="packing.jpg"><span>Packing</span></div>
  </div>
</div></section>

<!-- Expandable image accordion -->
<section id="services"><div class="wrap">
  <h2 class="reveal">What we handle for you.</h2>
  <div class="acc reveal" id="acc">
    <button class="panel g1 on" data-img="factory-matching.jpg"><h3>Factory matching</h3><p>We shortlist factories by product, capacity and compliance record.</p></button>
    <button class="panel g2" data-img="development.jpg"><h3>Development</h3><p>Tech packs, samples and fittings, reviewed before approval.</p></button>
    <button class="panel g3" data-img="costing.jpg"><h3>Costing</h3><p>Clear cost sheets for fabric, trims and labour.</p></button>
    <button class="panel g4" data-img="quality-control.jpg"><h3>Quality control</h3><p>Inline and final inspections with photo reports.</p></button>
    <button class="panel g6" data-img="logistics.jpg"><h3>Logistics</h3><p>Export documents, booking and shipment tracking.</p></button>
  </div>
</div></section>

<!-- Contact -->
<section class="contact" id="contact"><div class="wrap box">
  <div class="reveal">
    <h2>Tell us about your next collection.</h2>
    <p class="lead">Send your tech pack or a rough brief. We reply with factory options and indicative prices within two working days.</p>
    <p style="margin-top:28px"><a class="btn btn-gold" href="mailto:info@vyoraglobal.example">Email your brief</a></p>
  </div>
  <div class="info reveal">
    <p><b>Office</b>House 12, Road 5, Gulshan, Dhaka</p>
    <p><b>Email</b>info@vyoraglobal.example</p>
    <p><b>Phone</b>+880 1700 000000</p>
  </div>
</div></section>

<footer><div class="wrap"><span>© {{ date('Y') }} VYORA GLOBAL LTD. All rights reserved.</span><span>Dhaka, Bangladesh</span></div></footer>

<script>
(()=>{
const $=s=>document.querySelector(s),$$=s=>[...document.querySelectorAll(s)];
const calm=matchMedia('(prefers-reduced-motion:reduce)').matches;

// Photos: put files in public/images, named as in each data-img. Missing files keep the fabric pattern.
const IMG="{{ asset('images') }}/";
$$('[data-img]').forEach(e=>{
  const im=new Image();
  im.onload=()=>{e.style.backgroundImage=`url("${IMG+e.dataset.img}")`;e.style.backgroundSize='cover';e.style.backgroundPosition='center'};
  im.src=IMG+e.dataset.img;
});

// Infinite marquee: duplicate content for a seamless loop
const mq=$('#mq');mq.innerHTML+=mq.innerHTML;

// Typing text
const words=['denim','knitwear','woven shirts','activewear'],el=$('#type');
let w=0,c=0,del=false;
(function tick(){
  const t=words[w];c+=del?-1:1;el.textContent=t.slice(0,c);
  let d=del?45:95;
  if(!del&&c===t.length){del=true;d=1400}
  else if(del&&c===0){del=false;w=(w+1)%words.length;d=300}
  setTimeout(tick,calm?3000:d);
})();

// Scroll reveal + animated counters
const io=new IntersectionObserver(es=>es.forEach(e=>{
  if(!e.isIntersecting)return;
  e.target.classList.add('in');io.unobserve(e.target);
  e.target.querySelectorAll('[data-count]').forEach(n=>{
    const end=+n.dataset.count,suf=n.dataset.suffix||'',t0=performance.now();
    (function f(t){const p=Math.min((t-t0)/1800,1);n.textContent=Math.round(end*(1-Math.pow(1-p,3)))+suf;if(p<1)requestAnimationFrame(f)})(t0);
  });
}),{threshold:.2});
$$('.reveal').forEach(e=>io.observe(e));

// Carousel
const tr=$('#track'),step=()=>tr.querySelector('.card').offsetWidth+22;
$('#next').onclick=()=>tr.scrollBy({left:step(),behavior:'smooth'});
$('#prev').onclick=()=>tr.scrollBy({left:-step(),behavior:'smooth'});

// 3D tilt
$$('.card').forEach(c=>{
  c.addEventListener('mousemove',e=>{
    const r=c.getBoundingClientRect(),x=(e.clientX-r.left)/r.width-.5,y=(e.clientY-r.top)/r.height-.5;
    c.style.transform=`rotateY(${x*18}deg) rotateX(${-y*18}deg) scale(1.03)`;
  });
  c.addEventListener('mouseleave',()=>c.style.transform='');
});

// Accordion
$$('.panel').forEach(p=>{
  const open=()=>{$$('.panel').forEach(x=>x.classList.remove('on'));p.classList.add('on')};
  p.addEventListener('click',open);p.addEventListener('mouseenter',()=>matchMedia('(hover:hover)').matches&&open());
});

// Video: play only when visible, sound toggle
const vv=$('#vv');
if(vv){
  new IntersectionObserver(es=>es.forEach(e=>{
    if(e.isIntersecting&&!calm)vv.play().catch(()=>{});else vv.pause();
  }),{threshold:.35}).observe(vv);
  $('#mute').onclick=function(){vv.muted=!vv.muted;this.textContent=vv.muted?'🔇':'🔊';this.setAttribute('aria-label',vv.muted?'Turn sound on':'Turn sound off')};
}

// Scroll-driven: nav, parallax, horizontal gallery
const nav=$('#nav'),hg=$('#gallery'),strip=$('#strip'),px=$$('[data-parallax]'),sw=$$('[data-speed]');
function sizeGallery(){hg.style.height=(strip.scrollWidth-innerWidth+innerHeight)+'px'}
sizeGallery();addEventListener('resize',sizeGallery);
function onScroll(){
  const y=scrollY;nav.classList.toggle('solid',y>60);
  if(!calm){
    px.forEach(s=>{const r=s.getBoundingClientRect();s.style.setProperty('--py',(-r.top*s.dataset.parallax)+'px')});
    sw.forEach(s=>s.style.transform=`translateY(${y*s.dataset.speed}px)`);
  }
  const r=hg.getBoundingClientRect(),max=hg.offsetHeight-innerHeight;
  const p=Math.min(Math.max(-r.top/max,0),1);
  strip.style.transform=`translateX(${-p*(strip.scrollWidth-innerWidth)}px)`;
}
addEventListener('scroll',onScroll,{passive:true});onScroll();
})();
</script>
</body>
</html>
