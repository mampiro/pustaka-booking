<html>
    <head>
        <title><?=$judul;?></title>
    </head>
    <body>
        <center><h2><?=$judul;?></h2></center>
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
                      <option value="2">1</option>
                      <option value="3">2</option>
                      <option value="4">3</option>
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
    </body>
</html>