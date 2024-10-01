
// let saldoawal = Number(prompt('Masukan saldo awal?'));
// let gaji = Number(prompt('gaji perbulan?'));
// const saldoakhir = saldoawal + gaji;
// alert('saldo akhir anda = ' + saldoakhir)

// Array untuk hari dalam seminggu
const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

// Membuat objek Date dengan tanggal saat ini
const today = new Date();

// Mendapatkan hari dari tanggal saat ini (0-6, di mana 0 adalah Minggu dan 6 adalah Sabtu)
const dayOfWeek = today.getDay();

// Mendapatkan nama hari dari array
const dayName = days[dayOfWeek];

// Menampilkan nama hari
alert(`Hari ini adalah: ${dayName}`);
