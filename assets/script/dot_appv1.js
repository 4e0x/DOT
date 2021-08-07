
// Toggle the sidebar
$(document).mouseup(e => {
    if (!$(".dot_sidebar").is(e.target) &&
        $(".dot_sidebar").has(e.target).length === 0) {
        $(".dot_sidebar").removeClass('sidebar_visible');
    }
});
$("#sidebar_trigger").click(function() {
    $(".dot_sidebar").addClass('sidebar_visible');
});

// Toggle the drop down
$('.dot_user_circle').click(function() {
    $('.dot_drops').toggleClass('dotdrops_isdropped');
});

// Toggle the cryptography & stego challenges
$("#crypt").click(function() {
    $("#crypt_levels").toggleClass("crypt_levels_expanded");
});

$("#stego").click(function() {
    $("#stego_levels").toggleClass("stego_levels_expanded");
});

// Toggle the modals accordingly

$("#modal_help").click(function() {
    $("#show_help").toggleClass("dotmodal_active");
    $("#parent_show_help").toggleClass("dotmodal_active");
    let data = $("#show_helpdotmodal_content").attr('data-href');
    $("#show_helpdotmodal_content").load(data);
});

$("#dotmodal_show_help_close").click(function() {
    $("#show_help").toggleClass("dotmodal_active");
    $("#parent_show_help").toggleClass("dotmodal_active");
});


$("#modal_links").click(function() {
    $("#show_links").toggleClass("dotmodal_active");
    $("#parent_show_links").toggleClass("dotmodal_active");
    let linkdata = $("#show_linksdotmodal_content").attr('data-href');
    $("#show_linksdotmodal_content").load(linkdata);
});
$("#dotmodal_show_links_close").click(function() {
    $("#show_links").toggleClass("dotmodal_active");
    $("#parent_show_links").toggleClass("dotmodal_active");
});