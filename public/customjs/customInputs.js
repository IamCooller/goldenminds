var i = 0;

$("#add").click(function() {

    ++i;

    $("#linksTable").append('<tr><td><input type="text" name="links[link' + i + ']" placeholder="Введите ссылку" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Удалить</button></td></tr>');
});

$(document).on('click', '.remove-tr', function() {
    $(this).parents('tr').remove();
});