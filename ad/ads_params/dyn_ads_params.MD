Original:
https://codepen.io/cycymomo/pen/jOVMGqZ?editors=1010


PK:
https://codepen.io/pkatdailymotion/pen/VwmKyMR


Slack:
https://dailymotion.slack.com/archives/C0JHM40QG/p1612945694056300
note: https://dailymotion.slack.com/archives/C0JHM40QG/p1612945931057100


>side note, I'm not sure their logic is going to work as expected: if they wait for a videochange to get the tags of the loaded video and inject the value as ads_params, it's too late.
>When videochange is triggered, the current ads_params have already been injected in the AdDirector. So with their current code, for each video loaded, they will get the tags from the previous video


#HTML
```
<h1>Dailymotion CPE setAdsConfig</h1>

<div class="dailymotion-cpe" video-id="x7z26ws" width="640" height="360"></div>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>

<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

<div class="dailymotion-cpe" video-id="x7z27hw" width="640" height="360"></div>

<!-- Embed the CPE Script in the bottom of the page with your CPE ID, instead of "5bcee562452b01000daabb9f" (preprod) / "5c015cf17f26f301c0f12a31" (prod) -->
<script>
(function(w,d,s,u,n,i,f,g,e,c){w.WDMObject=n;w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments);};w[n].l=1*new Date();w[n].i=i;w[n].f=f;w[n].g=g;e=d.createElement(s);e.async=1;e.src=u;c=d.getElementsByTagName(s)[0];c.parentNode.insertBefore(e,c);})(window,document,"script","//api.dmcdn.net/pxl/cpe/client.min.js","cpe","5c015cf17f26f301c0f12a31");
</script>
```

#JS
```
window.addEventListener('cpeready', ({ detail: { players } }) => {
  players.forEach(player => {
    player.addEventListener('videochange', (e) => {
      player.setAdsConfig({
        ads_params: e.target.video.videoId
      })
    })
  })
})
```
