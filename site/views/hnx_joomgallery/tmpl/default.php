<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<?php 

$file = JPATH_ROOT.DS.'components'.DS.'com_joomgallery'.DS.'interface.php';
if(!file_exists($file))
{
  JError::raiseError(500, 'JoomGallery seems not to be installed');
}
else
{
  require_once $file;
  $interface = new JoomInterface();
}
?>
<style type="text/css">
.hnx_jg_wrapper {
   overflow: hidden;
   margin: 0px;
}
.hnx_jg_box {
   float: left;
   position: relative;
   width: 20%;
   padding-bottom: 20%;
}
.hnx_jg_boxInner {
   position: absolute;
   overflow: hidden;
   left: 5px;
   right: 5px;
   top: 5px;
   bottom: 5px;
}
.hnx_jg_boxInner img {
   width: 100%;
}
.hnx_jg_boxInner .hnx_jg_titleBox {
   position: absolute;
   bottom: 0;
   left: 0;
   right: 0;
   margin-bottom: -50px;
   background: #000;
   background: rgba(0, 0, 0, 0.5);
   color: #FFF;
   padding: 10px;
   text-align: center;
   -webkit-transition: all 0.3s ease-out;
   -moz-transition: all 0.3s ease-out;
   -o-transition: all 0.3s ease-out;
   transition: all 0.3s ease-out;
}
.hnx_jg_boxInner:hover .hnx_jg_titleBox, .hnx_jg_boxInner.touchFocus .hnx_jg_titleBox {
   margin-bottom: 0;
}
@media only screen and (max-width : 480px) {
   /* Smartphone view: 1 tile */
   .hnx_jg_box {
      width: 100%;
      padding-bottom: 100%;
   }
}
@media only screen and (max-width : 650px) and (min-width : 481px) {
   /* Tablet view: 2 tiles */
   .hnx_jg_box {
      width: 50%;
      padding-bottom: 50%;
   }
}
@media only screen and (max-width : 1050px) and (min-width : 651px) {
   /* Small desktop / ipad view: 3 tiles */
   .hnx_jg_box {
      width: 33.3%;
      padding-bottom: 33.3%;
   }
}
@media only screen and (max-width : 1290px) and (min-width : 1051px) {
   /* Medium desktop: 4 tiles */
   .hnx_jg_box {
      width: 25%;
      padding-bottom: 25%;
   }
}
  </style>
<?php  

$category_images = $interface->getPicsByCategory(7, null, null, null, 0);

?>
  <h2 class="contentheading"><?php echo $category_images[0]->cattitle; ?></h2>

<div class="hnx_jg_wrapper">
    
    <?php 
    foreach ($category_images as $image)
    {
        ?>
        <!-- Define all of the tiles: -->
        <div class="hnx_jg_box">
          <div class="hnx_jg_boxInner">
            <?php
            echo $interface->displayThumb($image, true, null, null, null, 'orig');
            ?>
            <div class="hnx_jg_titleBox">Butterfly</div>
          </div>
        </div>
        <?php
    }
    ?>
  
</div>