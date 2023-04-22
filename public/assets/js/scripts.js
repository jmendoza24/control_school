function mascaras(){
     $(".btn-card-block").on("click", function() {
    $("#card-block").block({
      message: '<div class="spinner-border text-primary" role="status"></div>',
      timeout: 1000,
      css: {
        backgroundColor: "transparent",
        border: "0"
      },
      overlayCSS: {
        backgroundColor: "#000",
        opacity: 0.25
      }
    })
  })

  // OVERLAY COLOR
  $(".btn-card-block-overlay").on("click", function() {
    $("#card-block").block({
      message: '<div class="spinner-border text-primary" role="status"></div>',
      timeout: 1000,
      css: {
        backgroundColor: "transparent",
        border: "0"
      },
      overlayCSS: {
        backgroundColor: "#fff",
        opacity: 0.8
      }
    })
  })

  // CUSTOM SPINNER
  $(".btn-card-block-spinner").on("click", function() {
    $("#card-block").block({
      message:
        '<div class="iq-loader-box"><div class="iq-loader-5"> <span></span><span></span><span></span><span></span></div></div>',
      css: {
        backgroundColor: "transparent",
        border: "0"
      },
      overlayCSS: {
        backgroundColor: "#fff",
        opacity: 0.8
      }
    })
  })

  // CUSTOM MESSAGE
  $(".btn-card-block-custom").on("click", function() {
    $("#card-block").block({
      message:
        '<div class="d-flex justify-content-center"><p class="me-2 mb-0">Please wait...</p> <div class="sk-wave sk-primary m-0"><div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div></div> </div>',
      timeout: 1000,
      css: {
        backgroundColor: "transparent",
        border: "0"
      },
      overlayCSS: {
        backgroundColor: "#fff",
        opacity: 0.8
      }
    })
  })

  // MULTIPLE MESSAGE
  $(".btn-card-block").on("click", function() {
    $("#card-block").block({
      message:
        '<div class="d-flex justify-content-center"><p class="me-2 mb-0">Procesando espere...</p><div class="iq-loader-box"><div class="iq-loader-5"> <span></span><span></span><span></span><span></span></div></div></div>',
      css: {
        backgroundColor: "transparent",
        border: "0"
      },
      overlayCSS: {
        backgroundColor: "#fff",
        opacity: 0.8
      },
      timeout: 1000,
      onUnblock: function() {
        $("#card-block").block({
          message: '<p class="me-2 mb-0">Casi terminamos...<div class="iq-loader-box"><div class="iq-loader-5"> <span></span><span></span><span></span><span></span></div></div></p>',
          //timeout: 1000,
          css: {
            backgroundColor: "transparent",
            border: "0"
          },
          overlayCSS: {
            backgroundColor: "#fff",
            opacity: 0.8
          },
          onUnblock: function() {
            $("#card-block").block({
              message: '<div class="p-3 ">....<div class="iq-loader-box"><div class="iq-loader-5"> <span></span><span></span><span></span><span></span></div></div></div>',
              //timeout: 500,
              css: {
                backgroundColor: "transparent",
                border: "0"
              },
              overlayCSS: {
                backgroundColor: "#fff",
                opacity: 0.8
              }
            })
          }
        })
      }
    })
  })

  $('.dataTables-data').DataTable().destroy();
  $('.dataTables-data').DataTable({
        pageLength: 25,
        responsive: false,
        language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }/** ,

        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
            { extend: 'copy'},
            {extend: 'csv'},
            {extend: 'excel', title: 'ExampleFile'},
            

            {extend: 'print',
             customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
            }
            }
        ]
  */

    });

}