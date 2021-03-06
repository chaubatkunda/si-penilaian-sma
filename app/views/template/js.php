<script type="text/javascript">
    var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [{
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56]
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 86]
            }
        ]
    };
    var pdata = [{
            value: 300,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Complete"
        },
        {
            value: 50,
            color: "#F7464A",
            highlight: "#FF5A5E",
            label: "In-Progress"
        }
    ]
</script>
<!-- Google analytics script-->
<script type="text/javascript">
    if (document.location.hostname == 'pratikborsadiya.in') {
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
    $('#demoDate').datepicker({
        format: "dd-mm-yyyy",
        autoclose: true,
        todayHighlight: true
    });
    $('#demoSelect').select2();
    $('#demoSelectm').select2();
</script>
<script>
    $(function() {
        $("#hapus-siswa").on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr("href");

            Swal.fire({
                title: 'Yakin?',
                text: "Data ini akan dihapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak',
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                );
            })
        });

        $("#guru-user").on("change", function() {
            const guru = $(this).val();
            // const nama_guru
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('user/getMapelGuru'); ?>",
                dataType: "json",
                data: {
                    guru: guru
                },
                success: function(data) {
                    $("#nama_guru").val(data.nama_guru);

                }
            });
        });

        $('.kelas-siswa').on('change', function() {
            const kelas = $(this).val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('user/getMapelGuru'); ?>",
                dataType: "json",
                data: {
                    guru: guru
                },
                success: function(data) {
                    // for (let i = 0; i < data.length; i++) {
                    //     const element = data[i].nama_guru;
                    //     console.log(element);
                    // }
                    // console.log(data.nama_guru);
                    $("#nama_guru").val(data.nama_guru);

                }
            });


            // console.log(kelas);
        });
    });
</script>
<script>
    // Tampil Menu
    $(document).ready(function() {
        $(".kodemp").on('change', function() {
            const kode = $(this).val();
            $.ajax({
                type: 'post',
                url: "<?php echo base_url('mata_pelajaran/ajax_kodeMapel') ?>",
                dataType: "json",
                data: {
                    'kode': kode
                },
                success: function(data) {
                    if (kode) {
                        $(".namamp").val(data.nama_mapel);
                        console.log(data.nama_mapel);
                    } else {
                        $(".namamp").val(" ");
                    }
                }
            });
        });


        $(document).on('change', '.kelas', function() {
            var id = $(this).val();
            var Sid = $(this).attr('id');
            var tes = ++Sid;
            $.ajax({
                type: 'post',
                url: "<?php echo base_url('mata_pelajaran/ajax_kelas') ?>",
                data: {
                    'id': id,
                    'tes': Sid
                },
                success: function(data) {
                    if (document.getElementById(tes) == null) {
                        // console.log(id);
                        $('#kelas_dropdown').append(data);
                    } else {
                        document.getElementById(tes).innerHTML = data;
                    }
                    var elems = document.querySelectorAll(".kelas");
                    var len = elems.length;
                    var lastelement = len < 1 ? "" : elems[len - 1];
                }
            })
            // console.log(tes);
        });
    });
</script>
<!-- <script>
    CKEDITOR.replace('editor');
</script> -->