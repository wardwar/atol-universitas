<?php
	                    if(isset($_GET['lsm'])) {

	                    	$lsm = $_GET['lsm'];

	                    	switch ($lsm) {
	                    		case 'profile':
	                    			echo 'Profile Universitas'; 
	                    			break;
	                    		case 'visimisi':
	                    			echo 'Visi Dan Misi';
	                    			break;
	                    		case 'sejarah':
	                    			echo 'Sejarah';
	                    			break;
	                    		case 'tujuan':
	                    			echo 'Tujuan';
	                    			break;
	                    		case 'logo':
	                    			echo 'Logo';
	                    			break;
	                    		case 'fasilitas':
	                    			echo 'Fasilitas';
	                    			break;
	                    		case 'slide':
	                    			echo 'Gambar Slide Branda';
	                    			break;
	                    		case 'dosen':
	                    			echo 'Data Dosen';
	                    			break;
	                    		case 'mahasisawa':
	                    			echo 'Data Mahasiswa';
	                    			break;
	                    		case 'karyawan':
	                    			echo 'Data Karyawan';
	                    			break;
	                    		case 'indosen':
	                    			include 'includes/cuts/contents/input-dosen.php';
	                    			break;
	                    		case 'inmahasiswa':
	                    			echo 'Input Data Mahasisawa';
	                    			break;
	                    		case 'inkaryawan':
	                    			echo 'Input Data Karyawan';
	                    			break;
	                    		case 'fakultas':
	                    			echo 'Fakultas';
	                    			break;
	                    		case 'jurusan':
	                    			echo 'Jurusan';
	                    			break;
	                    		case 'agenda':
	                    			echo 'Agenda';
	                    			break;
	                    		case 'bukutamu':
	                    			echo 'Buku Tamu';
	                    			break;
	                    		case 'kerjasama':
	                    			echo 'Kerjasama';
	                    			break;
	                    		default:
	                    			include 'includes/cuts/contents/dashboard.php';
	                    			break;
	                    	}

	                    }
	                    else {
	                    	include 'includes/cuts/dashboard.php';
	                    }
	                    ?>