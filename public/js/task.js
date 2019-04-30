/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function () {
    $(".todo, .inprogress, .done").sortable({
        connectWith: ".connectedSortable",
        start: function (e, ui) {
            $(this).attr('data-previous-item-type', ui.item.attr('data-type'));
        },
        update: function (event, ui) {
            var type;

            if (ui.item.parents('.todo').length) {
                type = 1;
            } else if (ui.item.parents('.inprogress').length) {
                type = 2;
            } else if (ui.item.parents('.done').length) {
                type = 3;
            }

            if (type == ui.item.attr('data-type')) {
                updateSortOrder($(this));
            } else {
                updateTaskType(ui, type);
                updateSortOrder($(this));
            }
        }
    }
    );
});

function updateTaskType(ui, type)
{
    $.ajax({
        type: "POST",
        url: "{{ route('update_task_type') }}",
        async: false,
        data: {
            '_token': "{{ csrf_token() }}",
            'id': ui.item.attr('data-id'),
            'type': type
        },
        dataType: 'JSON',
        success: function (data) {
        }
    });
}

function updateSortOrder(obj)
{
    var data = obj.sortable('toArray', {attribute: 'data-id'});

    $.ajax({
        type: "POST",
        url: "{{ route('update_sort_order') }}",
        data: {
            '_token': "{{ csrf_token() }}",
            'data': data,
        },
        dataType: 'JSON',
        success: function (data) {

        }
    });
}

function addTask()
{
    $('#title').val('');
    $('#create-task').modal('show');
}

function saveTask()
{
    var title = $('#title').val();

    $.ajax({
        type: "POST",
        url: "{{ route('create_task') }}",
        data: {
            '_token': "{{ csrf_token() }}",
            'title': title
        },
        dataType: 'JSON',
        success: function (data) {
            if (data.success == true) {
                var item = '<p class="ui-sortable-handle">' + title + '</p>';
                $('.todo').append(item);
            }
            $('#create-task').modal('hide');
        }
    });
}