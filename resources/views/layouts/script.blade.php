      <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
      <script src="{{asset('assets/js/vendors.js')}}"></script>
      <script src="{{asset('assets/js/aiz-core.js')}}"></script>
      <script src="{{asset('assets/vendor/selected2/dist/js/select2.min.js')}}"></script>
      <script src="{{asset('assets/vendor/dist/js/bootstrap.bundle.min.js')}}"></script>
      @include('layouts.light')
      <script>
          $(".toggle-password").on('click', function() {
              $(this).toggleClass("la-eye la-eye-slash");
              var input = $($(this).attr("data-name"));
              if (input.attr("type") == "password") {
                  input.attr("type", "text");
              } else {
                  input.attr("type", "password");
              }
          });
          $('.image-delete').dblclick(function() {
              var link = $(this).attr('data-link');
              location.href = "/admin-image-delete/" + link;
          });
      </script>
      <script script type="text/javascript">
          AIZ.plugins.chart('#pie-1', {
              type: 'doughnut',
              data: {
                  labels: [
                      'produits publie par l admin',
                      'produits publie par le vendeur',
                      'produits de Africa Brand'
                  ],
                  datasets: [{
                      data: [
                          148,
                          98,
                          50
                      ],
                      backgroundColor: [
                          "#fd3995",
                          "#34bfa3",
                          "#5d78ff",
                          '#fdcb6e',
                          '#d35400',
                          '#8e44ad',
                          '#006442',
                          '#4D8FAC',
                          '#CA6924',
                          '#C91F37'
                      ]
                  }]
              },
              options: {
                  cutoutPercentage: 70,
                  legend: {
                      labels: {
                          fontFamily: 'Poppins',
                          boxWidth: 10,
                          usePointStyle: true
                      },
                      onClick: function() {
                          return '';
                      },
                      position: 'bottom'
                  }
              }
          });
          AIZ.plugins.chart('#pie-2', {
              type: 'doughnut',
              data: {
                  labels: [
                      'Total de commandes     ',
                      'Commandes approuves',
                      'Commandes en attentes'
                  ],
                  datasets: [{
                      data: [
                          "{{ $data['totalVentes'] ?? '0'}}",
                          "{{ $data['ventes'] ?? '0'}}",
                          "{{ $data['attentes'] ?? '0'}}"
                      ],
                      backgroundColor: [
                          "#fd3995",
                          "#34bfa3",
                          "#5d78ff",
                          '#fdcb6e',
                          '#d35400',
                          '#8e44ad',
                          '#006442',
                          '#4D8FAC',
                          '#CA6924',
                          '#C91F37'
                      ]
                  }]
              },
              options: {
                  cutoutPercentage: 70,
                  legend: {
                      labels: {
                          fontFamily: 'Montserrat',
                          boxWidth: 10,
                          usePointStyle: true
                      },
                      onClick: function() {
                          return '';
                      },
                      position: 'bottom'
                  }
              }
          });
          dataCategorie = <?php

                            use function GuzzleHttp\json_encode;

                            echo json_encode($dataCategorie ?? 0); ?>;
          let dataCategorieBuy = <?php

                                    echo json_encode($dataCategorieBuy ?? 0); ?>;
          let dataCategorieBuyData = <?php

                                        echo json_encode($dataCategorieBuyData ?? 0); ?>;
          AIZ.plugins.chart('#graph-1', {
              type: 'bar',
              data: {
                  labels: dataCategorieBuy,
                  datasets: [{
                      label: 'Nombre de produits vendus',
                      data: dataCategorieBuyData,
                      backgroundColor: [
                          'rgba(55, 125, 255, 0.4)',
                          'rgba(55, 125, 255, 0.4)',
                          'rgba(55, 125, 255, 0.4)',
                          'rgba(55, 125, 255, 0.4)',
                          'rgba(55, 125, 255, 0.4)',
                          'rgba(55, 125, 255, 0.4)',
                          'rgba(55, 125, 255, 0.4)',
                          'rgba(55, 125, 255, 0.4)',
                          'rgba(55, 125, 255, 0.4)',
                          'rgba(55, 125, 255, 0.4)',
                          'rgba(55, 125, 255, 0.4)',
                          'rgba(55, 125, 255, 0.4)',
                          'rgba(55, 125, 255, 0.4)',
                      ],
                      borderColor: [
                          'rgba(55, 125, 255, 1)',
                          'rgba(55, 125, 255, 1)',
                          'rgba(55, 125, 255, 1)',
                          'rgba(55, 125, 255, 1)',
                          'rgba(55, 125, 255, 1)',
                          'rgba(55, 125, 255, 1)',
                          'rgba(55, 125, 255, 1)',
                          'rgba(55, 125, 255, 1)',
                          'rgba(55, 125, 255, 1)',
                          'rgba(55, 125, 255, 1)',
                          'rgba(55, 125, 255, 1)',
                          'rgba(55, 125, 255, 1)',
                          'rgba(55, 125, 255, 1)',
                      ],
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          gridLines: {
                              color: '#f2f3f8',
                              zeroLineColor: '#f2f3f8'
                          },
                          ticks: {
                              fontColor: "#8b8b8b",
                              fontFamily: 'Poppins',
                              fontSize: 10,
                              beginAtZero: true
                          }
                      }],
                      xAxes: [{
                          gridLines: {
                              color: '#f2f3f8'
                          },
                          ticks: {
                              fontColor: "#8b8b8b",
                              fontFamily: 'Poppins',
                              fontSize: 10
                          }
                      }]
                  },
                  legend: {
                      labels: {
                          fontFamily: 'Poppins',
                          boxWidth: 10,
                          usePointStyle: true
                      },
                      onClick: function() {
                          return '';
                      },
                  }
              }
          });
          // dataCategorie = ['Chemise', 'Fruits'];
          let dataCategorieData = <?php echo json_encode($dataCategorieData  ?? 0); ?>;
          AIZ.plugins.chart('#graph-2', {
              type: 'bar',
              data: {
                  labels: dataCategorie,
                  datasets: [{
                      label: 'Quanitite de produit en stock par categorie',
                      data: dataCategorieData,
                      backgroundColor: [
                          'rgba(253, 57, 149, 0.4)',
                          'rgba(253, 57, 149, 0.4)',
                          'rgba(253, 57, 149, 0.4)',
                          'rgba(253, 57, 149, 0.4)',
                          'rgba(253, 57, 149, 0.4)',
                          'rgba(253, 57, 149, 0.4)',
                          'rgba(253, 57, 149, 0.4)',
                          'rgba(253, 57, 149, 0.4)',
                          'rgba(253, 57, 149, 0.4)',
                          'rgba(253, 57, 149, 0.4)',
                          'rgba(253, 57, 149, 0.4)',
                          'rgba(253, 57, 149, 0.4)',
                          'rgba(253, 57, 149, 0.4)',
                      ],
                      borderColor: [
                          'rgba(253, 57, 149, 1)',
                          'rgba(253, 57, 149, 1)',
                          'rgba(253, 57, 149, 1)',
                          'rgba(253, 57, 149, 1)',
                          'rgba(253, 57, 149, 1)',
                          'rgba(253, 57, 149, 1)',
                          'rgba(253, 57, 149, 1)',
                          'rgba(253, 57, 149, 1)',
                          'rgba(253, 57, 149, 1)',
                          'rgba(253, 57, 149, 1)',
                          'rgba(253, 57, 149, 1)',
                          'rgba(253, 57, 149, 1)',
                          'rgba(253, 57, 149, 1)',
                      ],
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          gridLines: {
                              color: '#f2f3f8',
                              zeroLineColor: '#f2f3f8'
                          },
                          ticks: {
                              fontColor: "#8b8b8b",
                              fontFamily: 'Poppins',
                              fontSize: 10,
                              beginAtZero: true
                          }
                      }],
                      xAxes: [{
                          gridLines: {
                              color: '#f2f3f8'
                          },
                          ticks: {
                              fontColor: "#8b8b8b",
                              fontFamily: 'Poppins',
                              fontSize: 10
                          }
                      }]
                  },
                  legend: {
                      labels: {
                          fontFamily: 'Poppins',
                          boxWidth: 10,
                          usePointStyle: true
                      },
                      onClick: function() {
                          return '';
                      },
                  }
              }
          });
      </script>
      <script>
          $(document).ready(function() {
              function menuSearch() {
                  var filter, item;
                  filter = $("#menu-search").val().toUpperCase();
                  items = $("#main-menu").find("a");
                  items = items.filter(function(i, item) {
                      if ($(item).find(".aiz-side-nav-text")[0].innerText.toUpperCase().indexOf(filter) > -1 && $(item).attr('href') !== '#') {
                          return item;
                      }
                  });

                  if (filter !== '') {
                      $("#main-menu").addClass('d-none');
                      $("#search-menu").html('')
                      if (items.length > 0) {
                          for (i = 0; i < items.length; i++) {
                              const text = $(items[i]).find(".aiz-side-nav-text")[0].innerText;
                              const link = $(items[i]).attr('href');
                              $("#search-menu").append(`<li class="aiz-side-nav-item"><a href="${link}" class="aiz-side-nav-link"><i class="las la-ellipsis-h aiz-side-nav-icon"></i><span>${text}</span></a></li`);
                          }
                      } else {
                          $("#search-menu").html(`<li class="aiz-side-nav-item"><span	class="text-center text-muted d-block">Nothing found</span></li>`);
                      }
                  } else {
                      $("#main-menu").removeClass('d-none');
                      $("#search-menu").html('')
                  }
              }
          });
      </script>
      <!-- Ajouter un vehicule sscript -->
      <script type="text/javascript">
          $('.selectMarque').select2({
              placeholder: 'Seclectionner une marque',
              tags: true,
              ajax: {
                  url: '/selectMarque',
                  dataType: 'json',
                  delay: 100,
                  processResults: function(data) {
                      return {
                          results: $.map(data, function(item) {
                              return {
                                  text: item.marque,
                                  id: item.marque
                              }
                          })
                      };
                  },
                  cache: true
              }
          });
          $('.SelectModel').select2({
              placeholder: 'Seclectionner un model',
              tags: true,
              ajax: {
                  url: '/selectModel',
                  dataType: 'json',
                  delay: 100,
                  processResults: function(data) {
                      return {
                          results: $.map(data, function(item) {
                              return {
                                  text: item.model,
                                  id: item.model,
                              }
                          }),
                      };
                  },
                  cache: true
              }
          });
          $('.SelectCarburateur').select2({
              placeholder: 'type de carburateur',
              tags: true,
              ajax: {
                  url: '/selectCarburateur',
                  dataType: 'json',
                  delay: 100,
                  processResults: function(data) {
                      return {
                          results: $.map(data, function(item) {
                              return {
                                  text: item.carburateur,
                                  id: item.carburateur,
                              }
                          }),
                      };
                  },
                  cache: true
              }
          });
      </script>
      <script>
          $(document).ready(function() {
              $('.modifier-agent').on('click', function() {
                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  $urls = $(this).attr("action");
                  // ajax
                  $.ajax({
                      type: "GET",
                      url: $urls,
                      data: {
                          id: $(this).find('#id-agent').val()
                      },
                      dataType: 'json',
                      success: function(res) {
                          // $('#jan_plan').val(res.jan);
                          $('#btnOpen').trigger('click');
                          $('#name').val(res.name);
                          $('#email').val(res.email);
                          $('#numero').val(res.numero);
                          $('#liens').val(res.liens);
                          $('#site').val(res.site);
                          $('#idIn').val(res.user_id);
                          $('#poste').val(res.poste);
                          console.log(res.email);
                      }
                  });
              });
              $('.infos').on('click', function() {
                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  $urls = $(this).attr("action");
                  // ajax
                  $.ajax({
                      type: "POST",
                      url: $urls,
                      data: {
                          id: $(this).find('#id2').val()
                      },
                      dataType: 'json',
                      success: function(res) {
                          // $('#jan_plan').val(res.jan);
                          $('#infoOpen').trigger('click');
                          $('#info-modal-content2').html(`
                        <div class="c-preloader text-center">
                        <div class="col-12 card-user">
                        <div class="image">
                            <img class="w-100" src="https://infocongo.net/wp-content/uploads/2021/12/goma-intacte.jpg" alt="..." />
                        </div>
                        <div class="content">
                            <div class="author">
                                <style>
                                    .avatar:hover {
                                        transform: scale(1.2);
                                        transition: transform 1s 0s ease;
                                    }
                                </style>
                                <a href="{{ asset(Session('picprofile'))}}">
                                    <img id="img" class="avatar border-gray" src="" alt="Profile" />
                                    <h4 class="title text-center"><span id="titre"></span><br />
                                    <span id="infosite"></span><br>
                                        <br><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </h4>
                                </a>
                            </div>
                            <div class="row">
                              <div class="col-md-4">  @lang("Email:")<br> <span id="infoemail"></span><br></div>
                              <div class="col-md-4">  @lang("Numero:") <br><span id="infonumero"></span><br></div>
                              <div class="col-md-4 text-center">  @lang("Facebook/Twitter:")<br><span id="infoliens"></span><br></div>



                            </div>
                        </div>
                        <hr>
                        <div class="text-center py-3">
                            {{__("Profile design")}} {{Config("app.name")}}
                        </div>
                    </div>
                        </div>
                        `);

                          $('#titre').text(res.name);
                          $('#infoemail').text(res.email);
                          $('#infonumero').text(res.numero);
                          $('#infoliens').text(res.liens);
                          $('#infosite').text(res.site);
                          $('#idIn').text(res.membre_id);
                          if (res.images == null) var img = "{{ asset('assets/img/default.png')}}";
                          else var img = "storage/" + res.images;
                          if (res.email == null) $('#infoemail').remove();
                          if (res.numero == null) $('#infonumero').remove();
                          if (res.liens == null) $('#infoliens').remove();
                          if (res.site == null) $('#infosite').remove();
                          $('#img').attr('src', img);
                          console.log(res.name);
                      }
                  });
              });
          })
      </script>
      <!-- <script src="{{ asset('assets/js/aiz-core.js')}}"></script> -->
      <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script> -->
      <script src="{{asset('assets/selected2/dist/js/select2.min.js')}}"></script>
      <script>
          $(document).ready(function() {
              $('.modifproduit').on('click', function() {
                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  $urls = "{{ route('service.edit')}}";
                  // ajax
                  $.ajax({
                      type: "POST",
                      url: $urls,
                      data: {
                          id: $(this).attr('data-id')
                      },
                      dataType: 'json',
                      success: function(res) {
                          console.log(res.titreFr);
                          // $('#jan_plan').val(res.jan);
                          $('#ServModal').trigger('click');
                          $('#titreFr').val(res.titreFr);
                          $('#titreUs').val(res.titreUs);
                          console.log(res.titreUs);
                          $('#descriptionFr').val(res.descriptionFr);
                          $('#descriptionUs').val(res.descriptionUs);
                          $('#form-modif-service').attr('action', `/service-update/` + res.id);
                      }
                  });
              });
          });
      </script>
