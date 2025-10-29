const btnKirim = document.getElementById('btnKirim');
const tabel = document.getElementById('tabelMahasiswa').getElementsByTagName('tbody')[0];
const pesan = document.getElementById('pesan');
const jumlahData = document.getElementById('jumlahData');

let noUrut = 1;
let dataMahasiswa = [];

btnKirim.addEventListener('click', function() {
    const nama = document.getElementById('nama').value.trim();
    const nim = document.getElementById('nim').value.trim();
    const semester = document.getElementById('semester').value.trim();
    const prodi = document.getElementById('prodi').value.trim();
    const email = document.getElementById('email').value.trim();

    if (!nama || !nim || !semester || !prodi || !email) {
        alert('⚠️ Semua kolom harus diisi!');
        return;
    }

    const data = { nama, nim, semester, prodi, email };
    dataMahasiswa.push(data);

    const baris = tabel.insertRow();
    baris.insertCell(0).innerText = noUrut++;
    baris.insertCell(1).innerText = nama;
    baris.insertCell(2).innerText = `${prodi} - Semester ${semester}`;

    jumlahData.innerText = `Jumlah data: ${dataMahasiswa.length}`;
    pesan.innerText = " Data berhasil dikirim!";
    pesan.style.color = "green";

    console.log("Data dikirim:", data);
    console.log("Array dataMahasiswa:", dataMahasiswa);

    document.getElementById('formMahasiswa').reset();
});
