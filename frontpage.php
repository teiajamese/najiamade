
<?php
/*
* Template Name: FrontPage
*
*
*/

get_header(); 

?>


<div>
<div class="cropit-container">
    <div class="black-bckgd">
	<canvas id="preview" data-filter="<?php echo get_field('filter')?>" style="background-image:url(<?php echo get_field('filter')?>)">
	    
	    Preview Of Your Photo
	    
	</canvas>
    </div>
  </div>
	
<input type='file' id="imageLoader" name="imageLoader" />

<div class="buttons">
<img src="<?php echo get_template_directory_uri()?>/img/ShareButton.png">
<a id="download" download="naijamade.jpg"><img src="<?php echo get_template_directory_uri()?>/img/DownloadButton.png" ></a>
    
        <label for="imageLoader" id="imageLabel">
            <img src="<?php echo get_template_directory_uri()?>/img/chosefile.png">
        </label>
   
</div>
<button id="clockwise" >Rotate right</button>
<button id="counterclockwise">Rotate left</button>
<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
    ADDTOANY_SHARE_SAVE_KIT( array( 
        'linkname' => 'Example Page',
        'linkurl'  => 'https://example.com/page.html',
    ) );
} ?>
<script>
var imageLoader = document.getElementById('imageLoader');
    imageLoader.addEventListener('change', handleImage, false);
var canvas = document.getElementById('preview');
var ctx = canvas.getContext('2d');
var downloadFile = document.getElementById('download');
    downloadFile.addEventListener('click', download, false);

function handleImage(e){
    var reader = new FileReader();
    var filter = canvas.getAttribute("data-filter");
    var filterphoto = new Image();
    console.log(filter);    
    filterphoto.src = filter; 
    reader.onload = function(event){
        var img = new Image();
        img.onload = function(){
            canvas.width = img.width;
            canvas.height = img.height;
 ctx.translate(canvas.width/2,canvas.height/2);
 ctx.rotate(90*Math.PI/180);
            ctx.drawImage(img,-img.width/2,-img.width/2);
            //ctx.drawImage(filterphoto,0,0,canvas.width,canvas.height );
        }
        img.src = event.target.result;
 document.getElementById("clockwise").onclick = function() {
        // Do something else
         angleInDegrees+=90;

    drawRotated(angleInDegrees, img);
    }
    }
    reader.readAsDataURL(e.target.files[0]);    

var share = document.getElementsByClassName('ata_kit');
//setAttribute("data-a2a-url",filter); 
}
/*function download(e) {
    e.preventDefault();

    var dataURL = canvas.toDataURL("image/jpeg");
    return dataURL;
    //document.getElementById('canvasImg').src = dataURL;
     console.log("clicked");
     this.setAttribute('download', dataURL);
     this.setAttribute('href', dataURL);
}*/
function download() {
    var dt = canvas.toDataURL('image/jpeg');
    this.href = dt;

};

function share(){

}


var angleInDegrees=0;




var counterclockwise = document.getElementById("#counterclockwise").click(function(){ 
    angleInDegrees-=90;
    drawRotated(angleInDegrees);
});

function drawRotated(degrees, img){
    
    ctx.clearRect(0,0,canvas.width,canvas.height);
    ctx.save();

    ctx.translate(canvas.width/2,canvas.height/2);
    ctx.rotate(degrees*Math.PI/180);
    ctx.drawImage(img,-img.width/2,-img.width/2,1600,1600);
    ctx.restore();
}



</script>
<?php get_footer(); ?>