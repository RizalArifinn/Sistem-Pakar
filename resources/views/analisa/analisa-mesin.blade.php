@extends('layouts.layout')
@section('title', 'Analisa Kerusakan')
@section('body')
		<div class="container">
	      <div class="row row-offcanvas row-offcanvas-right">
		        <div class="col-xs-12 col-sm-9">
			          <div class="jumbotron">
										<h2>Analisa Kerusakan :</h2><hr>
									<!--- Mesin tidak mau hidup/sulit hidup --->
										@if (url()->current() == url('diagnosis/Q001'))
												<h3><i>Apakah bensin mencapai karburator?</i></h3>
												<p>
														<a href="/diagnosis/Q002" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q001" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q002'))
												<h3><i>Apakah busi mengeluarkan api?</i></h3>
												<p>
														<a href="/diagnosis/Q003" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q002" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q003'))
												<h3><i>Apakah percikan apinya kuat?</i></h3>
												<p>
														<a href="/diagnosis/Q004" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q003" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q004'))
												<h3><i>Apakah kompresi silinder baik?</i></h3>
												<p>
														<a href="/diagnosis/Q005" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q004" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q005'))
												<h3><i>Apakah mesin hidup tetapi segera mati lagi?</i></h3>
												<p>
														<a href="/hasil/Q005" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q006" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q006'))
												<h3><i>Apakah businya basah?</i></h3>
												<p>
													<a href="/hasil/Q006" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
													<a href="/diagnosis/Q007" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q007'))
												<h3><i>Silahkan hidupkan motor dalam keadaan cuk tertutup, apakah motor bisa hidup?</i></h3>
												<p>
														<a href="/hasil/Q007" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/E" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>
									<!--- end of mesin --->

									<!--- kendala pada kopling/gigi rotari --->
										@elseif (url()->current() == url('diagnosis/Q008'))
												<h3><i>Apakah kopling slip ketika berakselerasi?</i></h3>
												<p>
														<a href="/hasil/Q008" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q009" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q009'))
												<h3><i>Apakah kopling tidak mau terlepas?</i></h3>
												<p>
														<a href="/hasil/Q009" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q010" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q010'))
												<h3><i>Apakah gigi sulit dioper?</i></h3>
												<p>
														<a href="/hasil/Q010" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q011" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q011'))
												<h3><i>Apakah transmisi berpindah keluar dari gigi secara otomatis?</i></h3>
												<p>
														<a href="/hasil/Q011" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q012" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q012'))
												<h3><i>Apakah pedal pemindah gigi tidak kembali dengan sendirinya?</i></h3>
												<p>
														<a href="/hasil/Q012" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/E" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>
									<!--- end of kendala kopling/gigi rotari --->

									<!--- mesin kekurangan daya --->
										@elseif (url()->current() == url('diagnosis/Q013'))
												<h3><i>Apakah tekanan ban normal?</i></h3>
												<p>
														<a href="/diagnosis/Q014" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q013" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q014'))
												<h3><i>Apakah perputaran mesin dari gigi 1 ke 2 berubah?</i></h3>
												<p>
														<a href="/diagnosis/Q015" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q014" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q015'))
												<h3><i>Apakah putaran mesin naik, ketika gigi 2 turun ke 1 secara perlahan?</i></h3>
												<p>
														<a href="/diagnosis/Q016" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q015" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q016'))
												<h3><i>Apakah waktu pengapian sudah tepat?</i></h3>
												<p>
														<a href="/diagnosis/Q017" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q016" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q017'))
												<h3><i>Apakah renggang klep sudah tepat?</i></h3>
												<p>
														<a href="/diagnosis/Q018" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q017" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q018'))
												<h3><i>Apakah tekanan kompresi silinder normal?</i></h3>
												<p>
														<a href="/diagnosis/Q019" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q018" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q019'))
												<h3><i>Apakah karburator tersumbat?</i></h3>
												<p>
														<a href="/hasil/Q019" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q020" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q020'))
												<h3><i>Apakah putaran roda bergerak bebas?</i></h3>
												<p>
														<a href="/diagnosis/E" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q020" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>
									<!--- end of mesin kekurangan daya --->

									<!--- kendala pada karburator --->
										@elseif (url()->current() == url('diagnosis/Q021'))
												<h3><i>Apakah mesin berputar tetapi tidak mau hidup?</i></h3>
												<p>
														<a href="/hasil/Q021" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q022" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q022'))
												<h3><i>Apakah mesin susah di hidupkan atau mogok setelah di starter?</i></h3>
												<p>
														<a href="/hasil/Q022" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q023" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q023'))
												<h3><i>Apakah putaran stasioner rata?</i></h3>
												<p>
														<a href="/diagnosis/Q024" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q023" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q024'))
												<h3><i>Apakah pengapian tidak teratur saat akselerasi?</i></h3>
												<p>
														<a href="/hasil/Q024" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q025" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q025'))
												<h3><i>Apakah terjadi ledakan-ledakan pada karburator?</i></h3>
												<p>
														<a href="/hasil/Q025" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q026" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q026'))
												<h3><i>Apakah tenaga kurang dan bahan bakar jadi boros?</i></h3>
												<p>
														<a href="/hasil/Q026" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q027" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q027'))
												<h3><i>Apakah campuran bahan bakar dan udara terlalu sedikit? Periksa pada karburator</i></h3>
												<p>
														<a href="/hasil/Q027" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q028" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q028'))
												<h3><i>Apakah campuran bahan bakar dan udara terlalu banyak? Periksa pada karburator</i></h3>
												<p>
														<a href="/hasil/Q028" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/E" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>
									<!--- end of kendala pada karburator --->

									<!--- kendala pada silinder & klep --->
										@elseif (url()->current() == url('diagnosis/Q029'))
												<h3><i>Apakah tekanan kompresi rendah, motor sulit di hidupkan atau rendahnya performa pada kecepatan rendah?</i></h3>
												<p>
														<a href="/hasil/Q029" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q030" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q030'))
												<h3><i>Apakah tekanan kompresi terlalu tinggi, terlalu panas atau mesin menggelitik?</i></h3>
												<p>
														<a href="/hasil/Q030" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q031" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q031'))
												<h3><i>Apakah motor mengeluarkan asap berlebihan?</i></h3>
												<p>
														<a href="/hasil/Q031" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q032" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q032'))
												<h3><i>Apakah suara mesin berisik berlebihan?</i></h3>
												<p>
														<a href="/hasil/Q032" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q033" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q033'))
												<h3><i>Apakah putaran stasioner tidak rata?</i></h3>
												<p>
														<a href="/hasil/Q033" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/E" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>
									<!--- end of kendala pada silinder & klep --->

									<!--- kendala pada pengendalian kemudi --->
										@elseif (url()->current() == url('diagnosis/Q034'))
												<h3><i>Apakah tekanan ban sudah tepat?</i></h3>
												<p>
														<a href="/diagnosis/Q035" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q034" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q035'))
												<h3><i>Apakah kemudi terasa berat?</i></h3>
												<p>
														<a href="/hasil/Q035" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q036" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q036'))
												<h3><i>Apakah salah satu roda bergoyang?</i></h3>
												<p>
														<a href="/hasil/Q036" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q037" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q037'))
												<h3><i>Apakah motor Anda menarik ke salah satu arah? (tidak seimbang)</i></h3>
												<p>
														<a href="/hasil/Q037" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/E" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>
									<!--- end of kendala pada pengendalian kemudi --->

									<!--- kendala pada alternator/koplingstartrer --->
										@elseif (url()->current() == url('diagnosis/Q038'))
												<h3><i>Apakah motor starter tidak mau berputar?</i></h3>
												<p>
														<a href="/hasil/Q038" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q039" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q039'))
												<h3><i>Apakah motor starter kurang bertenaga?</i></h3>
												<p>
														<a href="/hasil/Q039" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q040" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q040'))
												<h3><i>Apakah motor starter berputar, tetapi mesin tidak hidup?</i></h3>
												<p>
														<a href="/hasil/Q040" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/E" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>
									<!--- end of kendala pada alternator/koplingstartrer --->

									<!--- kendala pada performa kecepatan rendah --->
										@elseif (url()->current() == url('diagnosis/Q041'))
												<h3><i>Apakah waktu pengapian dan jarak renggang klep sudah tepat?</i></h3>
												<p>
														<a href="/diagnosis/Q042" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q041" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q042'))
												<h3><i>Apakah penyetelan sekrup udara karburator sudah tepat?</i></h3>
												<p>
														<a href="/diagnosis/Q043" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q042" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q043'))
												<h3><i>Apakah ada kebocoran udara melalui manifold (salurah hisap dari karburator ke silinder)?</i></h3>
												<p>
														<a href="/hasil/Q043" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q044" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q044'))
												<h3><i>Apakah percikan api di busi kuat?</i></h3>
												<p>
														<a href="/diagnosis/E" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q044" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>
									<!--- end of kendala pada performa kecepatan rendah --->

									<!--- kendala pada performa kecepatan tinggi --->
										@elseif (url()->current() == url('diagnosis/Q045'))
												<h3><i>Apakah waktu pengapian dan jarak renggang klep sudah tepat?</i></h3>
												<p>
														<a href="/diagnosis/Q046" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q045" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q046'))
												<h3><i>Apakah bahan bakar mengalir?</i></h3>
												<p>
														<a href="/diagnosis/Q047" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q046" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q047'))
												<h3><i>Apakah main jet dan slow jet tersumbat (letak di karburator)?</i></h3>
												<p>
														<a href="/hasil/Q047" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/Q048" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q048'))
												<h3><i>Apakah bukaan klep sudah tepat?</i></h3>
												<p>
														<a href="/diagnosis/Q049" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/hasil/Q048" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>

										@elseif (url()->current() == url('diagnosis/Q049'))
												<h3><i>Apakah ketegangan pegas klep melemah?</i></h3>
												<p>
														<a href="/hasil/Q049" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya</a>
														<a href="/diagnosis/E" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Tidak</a>
												</p>
									<!--- end of kendala pada performa kecepatan tinggi --->

										@else
												<h3><i>Anda sudah mencapai tahap akhir dari analisa, kemungkinan permasalahan motor Anda ada di komponen lainnya.
												Terima kasih telah menggunakan layanan kami.</i></h3>
												<a href="/" class="btn btn-primary"><span class="glyphicon glyphicon-log-out"></span> Kembali ke Home</a>
										@endif
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
