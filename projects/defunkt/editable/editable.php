<?php  if ( isset($_COOKIE['testcookie']) ) { ?>

<script type="text/javascript" src="editable/wysiwyg/lib/jquery1.5.js"></script>

<script src="editable/wysiwyg/jquery.wysiwyg.js" type="text/javascript"></script>
<script src="editable/wysiwyg/jquery.jeditable.js" type="text/javascript"></script>
<script src="editable/wysiwyg/jquery.jeditable.wysiwyg.js" type="text/javascript"></script>

<script type="text/javascript" src="editable/wysiwyg/controls/wysiwyg.image.js"></script>
<script type="text/javascript" src="editable/wysiwyg/controls/wysiwyg.link.js"></script>
<script type="text/javascript" src="editable/wysiwyg/controls/wysiwyg.table.js"></script>

<link rel="stylesheet" href="editable/wysiwyg/jquery.wysiwyg.css" type="text/css" media="screen" charset="utf-8">

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('.editable').editable('./editable/save.php', { 
	    type      : 'wysiwyg',
	    onblur    : 'ignore',
	    submit    : 'OK',
	    cancel    : 'Cancel',
	    wysiwyg   : {
		rmUnusedControls: true,
		rmUnwantedBr: true,
		controls: {
			bold          : { visible : true },
			italic        : { visible : true },
			underline     : { visible : true },
			strikeThrough : { visible : true },
			
			justifyLeft   : { visible : true },
			justifyCenter : { visible : true },
			justifyRight  : { visible : true },
			justifyFull   : { visible : true },


			indent  : { visible : true },
			outdent : { visible : true },

			subscript   : { visible : false },
			superscript : { visible : false },
			
			undo : { visible : false },
			redo : { visible : false },
			
			insertOrderedList    : { visible : true },
			insertUnorderedList  : { visible : true },
			insertHorizontalRule : { visible : true },

			h1: {
				visible: true,
				className: 'h1',
				command: ($.browser.msie || $.browser.safari) ? 'formatBlock' : 'heading',
				arguments: ($.browser.msie || $.browser.safari) ? '<h1>' : 'h1',
				tags: ['h1'],
				tooltip: 'Header 1'
			},

			h2: {
				visible: true,
				className: 'h2',
				command: ($.browser.msie || $.browser.safari) ? 'formatBlock' : 'heading',
				arguments: ($.browser.msie || $.browser.safari) ? '<h2>' : 'h2',
				tags: ['h2'],
				tooltip: 'Header 2'
			},

			cut   : { visible : false },
			copy  : { visible : false },
			paste : { visible : false },

			increaseFontSize : { visible : true },
			decreaseFontSize : { visible : true },
	
			separator09 : { "separator": true },

		        html: {	visible: true,
				exec : function() {				
	                    		if ( this.viewHTML ) {
	                    			this.setContent( $(this.original).val() );
	                    			$(this.original).hide();
						$(this.editor).show();	                    			
						//$(this.original).css('opacity', '0');
	                    		} else {
	                    			this.saveContent();
						$(this.original).show();
						$(this.editor).hide();
	                    			$(this.original).css('opacity', '100');
						alert("WARNING: changes to raw HTML are not saved unless you switch back to WYSIWYG mode.");
	                    		}
					this.viewHTML = !( this.viewHTML );
				}
			}

		  },
		}
	});


});
</script>

</head>

<?php
}
?>
