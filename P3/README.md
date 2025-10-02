# BOOSTRAP
> Konfigurasi Grid Columns di Setiap Breakpoint

Pemilihan konfigurasi grid columns pada setiap breakpoint didasarkan pada prinsip optimalisasi ruang dan pengalaman pengguna. Untuk perangkat mobile dengan layar sempit, saya menggunakan col-6 yang menampilkan dua kolom foto per baris, memastikan ukuran gambar tetap cukup besar untuk dilihat tanpa membuat pengguna harus melakukan zoom. Pada breakpoint medium (col-md-4), grid beralih menjadi tiga kolom per baris untuk tablet yang memiliki lebar layar lebih memadai, meningkatkan kepadatan konten tanpa mengorbankan keterbacaan. Di breakpoint large (col-lg-4), meskipun nilai kolomnya sama dengan medium, lebar container yang bertambah secara otomatis memberikan ruang yang lebih luas antara elemen-elemen gambar. Pendekatan ini memastikan konten tetap proporsional dan mudah diakses di semua ukuran perangkat.


> Memastikan Tombol Action Mudah Dijangkau di Mobile

Untuk memastikan tombol Follow/Edit Profile tetap mudah dijangkau di perangkat mobile, saya menerapkan beberapa strategi khusus. Pertama, menggunakan sistem ordering Bootstrap dengan order-1 order-sm-2 yang menempatkan tombol action di bagian atas pada mobile layout, sehingga pengguna tidak perlu melakukan scrolling berlebihan untuk menemukannya. Kedua, menerapkan flexbox yang responsif dengan d-flex flex-column flex-sm-row yang membuat tombol tersusun vertikal di mobile untuk menghindari kesalahan tap, kemudian berubah menjadi horizontal di layar yang lebih besar. Ketiga, menggunakan ukuran tombol yang optimal dengan btn-sm yang memberikan target tap yang cukup besar untuk jari, sementara tetap tidak mendominasi layar. Keempat, memastikan spacing yang adequate dengan gap-2 yang memberikan jarak cukup antara tombol untuk mencegah mis-tap.


> Potensi Masalah dan Solusi untuk 50 Postingan

Jika jumlah postingan bertambah menjadi 50, terdapat beberapa potensi masalah performa dan usability. Masalah utama adalah loading time yang lebih lama karena harus memuat 50 gambar sekaligus, yang dapat diatasi dengan implementasi lazy loading dimana gambar hanya dimuat ketika mendekati viewport. Kemudian, penggunaan memori yang tinggi pada perangkat mobile dapat diselesaikan dengan virtual scrolling yang hanya merender elemen yang terlihat di layar. Untuk organisasi konten, grid yang ada dapat diperkuat dengan pagination atau infinite scroll untuk membatasi jumlah postingan yang ditampilkan sekaligus. Dari sisi maintenance, ekstraksi komponen post-item menjadi template terpisah akan memudahkan management konten dalam jumlah besar. Solusi grid yang sudah responsif tetap dapat menangani peningkatan jumlah postingan asal dikombinasikan dengan teknik optimasi performa tersebut.



# TAILWIND
> Potensi Masalah dan Solusi untuk 50 Postingan

Jika jumlah postingan bertambah menjadi 50, terdapat beberapa potensi masalah performa dan usability. Masalah utama adalah loading time yang lebih lama karena harus memuat 50 gambar sekaligus, yang dapat diatasi dengan implementasi lazy loading dimana gambar hanya dimuat ketika mendekati viewport. Kemudian, penggunaan memori yang tinggi pada perangkat mobile dapat diselesaikan dengan virtual scrolling yang hanya merender elemen yang terlihat di layar. Untuk organisasi konten, grid yang ada dapat diperkuat dengan pagination atau infinite scroll untuk membatasi jumlah postingan yang ditampilkan sekaligus. Dari sisi maintenance, ekstraksi komponen post-item menjadi template terpisah akan memudahkan management konten dalam jumlah besar. Solusi grid yang sudah responsif tetap dapat menangani peningkatan jumlah postingan asal dikombinasikan dengan teknik optimasi performa tersebut.


> Pemanfaatan Utility Responsive Tailwind untuk Masalah Layout Mobile

Utility responsive Tailwind dimanfaatkan secara strategis untuk mengatasi berbagai tantangan layout di perangkat mobile. Masalah alignment diselesaikan dengan kombinasi class seperti "text-center md:text-left" dan "flex justify-center md:justify-start" yang memastikan konten terpusat di mobile untuk interaksi yang thumb-friendly, kemudian beralih ke alignment kiri di desktop untuk pola pembacaan yang lebih natural. Tantangan tata letak tombol action diatasi dengan "flex flex-col sm:flex-row gap-3" yang membuat tombol tersusun vertikal di mobile untuk kemudahan tapping, kemudian berubah menjadi horizontal di layar yang lebih besar. Untuk komponen stories yang membutuhkan scroll horizontal, penerapan "overflow-x-auto" memungkinkan navigasi yang smooth tanpa merusak layout utama. Pendekatan ini memastikan pengalaman pengguna yang optimal di semua perangkat dengan perubahan layout yang gradual dan terencana.


>Trade-off antara Utility Classes dan Custom Components

Pemilihan antara utility classes dan custom components melibatkan pertimbangan mendalam antara kecepatan development dan maintainability jangka panjang. Utility classes menawarkan kecepatan development yang tinggi dengan menghilangkan kebutuhan untuk berpindah konteks ke file CSS terpisah, serta memberikan konsistensi melalui design system yang terstandarisasi. Namun, pendekatan ini menghasilkan HTML yang lebih verbose dan berisik, serta menyulitkan modifikasi dalam skala besar karena perubahan harus dilakukan di setiap instance. Di sisi lain, custom components menawarkan HTML yang lebih bersih dan maintainability yang lebih baik melalui perubahan terpusat, tetapi membutuhkan konteks switching yang konstan dan sistem naming yang konsisten. Untuk project skala menengah seperti ini, pendekatan hybrid paling optimal—menggunakan utility classes untuk layout dasar dan spacing, lalu mengekstrak komponen khusus hanya untuk elemen yang sangat repetitif, sehingga mendapatkan keuntungan dari kedua dunia tanpa mengorbankan produktivitas atau maintainability.
