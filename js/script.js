//initialize Form Builder
$(function(){	
	var options = {
		controlPosition: 'left',
		controlOrder: [
			'header',
			'text',
			'textarea',
			'button',
			'textarea',
			'checkbox-group',
			'radio-group',
			'select',
			'file',
			'autocomplete',
			'hidden',
			'number',
			'paragraph',
		]
	}
	$('.build-wrap').formBuilder(options);
});