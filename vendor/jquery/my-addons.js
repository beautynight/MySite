var GO = !0;

function onlyText(e) {$(this).val($(this).val().replace(/[^a-zа-я0-9 \-]/gi,''));}
function onlyEmail(e) {$(this).val($(this).val().replace(/[^a-z0-9\-_.@]/gi,'').replace(/(^[@\._]*)|@(?=.*@)/gi,''));}
function onlyNumber(e) {
	var v = $(this).val().replace(/[^\d.]/gi,'');
	$(this).val(v);
	if ((v.indexOf('.') === 0 && v.length > 1 && parseFloat(v) > 0) || v.indexOf('.') !== v.lastIndexOf('.')) toFloat(e);
}
function toFloat(e) {var v = parseFloat(e.target.value); e.target.value = isNaN(v) ? '' : v;}
function onlyUrl(e) {$(this).val($(this).val().replace(/[^a-zа-я0-9\-\.\/:\?\=\%]/gi,''));}

var initTypes = function() {
	$(this).find('.onlyText').on('input', onlyText);
	$(this).find('.onlyEmail').on('input', onlyEmail);
	$(this).find('.onlyNumber').on('input', onlyNumber).on('change', toFloat);
	$(this).find('.onlyUrl').on('input', onlyUrl);
}


var controls = function() {
	$(this).find('.copy').on('click', function() {
		var g = $(this).parent().prev();
		var p = g.find('>div:last');
		var c = p.clone().insertAfter(p);
		for (var i=0, l=p.find('select').length; i<l; i++) {
		   c.find('select:eq('+i+')').val(p.find('select:eq('+i+')').val());
		}
		reCountN(g);
		c.find('.remove').on('click', remove);
	});
		
	$(this).find('.remove').on('click', remove);
	
	$(this).find('.showPrev').on('click', function() {
	  $(this).parent().hide('slow').prev().show('slow');
	});
	
	
	form = $("#addproject_form");
	$('[name][name!="lang[]"]:visible', form).on('focusin', function(e) {
		$(this).parent().removeClass('state-error');
	});
	$('div.langs :checkbox').on('click', function(e) {
		$('div.langs:has(:checked) :checkbox').parent().removeClass('state-error');
	});
}

function remove() {
	var p = $(this).closest('div[role=row]');
	var g = p.closest('div[role=group]');
	if (g.find('>div').length !== 1) p.remove();
	reCountN(g);
}

function reCountN(el) {
	$(el).find('n').each(function(i) {$(this).text(i+1)});
}


/* ------------------------------------------------------------ IMAGE SHOW ------------------------------------------------------------ */
var imgClickInit = function() {
    $('.mix img').magnificPopup({
      type: 'image',
      callbacks: {
        beforeOpen: function(e) {
          $('body').addClass('mfp-bg-open');
          this.st.mainClass = 'mfp-zoomIn';
          this.contentContainer.addClass('mfp-with-anim');
        },
        afterClose: function(e) {
          setTimeout(function() {
            $('body').removeClass('mfp-bg-open');
            $(window).trigger('resize');
          }, 1000)
        },
        elementParse: function(item) {
          item.src = item.el.attr('src');
        },
      },
      overflowY: 'scroll',
      removalDelay: 200,
      prependTo: $('#content_wrapper')
    });
}

//function s(v) {return v ? 'success' : 'error'}

var addproject_form = function() {
	form.submit(function(){		
		var a = $('[name][name!="ref_percent[]"][name!="lang[]"]:visible', form).filter(function(i) {return $(this).val() === "";}).parent()
				.add('div.langs:not(:has(:checked)) label', form);
		a.addClass('state-error');
		if (a.length) {
			var v = a.eq(0).offset().top;
			$('html').animate({ scrollTop: v - 75}, 250+Math.abs($('html').scrollTop()-v)*0.5, 'easeOutQuad');
		}
		
		if (!a.length && GO) {
			$.ajax({
			   type: 'POST',
			   url: '_!addproject.php',
			   //dataType: 'json',
			   data: form.serialize(),
			   beforeSend: function(data) {
					GO = !1;
			   },
			   success: function(data){
					console.log(data);
				 },
			   error: function (xhr, ajaxOptions, thrownError) {
					console.warn(2, xhr.status);
					console.warn(3, thrownError);
				 },
			   complete: function(data) {
					GO = !0;
				 }
						  
			});
		}
		return false;
	});
}





/*
var data = {};
$('#addproject_form input[type=text][name],input[type=checkbox]:checked').each(function () {
  var name = $(this).attr('name');
  console.log(name);
  data[name] = $(this).val();
});
console.log(data);
*/