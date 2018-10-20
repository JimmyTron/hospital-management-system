
<script>

var images = ["images/pexels1.jpeg", "images/pexels2.jpeg", "images/pexels3.jpeg","images/pexels4.jpeg"];

var i = 1;
var max = images.length;

function changeImage(){ 
  document.getElementById("slider").src = images[i++];
  if(i==max){
    i=0;
  }
}

setInterval(function(){changeImage()}, 3000);

</script>

<p align="center"><img src="images/pexels1.jpeg" class="img-responsive" width="100%" id="slider" align="center"></p>
