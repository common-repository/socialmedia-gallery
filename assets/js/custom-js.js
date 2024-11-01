jQuery(document).ready(function($) {		
	$('.gallery a').simpleLightbox({
		navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right aria-hidden="true">'] 
	});

	$(".smGallery_fbgalleryBox").imgLiquid();

    $(".smGallery_fbVideoBox").fitVids({
    	customSelector: 'iframe[src*="facebook"]'
    });


});