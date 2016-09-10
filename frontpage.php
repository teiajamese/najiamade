
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
    <img id="share" src="<?php echo get_template_directory_uri()?>/img/ShareButton.png" onclick="saveViaAJAX();" data-share="">
    <a id="download" download="naijamade.jpg"><img src="<?php echo get_template_directory_uri()?>/img/DownloadButton.png" ></a>
    
        <label for="imageLoader" id="imageLabel">
            <img src="<?php echo get_template_directory_uri()?>/img/chosefile.png">
        </label>
   
</div>
 <form method="post" accept-charset="utf-8" name="form1">
    <input name="hidden_data" id='hidden_data' type="hidden"/>
</form>
<!--<button id="clockwise" >Rotate right</button>
<button id="counterclockwise">Rotate left</button>-->
<div id="social" class="overlay">
    
    <div class="event-menu-close close">
      <div class="bar1"></div>
      <div class="bar2"></div>
    </div>
    <div class="overlay-content">
        <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
            ADDTOANY_SHARE_SAVE_KIT( array( 
                'linkurl'  => 'https://example.com/page.html',
            ) );
        } ?>
    </div>
</div>
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
 //ctx.translate(canvas.width/2,canvas.height/2);
 //ctx.rotate(90*Math.PI/180);
            ctx.drawImage(img,0,0,canvas.width,canvas.height);
            ctx.drawImage(filterphoto,0,0,canvas.width,canvas.height );
        }
        img.src = event.target.result;
        document.getElementById("clockwise").onclick = function() {
        // Do something else
        angleInDegrees+=90;

        drawRotated(angleInDegrees, img);
        }
    }
    reader.readAsDataURL(e.target.files[0]); 
    var canvasData  = canvas.toDataURL('image/jpeg');

   

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





//****************************************************************

// Example function save save canvas content into image file.

// www.permadi.com

//****************************************************************

function saveViaAJAX()

{

    //var testCanvas = document.getElementById("testCanvas");

    var canvasData = canvas.toDataURL("image/png");

    var postData = "canvasData="+canvasData;
    

   // var debugConsole= document.getElementById("debugConsole");

   // debugConsole.value=canvasData;



    //alert("canvasData ="+canvasData );

    var ajax = new XMLHttpRequest();

    ajax.open("POST",'../wp-content/themes/html5blank-stable/save.php',true);
    document.getElementById('hidden_data').value = canvasData;
    var fd = new FormData(document.forms["form1"]);
        //ajax.setRequestHeader('Content-Type', 'application/upload');
    //console.log(canvasData);
    //console.log(fd);
    
   ajax.onreadystatechange=function()

    {

        if (ajax.readyState == 4)

        {
            canvasData = this.responseText;
            //alert(ajax.responseText);

            // Write out the filename.

            //window.location.href="/"+ajax.responseText;
            var newurl = window.location.href+'wp-content/themes/html5blank-stable/'+ajax.responseText;
            document.getElementById('share').setAttribute('data-share',newurl);
            document.getElementsByClassName('addtoany_list')[0].setAttribute('data-a2a-url',newurl);
        }

    }
ajax.send(fd);
//console.log(ajax.responseText);
    

}




/*

var counterclockwise = document.getElementById("#counterclockwise").click(function(){ 
    angleInDegrees-=90;
    drawRotated(angleInDegrees);
});
*/
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