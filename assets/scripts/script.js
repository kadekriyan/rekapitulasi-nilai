// Sweet Alert
const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire(
		'Sukses',
		flashData,
		'success'
	)
}

const flashGagal = $('.flash-data-gagal').data('flashdata');

if (flashGagal) {
	Swal.fire(
		'Failed',
		flashGagal,
		'error'
	)
}

$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda yakin',
		text: "data akan dihapus!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#e74c3c',
		cancelButtonColor: '#3085d6',
		cancelButtonText: 'Kembali',
		confirmButtonText: 'Hapus'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});


