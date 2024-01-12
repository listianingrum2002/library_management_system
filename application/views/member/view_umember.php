<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan | Member</title>
    <style>
        #page{
            background-color: #f0f0f0;
            margin: 10px;
            padding: 25px;
        }
        #header{
            display: flex;
            justify-content: space-between;
            background-color: #999999;
            padding: 25px;
            margin: -25px;
        }
        #header h1{
            font-size: 40px;
            margin: auto 0;
        }
        #header ul{
            margin: auto 0;
        }
        #header ul li{
            display: inline;
            text-align: center;
        }
        #header ul li a{
            text-decoration: none;
            font-size: 20px;
            color: black;
            padding: 20px;
        }
        #header ul li a:hover{
            color: white;
        }
        #content{
            padding: 25px;
        }
        #content h2{
            text-align: center;
            font-size: 30px;
        }
        #content form{
            border: 1px solid grey;
            margin-top: 15px;
            margin-left: 200px;
            margin-right: 200px;
            padding: 20px;
        }
        #content form div{
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        #content form div input{
            width: 400px;
            height: 20px;
        }
        #content form div select{
            width: 408px;
            height: 28px;
        }
        #content button{
            background-color: #abc4ff;
            width: 75px;
            height: 25px;
            border: 1px solid grey;
        }
        #content a{
            text-decoration: none;
            color: black;
        }
        #footer{
            text-align: center;
            font-weight: bold;   
            background-color: #999999;
            padding: 1px;
            margin: -25px;
        }
    </style>
</head>
<body>
    <div id="page">
        <!-- Header Start -->
        <div id="header">
            <h1>PerpusX</h1>
            <ul>
                <li><a href="<?php echo site_url('home');?>">Home</a></li>
                <li><a href="<?php echo site_url('member');?>">Member</a></li>
                <li><a href="<?php echo site_url('biblio');?>">Biblio</a></li>
                <li><a href="<?php echo site_url('transaksi');?>">Transaksi</a></li>
            </ul>
        </div>
        <!-- Header End -->

        <!-- Content Start -->
        <div id="content">
            <h2>Form Edit Member</h2><hr>
            <form method="post" action="<?php echo site_url("member/ubah/".$data['id_member']);?>">
                <div>
                    <label>Kode Member</label>
                    <input type="text" name="kode_member" value="<?= $data['kode_member'];?>" required></input>
                </div>
                <div>
                    <label>Nama Member</label>
                    <input type="text" name="nama_member" value="<?= $data['nama_member'];?>" required></input>
                </div>
                <div>
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" value="<?= $data['jenis_kelamin'];?>" required>
                        <?php
                            if($data['jenis_kelamin'] == 'Laki-laki'){?>
                                <option value="Laki-laki" selected>Laki-laki</option><?php
                            }else if($data['jenis_kelamin'] == 'Perempuan'){?>
                                <option value="Perempuan" selected>Perempuan</option><?php
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <label>Nomor Telepon</label>
                    <input type="text" name="nomor_telepon" value="<?= $data['nomor_telepon'];?>" require></input>
                </div>
                <div>
                    <label>Alamat Email</label>
                    <input type="text" name="alamat_email" value="<?= $data['alamat_email'];?>" required></input>
                </div>
                <div>
                    <label>Alamat Rumah</label>
                    <input type="text" name="alamat_rumah" value="<?= $data['alamat_rumah'];?>" required></input>
                </div>
                <div>
                    <label>Tanggal Bergabung</label>
                    <input type="date" name="tanggal_gabung" value="<?= $data['tanggal_gabung'];?>" required></input>
                </div>
                <div>
                    <button><a href="<?php echo site_url('member');?>">Batal</a></button>
                    <button type="submit">Ubah</button>
                </div>
            </form>
        </div><br>
        <!-- Content End -->

        <!-- Footer Start -->
        <div id="footer">
            <p>Copyright © 2022 PerpusX | 2008084 - Listia Ningrum</p>
        </div>
        <!-- Footer End -->
    </div>
</body>
</html>