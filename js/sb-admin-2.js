(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(".sidebar").hasClass("toggled")) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $('.sidebar .collapse').collapse('hide');
    };
    
    // Toggle the side navigation when window is resized below 480px
    if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
      $("body").addClass("sidebar-toggled");
      $(".sidebar").addClass("toggled");
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
    $(document).ready(function() {
        // DataTable initialization
        var table = $('#dataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "your_data_source.php", // Replace with your server-side script
            "columns": [
                { "data": "id" },
                { "data": "usernam" },
                { "data": "nama" },
                { "data": "perusahaan" },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        // Add edit and remove buttons
                        return '<button class="btn btn-info btn-sm" onclick="editRow(' + row.id + ')">Edit</button>' +
                               '<button class="btn btn-danger btn-sm" onclick="removeRow(' + row.id + ')">Remove</button>';
                    }
                }
            ]
        });
    });

    // Function to handle edit action
    function editRow(id) {
        // Implement your edit logic here
        alert('Edit row with ID ' + id);
    }

    // Function to handle remove action
    function removeRow(id) {
        // Implement your remove logic here
        alert('Remove row with ID ' + id);
    }

})(jQuery); // End of use strict
