$(function () {

    // Web stats
    $('table.stats').each(function () {
        if ($(this).attr('rel')) {
            var statsType = $(this).attr('rel');
        } else {
            var statsType = 'area';
        }
        // hack to statically set width as something is broken with div width calculation - anni
        var chart_width = $(document).width() - 500;
        if (statsType == 'line' || statsType == 'pie') {
            $(this).hide().visualize({
                type: statsType,
                // 'bar', 'area', 'pie', 'line'
                width: chart_width,
                height: '240px',
                colors: ['#6fb9e8', '#ec8526', '#9dc453', '#ddd74c'],
                lineDots: 'double',
                interaction: true,
                multiHover: 5,
                tooltip: true,
                tooltiphtml: function (data) {
                    var html = '';
                    for (var i = 0; i < data.point.length; i++) {
                        html += '<p class="chart_tooltip"><strong>' + data.point[i].value + '</strong> ' + data.point[i].yLabels[0] + '</p>';
                    }
                    return html;
                }
            });
        } else {
            $(this).hide().visualize({
                // 'bar', 'area', 'pie', 'line'
                width: chart_width,
                type: statsType,
                height: '240px',
                colors: ['#6fb9e8', '#ec8526', '#9dc453', '#ddd74c']
            });
        }
    });

    // Sort table
    $("table.sortable").tablesorter({
        headers: {
            0: {
                //sorter: false
            },
            5: {
                //sorter: false
            }
        },
        // Disabled on the 1st and 6th columns
        widgets: ['zebra']
    });

    $("table.pagesort")
      .tablesorter({ widgets: ['zebra'] })
      .tablesorterPager({ positionFixed: false, container: $("#pager") });
    $("table.pagesort2")
      .tablesorter({ widgets: ['zebra'] })
      .tablesorterPager({ positionFixed: false, container: $("#pager2") });
    $("table.pagesort4")
      .tablesorter({ widgets: ['zebra'] })
      .tablesorterPager({ positionFixed: false, container: $("#pager3") });

    // Check / uncheck all checkboxes
    $('.check_all').click(function () {
        $(this).parents('form').find('input:checkbox').attr('checked', $(this).is(':checked'));
    });
});

function zellesChatOpen() {
   if($('.zelles-chat').css('display') == 'none') {
      $(".zelles-bar").hide();
      $(".zelles-chat").show();
   } else {
      $(".zelles-chat").hide();
      $(".zelles-bar").show();
   }
}
function zellesChat() {
   $.ajax({
      type: "POST", url: "chat.php",
      data: $("#zellesspeaker").serialize(),
      success: function(response){
         $("#speaker").val("");
         $("#zelleschatroom").load("chat.php?ajax=room");
         $("#zelleschatroom").scrollTop($("#zelleschatroom")[0].scrollHeight);
      }
   });
   return false;
}
setTimeout(function () {
   $("#zelleschatroom").load("chat.php?ajax=room");
}, 200);
setTimeout(function() {
   $("#zelleschatroom").scrollTop($("#zelleschatroom")[0].scrollHeight);
}, 1000);
setInterval(function () {
   $("#zelleschatroom").load("chat.php?ajax=room");
   $("#zelleschatroom").scrollTop($("#zelleschatroom")[0].scrollHeight);
}, 2000);