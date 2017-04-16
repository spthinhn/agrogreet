<?php require_once'spadministrator/cms.php'; ?>
<cms:template title='Gallery' clonable='1' dynamic_folders='1' gallery='1'>
   <cms:editable 
      name='gg_image' 
      label='Image' 
      desc='Upload your main image here'
      width='500'
      height='500'
      show_preview='1'
      preview_height='200'
      type='image'
   />
   
   <cms:editable 
      name='gg_thumb' 
      label='Image Thumbnail' 
      desc='Thumbnail of the main image above'
      width='115'
      height='115'
      enforce_max='1'
      assoc_field='gg_image' 
      show_preview='1'
      type='thumbnail'
   />  

   <cms:editable 
      name='my_thumb_2' 
      label='Image Thumbnail 2' 
      desc='Second thumbnail of the main image above'
      width='100'
      height='100'
      assoc_field='gg_image' 
      show_preview='1'
      type='thumbnail'
   />  
   
   <cms:editable 
      name='my_desc' 
      label='Description' 
      height='60'
      type='textarea'
   />
               
</cms:template>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
   <title>Sample Gallery</title>

</head>
<body>

<div id="gallery-wrapper">
   <h1>Sample Gallery</h1>

   <div id="breadcrumbs">
      <cms:breadcrumbs separator='&nbsp;&raquo;&nbsp;' include_template='1'/><cms:if k_is_page>&nbsp;&raquo;&nbsp;<cms:show k_page_title /></cms:if>
   </div><!-- breadcrumbs -->

    <cms:if my_page lt '2' >
         <ul class="gallery folders"> 
            <cms:folders childof=k_folder_name hierarchical='1' depth='1'>
            
               <cms:set my_folder_image="" />
               <cms:if k_folder_image>
                  <cms:set my_folder_image=k_folder_image />
               <cms:else />
                  <cms:pages folder=k_folder_name include_subfolders='0' limit='1'>
                      <cms:set my_folder_image=my_thumb_2 scope='parent' />
                  </cms:pages>
               </cms:if>
               <cms:if my_folder_image=''><cms:set my_folder_image="<cms:show k_admin_link />theme/images/empty-folder.gif" /></cms:if>
               
               <li>
                  <a href="<cms:show k_folder_link />">
                     <img alt="<cms:show k_folder_title />" src="<cms:show my_folder_image />"/>
                     <span class="title"><cms:show k_folder_title /></span>
                     <span class="count_images"><cms:show k_folder_totalpagecount /> images</span>
                     <span class="count_folders"><cms:show k_folder_totalchildren /> folders</span>
                  </a>
               </li>
            </cms:folders> 
         </ul>   
      </cms:if>

</div><!-- gallery-wrapper -->
   
</body>
</html>

<?php COUCH::invoke(); ?>