"use strict";

$(document).ready(function() {
    // initialize the icon picker and done
    $('.iconpicker').iconpicker({
        // customize the icon picker with the following options
        // THANKS FOR WATCHING!
        title: 'My Icon Picker',
        selected: false,
        defaultValue: false,
        placement: "bottom",
        collision: "none",
        animation: true,
        hideOnSelect: true,
        showFooter: true,
        searchInFooter: false,
        mustAccept: false,
        selectedCustomClass: "bg-primary",
        fullClassFormatter: function (e) {
            return e;
        },
        input: "input,.iconpicker-input",
        inputSearch: false,
        container: false,
        component: ".input-group-addon,.iconpicker-component",
        templates: {
            popover: '<div class="iconpicker-popover popover" role="tooltip"><div class="arrow"></div>' + '<div class="popover-title"></div><div class="popover-content"></div></div>',
            footer: '<div class="popover-footer"></div>',
            buttons: '<button class="iconpicker-btn iconpicker-btn-cancel btn btn-default btn-sm">Cancel</button>' + ' <button class="iconpicker-btn iconpicker-btn-accept btn btn-primary btn-sm">Accept</button>',
            search: '<input type="search" class="form-control iconpicker-search" placeholder="Type to filter" />',
            iconpicker: '<div class="iconpicker"><div class="iconpicker-items"></div></div>',
            iconpickerItem: '<a role="button" href="javascript:;" class="iconpicker-item"><i></i></a>'
        }
    });
});

$(document).ready(function() {

    $("#add_user").click(function() {
        $("#select_user_section").addClass('hidden');
        $("#add_user_section").removeClass('hidden');
        $("#user_email_section").removeClass('hidden');
        $("#select_user").removeClass('hidden');
        $("#add_user").addClass('hidden');
        $("#user_id").removeAttr('required');
        $("#name").addAttr('required');
        $("#username").addAttr('required');
        $("#email").addAttr('required');
        $("#phone").removeAttr('required');
        $("#phone").removeAttr('name', 'phone_number');
        $("#phone_number").addAttr('required');
        $("#phone_number").addAttr('name', 'phone_number');
    });

    $("#select_user").click(function() {
        $("#select_user_section").removeClass('hidden');
        $("#add_user_section").addClass('hidden');
        $("#user_email_section").addClass('hidden');
        $("#select_user").addClass('hidden');
        $("#add_user").removeClass('hidden');
        $("#user_id").addAttr('required');
        $("#name").removeAttr('required');
        $("#username").removeAttr('required');
        $("#email").removeAttr('required');
        $("#phone_number").removeAttr('required');
        $("#phone_number").removeAttr('name', 'phone_number');
        $("#phone").addAttr('required');
        $("#phone").addAttr('name', 'phone_number');
    });

});

$(document).ready(function() {
    $('#exampleSelect2').multiselect({
        nonSelectedText: 'Select Services',
        buttonWidth:'100%'
    });
    $('#exampleSelect3').multiselect({
        buttonWidth:'100%'
    });
});
