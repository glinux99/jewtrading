<h1>LightGallery</h1>
<hr>
<h2>DEMO</h2>
<div id="lightgallery">
    <a href="http://127.0.0.1:8000/storage/images/galeries/5iSbO.jpg">
        <img src="http://127.0.0.1:8000/storage/images/galeries/5iSbO.jpg" width="500" height="300" /></a>
    <a href="https://i.imgur.com/lji0z7q.jpg"><img src="https://i.imgur.com/lji0z7q.jpg" width="500" height="300" /></a>
</div>
<p><a href="https://sachinchoolur.github.io/lightGallery/docs/">LightGallery</a></p>
<p>
<h2>How to use?</h2>
</p>
<pre>
<b>CSS</b>
https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css

<b>JS</b>

必須最先調用jQuery
https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js

https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/dist/js/lightgallery.min.js

滑鼠滾輪切換圖片

https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js

插件(縮略圖+全屏)

https://cdnjs.cloudflare.com/ajax/libs/lg-thumbnail/1.1.0/lg-thumbnail.min.js

https://cdnjs.cloudflare.com/ajax/libs/lg-fullscreen/1.1.0/lg-fullscreen.min.js
</pre>
<b>JS</b><br>
<textarea style="width:400px;height:50px">
$(document).ready(function() {
  $("#lightgallery").lightGallery();
});
</textarea><br>
<b>HTML</b><br>
<textarea style="width:500px;height:100px">
  <div id="lightgallery">

　<a href="https://i.imgur.com/xQ94mYj.jpg">
　　<img src="https://i.imgur.com/xQ94mYj.jpg" width="500" height="300" />
　</a>

　<a href="https://i.imgur.com/lji0z7q.jpg">
　　<img src="https://i.imgur.com/lji0z7q.jpg" width="500" height="300"/>
　</a>

</div>
</textarea>
<script>
    $(document).ready(function() {
        $("#lightgallery").lightGallery();
    });
</script>
