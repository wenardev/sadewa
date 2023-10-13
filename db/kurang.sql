ALTER TABLE `pengajuan_kk` 
  ADD `warga_negara_anak_lima` varchar(20) NOT NULL,
  ADD `pendidikan_terakhir_anak_lima` varchar(20) NOT NULL,
  ADD `pekerjaan_anak_lima` varchar(20) NOT NULL,
  ADD `status_keluarga_anak_lima` varchar(20) NOT NULL,
  ADD `no_paspor_anak_lima` varchar(20) NOT NULL,
  ADD `no_kitab_anak_lima` varchar(20) NOT NULL,
  ADD `nama_ayah_anak_lima` varchar(20) NOT NULL,
  ADD `nama_ibu_anak_lima` varchar(20) NOT NULL,
  ADD `nik_anak_enam` varchar(20) NOT NULL,
  ADD `nama_anak_enam` varchar(20) NOT NULL,
  ADD `tempat_lahir_anak_enam` varchar(20) NOT NULL,
  ADD `tanggal_lahir_anak_enam` varchar(20) NOT NULL,
  ADD `jenis_kelamin_anak_enam` varchar(20) NOT NULL,
  ADD `agama_anak_enam` varchar(20) NOT NULL,
  ADD `status_kawin_anak_enam` varchar(20) NOT NULL,
  ADD `warga_negara_anak_enam` varchar(20) NOT NULL,
  ADD `pendidikan_terakhir_anak_enam` varchar(20) NOT NULL,
  ADD `pekerjaan_anak_enam` varchar(20) NOT NULL,
  ADD `status_keluarga_anak_enam` varchar(20) NOT NULL,
  ADD `no_paspor_anak_enam` varchar(20) NOT NULL,
  ADD `no_kitab_anak_enam` varchar(20) NOT NULL,
  ADD `nama_ayah_anak_enam` varchar(20) NOT NULL,
  ADD `nama_ibu_anak_enam` varchar(20) NOT NULL,
  ADD `nik_anak_tujuh` varchar(20) NOT NULL,
  ADD `nama_anak_tujuh` varchar(20) NOT NULL,
  ADD `tempat_lahir_anak_tujuh` varchar(20) NOT NULL,
  ADD `tanggal_lahir_anak_tujuh` varchar(20) NOT NULL,
  ADD `jenis_kelamin_anak_tujuh` varchar(20) NOT NULL,
  ADD `agama_anak_tujuh` varchar(20) NOT NULL,
  ADD `status_kawin_anak_tujuh` varchar(20) NOT NULL,
  ADD `warga_negara_anak_tujuh` varchar(20) NOT NULL,
  ADD `pendidikan_terakhir_anak_tujuh` varchar(20) NOT NULL,
  ADD `pekerjaan_anak_tujuh` varchar(20) NOT NULL,
  ADD `status_keluarga_anak_tujuh` varchar(20) NOT NULL,
  ADD `no_paspor_anak_tujuh` varchar(20) NOT NULL,
  ADD `no_kitab_anak_tujuh` varchar(20) NOT NULL,
  ADD `nama_ayah_anak_tujuh` varchar(20) NOT NULL,
  ADD `nama_ibu_anak_tujuh` varchar(20) NOT NULL,
  ADD `nik_anak_delapan` varchar(20) NOT NULL,
  ADD `nama_anak_delapan` varchar(20) NOT NULL,
  ADD `tempat_lahir_anak_delapan` varchar(20) NOT NULL,
  ADD `tanggal_lahir_anak_delapan` varchar(20) NOT NULL,
  ADD `jenis_kelamin_anak_delapan` varchar(20) NOT NULL,
  ADD `agama_anak_delapan` varchar(20) NOT NULL,
  ADD `status_kawin_anak_delapan` varchar(20) NOT NULL,
  ADD `warga_negara_anak_delapan` varchar(20) NOT NULL,
  ADD `pendidikan_terakhir_anak_delapan` varchar(20) NOT NULL,
  ADD `pekerjaan_anak_delapan` varchar(20) NOT NULL,
  ADD `status_keluarga_anak_delapan` varchar(20) NOT NULL,
  ADD `no_paspor_anak_delapan` varchar(20) NOT NULL,
  ADD `no_kitab_anak_delapan` varchar(20) NOT NULL,
  ADD `nama_ayah_anak_delapan` varchar(20) NOT NULL,
  ADD `nama_ibu_anak_delapan` varchar(20) NOT NULL,
  ADD `nik_anak_sembilan` varchar(20) NOT NULL,
  ADD `nama_anak_sembilan` varchar(20) NOT NULL,
  ADD `tempat_lahir_anak_sembilan` varchar(20) NOT NULL,
  ADD `tanggal_lahir_anak_sembilan` varchar(20) NOT NULL,
  ADD `jenis_kelamin_anak_sembilan` varchar(20) NOT NULL,
  ADD `agama_anak_sembilan` varchar(20) NOT NULL,
  ADD `status_kawin_anak_sembilan` varchar(20) NOT NULL,
  ADD `warga_negara_anak_sembilan` varchar(20) NOT NULL,
  ADD `pendidikan_terakhir_anak_sembilan` varchar(20) NOT NULL,
  ADD `pekerjaan_anak_sembilan` varchar(20) NOT NULL,
  ADD `status_keluarga_anak_sembilan` varchar(20) NOT NULL,
  ADD `no_paspor_anak_sembilan` varchar(20) NOT NULL,
  ADD `no_kitab_anak_sembilan` varchar(20) NOT NULL,
  ADD `nama_ayah_anak_sembilan` varchar(20) NOT NULL,
  ADD `nama_ibu_anak_sembilan` varchar(20) NOT NULL,
  ADD `nik_anak_sepuluh` varchar(20) NOT NULL,
  ADD `nama_anak_sepuluh` varchar(20) NOT NULL,
  ADD `tempat_lahir_anak_sepuluh` varchar(20) NOT NULL,
  ADD `tanggal_lahir_anak_sepuluh` varchar(20) NOT NULL,
  ADD `jenis_kelamin_anak_sepuluh` varchar(20) NOT NULL,
  ADD `agama_anak_sepuluh` varchar(20) NOT NULL,
  ADD `status_kawin_anak_sepuluh` varchar(20) NOT NULL,
  ADD `warga_negara_anak_sepuluh` varchar(20) NOT NULL,
  ADD `pendidikan_terakhir_anak_sepuluh` varchar(20) NOT NULL,
  ADD `pekerjaan_anak_sepuluh` varchar(20) NOT NULL,
  ADD `status_keluarga_anak_sepuluh` varchar(20) NOT NULL,
  ADD `no_paspor_anak_sepuluh` varchar(20) NOT NULL,
  ADD `no_kitab_anak_sepuluh` varchar(20) NOT NULL,
  ADD `nama_ayah_anak_sepuluh` varchar(20) NOT NULL,
  ADD `nama_ibu_anak_sepuluh` varchar(20) NOT NULL,
  ADD `alamat` text NOT NULL,
  ADD `no_rt` varchar(3) NOT NULL,
  ADD `no_rw` varchar(3) NOT NULL,
  ADD `kode_pos` int(5) NOT NULL,
  ADD `nama_surat` varchar(20) NOT NULL,
  ADD `date_created` date NOT NULL AFTER `status_kawin_anak_lima`