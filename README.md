# TODOs

- [ ] Migrations
  - [x] User | **users**
    - **nama** [_string_]
    - **username** [_string | unique_]
    - **email** [_string | unique_]
    - **password** [_string_]
  - [x] Admin | **admins**
    - **user_id** [_foreignKey_]
  - [ ] Pembina | **pembinas**
    - **user_id** [_foreignKey_]
    - jabatan_id
    - desa_id
    - nomor_urut
  - [ ] PIK-R | **pikrs**
    - **user_id** [_foreignKey_]
    - desa_id
    - sk_id
    - pembina_id
    - nama
    - nomor_urut
    - alamat
    - basis
    - akun_medsos
    - sumber_dana
    - keterpaduan_kelompok
    - pro_pn
    - materi_lainnya [*string*]
    - sarana_lainnya [*string*]
  - [ ] Provinsi | **provinsies**
    - nama
    - kode
  - [ ] Kabupaten Kota | **kabkots**
    - provinsi_id
    - nama
    - kode
  - [ ] Kecamatan | **kecamatans**
    - kabupaten_kota_id
    - nama
    - kode
  - [ ] Desa | **desas**
    - kecamatan_id
    - nama
  - [ ] Jabatan | **jabatans**
    - nama
  - [ ] Surat Keputusan | **surat_keputusans**
    - nomor
    - tanggal
    - dikeluarkan_oleh
  - [ ] Materi | **materies**
    - nama
  - [ ] Sarana | **saranas**
    - nama
  - [ ] Mitra | **mitras**
    - nama
  - [ ] Pengurus | **penguruses**
    - pikr_id
    - nama
    - nik
    - jabatan
    - hp
    - pernah_pelatihan
  - [ ] Laporan Kegiatan | **laporans**
    - tanggal
  - [ ] Pelayanan Informasi | **pelayanan_informasies**
    - pikr_id
    - materi_id
    - laporan_id
    - materi_lainnya
    - nama
    - tanggal
    - jabatan_narsum
    - nama_narsum
    - jumlah_peserta
  - [ ] Konseling Individu | **konseling_individus**
    - pikr_id
    - materi_id
    - pengurus_id
    - laporan_id
    - materi_lainnya
    - tanggal
    - jumlah_cowok
    - jumlah_cewek
    - jumlah_rawal
    - jumlah_rtengah
    - jumlah_rakhir
  - [ ] Konseling Kelompok | **konseling_kelompoks**
    - pikr_id
    - materi_id
    - pengurus_id
    - laporan_id
    - materi_lainnya
    - tanggal
    - jumlah_cowok
    - jumlah_cewek
    - jumlah_rawal
    - jumlah_rtengah
    - jumlah_rakhir
  - [ ] pikr_sarana
    - pikr_id
    - sarana_id
    - status
  - [ ] pikr_materi
    - pikr_id
    - materi_id
    - status
  - [ ] pikr_mitra
    - pikr_id
    - mitra_id
    - mou
    - bentuk_kerjasama
- [ ] Factories
- [ ] Seeders
- [ ] Relations
  - [ ] User - Admin | **One To One**
  - [ ] User - Pembina | **One To One**
  - [ ] User - PIK-R | **One To One**
  - [ ] Desa - Pembina | **One To Many**
  - [ ] Jabatan - Pembina | **One To Many**
  - [ ] Kecamatan - Desa | **One To Many**
  - [ ] Kabupaten Kota - Kecamatan | **One To Many**
  - [ ] Provinsi - Kabupaten Kota | **One To Many**
  - [ ] Desa - PIK-R | **One To Many**
  - [ ] Surat Keputusan - PIK-R | **One To One**
  - [ ] Pembina - PIK-R | **One To Many**
  - [ ] Materi - Pelayanan Informasi | **One To Many**
  - [ ] Laporan - Pelayanan Informasi | **One To Many**
  - [ ] Materi - Konseling Individu | **One To Many**
  - [ ] Laporan - Konseling Individu | **One To Many**
  - [ ] Pengurus - Konseling Individu | **One To Many**
  - [ ] Materi - Konseling Kelompok | **One To Many**
  - [ ] Laporan - Konseling Kelompok | **One To Many**
  - [ ] Pengurus - Konseling Kelompok | **One To Many**
  - [ ] PIK-R - Laporan Kegiatan | **One To Many**
  - [ ] PIK-R - Pengurus | **One To Many**
  - [ ] PIK-R - Materi | **Many To Many**
  - [ ] PIK-R - Sarana | **Many To Many**
  - [ ] PIK-R - Mitra | **Many To Many**
- [ ] Register
  - [ ] PIK-R
- [ ] Login
  - [ ] Admin
  - [ ] Pembina
  - [ ] PIK-R
