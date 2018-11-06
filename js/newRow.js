$(".btn-primary").click(function(){
	let data = $('table').attr('data-id');
	let lastId = $('tbody tr:last-child>td:first-child').html();
	lastId = parseInt(lastId);
	lastId++;
	if(data === 'film'){
		$('tbody').append('<tr class="add"><td scope="row"><input type="text" data-type="s" class="form-control" disabled></td><td><input class="form-control-file" data-type="s" type="file" accept="image/jpg,image/png"></td><td><input type="text" data-type="s" class="form-control" disabled></td><td><input type="text" data-type="s" class="form-control" disabled></td><td><div class="action"><i class="fa fa-pencil" aria-hidden="true"></i><i class="fa fa-trash" aria-hidden="true"></i></div><div class="pencil"><i class="fa fa-check" data-table="" aria-hidden="true"></i><i class="fa fa-times" aria-hidden="true"></i></div></td></tr>');
	} else {
		$('tbody').append('<tr class="add"><td scope="row">'+lastId+'</td><td scope="row"><input name="cinema_name" type="text" data-type="s" class="form-control"></td><td scope="row"><input name="film_id" type="text" data-type="s" class="form-control"></td><td scope="row"><input type="text" name="begin_show" data-type="s" class="form-control"></td><td scope="row"><input name="end_show" type="text" data-type="s" class="form-control"></td><td><div class="action"><i class="fa fa-pencil" aria-hidden="true"></i><i class="fa fa-trash" aria-hidden="true"></i></div><div class="pencil"><i class="fa fa-check" data-table="" aria-hidden="true"></i><i class="fa fa-times" aria-hidden="true"></i></div></td></tr>');
	}
	$(".add .action").hide();
	$(".hide").show();
});
$(".btn-secondary").click(function(){
	$('.add').remove();
	$(".hide").hide();
});

$(document).on('click', '.btn-success', function(e) {
	e.preventDefault();
	let td = $('tbody tr:last-child');
	let inputs = td.find('input');
	let fields = [];
	let values = [];
	let types = "";
	let action = 'insert';
	let table = 'repertoire';
	inputs.each(function() {
		fields.push($(this).attr('name'));
		values.push($(this).val());
		types += $(this).attr('data-type');
	})
	$.ajax({
		url: 'php/crub.php',
		type: 'POST',
		data: {
			table: table,
			action: action,
			fields: JSON.stringify(fields),
			values: JSON.stringify(values),
			types: types,
		},
		success: function(response) {
			console.log(response);
			$("input").attr("disabled", "disabled");
			$("tr").removeAttr('class');
			$(".action").show();
			$(".hide").hide();
			$(".form-control-file").replaceWith('<img src="image/ololo.jpg">');
		},
		error: function(error) {
			console.log(error);
		}
	})
});