<?php
use App\Models\Buku;
$buku = Buku::get();
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/admin/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('assets/admin/demo/chart-bar-demo.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
<script src="{{ asset('assets/admin/js/datatables-simple-demo.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery-3.7.1.min.js') }}"></script>

@include('sweetalert::alert')

<script>
    $('.btn-add').click(function() {
        let tbody = $('tbody');
        let newTr = "<tr>";
        newTr += "<td>";
        newTr += "<select name='id_buku[]'>";
        newTr += "<option value=''>Pilih Buku</option>";
        @foreach ($buku as $buku)
            newTr += "<option value={{ $buku->id }}>{{ $buku->nama_buku }}</option>";
        @endforeach
        newTr += "</select>";
        newTr += "</td>";
        newTr += "<td><input type='date' name='tanggal_pinjam[]' class='form-control'></td>";
        newTr += "<td><input type='date' name='tanggal_pengembalian[]' class='form-control'></td>";
        newTr += "<td><input type='text' name='keterangan[]' class='form-control'></td>";
        newTr += "<td>Hapus</td>";
        newTr += "</tr>";
        tbody.append(newTr);
    });

    $('.show_confirm').click(function(event) {
        let form = $(this).closest("form");
        let name = $(this).data("name");

        event.preventDefault();
        const swalButton = swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success mr-2',
                cancelButton: 'btn btn-danger mr-2',
            },
            buttonsStyling: false,
        });
        swalButton.fire({
            title: 'Apakah anda yakin?',
            text: "akan menghapus data ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Hapus!',
            confirmButtonClass: 'mr-2',
            cancelButtonClass: 'mr-2',
            cancelButtonText: 'Tidak, Dibatalkan?',
            reverseButtons: true,
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            } else if (result.dismiss === swal.Button.getDismissReason.cancel) {
                swalButton.fire(
                    'Dibatalkan',
                    'Data Anda aman :)',
                    'error'
                )
            }
        });
    });
</script>
