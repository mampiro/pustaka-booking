<html>
    <head>
        <title><?=$judul;?></title>
    </head>
    <body>
        <center><h2><?=$judul;?></h2></center>


         <table width="40%" border="0" cellpadding="5" align="center">
            <tr>
                <td>

                <?php 
                if ($this->session->flashdata('data')) 
                { 
                ?>
                 <div class="alert alert-success"> <?= $this->session->flashdata('data') ?>  </div>
                <hr>
                <?php 
                }
                elseif ($this->session->flashdata('dataeror')) 
                {
                ?>
                <div class="alert alert-danger"> <?= $this->session->flashdata('dataeror') ?> </div>
                <?php 
                }
                ?>    
                </td>
            </tr>
        </table>




         <form  method="post" action="<?php echo base_url();?>index.php/matakuliah/cetak">
            <table width="40%" border="0" cellpadding="5" align="center">
                <tr>
                    <td width="25%">
                        Kode MTK</td>
                    <td  width="33%">
                        <input type="text" name="kode" id="kode" placeholder="Required">
                    </td>
                    <td  width="42%"><?=form_error('kode');?></td>
                </tr>
                <tr>
                    <td width="25%">
                        Nama MTK</td>
                    <td  width="33%"><input type="text" name="nama" id="nama"  placeholder="Required"></td>
                    <td  width="42%"><?=form_error('nama');?></td>
                </tr>

                <tr>
                    <td width="25%">
                        SKS</td>
                    <td  width="33%">
                    <select name="sks" >
                      <option value="">Pilih SKS</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select></td>
                    <td  width="42%"><?=form_error('sks');?></td>
                </tr>                  
                

                <tr>
                    <td width="25%">
                    
                    </td>
                    <td  width="33%">
                        <input type="submit" value="Submit"></td>
                    <td  width="42%">&nbsp;</td>
                    
                </tr>              



            </table>

        </form>




        <table border="1pt" align="center"  width="40%">
            <tr>
                <th>No</th>
                <th>Kode Matakuliah</th>
                <th>Nama Matakuliah</th>
                <th>SKS</th>
                <th>Action</th>
            </tr>

            <?php
            $no=1;
            foreach ($matkul as $matkul) 
            {
            ?>
           
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$matkul->kode;?></td>
                    <td><?=$matkul->nama;?></td>
                    <td><?=$matkul->sks;?></td>
                    <td>
                        <a href="<?=base_url('Matakuliah/edit/'.$matkul->kode)?>">Edit</a>
                        |
                        <a href="<?=base_url('Matakuliah/hapus/'.$matkul->kode)?>">Hapus</a>
                    </td>
                </tr>
        
            <?php
            }
            ?>


        </table>















    </body>
</html>