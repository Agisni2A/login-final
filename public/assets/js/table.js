$(document).ready(function () {
  const table = $("#item").DataTable({
    paging: false,
    scrollCollapse: true,
    searching: true,
    select: true,
    dom: "Bfrtip",
    buttons: ["print", "excel"],
  });
  table.buttons().container().appendTo($("#item_info"));

  new $.fn.dataTable.Buttons(table, {
    buttons: [
      {
        extend: "collection",
        text: "Action",
        buttons: [
          {
            text: "Add",
            action: function () {
              /* Your code for high priority action */
              window.location.href = "/dashboard/add";
            },
          },
          {
            text: "Edit",
            action: function () {
              /* Your code for medium priority action */
              const selectedRows = table.rows({ selected: true }).data();
              if (selectedRows.length === 1) {
                window.location.href = "/dashboard/edit";
              } else {
                alert("please select a row");
              }
            },
            //  enabled: false,
          },
          {
            text: "Delete",
            action: function () {
              /* Your code for low priority action */
              const selectedRows = table.rows({ selected: true }).data();
              if (selectedRows > 0) {
                window.location.href = "/dashboard/delete";
              } else {
                alert("please select a row");
              }
            },
            // enabled: false,
          },
        ],
        fade: true,
      },
    ],
  })
    .container()
    .appendTo($("#item_filter"));
});

$.fn.dataTable.ext.buttons.redirect = {
  className: "buttons-redirect",

  action: function (e, dt, node, config) {
    // Get the 'href' attribute from the button's configuration
    var href = this.attr("href");
    // Redirect to the specified page
    window.location.href = href;
  },
};
