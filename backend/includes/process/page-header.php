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
	                    			echo 'Input Data Dosen';
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
	                    			echo 'Dashboard';
	                    			break;
	                    	}

	                    }
	                    else {
	                    	echo 'Dashboard';
	                    }
	                    ?>