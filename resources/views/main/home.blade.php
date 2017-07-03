@extends('layouts.layout')
@section('title', 'Sistem Pakar')
@section('body')
		<div class="container">
      	<div class="row row-offcanvas row-offcanvas-right">
        		<div class="col-xs-12 col-sm-12">
			          <div class="jumbotron">
										<h2>Pilih Gejala Kerusakan Motor :</h2><hr>
										<div class="list-group">
											  <a href="<?= url('diagnosis/Q001') ?>" class="list-group-item">Mesin Tidak Mau Hidup Atau Sulit Di Hidupkan</a>
											  <a href="<?= url('diagnosis/Q008') ?>" class="list-group-item">Kendala Pada Gigi Rotari Atau Kopling</a>
											  <a href="<?= url('diagnosis/Q013') ?>" class="list-group-item">Mesin Kekurangan Daya</a>
											  <a href="<?= url('diagnosis/Q021') ?>" class="list-group-item">Kendala Pada Karburator Dan Sistem Bahan Bakar</a>
											  <a href="<?= url('diagnosis/Q029') ?>" class="list-group-item">Kendala Pada Silinder Dan Klep</a>
												<a href="<?= url('diagnosis/Q034') ?>" class="list-group-item">Kendala Pada Pengendalian Kemudi</a>
												<a href="<?= url('diagnosis/Q038') ?>" class="list-group-item">Kendala Pada Alternator Atau Kopling Starter Atau Penegang Rantai Mesin</a>
												<a href="<?= url('diagnosis/Q041') ?>" class="list-group-item">Kendala Pada Performa Jelek Kecepatan Rendah</a>
												<a href="<?= url('diagnosis/Q045') ?>" class="list-group-item">Kendala Pada Performa Jelek Kecepatan Tinggi</a>
										</div>
			          </div>
        		</div><!--/.col-xs-12.col-sm-9-->
      	</div><!--/row-->

@endsection
@section('footer')
		<footer>
    		<p>&copy; 2016 Company, Inc.</p>
    </footer>
@endsection
		</div> <!--- end of container ---->
