$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});

$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});




(function($) {

	"use strict";

	 $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
        });
    });
	 
})(jQuery);



// Dropdown items with input field.
 // Get all the necessary elements
 const dropdown = document.querySelector('.dropdown');
 const checkboxes = document.querySelectorAll('.option-checkbox');
 const inputs = document.querySelectorAll('.option-input');
 const selectedOptions = document.querySelector('#selected-options');

 // Add an event listener to the dropdown button to toggle the dropdown menu
 dropdown.addEventListener('click', () => {
     dropdown.classList.toggle('show');
 });

 // Add an event listener to each checkbox to toggle its corresponding input field
 checkboxes.forEach((checkbox, index) => {
     checkbox.addEventListener('change', () => {
         if (checkbox.checked) {
             inputs[index].classList.add('show');
         } else {
             inputs[index].classList.remove('show');
             inputs[index].value = '';
         }
         updateSelectedOptions();
     });
 });
 // Function to update the selected options
 function updateSelectedOptions() {
     const selected = [];
     checkboxes.forEach((checkbox, index) => {
         if (checkbox.checked) {
             const value = inputs[index].value.trim();
             selected.push(value ? `${checkbox.value}` : checkbox.value);
         }
     });
     selectedOptions.value = selected.join(', ');
 }


 //Seller Table
 $(document).ready(function () {
    $('#sellerTable').DataTable({
        scrollY: '395px',
        scrollCollapse: true,
        paging: false,
        "order": [[2, "asc"]],
        "columnDefs": [{
            "targets": [0, 1, 3, 4, 5],
            "orderable": false
        }],
        "language": {
            "emptyTable": "No Sellers available",
            "info": "Showing _START_ to _END_ of _TOTAL_ Sellers",
            "infoEmpty": "Showing 0 to 0 of 0 Sellers",
            "infoFiltered": "(filtered from _MAX_ total Sellers)",
            "lengthMenu": "Show _MENU_ Sellers",
            "zeroRecords": "No matching Sellers found",
        }
    });
});