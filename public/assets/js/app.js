/*
Template: noteplus - Responsive Bootstrap 4 Admin Dashboard Template
Author: iqonicthemes.in
Design and Developed by: iqonicthemes.in
NOTE: This file contains the styling for responsive Template.
*/

/*----------------------------------------------
Index Of Script
------------------------------------------------

:: Tooltip
:: Fixed Nav
:: Magnific Popup
:: Sidebar Widget
:: Page Loader
:: Counter
:: Progress Bar
:: Page Menu
:: Close  navbar Toggle
:: user toggle
:: Data tables
:: Form Validation
:: Active Class for Pricing Table
:: Scrollbar
:: checkout
:: Datatables
:: image-upload
:: video
:: Button
:: Pricing tab
:: Custom Toggle

------------------------------------------------
Index Of Script
----------------------------------------------*/

(function(jQuery) {

    "use strict";

    jQuery(document).ready(function() {

        /*---------------------------------------------------------------------
        Tooltip
        -----------------------------------------------------------------------*/
        jQuery('[data-toggle="popover"]').popover();
        jQuery('[data-toggle="tooltip"]').tooltip();

        /*---------------------------------------------------------------------
        Fixed Nav
        -----------------------------------------------------------------------*/

        $(window).on('scroll', function () {
            if ($(window).scrollTop() > 0) {
                $('.iq-top-navbar').addClass('fixed');
            } else {
                $('.iq-top-navbar').removeClass('fixed');
            }
        });

        $(window).on('scroll', function () {
            if ($(window).scrollTop() > 0) {
                $('.white-bg-menu').addClass('sticky-menu');
            } else {
                $('.white-bg-menu').removeClass('sticky-menu');
            }
        });

       /*---------------------------------------------------------------------
        Sidebar Widget
        -----------------------------------------------------------------------*/

        jQuery(document).on("click", '.iq-menu > li > a', function() {
            jQuery('.iq-menu > li > a').parent().removeClass('active');
            jQuery(this).parent().addClass('active');
        });

        // Active menu
        var parents = jQuery('li.active').parents('.iq-submenu.collapse');

        parents.addClass('show');


        parents.parents('li').addClass('active');
        jQuery('li.active > a[aria-expanded="false"]').attr('aria-expanded', 'true');


        /*---------------------------------------------------------------------
        Page Loader
        -----------------------------------------------------------------------*/
        jQuery("#load").fadeOut();
        jQuery("#loading").delay().fadeOut("");

        /*---------------------------------------------------------------------
        Progress Bar
        -----------------------------------------------------------------------*/
        jQuery('.iq-progress-bar > span').each(function() {
            let progressBar = jQuery(this);
            let width = jQuery(this).data('percent');
            progressBar.css({
                'transition': 'width 2s'
            });

            setTimeout(function() {
                progressBar.appear(function() {
                    progressBar.css('width', width + '%');
                });
            }, 100);
        });

        jQuery('.progress-bar-vertical > span').each(function () {
            let progressBar = jQuery(this);
            let height = jQuery(this).data('percent');
            progressBar.css({
                'transition': 'height 2s'
            });
            setTimeout(function () {
                progressBar.appear(function () {
                    progressBar.css('height', height + '%');
                });
            }, 100);
        });
        /*---------------------------------------------------------------------
        Page Menu
        -----------------------------------------------------------------------*/
        jQuery(document).on('click', '.wrapper-menu', function() {
            jQuery(this).toggleClass('open');
        });

        jQuery(document).on('click', ".wrapper-menu", function() {
            jQuery("body").toggleClass("sidebar-main");
        });

      /*---------------------------------------------------------------------
       Close  navbar Toggle
       -----------------------------------------------------------------------*/

        jQuery('.close-toggle').on('click', function () {
            jQuery('.h-collapse.navbar-collapse').collapse('hide');
        });

        /*---------------------------------------------------------------------
        user toggle
        -----------------------------------------------------------------------*/
        jQuery(document).on('click', '.iq-user-toggle', function() {
            jQuery(this).parent().addClass('show-data');
        });

        jQuery(document).on('click', ".close-data", function() {
            jQuery('.iq-user-toggle').parent().removeClass('show-data');
        });
        jQuery(document).on("click", function(event){
        var $trigger = jQuery(".iq-user-toggle");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            jQuery(".iq-user-toggle").parent().removeClass('show-data');
        }
        });
        /*-------hide profile when scrolling--------*/
        jQuery(window).scroll(function () {
            let scroll = jQuery(window).scrollTop();
            if (scroll >= 10 && jQuery(".iq-user-toggle").parent().hasClass("show-data")) {
                jQuery(".iq-user-toggle").parent().removeClass("show-data");
            }
        });
        let Scrollbar = window.Scrollbar;
        if (jQuery('.data-scrollbar').length) {

            Scrollbar.init(document.querySelector('.data-scrollbar'), { continuousScrolling: false });
        }

        /*---------------------------------------------------------------------
        Data tables
        -----------------------------------------------------------------------*/
        if($.fn.DataTable){
            $('.data-table').DataTable();
        }

        /*---------------------------------------------------------------------
        Form Validation
        -----------------------------------------------------------------------*/

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
 /*---------------------------------------------------------------------
        Animated SVG ICON
        -----------------------------------------------------------------------*/

        const settings = $.extend({
            type: 'oneByOne',
            start: 'inViewport',
            dashGap: 10,
            duration: 100
        }, 'body' );
        
        $('.svg-icon' ).each(function() {
            const iconID = $(this).attr('id');
            if(iconID != undefined){
                const iconVar = iconID.replace( '-', '' );
                window['iq'+iconVar] = new Vivus( iconID, settings );
            }     
        });
        $(document).on("mouseenter", ".svg-icon", function() {
            let iconID = $(this).attr('id');
            
            if ($(this).find('svg').length > 0) {
                iconID = $(this).find('svg').attr('id');
            }
            if(!iconID) return false;
            var iconVar = iconID.replace( '-', '' );
            window['iq'+iconVar].reset().play();
        });
    
      /*---------------------------------------------------------------------
       Active Class for Pricing Table
       -----------------------------------------------------------------------*/
      jQuery("#my-table tr th").click(function () {
        jQuery('#my-table tr th').children().removeClass('active');
        jQuery(this).children().addClass('active');
        jQuery("#my-table td").each(function () {
          if (jQuery(this).hasClass('active')) {
            jQuery(this).removeClass('active')
          }
        });
        var col = jQuery(this).index();
        jQuery("#my-table tr td:nth-child(" + parseInt(col + 1) + ")").addClass('active');
      });

        /*---------------------------------------------------------------------
        Scrollbar
        -----------------------------------------------------------------------*/

        jQuery(window).on("resize", function () {
            if (jQuery(this).width() <= 1299) {
                jQuery('#salon-scrollbar').addClass('data-scrollbar');
            } else {
                jQuery('#salon-scrollbar').removeClass('data-scrollbar');
            }
        }).trigger('resize');

        jQuery('.data-scrollbar').each(function () {
            var attr = $(this).attr('data-scroll');
            if (typeof attr !== typeof undefined && attr !== false){
            let Scrollbar = window.Scrollbar;
            var a = jQuery(this).data('scroll');
            Scrollbar.init(document.querySelector('div[data-scroll= "' + a + '"]'));
            }
        });


         /*---------------------------------------------------------------------
           Datatables
        -----------------------------------------------------------------------*/
        if(jQuery('.data-tables').length)
        {
          $('.data-tables').DataTable();
        }

        /*---------------------------------------------------------------------
        Button
        -----------------------------------------------------------------------*/
        if ($.fn.select2 !== undefined) {
            $("#single").select2({
                placeholder: "Select a Option",
                allowClear: true
            });
            $("#multiple").select2({
                placeholder: "Select a Multiple Option",
                allowClear: true
            });
            $("#multiple2").select2({
                placeholder: "Select a Multiple Option",
                allowClear: true
            });
        }

        /*---------------------------------------------------------------------
        Pricing tab
        -----------------------------------------------------------------------*/
        jQuery(window).on('scroll', function (e) {

            // Pricing Pill Tab
            var nav = jQuery('#pricing-pills-tab');
            if (nav.length) {
                var contentNav = nav.offset().top - window.outerHeight;
                if (jQuery(window).scrollTop() >= (contentNav)) {
                    e.preventDefault();
                    jQuery('#pricing-pills-tab li a').removeClass('active');
                    jQuery('#pricing-pills-tab li a[aria-selected=true]').addClass('active');
                }
            }
        });
        /*---------------------------------------------------------------------
        Remove collapse panel
        -----------------------------------------------------------------------*/

        jQuery(window).on("resize", function () {
            if (jQuery(this).width() <= 1199) {
                jQuery('.iq-note-callapse-menu .collapse').addClass('show');
            } else{
                jQuery('.iq-note-callapse-menu .collapse').removeClass('show');                
            }
        }).trigger('resize');

        /*---------------------------------------------------------------------
        List and Grid
        -----------------------------------------------------------------------*/
        $('.list-grid-toggle').on('click', function() {
            const txt = $(".icon").hasClass('active') ? 'List' : 'Grid';
            $('.icon').toggleClass('active');
            $(".label").text(txt);
        })

        $('.home[data-toggle="pill"]').on('shown.bs.tab', function (e) {
            const target = $(e.target).attr("data-init") // activated tab
            initMurri(target)
        });

        if($('.home').hasClass('active')) {
            initMurri($('.home.active').attr('data-init'))
        }
        var noteGrid = null;
        var sharedGrid = null;
        var favGrid = null;
        var pinGrid = null;
        function initMurri (type) {
            console.log(type)
            switch (type) {
                case 'shared-note':
                    if (!$('.shared-note-grid').hasClass('muuri')) {
                        if ($('.shared-note-grid').length > 0) {
                            sharedGrid = new Muuri('.shared-note-grid', {
                                items: '.shared-note-item',
                                dragEnabled: true
                            });
                            sharedGrid.on('dragEnd', function (item, event) {
                                console.log(event);
                                console.log(item);
                            });
                        }
                    }
                    break;
                case 'pin-note':
                    if ($('.pin-note-grid').length > 0) {
                        pinGrid = new Muuri('.pin-note-grid', {
                            items: '.pin-note-item',
                            dragEnabled: true
                        });
                        pinGrid.on('dragEnd', function (item, event) {
                            console.log(event);
                            console.log(item);
                        });
                    }
                    break;
                case 'fav-note':
                    if ($('.fav-note-grid').length > 0) {
                        favGrid = new Muuri('.fav-note-grid', {
                            items: '.fav-note-item',
                            dragEnabled: true
                        });
                        favGrid.on('dragEnd', function (item, event) {
                            console.log(event);
                            console.log(item);
                        });
                    }
                    break;
                case 'note':
                    // Note drag and drop muri plugin
                    if ($('.note-grid').length > 0) {
                        if (!$('.note-grid').hasClass('muuri')) {
                            noteGrid = new Muuri('.note-grid', {
                                items: '.note-item',
                                dragEnabled: true
                            });
                            noteGrid.on('dragEnd', function (item, event) {
                                console.log(event);
                                console.log(item);
                            });
                        }
                    }
                    break;
            }
        }

    });
    $('.dropdown-menu-right').on('click', function(event){
        if ($(this).find('[data-toggle]').length == 0) {
            event.stopPropagation();
        }
    });

    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    $(".select2").select2({
        placeholder: "Select a Option",
        allowClear: true
    });
    $('.basic-select').picker();
    $(document).on('click','[data-extra-toggle="toggle"]',function (e) {
        const hideClassName = $(this).data('extra-class-hide')
        const hideIdName = $(this).data('extra-id-hide')
        const collapse = $(this).closest('.collapse')
        collapse.collapse('hide')
        if (hideClassName !== undefined && hideClassName !== null) {
            $(hideClassName).addClass('d-none')
        }

        if (hideIdName !== undefined && hideIdName !== null) {
            $(hideIdName).addClass('d-none')
        }

        const showClassName = $(this).data('extra-class-show')
        const showIdName = $(this).data('extra-id-show')
        if (showClassName !== undefined && showClassName !== null) {
            $(showClassName).removeClass('d-none')
        }

        if (showIdName !== undefined && showIdName !== null) {
            $(showIdName).removeClass('d-none')
        }
    })

    $('.show-tab').on('click', function (e) { 
        e.preventDefault();
        let taregt = $(this).attr('data-show-tab')
        $(taregt).tab('show')
    })

    $('[data-extra-toggle="delete"]').on('click', function (e) {
        const closestElem = $(this).attr('data-closest-elem')
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-primary',
              cancelButton: 'btn btn-outline-primary ml-2'
            },
            buttonsStyling: false
          })
          
          swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            showClass: {
                popup: 'animate__animated animate__zoomIn'
            },
            hideClass: {
                popup: 'animate__animated animate__zoomOut'
            }
        })
        .then((willDelete) => {
            if (willDelete.isConfirmed) {
                swalWithBootstrapButtons.fire({
                        title: 'Deleted!',
                        text: "Your note has been deleted.",
                        icon: 'success',
                        showClass: {
                            popup: 'animate__animated animate__zoomIn'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__zoomOut'
                        }
                    }
                  ).then(() => {
                      if (closestElem == '.card') {
                        $(this).closest(closestElem).parent().remove()
                      } else {
                        $(this).closest(closestElem).remove()
                      }
                  })
            } else {
                swalWithBootstrapButtons.fire({
                    title: "Your note is safe!",
                    showClass: {
                        popup: 'animate__animated animate__zoomIn'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__zoomOut'
                    }
                });
            }
        });  
    })

        /*---------------------------------------------------------------------
            Tab right sidebar open close
        -----------------------------------------------------------------------*/

        $(document).on('click', '[data-extra-toggle="right-sidebar"]', function (e) {
            $(".right-sidebar-mini").removeClass("right-sidebar")
        })

        $(document).on('click', '[data-extra-toggle="right-sidebar-dissmiss"]', function (e) {
            $(".right-sidebar-mini").addClass("right-sidebar")
        })

        /*---------------------------------------------------------------------
            On Input change card update
        -----------------------------------------------------------------------*/

        $(document).on('click', '[data-change="click"]', function (e) {
            const group = $(this).closest('#icon-button')
            group.find('.active').removeClass('active')
            $(this).addClass('active')
            const value = $(this).html()
            const target = $(this).attr('data-custom-target')
            $(target).html(value)
        })

        $(document).on('change', '[data-change="radio"]', function (e) {
            const value = $(this).val()
            if($(this).attr('data-custom-target') == 'color') {
                $('#note-icon').attr('class',' ')
                $('#update-note').attr('class', ' ')
                $('#note-icon').addClass(`icon iq-icon-box-2 icon-border-${value} rounded`)
                $('#update-note').addClass(`card card-block card-stretch card-height card-bottom-border-${value} note-detail`)
            }
        })

        $(document).on('keyup','[data-change="input"]',function(){
            const target = $(this).attr('data-custom-target')
            const value = $(this).val()
            const defaultValue = $(this).attr('placeholder')
            if ($(this).attr('type') !== 'date') {
                if(value !== '') {
                    $(target).html(value)    
                } else {
                    $(target).html(defaultValue)
                }   
            } else {
                $(target).html(changeDateString(value))
            }
        })

        $(document).on('change', '[data-change="input"]', function(){
            const target = $(this).attr('data-custom-target')
            if ($(this).attr('type') === 'date') {
                $(target).html(changeDateString($(this).val()))
            }
        })

        $(document).on('change', '[data-change="select"]', function (e) {
            const value = $(this).val()
            console.log('ts')
            if($(this).attr('data-custom-target') == 'color') {
                $('#note-icon').attr('class',' ')
                $('#update-note').attr('class', ' ')
                $('#note-icon').addClass(`icon iq-icon-box-2 icon-border-${value} rounded`)
                $('#update-note').addClass(`card card-block card-stretch card-height card-bottom-border-${value} note-detail`)
            }
        })

        function changeDateString(date) {
            const newDate = new Date(date)
            const month = new Array();
            month[0] = "Jan";
            month[1] = "Feb";
            month[2] = "Mar";
            month[3] = "Apr";
            month[4] = "May";
            month[5] = "Jun";
            month[6] = "Jul";
            month[7] = "Aug";
            month[8] = "Sept";
            month[9] = "Oct";
            month[10] = "Nov";
            month[11] = "Dec";
            return `${newDate.getDate()} ${month[newDate.getMonth()]} ${newDate.getFullYear()}`
        }

        $(document).on('click', '[data-reset="note-reset"]', function() {
            const group = $('#icon-button')
            group.find('.active').removeClass('active')
            $('#icon-button').first('button').addClass('active')
            $('#update-note').closest('#default').html($('.default-note').html())
        })

        $(document).on('click', '.edit-note', function () {
            $('#notebook-title').val($(this).closest('tr').find('[data-column]').text())
        })

})(jQuery);
