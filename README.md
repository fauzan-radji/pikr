# TODOs

- Migrations
  - [x] User | **users**
    - **nama** [_string_]
    - **username** [_string | unique_]
    - **email** [_string | unique_]
    - **password** [_string_]
  - [x] Admin | **admins**
    - **user_id** [_foreignId_]
  - [x] Jabatan | **jabatans**
    - **nama** [_string_]
  - [x] Provinsi | **provinsis**
    - **nama** [_string_]
    - **kode** [_string(**2**)_]
  - [x] Kabupaten Kota | **kabkots**
    - **provinsi_id** [_foreignId_]
    - **nama** [_string_]
    - **kode** [_string(**2**)_]
  - [x] Kecamatan | **kecamatans**
    - **kabkot_id** [_foreignId_]
    - **nama** [_string_]
    - **kode** [_string(**2**)_]
  - [x] Desa | **desas**
    - **kecamatan_id** [_foreignId_]
    - **nama** [_string_]
  - [x] Pembina | **pembinas**
    - **user_id** [_foreignId_]
    - **jabatan_id** [_foreignId_]
    - **desa_id** [_foreignId_]
    - **nomor_urut** [_string(**2**)_]
  - [x] Surat Keputusan | **surat_keputusans**
    - **nomor** [_string_]
    - **tanggal** [_date_]
    - **dikeluarkan_oleh** [_string_]
  - [x] PIK-R | **pikrs**
    - **user_id** [_foreignId_]
    - **desa_id** [_foreignId_]
    - **pembina_id** [_foreignId_]
    - **sk_id** [_foreignId | nullable_]
    - **nama** [_string_]
    - **nomor_urut** [_string(**2**)_]
    - **alamat** [_string_]
    - **basis** [_string_]
    - **akun_medsos** [_string_]
    - **sumber_dana** [_string_]
    - **keterpaduan_kelompok** [_boolean | default(**false**)_]
    - **pro_pn** [_boolean | default(**false**)_]
    - **materi_lainnya** [*string | nullable*]
    - **sarana_lainnya** [*string | nullable*]
  - [x] Materi | **materies**
    - **nama** [_string_]
  - [x] Sarana | **saranas**
    - **nama** [_string_]
  - [x] Mitra | **mitras**
    - **nama** [_string_]
  - [ ] Pengurus | **penguruses**
    - **pikr_id** [_foreignId_]
    - **nama** [_string_]
    - **nik** [_string_]
    - **jabatan** [_enum(Konselor Sebaya)_] <!-- FIXME enum berisi jabatan ->
    - **hp** [_string_]
    - **pernah_pelatihan** [_boolean | default(**false**)_]
  - [x] Laporan Kegiatan | **laporans**
    - **pikr_id** [_foreignId_]
    - **tanggal** [_date_]
  - [x] Pelayanan Informasi | **pelayanan_informasis**
    - **materi_id** [_foreignId | nullable_]
    - **laporan_id** [_foreignId_]
    - **materi_lainnya** [_string | nullable_]
    - **nama** [_string_]
    - **tanggal** [_date_]
    - **jabatan_narsum** [_string_]
    - **nama_narsum** [_string_]
    - **jumlah_peserta** [_integer_]
  - [x] Konseling Individu | **konseling_individus**
    - **materi_id** [_foreignId | nullable_]
    - **laporan_id** [_foreignId_]
    - **pengurus_id** [_foreignId_]
    - **materi_lainnya** [_string | nullable_]
    - **tanggal** [_date_]
    - **jumlah_cowok** [_integer_]
    - **jumlah_cewek** [_integer_]
    - **jumlah_rawal** [_integer_]
    - **jumlah_rtengah** [_integer_]
    - **jumlah_rakhir** [_integer_]
  - [x] Konseling Kelompok | **konseling_kelompoks**
    - **materi_id** [_foreignId | nullable_]
    - **laporan_id** [_foreignId_]
    - **pengurus_id** [_foreignId_]
    - **materi_lainnya** [_string | nullable_]
    - **tanggal** [_date_]
    - **jumlah_cowok** [_integer_]
    - **jumlah_cewek** [_integer_]
    - **jumlah_rawal** [_integer_]
    - **jumlah_rtengah** [_integer_]
    - **jumlah_rakhir** [_integer_]
  - [x] pikr_sarana
    - **pikr_id** [_foreignId_]
    - **sarana_id** [_foreignId_]
    - **status** [_boolean | default(**false**)_]
  - [x] materi_pikr
    - **pikr_id** [_foreignId_]
    - **materi_id** [_foreignId_]
    - **status** [_boolean | default(**false**)_]
  - [x] mitra_pikr
    - **pikr_id** [_foreignId_]
    - **mitra_id** [_foreignId_]
    - **mou** [_boolean | default(**false**)_]
    - **bentuk_kerjasama** [_string_]
- [ ] Factories
- [ ] Seeders
- Relations
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
- Register
  - [ ] PIK-R
- Login
  - [ ] Admin
  - [ ] Pembina
  - [ ] PIK-R
