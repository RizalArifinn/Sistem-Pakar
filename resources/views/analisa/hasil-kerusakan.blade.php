@extends('layouts.layout')
@section('title', 'Hasil Analisa')
@section('body')
		<div class="container">
	      <div class="row row-offcanvas row-offcanvas-right">
		        <div class="col-xs-12 col-sm-9">
			          <div class="jumbotron">
									<!--- msin tidak mau hidup/sulit hidup --->
										@if (url()->current() == url('hasil/Q001'))
					              <h3>Pertanyaan : </h3>
					              <h4><i>Apakah bensin mencapai karburator?</i></h4>
					              <h3>Hasil Analisa : </h3>
												<ul class="list-group">
													  <li class="list-group-item">Tidak ada bensin di dalam tangki</li>
						                <li class="list-group-item">Saluran bahan bakar tersumbat</li>
						                <li class="list-group-item">Klep pelampung tersumbat</li>
						                <li class="list-group-item">Saringan bahan bakar tersumbat</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q002'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah busi mengeluarkan api?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Busi rusak</li>
														<li class="list-group-item">Busi kotor</li>
														<li class="list-group-item">Unit CDI rusak</li>
														<li class="list-group-item">Kabel tegangan tinggi putus atau ada konsleting</li>
														<li class="list-group-item">Alternator rusak</li>
														<li class="list-group-item">Koil pengapian patah atau ada konsleting</li>
														<li class="list-group-item">Kabel-kabel tidak tersambung dengan baik</li>
														<li class="list-group-item">Terputus atau ada konsleting</li>
														<li class="list-group-item">Dinamo rusak</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q003'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah percikan apinya kuat?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Busi rusak</li>
														<li class="list-group-item">Busi kotor</li>
														<li class="list-group-item">Unit CDI rusak</li>
														<li class="list-group-item">Kabel tegangan tinggi putus atau ada konsleting</li>
														<li class="list-group-item">Alternator rusak</li>
														<li class="list-group-item">Koil pengapian patah atau ada konsleting</li>
														<li class="list-group-item">Kabel-kabel tidak tersambung dengan baik</li>
														<li class="list-group-item">Terputus atau ada konsleting</li>
														<li class="list-group-item">Dinamo rusak</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q004'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah kompresi silinder baik?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Cuk terbuka secara berlebihan</li>
														<li class="list-group-item">Jarak renggang klep terlalu kecil</li>
														<li class="list-group-item">Klep terbuka terus (macet)</li>
														<li class="list-group-item">Silinder dan cincin piston terkikis</li>
														<li class="list-group-item">Gasket kepala silinder rusak</li>
														<li class="list-group-item">Klep Macet</li>
														<li class="list-group-item">Bukaan klep tidak tepat</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q005'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah mesin hidup tetapi segera mati lagi?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Cuk terbuka secara berlebihan</li>
														<li class="list-group-item">Sekrup udara karburator terlalu menutup</li>
														<li class="list-group-item">Ada kebocoran udara pada manifold</li>
														<li class="list-group-item">Waktu pengapian tidak tepat</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q006'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah businya basah?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Karburator banjir</li>
														<li class="list-group-item">Cuk karburator tertutup secara berlebihan</li>
														<li class="list-group-item">Skep terbuka secara berlebihan</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q007'))
												<h3>Pertanyaan : </h3>
												<h4><i>Silahkan hidupkan motor dalam keadaan cuk tertutup, apakah motor bisa hidup?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Motor anda tidak bermasalah. Terima kasih telah menggunakan layanan kami</li>
												</ul>
									<!--- end of mesin tidak mau hidup/sulit hidup --->

									<!--- kendala pada gigi rotari/kopling --->
										@elseif (url()->current() == url('hasil/Q008'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah kopling slip ketika berakselerasi?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Peralatan pengungkit kopling rusak</li>
														<li class="list-group-item">Cakram terkikis</li>
														<li class="list-group-item">Pegas lemah</li>
														<li class="list-group-item">Penyetelan kopling tidak benar</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q009'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah kopling tidak mau terlepas?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Peralatan pengungkit kopling rusak</li>
														<li class="list-group-item">Pelat-pelat oleng</li>
														<li class="list-group-item">Penyetelan kopling tidak benar</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q010'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah gigi sulit dioper?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Poros pemindah gigi rusak</li>
														<li class="list-group-item">Pelat dan pin stopper rusak</li>
														<li class="list-group-item">Baut pelat stopper rusak</li>
														<li class="list-group-item">Penyetelan kopling tidak benar</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q011'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah transmisi berpindah keluar dari gigi secara otomatis?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Lengan stopper rusak</li>
														<li class="list-group-item">Pelat stopper rusak</li>
														<li class="list-group-item">Baut pelat stopper longgar</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q012'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah pedal pemindah gigi tidak kembali dengan sendirinya?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Pegas pengembalian poros pemindah gigi lemah atau patah</li>
														<li class="list-group-item">Poros pemindah gigi macet</li>
												</ul>
									<!--- end of kendal pda gigirotari/kopling --->

									<!--- mesin kekurangandaya --->
										@elseif (url()->current() == url('hasil/Q013'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah tekanan ban normal?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Ban bocor atau kurang angin</li>
														<li class="list-group-item">Pentil ban rusak</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q014'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah perputaran mesin dari gigi 1 ke 2 berubah?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Kopling selip</li>
														<li class="list-group-item">Kanvas atau plat kopling terkikis</li>
														<li class="list-group-item">Kanvas atau plat kopling bengkok</li>
														<li class="list-group-item">Tromol kopling sentrifrugal atau kanvas kopling terkikis</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q015'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah putaran mesin naik, ketika gigi 2 turun ke 1 secara perlahan?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Cuk karburator tertutup</li>
														<li class="list-group-item">Saringan udara tersumbat</li>
														<li class="list-group-item">Aliran bahan bakar tertahan</li>
														<li class="list-group-item">Lubang pernapasan tutup tangki tersumbat</li>
														<li class="list-group-item">Knalpot tersumbat</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q016'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah waktu pengapian sudah tepat?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Unit CDI rusak</li>
														<li class="list-group-item">Alternator rusak</li>
														<li class="list-group-item">Pembangkit pulsa rusak</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q017'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah renggang klep sudah tepat?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Penyetelan klep tidak tepat</li>
														<li class="list-group-item">Dudukan klep terkikis</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q018'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah tekanan kompresi silinder normal?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Klep terbuka atau macet</li>
														<li class="list-group-item">Silinder dan cincin piston terkikis</li>
														<li class="list-group-item">Gasket kepala silinder bocor</li>
														<li class="list-group-item">Pengaturan bukaan klep tidak tepat</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q019'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah karburator tersumbat?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Kurangnya perawatan karburator</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q020'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah putaran roda bergerak bebas?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Rem menyangkut</li>
												</ul>
									<!--- end of mesin kekurangan daya --->

									<!--- kendala pada karburator dan bahn bakar --->
										@elseif (url()->current() == url('hasil/Q021'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah mesin berputar tetapi tidak mau hidup?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Bensin di dalam tangki habis</li>
														<li class="list-group-item">Saringan bahan bakar tersumbat</li>
														<li class="list-group-item">Bensin tidak mengalir ke karburator</li>
														<li class="list-group-item">Mesin kebanjiran bensin</li>
														<li class="list-group-item">Tidak ada percikan bunga api pada busi (gangguan sistem pengapian)</li>
														<li class="list-group-item">Saringan udara tersumbat</li>
														<li class="list-group-item">Ada kebocoran pada saluran masuknya udara</li>
														<li class="list-group-item">Cara kerja cuk tidak benar</li>
														<li class="list-group-item">Cara kerja gas tangan tidak benar</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q022'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah mesin susah di hidupkan atau mogok setelah di starter?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Cara kerja cuk tidak benar</li>
														<li class="list-group-item">Gangguan pada sistem pengapian</li>
														<li class="list-group-item">Karburator tidak berfungsi sebagaimana mestinya</li>
														<li class="list-group-item">Bensin kotor</li>
														<li class="list-group-item">Ada kebocoran pada saluran masuknya udara</li>
														<li class="list-group-item">Putaran stasioner tidak tepat</li>
														<li class="list-group-item">Penyetelan sekrup udara tidak tepat</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q023'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah putaran stasioner rata?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Gangguan pada sistem pengapian</li>
														<li class="list-group-item">Putaran stasioner tidak tepat</li>
														<li class="list-group-item">Karburator tidak berfungsi sebagaimana mestinya</li>
														<li class="list-group-item">Bensin kotor</li>
														<li class="list-group-item">Penyetelan sekrup udara tidak tepat</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q024'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah pengapian tidak teratur saat akselerasi?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Gangguan pada sistem pengapian</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q025'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah terjadi ledakan-ledakan pada karburator?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Gangguan pada sistem pengapian</li>
														<li class="list-group-item">Karburator tidak berfungsi sebagaimana mestinya</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q026'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah tenaga kurang dan bahan bakar jadi boros?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Sistem bahan bakar tersumbat</li>
														<li class="list-group-item">Gangguan pada sistem pengapian</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q027'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah campuran bahan bakar dan udara terlalu sedikit? Periksa pada karburator</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Spuyer-spuyer pada karburator kotor atau tersumbat</li>
														<li class="list-group-item">Katup pelampung tidak bekerja dengan baik</li>
														<li class="list-group-item">Tinggi pelampung terlalu rendah</li>
														<li class="list-group-item">Saringan bahan bakar tersumbat</li>
														<li class="list-group-item">Saluran bahan bakar terhambat</li>
														<li class="list-group-item">Kebocoran saluran udara masuk</li>
														<li class="list-group-item">Saluran ventilasi tersumbat</li>
														<li class="list-group-item">Letak klip jarum skep tidak tepat</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q028'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah campuran bahan bakar dan udara terlalu banyak? Periksa pada karburator</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Spuyer-spuyer pada karburator kotor atau tersumbat</li>
														<li class="list-group-item">Katup pelampung rusak</li>
														<li class="list-group-item">Pelampung terlalu tinggi</li>
														<li class="list-group-item">Cuk tertutup terus</li>
														<li class="list-group-item">Saringan udara kotor</li>
												</ul>
									<!--- end of kendala pada karburator dan bahn bakar --->

									<!--- kendala pada slinder & klep --->
										@elseif (url()->current() == url('hasil/Q029'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah tekanan kompresi rendah, motor sulit di hidupkan atau rendahnya performa pada kecepatan rendah?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Penyetelan renggang klep tidak tepat</li>
														<li class="list-group-item">Tangkai klep terbakar dan bengkok</li>
														<li class="list-group-item">Tertib buka klep tidak tepat</li>
														<li class="list-group-item">Pegas klep terputus</li>
														<li class="list-group-item">Dudukan klep terkikis</li>
														<li class="list-group-item">Gasket kepala bocor atau rusak</li>
														<li class="list-group-item">Kepala silinder bengkok atau retak</li>
														<li class="list-group-item">Rusaknya silinder, piston, atau cincin piston</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q030'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah tekanan kompresi terlalu tinggi, terlalu panas atau mesin menggelitik?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Ada kerak-kerak karbon berlebihan pada kepala piston atau ruang pembakaran</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q031'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah motor mengeluarkan asap berlebihan?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Rusaknya tangkai klep atau bos klep</li>
														<li class="list-group-item">Rusaknya sil tangkai klep</li>
														<li class="list-group-item">Rusaknya silinder, piston, atau cincin piston</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q032'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah suara mesin berisik berlebihan?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Penyetelan renggang klep tidak tepat</li>
														<li class="list-group-item">Klep menempel atau rusaknya pegas piston</li>
														<li class="list-group-item">Noken as rusak atau terkikis</li>
														<li class="list-group-item">Poros bubungan terkikis atau rusak</li>
														<li class="list-group-item">Penegang rantai mesin terkikis atau rusak</li>
														<li class="list-group-item">Rantai mesin longgar atau terkikis</li>
														<li class="list-group-item">Gigi-gigi sproket poros bubungan terkikis</li>
														<li class="list-group-item">Pelatuk dan atau poros pelatuk terkikis</li>
														<li class="list-group-item">Terkikisnya silinder, piston, atau cincin piston</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q033'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah putaran stasioner tidak rata?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Tekanan kompresi terlalu rendah</li>
												</ul>
									<!--- end of kendala pada slinder & klep --->

									<!--- kendala pada pengendalian kemudi --->
										@elseif (url()->current() == url('hasil/Q034'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah tekanan ban sudah tepat?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Ban bocor atau kempes</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q035'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah kemudi terasa berat?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Penyetelan poros kemudi terlalu kencang</li>
														<li class="list-group-item">Bantalan kepala kemudi rusak</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q036'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah salah satu roda bergoyang?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Ada speling berlebihan pada bantalan roda</li>
														<li class="list-group-item">Velg bengkok</li>
														<li class="list-group-item">Hub roda tidak terpasang dengan baik</li>
														<li class="list-group-item">Bos-bos engsel lengan ayun terkikis secara berlebihan</li>
														<li class="list-group-item">Rangka bengkok</li>
														<li class="list-group-item">Baut engsel lengan ayun longgar</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q037'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah motor Anda menarik ke salah satu arah? (tidak seimbang)</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Roda depan dan belakang tidak segaris</li>
														<li class="list-group-item">Garpu depan bengkok</li>
														<li class="list-group-item">Lengan ayun bengkok</li>
														<li class="list-group-item">Rangka bengkok</li>
												</ul>
									<!--- end of kendala pada pengendalian kemudi --->

									<!--- kendala pada alternator/kopling starter --->
										@elseif (url()->current() == url('hasil/Q038'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah motor starter tidak mau berputar?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Sekring terbakar</li>
														<li class="list-group-item">Batere lemah</li>
														<li class="list-group-item">Kabel tidak tersambung dengan baik, putus atau konsleting</li>
														<li class="list-group-item">Saklar kunci kontak rusak</li>
														<li class="list-group-item">Saklar starter rusak</li>
														<li class="list-group-item">Relai starter rusak</li>
														<li class="list-group-item">Motor starter rusak</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q039'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah motor starter kurang bertenaga?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Batere lemah</li>
														<li class="list-group-item">Kabel kendor atau terkelupas</li>
														<li class="list-group-item">Roda gigi penggerak starter rusak</li>
														<li class="list-group-item">Roda gigi starter yang di gerakkan rusak</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q040'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah motor starter berputar, tetapi mesin tidak hidup?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Kopling starter rusak</li>
														<li class="list-group-item">Roda gigi penggerak starter rusak</li>
														<li class="list-group-item">Roda gigi starter yang di gerakkan rusak</li>
														<li class="list-group-item">Rantai starter rusak</li>
												</ul>
									<!--- end of kendala pada alternator/kopling starter --->

									<!--- kendala pada performa kecepatan rndah --->
										@elseif (url()->current() == url('hasil/Q041'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah waktu pengapian dan jarak renggang klep sudah tepat?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Jarak renggang klep tidak tepat</li>
														<li class="list-group-item">Waktu pengapian tidak tepat</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q042'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah penyetelan sekrup udara karburator sudah tepat?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Campuran bahan bakar atau udara terlalu sedikit</li>
														<li class="list-group-item">Campuran bahan bakar atau udara terlalu banyak</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q043'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah ada kebocoran udara melalui manifold (salurah hisap dari karburator ke silinder)?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Insulator cincin-O memburuk</li>
														<li class="list-group-item">Karburator tidak terpasang erat</li>
														<li class="list-group-item">Cincin-O pipa pemasukan terkikis</li>
														<li class="list-group-item">Gasket rusak (pipa pemasukan atau insulator)</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q044'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah percikan api di busi kuat?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Busi rusak, ada kerak karbon atau basah</li>
														<li class="list-group-item">Unit CDI rusak</li>
														<li class="list-group-item">Alternator rusak</li>
														<li class="list-group-item">Koil pengapian rusak</li>
														<li class="list-group-item">Pembangkit pulsa rusak</li>
														<li class="list-group-item">Kabel terkelupas atau ada konsleting</li>
												</ul>
									<!--- end of kendala pada performa kecepatan rndah --->

									<!--- kendala pada performa kecepatan tinggi --->
										@elseif (url()->current() == url('hasil/Q045'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah waktu pengapian dan jarak renggang klep sudah tepat?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Jarak renggang klep tidak tepat</li>
														<li class="list-group-item">Unit CDI rusak</li>
														<li class="list-group-item">Peralatan pembangkit listrik rusak</li>
														<li class="list-group-item">Alternator rusak</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q046'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah bahan bakar mengalir?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Bahan bakar di dalam tangki tinggal sedikit</li>
														<li class="list-group-item">Saluran bahan bakar tersumbat</li>
														<li class="list-group-item">Kran bahan bakar tersumbat</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q047'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah main jet dan slow jet tersumbat (letak di karburator)?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Bersihkan main jet atau slow jet</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q048'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah bukaan klep sudah tepat?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Sprocket bubungan tidak di pasang dengan tepat</li>
												</ul>

										@elseif (url()->current() == url('hasil/Q049'))
												<h3>Pertanyaan : </h3>
												<h4><i>Apakah ketegangan pegas klep melemah?</i></h4>
												<h3>Hasil Analisa :</h3>
												<ul class="list-group">
														<li class="list-group-item">Pegas klep rusak</li>
												</ul>
									<!--- end of kendala pada performa kecepatan tinggi --->
										@endif
										<a href="/" class="btn btn-primary"><span class="glyphicon glyphicon-log-out"></span> Kembali ke Home</a>
			          </div>
		        </div><!--/.col-xs-12.col-sm-9-->

						<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
			          <div class="list-group">
										<div class="panel panel-info">
												<div class="panel-heading">
														<h3>Kerusakan</h3>
												</div>
												<div class="panel-body">
														<a href="<?= url('diagnosis/Q001') ?>" class="list-group-item" style="color:blue;">Mesin Tidak Mau Hidup Atau Sulit Di Hidupkan</a>
														<a href="<?= url('diagnosis/Q008') ?>" class="list-group-item" style="color:blue;">Kendala Pada Gigi Rotari Atau Kopling</a>
														<a href="<?= url('diagnosis/Q013') ?>" class="list-group-item" style="color:blue;">Mesin Kekurangan Daya</a>
														<a href="<?= url('diagnosis/Q021') ?>" class="list-group-item" style="color:blue;">Kendala Pada Karburator Dan Sistem Bahan Bakar</a>
														<a href="<?= url('diagnosis/Q029') ?>" class="list-group-item" style="color:blue;">Kendala Pada Silinder Dan Klep</a>
														<a href="<?= url('diagnosis/Q034') ?>" class="list-group-item" style="color:blue;">Kendala Pada Pengendalian Kemudi</a>
														<a href="<?= url('diagnosis/Q038') ?>" class="list-group-item" style="color:blue;">Kendala Pada Alternator Atau Kopling Starter Atau Penegang Rantai Mesin</a>
														<a href="<?= url('diagnosis/Q041') ?>" class="list-group-item" style="color:blue;">Kendala Pada Performa Jelek Kecepatan Rendah</a>
														<a href="<?= url('diagnosis/Q045') ?>" class="list-group-item" style="color:blue;">Kendala Pada Performa Jelek Kecepatan Tinggi</a>
												</div>
										</div>
			          </div>
		        </div><!--/.sidebar-offcanvas-->
	      </div><!--/row-->

@endsection
@section('footer')
		<footer>
    		<p>&copy; 2016 Company, Inc.</p>
    </footer>
@endsection
		</div> <!--- end of container ---->
