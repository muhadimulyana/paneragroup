const successData = $('.success-data').data('success');
const warningData = $('.warning-data').data('warning');
const errorData = $('.error-data').data('error');


if (successData) {
	Swal.fire({
		title: 'Berhasil ',
		text: successData,
		type: 'success'
	});
}

if (warningData) {
	Swal.fire({
		title: 'Informasi ',
		text: warningData,
		type: 'info'
	});
}

if (errorData) {
	Swal.fire({
		title: 'Oops ',
		text: errorData,
		type: 'error'
	});
}


//tombol hapus

$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');


	Swal.fire({
		title: "Apakah anda yakin?",
		text: "data akan dihapus!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, Hapus Data!',
		cancelButtonText: 'Batal'
	}).then((result) => {
		if (result.value) {

			document.location.href = href;

		}
	})


});

$('.btnBatal').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');


	Swal.fire({
		title: "Apakah anda yakin?",
		text: "ITSR akan dibatalkan!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya!',
		cancelButtonText: 'Batal'
	}).then((result) => {
		if (result.value) {

			document.location.href = href;

		}
	})


});

//tombol keluar

$('.tombol-keluar').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');


	Swal.fire({
		title: "Apakah anda yakin ingin logout?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya',
		cancelButtonText: 'Batal'
	}).then((result) => {
		if (result.value) {

			document.location.href = href;

		}
	})


});
