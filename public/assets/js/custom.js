"use strict";

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
