var interval = 5; // delay between updating image (in seconds)
interval *= 1000;


window.onload=reloadImage();

function reloadImage() {

  tmp = new Date();
  tmp = "?"+tmp.getTime();

  
  document.images.cam1= new Image(200,150); 
  document.images.cam1.src = image_cam1+tmp;
  
  
  document.images.cam2= new Image(200,150); 
  document.images.cam2.src = image_cam2+tmp;
  
  document.images.cam3= new Image(200,150); 
  document.images.cam3.src = image_cam3+tmp;
  
  document.images.cam4= new Image(200,150); 
  document.images.cam4.src = image_cam4+tmp;
  
  document.images.cam5= new Image(200,150); 
  document.images.cam5.src = image_cam5+tmp;
  
  document.images.cam6= new Image(200,150); 
  document.images.cam6.src = image_cam6+tmp;

  
  setTimeout("reloadImage()", interval);
}
