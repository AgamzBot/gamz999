function addStudent() {
    const name = document.getElementById('name').value;
    const class = document.getElementById('class').value;
    const address = document.getElementById('address').value;

    // Validasi data yang dimasukkan
    if (name === '' || class === '' || address === '') {
        alert('Mohon lengkapi semua kolom.');
        return;
    }

    // Simpan data siswa secara lokal (misalnya dalam array)
    const newStudent = { name, class, address };
    students.push(newStudent);

    // Tampilkan pesan sukses atau lakukan sesuatu yang sesuai dengan kebutuhan aplikasi Anda
    alert('Siswa berhasil ditambahkan.');
}

function searchStudent() {
    const keyword = document.getElementById('searchInput').value.toLowerCase();
    const searchResult = students.filter(student => {
        return student.name.toLowerCase().includes(keyword) ||
               student.class.toLowerCase().includes(keyword) ||
               student.address.toLowerCase().includes(keyword);
    });

    // Tampilkan hasil pencarian atau lakukan sesuatu yang sesuai dengan kebutuhan aplikasi Anda
    console.log('Hasil pencarian:', searchResult);
}
